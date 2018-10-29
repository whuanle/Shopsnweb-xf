<?php if (!defined('THINK_PATH')) exit();?>
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td style="width: 1px;" class="text-center"><input
					type="checkbox"
					onclick="$('input[name*=\'selected\']').prop('checked', this.checked);">
				</td>
				<?php if(is_array($notes)): foreach($notes as $key=>$value): ?><td class="text-center"><?php echo ($value); ?></td><?php endforeach; endif; ?>
				<td class="text-center">操作</td>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$list): ?><tr class="trOwn">
					<td class="text-center"><input type="checkbox"
						name="selected[]" value="<?php echo ($list["comment_id"]); ?>"></td>
					<td class="text-left"><a target="_blank"
						href="<?php echo U('Home/Goods/goodsDetails',array('id'=>$list[$model::$goodsId_d]));?>"><?php echo ($list[$goodsModel::$title_d]); ?></a></td>
					<td class="text-center"><?php echo (date('Y-m-d H:i:s',$list[$model::$addTime_d])); ?></td>
					<td class="text-left"><?php echo ($list[$model::$content_d]); ?></td>
					<td class="text-center"><img width="20" height="20"
						src="http://www.shopsn.xyz/Public/Common/img/<?php if($list[$model::$isShow_d] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>"
						onclick="Tool.isShow(this, '<?php echo U('isShow');?>')" />
						<input type="hidden" value="<?php echo ($list[$model::$id_d]); ?>" name="<?php echo ($model::$id_d); ?>"/>
						<input type="hidden" value="<?php echo ($list[$model::$isShow_d]); ?>" falg="1" name="<?php echo ($model::$isShow_d); ?>"/>
					</td>
					<td class="text-center"><?php echo ($list[$model::$userId_d]); ?></td>
					<td class="text-center"><?php echo ($list[$model::$ip_d]); ?></td>
					<td class="text-center"><a
						href="<?php echo U('consulationInfo',array('id'=>$list[$model::$id_d]));?>"
						data-toggle="tooltip" title="" class="btn btn-primary"
						data-original-title="编辑"><i class="fa fa-eye"></i></a> <a
						href="javascript:void(0);"
						onclick="Consulation.deleteCon(<?php echo ($list[$model::$id_d]); ?>, '<?php echo U('deleteConsulation');?>', this)" id="button-delete6"
						data-toggle="tooltip" title="" class="btn btn-danger"
						data-original-title="删除"><i class="fa fa-trash-o"></i></a></td>
				</tr><?php endforeach; endif; endif; ?>
		</tbody>
	</table>
	<select name="operate" id="operate">
		<option value="0">操作选择</option>
		<option value="show">显示</option>
		<option value="hide">隐藏</option>
		<option value="del">删除</option>
	</select>
	<button onclick="op()">确定</button>
	<form id="operator" method="post">
		<input type="hidden" name="selected"> <input type="hidden" name="type">
	</form>
</div>
<div class="row">
	<div class="col-sm-6 text-left"></div>
	<div class="col-sm-6 text-right"><?php echo ($data["page"]); ?></div>
</div>
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        Consulation.ajaxGetHtml("<?php echo U('ajaxGetCoulatation');?>", 'searchForm', page);
    });
</script>