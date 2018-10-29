<?php
// +----------------------------------------------------------------------
// | OnlineRetailers [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2003-2023 www.yisu.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed 亿速网络（http://www.yisu.cn）
// +----------------------------------------------------------------------
// | Author: 王强 <opjklu@126.com>
// +----------------------------------------------------------------------

namespace Home\Controller;

use Common\Controller\MsmFactory;
use Common\Tool\Tool;
use PlugInUnit\UnionPayB2c\sdk\AcpService;
use Think\Controller;
use Common\Model\BaseModel;
use Home\Model\OrderModel;
use Common\Model\OrderWxpayModel;
use Common\TraitClass\NoticeTrait;
use Common\TraitClass\InternetTopTrait;
use Common\TraitClass\SmsVerification;
use Think\Hook;
use Common\Behavior\WangJinTing;
use Common\TraitClass\WxNofityTrait;
use Common\TraitClass\OrderNoticeTrait;
use Common\Behavior\Decorate;
use Common\TraitClass\AlipayNotifyTrait;
use Common\Behavior\AlipaySerialNumber;
use Common\Behavior\Balance;
use Common\TraitClass\WxListenResTrait;
use Think\Log;

class NofityController extends Controller
{
    use NoticeTrait;
    use SmsVerification;
    use InternetTopTrait;
    use WxNofityTrait;
    use OrderNoticeTrait;
    use AlipayNotifyTrait;
    use WxListenResTrait;
    private $url = '';

    /**
     * 支付成功订单页
     * @var string
     */
    const RELEVANT = 'relevant';

    public function __construct()
    {
        parent::__construct();

        Hook::add( 'reade',WangJinTing::class );

        $information = $this->getIntnetInformation();
        $this->assign( 'hot_words',self::keyWord() );

        $this->assign( 'intnetTitle',$information[ 'intnet_title' ] );

        $this->assign( 'str',$this->getFamily() );

        $this->assign( $information );
    }

    public function wxNotify()
    {
        // 获取通知的数据
        $xml = $GLOBALS[ 'HTTP_RAW_POST_DATA' ];

        Tool::connect( 'Token' );

        $data = Tool::init( $xml,self::PARTNER_ID );

        if( empty( $data[ 'out_trade_no' ] ) ){
            echo 'ERROR';
            die();
        }

        $orderId = substr( $data[ 'out_trade_no' ],strpos( $data[ 'out_trade_no' ],'-' ) + 1 );
        file_put_contents( './Uploads/orderId.txt',$orderId );
        if( !is_numeric( $orderId ) ){
            echo 'ERROR';
            die();
        }
        //获取订单状态

        $orderModel = BaseModel::getInstance( OrderModel::class );

        $ordersStatus = $orderModel->getOrderStatusByUser( $orderId );
        $sql          = $orderModel->getLastSql();
        file_put_contents( './Uploads/rty.txt',$sql );

        $status = false;
        if( $ordersStatus == 0 ){
            //修改状态
            $status = $orderModel->save( array(
                OrderModel::$orderStatus_d  => OrderModel::YesPaid,
                OrderModel::$payTime_d => time(),
                OrderModel::$payType_d => 1,
                OrderModel::$platform_d => 0

            ),array(
                'where' => array( OrderModel::$id_d => $orderId )
            ) );

            $status = BaseModel::getInstance( OrderWxpayModel::class )->save( array( OrderWxpayModel::$status_d => 1 ),array( 'where' => array(
                OrderWxpayModel::$orderId_d => $orderId
            ) ) );
        }
        echo $status ? "SUCCESS" : 'ERROR';
    }

    /**
     * pc 回调
     */
    public function pcWxNofity()
    {
        $orderId = $this->nofityWx();


        file_put_contents( './Uploads/order.txt',$orderId );
        $this->msg( is_numeric( $orderId ) );
        Hook::add( 'aplipaySerial',Decorate::class );

        $this->getPayIntegral();

        $status = $this->orderNotice( $orderId );


        $this->msg( $status );

        echo "SUCCESS";
        die();

    }


    /**
     * 异步通知
     */
    public function alipayNotify()
    {
        $data = $this->alipayResultParse();

        $this->promptParse( $data,'验证失败',U( 'Order/order_myorder' ) );

        $orderSnId = $data[ 'order_sn_id' ];

        $orderId = substr( strrchr( $orderSnId,'-' ),1 ); // 主键编号 确保唯一性;

        $this->tradeNo = $data[ 'trade_no' ];

        Hook::add( 'aplipaySerial',AlipaySerialNumber::class );

        $this->getPayIntegral();

        $status = $this->orderNotice( $orderId );;

        if( !$status ){
            echo 'FAIL';
            die();
        }

        echo "SUCCESS";
        die();
    }

    /**
     * 支付宝同步回调
     */
    public function alipayReturn()
    {
        $this->assign( 'total_fee',$_GET[ 'total_fee' ] );

        $orderId = substr( strrchr( $_GET[ 'out_trade_no' ],'-' ),1 ); // 主键编号 确保唯一性;

        $this->paySuccess( $orderId );
    }

