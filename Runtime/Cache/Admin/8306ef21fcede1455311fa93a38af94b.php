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

    <div class="nav">
        <div class="nav_title">
            <h4><img class="nav_img" src="/Public/Admin/img/tab.gif"/><span class="nav_a">
                <?php if($sms_id == '1'): ?>华信-<?php elseif($sms_id == 2): ?>阿里大于-<?php endif; ?>模板管理
            </span></h4>
        </div>
        <div class="nav_button">
        </div>
    </div>



    <link rel="stylesheet" type="text/css" href="http://www.shopsn.cn/Public/Admin/css/checkbox_css/SimpleSwitch.css"/>
    <link rel="stylesheet" type="text/css" href="http://www.shopsn.cn/Public/Admin/css/sms_template/common.css">
    <link rel="stylesheet" type="text/css" href="http://www.shopsn.cn/Public/Admin/css/sms_template/seller_center.css">
    <link rel="stylesheet" type="text/css" href="http://www.shopsn.cn/Public/Admin/css/sms_template/sms_template.css">
    <div class="list">
    </div>
    <form id="form_save" onsubmit="return false">
        <div class="set-style">
            <if class="tab-pane active">
                <div class="left_main" id="find_esay">
                    <ul>
                        <?php if(is_array($sms_check)): $i = 0; $__LIST__ = $sms_check;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><a href="javascript:void(0);" onclick="template_url(<?php echo ($category["check_id"]); ?>);"
                               style="text-decoration: none;" class="active after_register" value="<?php echo ($category["check_id"]); ?>">
                                <li><?php echo ($category["check_title"]); ?> <a style="float:right;"></a>
                                </li>
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div>
                    <?php if(is_array($sms_check)): $i = 0; $__LIST__ = $sms_check;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><div class="right_main" id="content<?php echo ($category["check_id"]); ?>">
                            <div class="main-top">您正在编辑<a href="javascript:;" id="update_nameid"><?php echo ($category["check_title"]); ?></a>通知模板
                            </div>
                            <input type="hidden" name="check[<?php echo ($category["id"]); ?>][check_id]" value="<?php echo ($category["check_id"]); ?>">
                            <input type="hidden" name="check[<?php echo ($category["id"]); ?>][sms_id]" value="<?php echo ($sms_id); ?>">
                            <!--模板id-->
                            <input type="hidden" name="check[<?php echo ($category["id"]); ?>][id]" value="<?php echo ($category["id"]); ?>">
                            <?php if($sms_id == 1): ?><div class="qianming">
                                    <div style="width:75px;float:left;">短信签名：</div>
                                    <input type="text" name="check[<?php echo ($category["id"]); ?>][message_sign]" id="template_titleid"
                                           style="margin-right: 15px;" value="<?php echo ($category["message_sign"]); ?>"></div>
                                <br/>
                                <div class="qianming">
                                    <div style="width:75px;float:left;">短信内容：</div>
                                    <input type="text" name="check[<?php echo ($category["id"]); ?>][message_content]" id="signNameid"
                                           style="margin-right: 15px;" value="<?php echo ($category["message_content"]); ?>"></div>
                                <div class="qianming">
                                    <div style="width:75px;float:left;">可变变量：</div>
                                    <input type="text" name="check[<?php echo ($category["id"]); ?>][templcate_variable]" id=""
                                           style="margin-right: 15px;" value="<?php echo ($category["templcate_variable"]); ?>"></div>
                                <?php if($category["templcate_variable"] == true): ?><div class="bl">
                                        <div style="width:75px;float:left;">提示：</div>
                                        <div style="width:88%;float: left;font-size:13px;">变量格式 { $变量名 }</div>
                                    </div><?php endif; ?>
                                <?php else: ?>
                                <div class="qianming">
                                    <div style="width:75px;float:left;">模板编号：</div>
                                    <input type="text" name="check[<?php echo ($category["id"]); ?>][template]" id=""
                                           style="margin-right: 15px;" value="<?php echo ($category["template"]); ?>"></div><?php endif; ?>

                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
        </div>
        <div class="save">
            <input type="submit" value="保存" onclick="sms_template_save();">
            <a href="<?php echo U('notification_system');?>">
                <input type="button" value="返回" class="back">
            </a>
        </div>
    </form>
    <script type="text/javascript">
        var ADMIN_SYSTEM_SAVE = "<?php echo U('admin_system_save');?>";
        var SAVE_TEMPLATE_SAVE = "<?php echo U('save_template_save');?>";
        //		var ADMIN_EDIT = "<?php echo U('admin_edit');?>";
        //		var ADMIN_DEL  = "<?php echo U('admin_del');?>";
    </script>
    <script type="text/javascript" src="http://www.shopsn.cn/Public/Admin/js/checkbox_js/SimpleSwitch.min.js"></script>
    <script type="text/javascript">
        SimpleSwitch.init();
    </script>
    <script>
        $(function () {
            $(document).ready(function () {
                var get_val = $('.after_register').eq(0).attr('value');
                $('#content' + get_val).siblings().css('display', 'none');
//                $('.checkbox_status').each(function () {
//                    if ($(this).val() == 1) {
//                        $(this).siblings('button').addClass('on');
//                    }
//                });
            })
        })
    </script>
    <script type="text/javascript" src="http://www.shopsn.cn/Public/Admin/js/admin/admin.js"></script>
    </table>
    </div>
    <!-- 分页 -->
    </div>




</body>
</html>