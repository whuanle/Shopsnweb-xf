<?php if (!defined('THINK_PATH')) exit();?><form method="post" enctype="multipart/form-data" target="_blank"
	  id="form-order">
	<div class="table-responsive">
		<table id="myTable" class="table table-bordered table-hover font_size" data-url="<?php echo U('distribution');?>">
			<thead>
			<tr>
				<td style="width: 1px;" class="text-center"><input
						type="checkbox"
						onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
				<td class="text-center cursor">订单编号
				</td>
				<td class="text-center cursor">总价(￥)</td>
				<!-- <td class="text-center">支付方式</td> -->
				<td class="text-center cursor">下单时间
				</td>
			</tr>
			</thead>
			<tbody>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
					<td class="text-center"><input type="checkbox" name="selected[]" value="<?php echo ($list["id"]); ?>"> </td>
					<td class="text-center"><?php echo ($list["order_sn_id"]); ?></td>
					<td class="text-center"><?php echo ($list["price_sum"]); ?></td>
					<td class="text-center"><?php echo (date('Y-m-d H:i:s',$list["create_time"])); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</form>
<div class="row">
	<div class="col-sm-6 text-left"></div>
	<div class="col-sm-6 text-right"><?php echo ($page); ?></div>
</div>
<script>
    $(".pagination a").click(function(){
        var page = $(this).data('p');
        Distribution.ajaxForMyOrder(page);
    });
</script>