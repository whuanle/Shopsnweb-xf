<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html 
	dir="ltr" lang="cn"
>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title><?php echo ($title); ?></title>

<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/css.css?a=1546545633">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/dist/css/AdminLTE.css">
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
</head>
<body>



<style media="print" type="text/css">.noprint{display:none}</style>
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<div class="container">
    <div style="page-break-after: always;">
        <h1 class="text-center">订单信息</h1>
        <table class="table table-borderDataed">
            <thead>
            <tr>
                <td width="50%">发送自</td>
                <td width="50%">订单详情</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><address><strong><?php echo ($intnetConfig["intnet_title"]); ?></strong><br/><?php echo ($intnetConfig["internet_address"]); ?></address>
                    <b>电话:</b> <?php echo ($intnetConfig["internet_phone"]); ?><br/>
                    <b>E-Mail:</b> <?php echo ($intnetConfig["internet_email"]); ?><br/>
                    <b>网址:</b> <a target="_blank" href="<?php echo ($intnetConfig["internet_url"]); ?>"><?php echo ($intnetConfig["internet_url"]); ?></a>
                </td>
                <td width="50%">
                	<b>下单日期:</b> <?php echo (date('Y-m-d',$orderData[$model::$createTime_d])); ?><br />
                    <b>订单号:</b> <?php echo ($orderData[$model::$orderSn_id_d]); ?><br />
                    <b>支付方式:</b> <?php echo ($orderData[$model::$payType_d]); ?><br/>
                    <b>配送方式:</b> <?php echo ($orderData[$model::$expId_d]); ?><br/>
                </td>
            </tr>
            </tbody>
        </table>
        <table class="table table-borderDataed">
            <thead>
            <tr>
                <td colspan="4"><b>收货信息</b></td>
            </tr>
            <tr><td>收件人</td><td>联系电话</td><td>收货地址</td><td>邮编</td></tr>
            </thead>
            <tbody>
            <tr>
            	<td><?php echo ($orderData[$addressModel::$realname_d]); ?></td>
            	<td><?php echo ($orderData[$addressModel::$mobile_d]); ?></td>
                <td><?php echo ($orderData[$addressModel::$provId_d]); ?>&nbsp;&nbsp;<?php echo ($orderData[$addressModel::$city_d]); ?>&nbsp;&nbsp;<?php echo ($orderData[$addressModel::$dist_d]); ?>&nbsp;&nbsp;<?php echo ($orderData[$addressModel::$address_d]); ?></td>
                <td><?php echo ($orderData[$addressModel::$zipcode_d]); ?></td>
            </tr>
            </tbody>
        </table>
        <table class="table table-borderDataed">
            <thead>
            <tr>
                <td><b>商品名称</b></td>
                <td><b>规格属性</b></td>
                <td><b>数量</b></td>
                <td><b>单价</b></td>
                <td class="text-right"><b>小计</b></td>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($orderDataGoods)): foreach($orderDataGoods as $key=>$good): ?><tr>
                    <td><?php echo ($good["goods_name"]); ?></td>
                    <td><?php echo ($good["spec_key_name"]); ?></td>
                    <td><?php echo ($good["goods_num"]); ?></td>
                    <td><?php echo ($good["goods_price"]); ?></td>
                    <td class="text-right"><?php echo ($good["goods_total"]); ?></td>
                </tr><?php endforeach; endif; ?>
            </tbody>
            <tfoot>
            <tr><td colspan="5" class="text-center"><input class="btn btn-default noprint" type="submit" onclick="window.print();" value="打印"></td></tr>
            </tfoot>
        </table>
    </div>
</div>




</body>
</html>