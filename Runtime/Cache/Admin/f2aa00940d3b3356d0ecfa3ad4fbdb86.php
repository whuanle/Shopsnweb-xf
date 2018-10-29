<?php if (!defined('THINK_PATH')) exit();?><div class="panel-heading">
	<h3 class="panel-title text-center">
		费用信息
		<!--<a class="btn btn-primary btn-xs" data-original-title="修改费用"-->
			<!--title="" data-toggle="tooltip"-->
			<!--href="<?php echo U('Admin/Order/editprice',array('order_id'=>$order['order_id']));?>">-->
			<!--<i class="fa fa-pencil"></i>-->
		<!--</a>-->
	</h3>
</div>
<div class="panel-body">
	<table class="table table-bordered">
		<tbody>
			<tr>
				<td class="text-right">小计:</td>
				<td class="text-right">运费:</td>
				<td class="text-right">积分 (-<?php echo ($order["integral"]); ?>):</td>
				<td class="text-right">余额抵扣</td>
				<td class="text-right">优惠券抵扣</td>
				<td class="text-right">应付:</td>
			</tr>
			<tr>
				<td class="text-right"><?php echo ($_POST['monery']); ?></td>
				<td class="text-right">+<?php echo ($_SESSION['shippingMonery']); ?></td>
				<td class="text-right">-<?php echo ($order["integral_money"]); ?></td>
				<td class="text-right">-<?php echo ($order["user_money"]); ?></td>
				<td class="text-right">-<?php echo ($couponMonery); ?></td>
				<td class="text-right"><?php echo ($_POST['monery']+$_SESSION['shippingMonery']-$couponMonery); ?></td>
			</tr>
		</tbody>
	</table>
</div>