    private function notifyHtml( $status,$orderId )
    {
        if( $status ){
            $this->paySuccess( $orderId );
        }else{
            $this->assign( 'intnetTitle','支付结果' );
            $this->display( 'fail' );
        }
    }


    public function checkOrderStatus( $orderSnId )
    {
        $this->promptPjax( $orderSnId,'订单号错误' );

        $snId = substr( strrchr( $orderSnId,'-' ),1 ); // 主键编号 确保唯一性

        $status = BaseModel::getInstance( OrderModel::class )->getUserNameById( $snId,OrderModel::$orderStatus_d );

        $this->url = 'wxNofityByHTML';


        $this->payNotice( $status,$snId );
    }

    /**
     * 微信支付通知页面
     * @param unknown $orderSnId
     * @param unknown $display
     */
    public function wxNofityByHTML( $orderSnId,$display )
    {
        $this->promptParse(preg_match('/^[a-zA-Z\s]+$/', $display), '参数错误');
        
        $this->parseOrder( $orderSnId );

        $this->display( $display );
    }

    /**
     * 不需要支付的回调
     * 兑换的积分商品,且运费没有
     */
    public function noNeedPay()
    {
        $data = I( 'GET.' );
        $this->handleNotify( $data );
        $this->paySuccess( $data[ 'order_sn_id' ] );
    }

    /**
     * 余额支付通知
     */
    public function balanceNofty()
    {
        $validate = [
            'id',
            'address_id'
        ];
        Tool::checkPost( $_GET,[
            'is_numeric' => $validate
        ],true,$validate ) ? : $this->error( '参数错误' );

        Hook::add( 'aplipaySerial',Balance::class );

        $orderId = $_GET[ 'id' ];

        $this->getPayIntegral();

        $status = $this->orderNotice( $orderId );
        //余额变动短信提醒
        $this->sendBalanceSms();

        $this->notifyHtml( $status,$orderId );
    }

    /**
     * 显示支付成功页面
     */
    private function paySuccess( $sn_id )
    {
        $this->parseOrder( $sn_id );

        $this->assign( 'payRelated',self::RELEVANT );

        $this->display( 'success' );
    }

    /**
     * 支付成功处理
     * @param unknown $sn_id
     */
    private function parseOrder( $sn_id )
    {
        $orderModel = BaseModel::getInstance( OrderModel::class );
        $filed      = [
            OrderModel::$id_d,
            OrderModel::$priceSum_d,
            OrderModel::$addressId_d
        ];

        $order = $orderModel->field( $filed )
            ->where( [
                OrderModel::$id_d => $sn_id
            ] )
            ->find();

        $address = D( 'userAddress' )->getAddrById( $order[ 'address_id' ] );
        $this->assign( 'intnetTitle','支付成功' );
        $this->assign( 'address',$address[ 'addr_alone' ] );
        $this->assign( 'total_fee',$order[ 'price_sum' ] );
        $this->assign( 'order_id',$order[ 'id' ] );
    }

    /**
     * 银联同步回调
     */
    public function UnionSynchronous()
    {
        $this->redirect( 'Home/Order/order_details',[ 'id' => (int)\substr( I( 'orderId' ),24 ) ] );
    }


    /**
     * 银联异步回调
     */
    public function UnionAsynchronous()
    {
        $data = I( 'post.' );
        if( empty( $data ) ){
            E( '非法请求' );
        }
        if( $data[ 'respCode' ] != '00' && $data[ 'respCode' ] != 'A6' ){
            die;
        }

        $info = AcpService::validate( $data );

        if( !$info ){
            die( '验签失败' );
        }
        echo '验签成功';
        $orderId   = (int)\substr( $data[ 'orderId' ],24 );
        $OrderData = BaseModel::getInstance( OrderModel::class )->where( [ 'id' => $orderId ] )->getField( 'order_status' );
        if( $OrderData !== '0' ){
            E( '订单错误' );
        }

        $status = $this->orderNotice( $orderId );

        //将部分数据写入银联退款表
        $refundData                    = [];
        $refundData[ 'order_sn_id_r' ] = $data[ 'orderId' ];
        $refundData[ 'origQryId' ]     = $data[ 'queryId' ];
        $refundData[ 'money' ]         = (float)$data[ 'txnAmt' ] / 100;
        $status2                       = M( 'unionrefund' )->add( $refundData );

        if( !$status ){
            Log::write( '订单-' . $orderId . '-修改状态失败' );
        }
        if( !$status2 ){
            Log::write( '订单-' . $orderId . '-插入退款表失败' );
        }
        die;
    }


    /**
     * 获取积分比例
     */
    private function getPayIntegral()
    {
        $this->key         = 'integral';
        $payIntegral       = $this->getGroupConfig()[ 'pay_integral' ];
        $this->payIntegral = $payIntegral;
    }

    /**
     * 余额支付通知
     */
    private function sendBalanceSms()
    {
        if( M( 'sms_check' )->where( [ 'check_title' => '余额支付提示' ] )->getField( 'status' ) ){
            $userPhone = M( 'user' )->where( [ 'id' => $_SESSION[ 'user_id' ] ] )->getField( 'mobile' );
            $sms       = new MsmFactory();
            $sms->factory( $userPhone,5 );//5为 余额通知的短信模板
        }
    }
}