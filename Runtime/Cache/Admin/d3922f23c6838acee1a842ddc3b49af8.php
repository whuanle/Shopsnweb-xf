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
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/prompt.css"/>
<link rel="stylesheet"
    href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
 <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>查看优惠券信息</li>
                    <li>添加,编辑优惠券信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />


<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> 优惠券列表
					</h3>
				</div>
				<div class="panel-body">
					<div class="navbar navbar-default">
						<form class="navbar-form form-inline" action="" method="post">
							<!--
				            <div class="form-group">
				              	<input type="text" class="form-control" placeholder="搜索">
				            </div>
				            <button type="submit" class="btn btn-default">提交</button>
                         -->
							<div class="form-group pull-right">
								<a onclick="Tool.alertEdit('<?php echo U('addConponHtml');?>', '添加优惠券', 830, 600)"
									class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加优惠券</a>
							</div>
						</form>
					</div>
					<div id="ajax_return">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td style="width: 1px;" class="text-center"><input
											type="checkbox"
											onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
										<td class="text-center">优惠券名称</td>
										<td class="text-center">优惠券类型</td>
										<td class="text-center">面额</td>
										<td class="text-center">使用需满金额</td>
										<td class="text-center">发放总量</td>
										<td class="text-center">已发放数</td>
										<td class="text-center">已使用</td>
										<td class="text-center">使用截止日期</td>
										<td style="min-width: 280px" class="text-center">操作</td>
									</tr>
								</thead>
								<tbody>
									<?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$list): ?><tr>
												<td class="text-center"><input type="checkbox"
													name="selected[]" value="6"></td>
												<td class="text-center"><?php echo ($list[$couponModel::$name_d]); ?></td>
												<td class="text-center"><?php echo ($couponType[$list[$couponModel::$type_d]]); ?></td>
												<td class="text-center"><?php echo ($list[$couponModel::$money_d]); ?></td>
												<td class="text-center"><?php echo ($list[$couponModel::$condition_d]); ?></td>
												<td class="text-center"><?php echo ($list[$couponModel::$createnum_d]); ?></td>
												<td class="text-center"><?php echo ($list[$couponModel::$sendNum_d]); ?></td>
												<td class="text-center"><?php echo ($list[$couponModel::$useNum_d]); ?></td>
												<td class="text-center"><?php echo (date('Y-m-d',$list[$couponModel::$useEnd_time_d])); ?></td>
												<td style="min-width: 280px" class="text-center">
													<?php if($list[$couponModel::$type_d] == 4): ?><a onclick="Tool.alertEdit('<?php echo U('makeCoupon',array( 'id'=>$list[$couponModel::$id_d], 'type'=>$list[$couponModel::$type_d]) );?>', '<?php echo ($couponType[$list[$couponModel::$type_d]]); ?>', 600, 400)"
															data-toggle="tooltip" title="" class="btn btn-info"
															data-original-title="发放"><i title="发放" class="fa fa-send"></i>
														</a> 
													<?php elseif($list[$couponModel::$type_d] == 1): ?> 
														<a href="javascript:void(0)"
															onclick="Tool.alertEdit('<?php echo U('sendCoupon',array( 'id'=>$list[$couponModel::$id_d], 'type'=>$list[$couponModel::$type_d]) );?>', '<?php echo ($couponType[$list[$couponModel::$type_d]]); ?>', 1100, 600)"
														data-toggle="tooltip" title="发放"
														class="btn btn-info send_user"
														data-url=""><i title="发放"
														class="fa fa-send-o"></i></a> 
													<?php else: ?> 
														<a
														href="javascript:void(0)" data-toggle="tooltip" title=""
														class="btn btn-default disabled" data-original-title="查看"><i title="查看"
														class="fa fa-send-o"></i></a><?php endif; ?> 
													<a
														onclick="Tool.alertEdit('<?php echo U('couponListByUser',array('id'=>$list[$couponModel::$id_d], 'type' => $list[$couponModel::$type_d]));?>', '<?php echo ($couponType[$list[$couponModel::$type_d]]); ?>', 900, 550)"
														data-toggle="tooltip" title="" class="btn btn-info"
														data-original-title="查看"><i title="查看" class="fa fa-eye"></i></a>
													<a
														onclick="Tool.alertEdit('<?php echo U('editCouponHTML',array('id'=>$list[$couponModel::$id_d]));?>', '编辑-<?php echo ($couponType[$list[$couponModel::$type_d]]); ?>', 900, 600)"
														data-toggle="tooltip" title="" class="btn btn-info"
														data-original-title="编辑"><i title="编辑" class="fa fa-pencil"></i></a>
													 <a
														onclick="SendCoupon.deleteCoupon('<?php echo U('deleteCoupon');?>', <?php echo ($list[$couponModel::$id_d]); ?>)" 
														href="javascript:;"
														data-toggle="tooltip" title="" class="btn btn-danger"
														data-original-title="删除"><i title="删除" class="fa fa-trash-o"></i></a>
													</td>
											</tr><?php endforeach; endif; endif; ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 text-left"></div>
						<div class="col-sm-6 text-right"><?php echo ($data["page"]); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
	<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
	<script src="http://www.shopsn.xyz/Public/Admin/js/conpon/sendCoupon.js?a=<?php echo time();?>"></script>
</section>




</body>
</html>