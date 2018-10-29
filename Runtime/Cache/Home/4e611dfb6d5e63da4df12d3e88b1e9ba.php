<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/Pay_now.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
    <title>商城支付</title>
</head>

<body>
    <div class="Pay_now_header">
        <div class="Pay_now_header_auto">客服电话：<?php echo ($intnet_phone); ?></div>
    </div>
    <div class="Pay_now_Content">
        <div class="Pay_now_Logo">
            <a href="<?php echo U('Index/index');?>">
            <img src="<?php echo ($logo_name); ?>" alt="" class="Pay_now_logo_img">
            <span class="Pay_now_Logo_span">商城支付</span>
            </a>
        </div>
        <div class="Pay_now_OrderID">
            <div class="Pay_now_OrderID_top">
                <p></p>
                <div class="Pay_now_OrderID_top_right active">订单号：<?php echo $out_trade_no; ?> &nbsp; 应付金额 <span class="Money"><?php echo ((isset($total_fee) && ($total_fee !== ""))?($total_fee):"0.00"); ?></span> 元<input id="orderId" type="hidden" name="id" value="<?php echo ($out_trade_no); ?>"/></div>
            </div>
        </div>
        <dl class="wx-payment-wrap clearfix">
            <dt class="btn-warp active fl">微信支付</dt>
            <dd class="fl">距离二维码过期还剩<span>35</span>秒，过斯后请刷新页面重新获取二维码</dd>
        </dl>
        <div class="wx-code-main">
            <div class="codeimma-wrap" id="qrcode">
            
            </div>
        </div>
    </div>
    <div class="Pay_now_footer">
        <div class="Pay_now_footer_lj">
            <a href="javascript:;">关于我们</a>
            <span class="Pay_now_footer_lj_fg">|</span>
            <a href="javascript:;">联系我们</a>
            <span class="Pay_now_footer_lj_fg">|</span>
            <a href="javascript:;">加盟我们</a>
            <span class="Pay_now_footer_lj_fg">|</span>
            <a href="javascript:;">商城APP</a>
            <span class="Pay_now_footer_lj_fg">|</span>
            <a href="javascript:;">友情链接</a>
        </div>
        <div class="Pay_now_footer_dh"><?php echo ($record_number); ?> ｜ 有任何问题请联系我们在线客服 电话：<?php echo ($intnet_phone); ?></div>
        <div class="Pay_now_footer_dh">© 20016-2018 亿速网络用品 版权所有，并保留所有权利</div>
    </div>
    <input name="out_trade_no" type='hidden' value="<?php echo $out_trade_no; ?>">
</body>
<script src="/Public/Wxin/Js/qrcode.js"></script>
<script>
    if(<?php echo empty($unifiedOrderResult["code_url"]) ? 'false' : 'true'; ?>)
    {
        var url = '<?php echo $code_url;?>';
        //参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H'
        var qr = qrcode(10, 'M');
        qr.addData(url);
        qr.make();
        var wording=document.createElement('p');
        wording.innerHTML = "";
        var code=document.createElement('DIV');
        code.innerHTML = qr.createImgTag();
        var element=document.getElementById("qrcode");
        element.appendChild(wording);
        element.appendChild(code);
    }
    var LISTEN_URL= "<?php echo ($check_notify); ?>"
    var ORDER_URL = "<?php echo U('Order/order_myorder');?>"
</script>
<script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
<script src="http://www.shopsn.xyz/Public/Home/js/pay/wx_pay.js?a=3"></script>
</html>