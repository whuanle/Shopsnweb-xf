<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
    <script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
    <style>
        .personaM-content-wrap .content-main dd span{
            width: 110px;
        }
    </style>
</head>
<body>

<div style="width: 500px" class="mordrMain  personaM-content-wrap">

        <?php if($status): ?><dl class="content-main">
                <dd class="clearfix">
                    <span class="fl"></span>
                    <input type="button" value="已提交退货物流信息"  disabled>
                </dd>
            </dl>
        <?php else: ?>
            <form action="<?php echo U('addExp');?>" method="post">
            <dl class="content-main">
                <dd class="clearfix">
                    <span class="fl"><span style="color: red">*</span>快递公司：</span>
                    <input type="text"  class="txt fl" name="exp" >
                </dd>
                <dd class="clearfix">
                    <span class="fl"><span style="color: red">*</span>物流单号：</span>
                    <input type="text"  class="txt fl" name="exp_id" >
                </dd>
                <dd class="clearfix">
                    <span class="fl"></span>
                    <input type="hidden"  class="txt fl" name="order_id" value="<?php echo ($id); ?>">
                    <input type="submit" id="submit"  value="提交申请" class="sub">
                </dd>

            </dl>
            </form><?php endif; ?>


</div>

</body>
<script>


</script>
</html>