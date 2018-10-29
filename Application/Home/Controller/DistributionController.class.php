<?php
namespace Home\Controller;

use Think\Controller;
use Think\Page;
use Common\Controller\WithdrawalController;

class DistributionController extends BaseController
{
    private $user_id;
    private $listRows;
    private $where = [];
    public function __construct()
    {
        parent::__construct();
        $this->setUserId($_SESSION['user_id']);
        $this->setListRows(7);//设置每页显示数目
        $this->setWhere();
    }

    /**
     * 分销记录
     */
    public function index()
    {
        //导航栏
        $active = I('active');
        $this->assign('active',$active);

        //总金额
        $info = M('distribution as d') -> field('COUNT(*) as count , sum(price) as sumprice')->where($this->getWhere())->find();

        if($info['count'] >0){
            //正在提现
            $now = M('withdrawal')->where(['uid'=>$this->getUserId(),'status'=>['in',('0,1')]])->getField('sum(money)');
            //已提现
            $have = M('withdrawal')->where(['uid'=>$this->getUserId(),'status'=>2])->getField('sum(money)');
            //可提现
            $balance = $info['sumprice'] - M('withdrawal')->where(['uid'=>$this->getUserId(),'status'=>['in',('0,1,2')]])->getField('sum(money)');
            //本月返利
            $start=strtotime(date('Y-m-01 00:00:00'));
            $end = strtotime(date('Y-m-d H:i:s'));
            $where['time'] = array('between',array($start,$end));
            $where['p_id'] = $this->getUserId();
            $where['status'] = 0;
            $month = M('distribution')->where($where)->getField('sum(price)');
            //上月返利
            $lastmonth_start=mktime(0,0,0,date('m')-1,1,date('Y'));
            $lastmonth_end=mktime(0,0,0,date('m'),1,date('Y'))-24*3600;
            $cond['time'] = array('between',array($lastmonth_start,$lastmonth_end));
            $cond['p_id'] = $this->getUserId();
            $cond['status'] = 0;
            $lastmonth = M('distribution')->where($cond)->getField('sum(price)');
            $money = [
                'sum'      => $info['sumprice'],
                'money'    => $balance,
                'moneyIng' => $now,
                'have'     => $have,
                'month'    => $month,
                'lastmonth'=> $lastmonth
            ];
            foreach($money as &$v){
                if($v == ''){
                    $v = 0;
                }
            }
            $_SESSION['balance'] = $money['money'];

            //列表数据
            $page = new Page($info['count'],$this->getListRows());
            $data = M('distribution as d')->join(C('DB_PREFIX').'user as u on d.uid = u.id')-> field('d.id,d.lv,d.price,d.proportion,d.time,u.nick_name')->where($this->getWhere())->order('d.id desc')->limit($page->firstRow,$this->getListRows())->select();


            $this->assign('money',$money);
            $this->assign('data',$data);
            $this->assign('page',$page->show());
        }
//        showData($info,1);
        $this->display();
    }

    /**
     * 我的团队
     */
    public function Myteam()
    {
        //导航栏
        $active = I('active');
        $this->assign('active',$active);

        $pid = M('user') -> where(['id' => $this->getUserId()]) ->getField('p_id');
        if(empty($pid)){
            $this->assign('p_name','暂无父级');
        }else{
            $p_nick_name = M('user')->where(['id' => $pid])->getField('nick_name');
            $this->assign('p_name',$p_nick_name);
        }


        $data = M('user') -> where(['p_id' => $this->getUserId()]) ->field('id,nick_name')->select();
        if(empty($data)){
            $data[0] = ['id' => 0,'nick_name' => '无下级'];
        }

        $this->assign('data',$data);

        $this->display();

    }

