<?php if (!defined('THINK_PATH')) exit();?>
<form method="post" enctype="multipart/form-data" target="_blank"
	id="form-order">
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<td class="text-center"><a href="javascript:void(0);">商品名称</a>
					</td>
					<?php if(is_array($title)): foreach($title as $key=>$value): ?><td class="text-center"><a
						href="javascript:Order.sort('conditionForm','<?php echo ($key); ?>');"><?php echo ($value); ?></a></td><?php endforeach; endif; ?>
					<td class="text-center"><a href="javascript:void(0);">状态</a></td>
					<td class="text-center"><a href="javascript:void(0);">是否收到货</a></td>
					<td class="text-center">操作</td>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($data['data'])): $flag = $type = null ; ?> <?php if(is_array($data['data'])): foreach($data['data'] as $key=>$items): ?><tr>
					<td class="text-center"><?php echo ($items[$goodsModel::$title_d]); ?></td>
					<td class="text-center"><a
						href="<?php echo U('orderDetail',array($model::$orderId_d=>$items[$model::$orderId_d]));?>"><?php echo ($items[$orderModel::$orderSn_id_d]); ?></a></td>
					
					<td class="text-center"><?php echo (date('Y-m-d H:i:s',$items[$model::$createTime_d])); ?></td>
					<td class="text-center">
						<?php echo ($refund[$items[$model::$type_d]]); ?>
					</td>
					<td class="text-center"><?php echo ($typeData[$items[$model::$status_d]]); ?></td>
					<td class="text-center">
					<?php if(($items[$model::$isReceive_d]==2) && ($items[$model::$type_d] == 0 || $items[$model::$type_d] == 1)): ?><img src="http://www.shopsn.xyz/Public/Common/img/yes.png"  name="<?php echo ($model::$isReceive_d); ?>" value="<?php echo ($items[$model::$isReceive_d]); ?>" onclick="Order.isReceive('<?php echo U('isReceive');?>', this, {id:<?php echo ($items[$model::$id_d]); ?>})"/>
                        <?php elseif(($items[$model::$isReceive_d]==1) && ($items[$model::$type_d] == 0 || $items[$model::$type_d] == 1)): ?>
                       		<img src="http://www.shopsn.xyz/Public/Common/img/cancel.png"   name="<?php echo ($model::$isReceive_d); ?>" value="<?php echo ($items[$model::$isReceive_d]); ?>"  onclick="Order.isReceive('<?php echo U('isReceive');?>', this, {id:<?php echo ($items[$model::$id_d]); ?>})"/>
						<?php else: ?>
							【无需收货】<?php endif; ?></td>
					<td class="text-center"><a
						href="<?php echo U('getReturnGoodsInfo',array($model::$id_d => $items[$model::$id_d]));?>"
						data-toggle="tooltip" title="" class="btn btn-info"
						data-original-title="查看详情"><i class="fa fa-eye"></i></a> <a
						href="javascript:void(0);"
						onclick="return.returnGoods('<?php echo U('Admin/order/return_del',array($model::$id_d=>$items[$model::$id_d]));?>')"
						id="button-delete6" data-toggle="tooltip" title=""
						class="btn btn-danger" data-original-title="删除"><i
							class="fa fa-trash-o"></i></a></td>
				</tr><?php endforeach; endif; endif; ?>
			</tbody>
		</table>
	</div>
</form>
<div class="row">
	<div class="col-sm-6 text-left"></div>
	<div class="col-sm-6 text-right"><?php echo ($data["page"]); ?></div>
</div>
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        Order.ajaxForMyOrder('conditionForm', page);
    });
</script>