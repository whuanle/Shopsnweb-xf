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



<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://www.shopsn.cn/Public/Admin/css/prompt.css" />
<link rel="stylesheet"
    href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css" />
    <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>平台自主选择短信设置</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
    <link rel="stylesheet" type="text/css" href="http://www.shopsn.cn/Public/Admin/css/checkbox_css/SimpleSwitch.css"/>
    <script type="text/javascript" src="http://www.shopsn.cn/Public/Admin/js/checkbox_js/SimpleSwitch.min.js"></script>
    <div class="list">
        <form id="my_form">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="details">

                <tbody>
                <tr>
                    <td>
                        <div align="right">开启短信：</div>
                    </td>
                    <td>
                        <select class="select" name='config[<?php echo ($sms_open["id"]); ?>]'>
                            <option
                            <?php if($sms_open["status"] == '0'): ?>selected<?php endif; ?>
                            value= '0' >不开启</option>
                            <option
                            <?php if($sms_open["status"] == '1'): ?>selected<?php endif; ?>
                            value="1">华信</option>
                            <option
                            <?php if($sms_open["status"] == '2'): ?>selected<?php endif; ?>
                            value="2">阿里大于</option>
                        </select>
                    </td>
                </tr>
                <?php if(is_array($config)): foreach($config as $key=>$value): ?><tr>
                        <td>
                            <div align="right"><?php echo ($value["check_title"]); ?>：</div>
                        </td>
                        <td>
                            <!--<input type="checkbox" name="my-checkbox" class="" data-type="simple-switch" size="24" style="margin-top:-20px;" />-->
                            <span style="margin-left:20px;color: red;">关闭:</span>
                            <input type="radio" class="input" name="config[<?php echo ($value["id"]); ?>]"
                            <?php if($value["status"] == '0'): ?>checked<?php endif; ?>
                            value="0">
                            <span style="margin-left:20px;color: green;">开启:</span>
                            <input type="radio" class="input" name="config[<?php echo ($value["id"]); ?>]"
                            <?php if($value["status"] == '1'): ?>checked<?php endif; ?>
                            value="1">
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
        </form>

    </div>
    <div class="footer">
        <button type="button" class="button" id="button" style="min-width:160px;" onclick="config_save_mysql();">确 认
        </button>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            if ($('config_check').val() == 1) {
                $('._simple-switch-track').addClass('_simple-switch-track on');
                $('._simple-switch-track').removeClass('._simple-switch-track');
            }
        })

        var ADMIN_ADD_USER = "<?php echo U('admin_system_save');?>";
    </script>
    <script type="text/javascript">
        SimpleSwitch.init();
    </script>
    <script type="text/javascript" src="http://www.shopsn.cn/Public/Admin/js/admin/adminAdd.js"></script>




</body>
</html>