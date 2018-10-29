<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/payment.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/css/page.css">
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

    <form action="<?php echo U('addWithdrawal');?>" method="post">
        <dl class="content-main">
            <dd class="clearfix">
                <span class="fl"><span style="color: red">*</span>请选择提现方式：</span>
                <select name="drawal" id="select">
                    <option value="1">支付宝</option>
                    <option value="2">银行卡</option>
                </select>
            </dd>
            <dd class="clearfix" id="ali" >
                <span class="fl"><span style="color: red">*</span>支付宝账号：</span>
                <input type="text"  class="txt fl" name="ali_account" id="ali_account">
            </dd>

            <dd class="clearfix" id="code" style="display: none">
                <span class="fl"><span style="color: red">*</span>卡号：</span>
                <input type="text"  class="txt fl" name="bank_num" id="bank_num">
                <span class="fl"><span style="color: red">*</span>银行名称：</span>
                <input type="text"  class="txt fl" name="bank_name" id="bank_name">
                <span class="fl"><span style="color: red">*</span>收款人姓名：</span>
                <input type="text"  class="txt fl" name="bank_user" id="bank_user">
            </dd>

            <dd class="clearfix">
                <span class="fl"><span style="color: red">*</span>提现金额：</span>
                <input type="text"  class="txt fl" name="money" id="money">
            </dd>

            <dd class="clearfix">
                <span class="fl"></span>
                <input type="submit" id="submit"  value="提交申请" class="sub">
            </dd>

        </dl>
    </form>
</div>

</body>
<script>
    var flag_bank = false;
    var flag_ali = false;
    var flag_money = false;
    //显示提现方式
    $("#select").change(function(){
        var id = $(this).val();
        if(id == 2){
            $("#code").show();
            $("#ali").css("display","none");
        }else if(id == 1){
            $("#ali").show();
            $("#code").css("display","none");
        }
    })
    //体现金额限制
    $("#money").blur(function(){
        var money = $(this).val();
        var amount = $(".amount").html();
        amount = amount.substring(1,amount.length);
        amount = parseFloat(amount);
        if(money>amount){
            alert("超出可提现金额");
            flag_money = false;
        }else{
            flag_money = true;
        }
    });
    //银行卡号验证
    $("#bank_num").blur(function(){
        var bank_num = $(this).val();
        if(!/^[1-9](\d{15})|(\d{18})$/.test(bank_num)){
            alert('银行卡号不正确');
            flag_bank = false;
        }else{
            flag_bank = true;
        }

    });
    //银行名称
    $("#bank_name").blur(function(){
        var bank_name = $(this).val();
        if(bank_name == ''){
            alert('请输入正确的卡号');
        }
    });
    //银行卡户名
    $("#bank_user").blur(function(){
        var bank_user = $(this).val();
        if(bank_user == ''){
            alert('请输入持卡人姓名');
        }
    });
    //支付宝账号验证
    $("#ali_account").blur(function(){
        var tel = /^[1][3,4,5,7,8,9][0-9]{9}$/;
        var reg = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
        var ali_account = $(this).val();
        if(!tel.test(ali_account)){
            if(reg.test(ali_account)){
                flag_ali = true;
            }else{
                alert('支付宝号不正确');
                flag_ali = false;
                console.log(flag_ali);
            }
        }else{
            flag_ali = true;
        }
    });
    //提交验证
    $("#submit").click(function(){
        var id = $("#select").val();
        if(id == 2){
            var bank_num = $("#bank_num").val();
            var bank_name = $("#bank_name").val();
            var bank_user = $("#bank_user").val();
            var money = $("#money").val();
            if(bank_num == ''||bank_name == '' || bank_user == '' ||money=='' ){
                alert("请填写完整信息");
                return false;
            }
            if(!flag_bank){
                alert('银行卡号不正确');
                return false;
            }
            if(!flag_money){
                alert("超出可提现金额");
                return false;
            }
        }else if(id == 1){
            var ali_account = $("#ali_account").val();
            var money = $("#money").val();
            if(ali_account == '' ||money=='' ){
                alert("请填写完整信息");
                return false;
            }
            if(!flag_ali){
                alert("支付宝号不正确");
                console.log(flag_ali);
                return false;
            }
            if(!flag_money){
                alert("超出可提现金额");
                return false;
            }
        }
    });
</script>
</html>