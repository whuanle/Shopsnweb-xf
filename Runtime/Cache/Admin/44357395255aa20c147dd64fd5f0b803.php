<?php if (!defined('THINK_PATH')) exit();?>
<form method="post" enctype="multipart/form-data" target="_blank"
	id="form-order">
	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<td style="width: 1px;" class="text-center"><input
						type="checkbox"
						onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>

					<td class="text-right"><a
						href="javascript:Order.sort('conditionForm', '<?php echo ($userModel::$id_d); ?>');">ID</a>
					</td>
					<td class="text-left">会员名称</td>
					<td class="text-left">分销会员等级</td>
					<td class="text-left">积分会员等级</td>

					<td class="text-left">邮件地址</td>

					<td class="text-left"><a
						href="javascript:Order.sort('conditionForm','<?php echo ($userModel::$mobile_d); ?>');">手机号码</a>
					</td>
					<!-- <td class="text-left"><a
						href="javascript:Order.sort('conditionForm','<?php echo ($balanceModel::$accountBalance_d); ?>');">余额</a>
					</td>
					<td class="text-left"><a
						href="javascript:Order.sort('conditionForm','<?php echo ($balanceModel::$lockBalance_d); ?>');">锁定余额</a>
					</td> -->
					<td class="text-left"><a
						href="javascript:Order.sort('conditionForm','<?php echo ($userModel::$integral_d); ?>');">积分</a>
					</td>
					<td class="text-left"><a
						href="javascript:Order.sort('conditionForm','<?php echo ($userModel::$createTime_d); ?>');">注册日期</a>
					</td>
					<td class="text-right">操作</td>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($data['data'])): if(is_array($data['data'])): $i = 0; $__LIST__ = $data['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
					<td class="text-center"><input type="checkbox"
						name="selected[]" value="<?php echo ($list[$userModel::$id_d]); ?>"> <input
						type="hidden" name="shipping_code[]" value="flat.flat"></td>
					<td class="text-right"><?php echo ($list[$userModel::$id_d]); ?></td>
					<td class="text-left"><?php echo ($list[$userModel::$userName_d]); ?></td>
					<td class="text-left"><?php echo ($member_status[$list[$userModel::$memberStatus_d]]); ?></td>
					<td class="text-left"><?php echo ($list[$levelModel::$levelName_d]); ?></td>
					<td class="text-left" width="164"><?php echo ($list[$userModel::$email_d]); ?> <?php if(($list[$userModel::$validateEmail_d] == 0) AND ($list[$userModel::$email_d])): ?>(未验证)<?php endif; ?>
					</td>
					<td class="text-left"><?php echo ($list[$userModel::$mobile_d]); ?></td>
					<!-- <td class="text-left"><?php echo ($list[$balanceModel::$accountBalance_d]); ?></td>
					<td class="text-left"><?php echo ($list[$balanceModel::$lockBalance_d]); ?></td> -->
					<td class="text-left"><?php echo ($list[$userModel::$integral_d]); ?></td>
					<td class="text-left"><?php echo (date('Y-m-d
						H:i',$list[$userModel::$createTime_d])); ?></td>
					<td class="text-right"><a
						onclick="Tool.alertEdit('<?php echo U('detail',array($userModel::$id_d=>$list[$userModel::$id_d]));?>', '会员详情', 800, 600)"
						data-toggle="tooltip" title="" class="btn btn-info"
						data-original-title="查看详情"><i class="fa fa-eye"></i></a> <a
						onclick="Tool.alertEdit('<?php echo U('showUserAddress',array($userModel::$id_d=>$list[$userModel::$id_d]));?>','会员收货地址', 800, 600)"
						data-toggle="tooltip" title="" class="btn btn-info"
						data-original-title="收货地址"><i class="fa fa-home"></i></a> <a
						onclick="Tool.alertEdit('<?php echo U('userRecharge',array($userModel::$id_d=>$list[$userModel::$id_d]));?>', '会员账户', 800, 600)"
						data-toggle="tooltip" title="" class="btn btn-info"
						data-original-title="账户"><i class="glyphicon glyphicon-yen"></i></a>
						<a
						onclick="Order.deleteUser('<?php echo U('deleteUser');?>', <?php echo ($list[$userModel::$id_d]); ?>)"
						id="button-delete6" data-toggle="tooltip" title=""
						class="btn btn-danger" data-original-title="删除"><i
							class="fa fa-trash-o"></i></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
			</tbody>
		</table>
	</div>
</form>
<div class="row">
	<div class="col-sm-3 text-left"></div>
	<div class="col-sm-6 text-right"><?php echo ($data["page"]); ?></div>

</div>
<script>
    $(".pagination  a").click(function(){
		var page = $(this).data('p');
        Order.ajaxForMyOrder('conditionForm', page);
    });
</script>