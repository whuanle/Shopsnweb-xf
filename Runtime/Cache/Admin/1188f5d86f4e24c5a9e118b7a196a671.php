<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html  >
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



<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />

<section class="content">
	<!-- Main content -->
	<!--<div class="container-fluid">-->
	<div class="container-fluid">
		<form id="form" action="<?php echo U('delivery');?>"
			method="post" onsubmit="return Sender.submitCheck('express')">
			<!--新订单列表 基本信息-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">基本信息</h3>
				</div>
				<div class="panel-body">
					<nav class="navbar navbar-default">
						<div class="collapse navbar-collapse">
							<div class="navbar-form pull-right margin">
								<a href="<?php echo U('Order/orderList');?>"
									data-toggle="tooltip" title="" class="btn btn-default"
									data-original-title="返回"><i class="fa fa-reply"></i></a>
							</div>
						</div>
					</nav>
					<table class="table table-bordered">
						<tbody>

							<tr>
								<td class="text-right">订单号:</td>
								<td class="text-center"><?php echo ($order[$orderModel::$orderSn_id_d]); ?><input id="order_id" type="hidden" name="id" value="<?php echo ($order["id"]); ?>"/></td>
								<td class="text-right">下单时间:</td>
								<td class="text-center"><?php echo (date('Y-m-d H:i',$order[$orderModel::$createTime_d])); ?></td>
							</tr>
							<tr>
								<td class="text-right">配送方式:</td>
								<td class="text-center"><?php echo ($order[$orderModel::$expId_d]); ?></td>
								<td class="text-right">配送费用:</td>
								<td class="text-center"><?php echo ($order[$orderModel::$shippingMonery_d]); ?></td>
							</tr>
							<tr>
								<td class="text-right">配送单号:</td>
								<td class="text-center"><input class="input-sm"
									name="express_id" id="<?php echo ($orderModel::$expressId_d); ?>" value="<?php echo ($order[$orderModel::$expressId_d]); ?>">
									<input value="<?php echo ($order[$orderModel::$id_d]); ?>" name="<?php echo ($orderModel::$id_d); ?>" type="hidden"/>
								</td>
								<td class="text-right">配送物流:</td>
								<td class="text-center">
									<select name="exp_id">
										<?php if(is_array($exp_name)): foreach($exp_name as $key=>$vo): ?><option value="<?php echo ($vo['id']); ?>"<?php if($vo['name'] == $order[$orderModel::$expId_d]): ?>selected<?php endif; ?>  >
                                                <?php echo ($vo['name']); ?>
											</option><?php endforeach; endif; ?>
									</select>
								</td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
			<!--新订单列表 收货人信息-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">收货信息</h3>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td class="text-right">收货人:</td>
								<td class="text-center"><?php echo ($order[$userAddressModel::$realname_d]); ?></td>
								
							</tr>
							<tr>
								<td class="text-right">地址:</td>
								<td class="text-center"><?php echo ($order[$userAddressModel::$provId_d]); ?>、<?php echo ($order[$userAddressModel::$city_d]); ?>、<?php echo ($order[$userAddressModel::$dist_d]); ?>、<?php echo ($order[$userAddressModel::$address_d]); ?></td>
								<td class="text-right">邮编:</td>
								<td class="text-center"><?php echo ($order[$userAddressModel::$zipcode_d]); ?></td>
							</tr>
							<tr>
								<td class="text-right">电话:</td>
								<td class="text-center"><?php echo ($order[$userAddressModel::$mobile_d]); ?></td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
			<!--新订单列表 商品信息-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">商品信息</h3>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<td class="text-left">商品</td>
								<td class="text-left">购买数量</td>
								<td class="text-left">商品单价</td>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($goodsInfo)): $i = 0; $__LIST__ = $goodsInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?><tr>
								<td class="text-left"><a
									href=""><?php echo ($good[$goodsModel::$title_d]); ?></a>
								</td>
								<td class="text-left"><?php echo ($good[$orderGoodsModel::$goodsNum_d]); ?></td>
								<td class="text-right"><?php echo ($good[$orderGoodsModel::$goodsPrice_d]); ?></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>

				</div>
			</div>
			<!--发货状态下课修改订单号-->
			<?php if($order['shipping_status'] != 1): ?><!--新订单列表 操作信息-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">发货信息</h3>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td colspan="4">
									<div class="form-group text-center">
										<?php if( ($order['order_status'] == 1 && $order['order_status'] < 3)): ?><button  class="btn btn-primary"
											type="submit">确认发货</button>
										<?php else: ?>
											<button  class="btn btn-primary"
											type="button">发货中</button><?php endif; ?>
										<button onclick="history.go(-1)" class="btn btn-primary"
											type="button">返回</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div><?php endif; ?>

			<!--新订单列表 操作记录信息-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">查询</h3>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<td class="text-center">快递公司</td>
								<td class="text-center">查看</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">顺丰</td>
								<td class="text-center"><a href="http://www.kuaidi100.com/"
									target="_blank">查看物流</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</form>
	</div>
</section>
<script src="/Public/Admin/js/sendGoods.js"></script>




</body>
</html>