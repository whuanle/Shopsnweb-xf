<?php if (!defined('THINK_PATH')) exit();?><form method="post" enctype="multipart/form-data" target="_blank"
	id="form-order">
	<div class="table-responsive">
		<table class="table table-bordered table-hover font_size">
			<thead>
				<tr>
					<td style="width: 1px;" class="text-center"><input
						type="checkbox"
						onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
					<td class="text-center cursor"><a
						onclick="Order.sort('conditionForm', 'order_sn_id');">订单编号</a></td>
					<td class="text-center cursor"><a
						onclick="Order.sort('conditionForm', 'price_sum');">下单时间</a></td>
					<td class="text-center">收货人</td>
					<td class="text-center">联系电话</td>
					<td class="text-center">配送方式</td>
					<td class="text-center">物流费用</td>
					<td class="text-center cursor"><a
						onclick="Order.sort('conditionForm', 'create_time');">支付时间</a></td>
					<td class="text-center">订单总价</td>
					<td class="text-center">操作</td>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($order["data"])): $i = 0; $__LIST__ = $order["data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
					<td class="text-center"><input type="checkbox"
						name="selected[]" value="6"> <input type="hidden"
						name="shipping_code[]" value="flat.flat"></td>
					<td class="text-center"><?php echo ($list[$model::$orderSn_id_d]); ?></td>
					<td class="text-center"><?php echo (date('Y-m-d
						H:i',$list[$model::$createTime_d])); ?></td>
					<td class="text-center"><?php echo ($list["realname"]); ?></td>
					<td class="text-center"><?php echo ($list["mobile"]); ?></td>
					<td class="text-center"><?php echo ($list[$expressModel::$name_d]); ?></td>
					<td class="text-center"><?php echo ($list[$model::$shippingMonery_d]); ?></td>
					<td class="text-center"><?php echo (date('Y-m-d
						H:i',$list[$model::$payTime_d])); ?></td>
					<td class="text-center"><?php echo ($list[$model::$priceSum_d]); ?></td>
					<td class="text-center"><a
							href="<?php echo U('Order/orderDetail',array('order_id'=>$list[$model::$id_d]));?>"
							data-toggle="tooltip" title="" class="btn btn-info"
							data-original-title="查看详情"><i class="fa fa-eye"></i></a> <!-- <a
							href="<?php echo U('Order/shipping_print',array('order_id'=>$list['order_id']));?>"
							target="_blank" data-toggle="tooltip" class="btn btn-default"
							title="打印快递单"> <i class="fa fa-print"></i>快递单
						</a> --> <a
						href="<?php echo U('picking',array($model::$id_d=>$list[$model::$id_d],'template'=>'picking'));?>"
						target="_blank" data-toggle="tooltip" class="btn btn-default"
						title="打印配货单"> <i class="fa fa-print"></i>配货单
					</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</form>
<div class="row">
	<div class="col-sm-6 text-left"></div>
	<div class="col-sm-6 text-right"><?php echo ($order["page"]); ?></div>
</div>
<script>
	$(".pagination a").click(function() {
		var page = $(this).data('p');
		Order.ajaxForMyOrder('conditionForm', page);
	});
</script>