<?php if (!defined('THINK_PATH')) exit();?>
<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<td style="width: 1px;" class="text-center"><input
					type="checkbox"
					onclick="$('input[name*=\'selected\']').prop('checked', this.checked);">
				</td>

				<td class="text-center">序号</td>
                <td class="text-center">反馈类型</td>
                <td class="text-center">反馈内容</td>
				<td class="text-center">用户名</td>
				<td class="text-center">联系方式</td>
				<td class="text-center">反馈时间</td>
				<td class="text-center">操作</td>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($data)): if(is_array($data)): foreach($data as $key=>$list): ?><tr class="trOwn">
					<td class="text-center">
                        <input type="checkbox" name="selected[]" value="<?php echo ($list["feedback_id"]); ?>">
                    </td>
					<td class="text-center"><?php echo ($list['feedback_id']); ?></td>
					<td class="text-center"><?php echo ($FeedbackType[ $list['type'] ]); ?></td>
					<td class="text-center"><?php echo ($list['content']); ?></td>
					<td class="text-center"><?php echo ($list['user_name']); ?></td>
					<td class="text-center"><?php echo ($list['tel']); ?></td>
					<td class="text-center"><?php echo (date('Y-m-d H:i:s',$list['create_time'])); ?></td>
					<td class="text-center">
                        <a href="javascript:void(0);"
                           onclick="Consulation.deleteCon(<?php echo ($list['feedback_id']); ?>, '<?php echo U('deleteFeedback');?>', this)" id="button-delete6"
                           data-toggle="tooltip" title="" class="btn btn-danger"
                           data-original-title="删除"><i class="fa fa-trash-o"></i></a>
                    </td>

				</tr><?php endforeach; endif; endif; ?>
		</tbody>
	</table>

</div>
<div class="row">
	<div class="col-sm-6 text-left"></div>
	<div class="col-sm-6 text-right"><?php echo ($page); ?></div>
</div>
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        Consulation.ajaxGetHtml("<?php echo U('ajaxGetFeedback');?>", 'searchForm', page);
    });
</script>