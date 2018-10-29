<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html  >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title><?php echo ($title); ?></title>

<link rel="stylesheet" href="http://www.shopsn.cn/Public/Admin/css/css.css?a=1546545633">
<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/dist/css/AdminLTE.css">
<script src="http://www.shopsn.cn/Public/Common/js/jquery-1.11.3.min.js"></script>
<script src="http://www.shopsn.cn/Public/Common/js/layer/layer.js"></script>
</head>
<body>



<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />   <link rel="stylesheet" href="http://www.shopsn.cn/Public/Admin/css/prompt.css"/>
     <link rel="stylesheet"
    href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css"/>
 <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>查看微信支付信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
    <div class="container-fluid">
        <div class="pull-right">
            <a href="javascript:history.go(-1);" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="返回"><i class="fa fa-reply"></i></a>
        </div>
        <div class="panel panel-default">
            <div class="panel-body ">
                <!--表单数据-->
                <form method="post" id="handlepost" action="">
                    <!--通用信息-->
                    <div class="tab-content col-md-10">
                        <div class="tab-pane active" id="tab_tongyong">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td>令牌(Token)：</td>
                                    <td >
                                        <input type="text" class="form-control" name="w_token" value="<?php echo ($data["w_token"]); ?>" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-2">公众号名称：</td>
                                    <td class="col-sm-8 ">
                                        <input type="text" class="form-control" name="wxname" value="<?php echo ($data["wxname"]); ?>" required />
                                        <span id="err_attr_name" style="color:#F00; display:none;"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>公众号原始id：</td>
                                    <td >
                                        <input type="text" class="form-control" name="wxid" value="<?php echo ($data["wxid"]); ?>" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>微信号：</td>
                                    <td >
                                        <input type="text" class="form-control" name="weixin" value="<?php echo ($data["weixin"]); ?>" required />
                                    </td>
                                </tr>

                                <tr>
                                    <td>头像地址：</td>
                                    <td >
                                        <input type="text" id="headerpic" class="form-control" name="headerpic" value="<?php echo ($data["headerpic"]); ?>" required />
                                        <input onclick="Tool.uploadify('<?php echo C('upload_url');?>/uploadNum/1/path/class/input/image/config/class_image_conf');" type="button" value="上传头像"/>

                                    </td>
                                </tr>
                                <tr>
                                    <td>开发者ID(AppID)：</td>
                                    <td >
                                        <input type="text" class="form-control" name="appid" value="<?php echo ($data["appid"]); ?>" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>开发者密码(AppSecret)：</td>
                                    <td >
                                        <input type="password" class="form-control" name="appsecret" value="<?php echo ($data["appsecret"]); ?>" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td>二维码：</td>
                                    <td >
                                        <input type="text" class="form-control" id="qr" name="qr" value="<?php echo ($data["qr"]); ?>" required />
                                        <input onclick="Tool.uploadify('<?php echo C('upload_url');?>/uploadNum/1/path/class/input/image/config/class_image_conf');" type="button" value="上传头像"/>

                                    </td>
                                </tr>

                                <tr>
                                    <td>微信号类型：</td>
                                    <td >
                                        <select name="type">
                                            <?php if(is_array($types)): foreach($types as $key=>$value): ?><option <?php if($key == $data['type']): ?>selected<?php endif; ?> value="<?php echo ($key); ?>"><?php echo ($value); ?></option><?php endforeach; endif; ?>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td class="text-right"><input class="btn btn-primary" type="button" onclick="do_wechat.post_ajax('handlepost',wechat_url);" value="保存"></td></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </form><!--表单数据-->
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css" />
    <script type="text/javascript" src="http://www.shopsn.cn/Public/Common/js/jquery-form.js"></script>
    <script type="text/javascript" src="http://www.shopsn.cn/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
    <script type="text/javascript" src="http://www.shopsn.cn/Public/Admin/js/user/approval.js?a=<?php echo time();?>"></script>
    <script type="text/javascript" src="/Public/Admin/js/wechat/do.js"></script>

    <script>
        var wechat_url = "<?php echo U('WeChat/save_config');?>";
    </script>




</body>
</html>