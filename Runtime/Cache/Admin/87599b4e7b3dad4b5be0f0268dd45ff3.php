<?php if (!defined('THINK_PATH')) exit();?><form method="post" enctype="multipart/form-data" target="_blank"
	id="form-order">
	<div class="table-responsive">
		<table class="table table-bordered table-hover font_size">
			<thead>
				<tr>
					<td style="width: 1px;" class="text-center"><input
						type="checkbox"
						onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
					<td class="text-center cursor"><a onclick="Order.sort('conditionForm', 'order_sn_id');">订单编号</a>
					</td>
					<td class="text-center cursor"><a onclick="Order.sort('conditionForm', 'price_sum');">总金额</a></td>
					<td class="text-center">状态</td>
					<td class="text-center">收货人</td>
					<!-- <td class="text-center">支付方式</td> -->
					<td class="text-center">配送方式</td>
					<td class="text-center cursor"><a onclick="Order.sort('conditionForm', 'create_time');">下单时间</a>
					</td>
					<td class="text-center">操作</td>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($order["data"])): $i = 0; $__LIST__ = $order["data"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
					<td class="text-center"><input type="checkbox"
						name="selected[]" value="6"> <input type="hidden"
						name="shipping_code[]" value="flat.flat"></td>
					<td class="text-center"><?php echo ($list[$model::$orderSn_id_d]); ?></td>
					<td class="text-center"><?php echo ($list[$model::$priceSum_d]); ?></td>
					<td class="text-center"><?php echo ($orderStatus[$list[$model::$orderStatus_d]]); ?></td>
					<td class="text-center"><?php echo ($list["realname"]); ?>:<?php echo ($list["mobile"]); ?></td>
					<td class="text-center"><?php echo ($list[$expressModel::$name_d]); ?></td>
					<td class="text-center"><?php echo (date('Y-m-d H:i',$list[$model::$createTime_d])); ?></td>
					<td class="text-center"><a
						href="<?php echo U('orderDetail',array('order_id' => $list[$model::$id_d]));?>"
						data-toggle="tooltip" title="" class="btn btn-info"
						data-original-title="查看详情"><i class="fa fa-eye"></i></a> 
						<?php if(($list[$model::$id_d] == -1)): ?><a
								href="<?php echo U('Admin/order/delete_order',array('order_id'=>$list[$model::$id_d]));?>"
								data-toggle="tooltip" class="btn btn-danger" title="删除"><i
								class="fa fa-trash-o"></i></a> <?php else: ?> <a href="javascript:void(0)"
								onclick="alert('该订单不得删除')" data-toggle="tooltip"
								class="btn btn-default" title="删除"><i class="fa fa-trash-o"></i></a><?php endif; ?>
						</td>
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
$(".pagination a").click(function(){
    var page = $(this).data('p');
    Order.ajaxForMyOrder('conditionForm', page);
});
</script>