    public function getInfo()
    {

        if(!isset($_POST['id']) || empty($_POST['id'])){
            die;
        }
        $id = I('post.id','','intval');
        $data = M('user') -> where(['p_id' => $id])->field('id,nick_name')->select();
        if(empty($data)){
            die;
        }
//        $json = json_encode($data);
        $this->ajaxReturn($data);
    }


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId( $user_id )
    {
        if(empty($user_id)){
            $this->error('请先登录',U('Public/login'));
        }
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getListRows()
    {
        return $this->listRows;
    }

    /**
     * @param mixed $listRows
     */
    public function setListRows( $listRows )
    {
        $this->listRows = $listRows;
    }

    /**
     * @return mixed
     */
    public function getPageRows()
    {
        return $this->pageRows;
    }

    /**
     * @param mixed $pageRows
     */
    public function setPageRows( $pageRows )
    {
        $this->pageRows = $pageRows;
    }

    /**
     * @return mixed
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * @param mixed $where
     */
    public function setWhere()
    {
        $this->where = ['d.p_id' => $this->getUserId()];
    }

    public function mycode(){
        $id = $this->getUserId();

        $user = M('user')-> where(['id' => $id])->field('id,nick_name,mobile,code_path')->select()[0];

        //普通会员没有推荐权限
        if($user['member_status'] != 0){
            $url = M('system_config')->where('id=12')->getField('config_value');
            $url = unserialize($url);
            $user['url'] = $url['internet_url'].'/index.php/Home/Public/reg.html?reco_code='.$user['mobile'];
            //是否已存在二维码并判断是否修改绑定手机号
            if($user['mobile'].'png' != $user['code_path']){
                $user = $this->buildQrCode($user);
            }
        }


        $this->assign("data",$user);


        $this->display();
    }

    /**
     * 生成二维码图片
     */
    protected function buildQrCode(array $post)
    {

        if (empty($post['url'])) {
            return $post;
        }

        if ( $post['url'] === $this->initURL) {
            return $post;
        }

        $url = false !== strpos($post['url'], 'http://') ? $post['url'] : 'http://'.$post['url'];
        include_once  COMMON_PATH.'Tool/QRcode.class.php';
        $path = C('qr_image').$post['mobile'].'.png';

        \QRcode::png($url, $path, QR_ECLEVEL_H, 4);

        Tool::partten($post['path'], UnlinkPicture::class);

//        $this->addWater($path);
        $post['code_path'] = substr($path, 1);
        $save['code_path'] = $path;
        M('user')->where("id='%s'",$post['id'])->save($save);
        return $post;
    }


    /**
     * @description 前台提现页面
     */
    public function withdrawal()
    {

        $this->display();
    }
    /**
     * @description 前台提现列表页
     */
    public function withdrawalList()
    {
        $uid = $this->getUserId();
        $data = M('withdrawal')->field('id,money,bank_num,create_time,status,drawal_id,last_time')->where([ 'uid' => $uid ])->order('id desc')->select();

        foreach($data as $k=>$v){
            switch($v['status']){
                case -1:
                    $data[$k]['status'] = '未通过';
                    break;
                case 0:
                    $data[$k]['status'] = '待审批';
                    break;
                case 1:
                    $data[$k]['status'] = '待打款';
                    break;
                case 2:
                    $data[$k]['status'] = '已打款';
                    break;
            }

            if($v['bank_num'] == 0){
                $data[$k]['type'] = '支付宝';
            }else{
                $data[$k]['type'] = '银行卡';
            }

        }
        $this->assign('data',$data);
        $this->display();
    }

    public function addWithdrawal()
    {
        $url  = U( 'Distribution/index' );
        $post = I( 'post.' );
        //支付宝银行卡有一个即可,金额不能为空
        if( !(float)$post[ 'money' ] || ( !$post[ 'bank_num' ] && !$post[ 'ali_account' ] ) ){
            $this->error( '请将页面填写完整,支付宝与银行卡填写一个即可',$url );
        }
        //银行卡16 或19位数字
        if( $post[ 'bank_num' ] ) \preg_match( '/^[1-9](\d{15})|(\d{18})$/',$post[ 'bank_num' ] ) || $this->error( '银行卡号不正确',$url );
        //支付宝账号 邮箱或者手机号码
        if( $post[ 'ali_account' ] ) \preg_match( '/([a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+)|(1\d{10})/',$post[ 'ali_account' ] ) || $this->error( '支付宝账号不正确',$url );

        $uid = $this->getUserId();
        $balance = $_SESSION['balance'];
        if($post['money'] > $balance ){
            $this->error( '超出可提现金额',$url );
        }

        //提交申请记录
        $status = ( new WithdrawalController( $post ) )->insert();
        $status ? $this->success( '申请成功',$url ) : $this->error( '系统异常',$url );

    }



}