<?php if (!defined('THINK_PATH')) exit();?><html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
    <title>404</title>
</head>
<body>
    <!--&lt;!&ndash;头部&ndash;&gt;-->
    <!--<div class="regiup-header w clearfix">-->
        <!--<div class="regiup-headerLeft fl clearfix">-->
            <!--<a href="<?php echo U('Index/index');?>" class="logo fl">-->
                <!--<h2>亿速网络</h2>-->
                <!--<img src="http://www.shopsn.xyz/Public/Home/img/Pay_now_logo.png" widht="170" height="45" class="logo">-->
            <!--</a>-->
        <!--</div>-->
    <!--</div>-->
    <div class="note-content">
        <div class="content-main w clearfix">
            <div class="font-size fr">
                <?php if(isset($message)) {?>
                    <h2><?php echo($message); ?></h2>
                <?php }else{?>
                    <h2><?php echo($error); ?></h2>
                <?php }?>
                <a id="href" href="<?php echo($jumpUrl); ?>">如果没有自动跳转请点击这里...</a>
                <p>等待时间：<b id="wait"><?php echo($waitSecond); ?></b></p>
            </div>
        </div>
    </div>
    <!--底部-->
    <ul class="regi-footer">
        <li>
            <a href="javascript:;">关于我们</a>
            <a href="javascript:;">联系我们</a>
            <a href="javascript:;">加盟我们</a>
            <a href="javascript:;">商城APP</a>
            <a href="javascript:;" class="active">友情链接</a>
        </li>
        <li>
            <span><?php echo ($record_number); ?></span>
            <span class="active">有任何问题请联系我们在线客服 电话：<?php echo ($intnet_phone); ?></span>
        </li>
        <li>© 20016-2018 亿速网络用品 版权所有，并保留所有权利</li>
    </ul>

<script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>

</html>