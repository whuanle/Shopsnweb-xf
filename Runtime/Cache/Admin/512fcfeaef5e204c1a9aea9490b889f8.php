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
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<nav class="navbar navbar-default"></nav>

				<!--新订单列表 基本信息-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title text-center">基本信息</h3>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>订单 ID:</td>
									<td>订单号:</td>
									<td>会员:</td>
									<td>E-Mail:</td>
									<td>电话:</td>
									<td>应付:</td>
									<td>订单 状态:</td>
									<td>下单时间:</td>
									<td>支付时间:</td>
									<td>支付方式:</td>
								</tr>
								<tr>
									<td><?php echo ($order[$orderModel::$id_d]); ?></td>
									<td><?php echo ($order[$orderModel::$orderSn_id_d]); ?></td>
									<td><a href="#" target="_blank"><?php echo ($order[$userModel::$userName_d]); ?></a></td>
									<td><a href="#"><?php echo ($order[$userModel::$email_d]); ?></a></td>
									<td><?php echo ($order[$userModel::$mobile_d]); ?></td>
									<td><?php echo ($order[$orderModel::$priceSum_d]); ?></td>
									<td id="order-status"><?php echo ($orderStatus[$order[$orderModel::$orderStatus_d]]); ?>

                                    </td>
									<td><?php echo (date('Y-m-d
										H:i',$order[$orderModel::$createTime_d])); ?></td>
									<td>
                                        <?php if($order[$orderModel::$orderStatus_d] > 0): echo (date('Y-m-d H:i',$order[$orderModel::$payTime_d])); ?>
                                        <?php else: ?>
                                            N<?php endif; ?>
                                    </td>

									<td id="pay-type"><?php echo ((isset($order[$orderModel::$payType_d]) && ($order[$orderModel::$payType_d] !== ""))?($order[$orderModel::$payType_d]):'微信支付'); ?></td>
								</tr>
                                <tr>
                                    <td colspan="2">用户订单备注信息</td>
                                    <td colspan="8"><?php echo ($order['remarks']); ?> </td>
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
									<td>收货人:</td>
									<td>联系方式:</td>
									<td>地址:</td>
									<td>邮编:</td>
									<td>配送方式:</td>
								</tr>
								<tr>
									<td><?php echo ($receive[$userAddressModel::$realname_d]); ?></td>
									<td><?php echo ($receive[$userAddressModel::$mobile_d]); ?></td>
									<td><?php echo ($receive[$userAddressModel::$provId_d]); ?>、<?php echo ($receive[$userAddressModel::$city_d]); ?>、<?php echo ($receive[$userAddressModel::$dist_d]); ?>、<?php echo ($receive[$userAddressModel::$address_d]); ?></td>
									<td><?php if($receive["zipcode"] != ''): echo ($receive["zipcode"]); ?> <?php else: ?> N<?php endif; ?></td>
									<td><?php echo ($order[$orderModel::$expId_d]); ?></td>
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
									<td class="text-right">数量</td>
									<td class="text-right">单品价格</td>
									<td class="text-right">会员折扣价格</td>
									<td class="text-right">单品小计</td>
								</tr>
							</thead>
							<tbody>
								<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?><tr>
									<td class="text-left"><a
										href="<?php echo C('front_url');?>/Home/Goods/goodsDetails/id/<?php echo ($good['goods_id']); ?>.html"
										target="_blank"> <?php echo ($good[$goodsModel::$title_d]); ?></a></td>
									<td class="text-right"><?php echo ($good[$orderGoodsModel::$goodsNum_d]); ?></td>
									<td class="text-right"><?php echo ($good[$orderGoodsModel::$goodsPrice_d]); ?></td>
									<td class="text-right"><?php echo sprintf('%01.2f',$good[$orderGoodsModel::$goodsPrice_d]*$order[$userModel::$memberDiscount_d]/100);?></td>
									<td class="text-right"><?php echo ($good[$orderGoodsModel::$goodsNum_d] * $good[$orderGoodsModel::$goodsPrice_d]); ?></td>
								</tr>
								<?php $price += $good[$orderGoodsModel::$goodsNum_d] * $good[$orderGoodsModel::$goodsPrice_d]; endforeach; endif; else: echo "" ;endif; ?>

								<tr>
									<td colspan="3" class="text-right">小计:</td>
									<td class="text-right"><?php echo ($price); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<!--新订单列表 费用信息-->
				<div class="panel panel-default" id="moneryInformation">
					
				</div>

				<!--新订单列表 操作信息-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title text-center">操作信息</h3>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<div class="row">
										<td class="text-right col-sm-2"><p class="margin">当前可执行操作：</p></td>
										<td colspan="3">
											<div class="input-group">
												<?php switch($order['order_status']): case "-1": ?><button class="btn btn-primary margin"
                                                                onclick="Sender.setOrderStatus(<?php echo ($order["id"]); ?>,-2,'<?php echo U('setOrderStatus');?>')"
                                                                type="button" id="confirm">删除订单</button><?php break;?>
                                                    <?php case "0": ?><button class="btn btn-primary margin"
                                                                onclick="Sender.setOrderStatus(<?php echo ($order["id"]); ?>,-1,'<?php echo U('setOrderStatus');?>')"
                                                                type="button" id="confirm">取消订单</button><?php break;?>
                                                    <?php case "1": ?><a class="btn btn-primary margin" href="<?php echo U('sendGoods',array('order_id'=>$order['id']));?>">发货</a><?php break;?>
                                                    <?php case "5": ?><button class="btn btn-primary margin"
                                                            onclick="Sender.returnGoods(<?php echo ($order["id"]); ?>,'<?php echo U('ReturnOrder');?>')"
                                                            type="button" id="confirm">退货</button>

                                                        <button class="btn btn-primary margin"
                                                            onclick="Sender.noReturn(<?php echo ($order["id"]); ?>,'<?php echo U('noReturn');?>')"
                                                            type="button" id="confirm">不予退货</button><?php break;?>
                                                    <?php case "7": ?><button class="btn btn-primary margin"
													onclick="Sender.alertEdit('<?php echo U('cancelOrderMonery', array('idsaw' => $order[$orderModel::$id_d]));?>', '退款申请中。。。。', 800, 600)"
													type="button" id="confirm">退款</button><?php break; endswitch;?>
											</div>
										</td>
									</div>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> <script
	src="http://www.shopsn.xyz/Public/Admin/js/sendGoods.js?a=<?php echo time();?>"></script> 
<script>
var Monery = <?php echo ($price); ?>;
var MONERY_LIST = "<?php echo U('couponInformation');?>";
var ORDER_ID	= <?php echo ($order[$orderModel::$id_d]); ?>;
</script>




</body>
</html>