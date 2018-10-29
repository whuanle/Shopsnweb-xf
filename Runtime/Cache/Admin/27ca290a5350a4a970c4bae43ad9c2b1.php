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
	<div class="container-fluid">
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
					</form>
				</div>
				<div id="ajax_return">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<td  class="text-center w1"><input
										type="checkbox"
										onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
									<td class="text-center">优惠券名称</td>
									<td class="text-center">发放类型</td>
									<td class="text-center">订单号</td>
									<td class="text-center">使用会员</td>
									<td class="text-center">使用时间</td>
									<?php if(($_GET['type'] == 4)): ?><td class="text-center">优惠券码</td><?php endif; ?>
									<td class="text-center">操作</td>
								</tr>
							</thead>
							<tbody>
								<if condition="!empty($data['data'])">
									<?php if(is_array($data['data'])): foreach($data['data'] as $key=>$list): ?><tr>
											<td class="text-center"><input type="checkbox"
												name="selected[]" value="6"></td>
											<td class="text-center"><?php echo ($couponData[$couponModel::$name_d]); ?></td>
											<td class="text-center"><?php echo ($coupon[$list[$couponList::$type_d]]); ?></td>
											<td class="text-center"><?php echo ($list[$orderModel::$orderSn_id_d]); ?></td>
											<td class="text-center"><?php echo ($list[$userModel::$userName_d]); ?></td>
											<td class="text-center"><?php if($list[$couponList::$useTime_d] > 0): echo (date('Y-m-d H:i',$list[$couponList::$useTime_d])); ?> <?php else: ?> N<?php endif; ?></td>
											<?php if(($list[$couponList::$type_d] == 4) and ($list[$couponList::$code_d] != '')): ?><td class="text-center"><?php echo ($list[$couponList::$code_d]); ?></td><?php endif; ?>
											<td class="text-center"><a
												href="<?php echo U('couponListDel',array('id'=>$list[$couponList::$id_d]));?>"
												id="button-delete6" data-toggle="tooltip" title=""
												class="btn btn-danger 
													<?php if($list[$couponList::$useTime_d] <= 0): ?>disabled<?php endif; ?>" data-original-title="删除"><i
													class="fa fa-trash-o"></i></a></td>
										</tr>
									</volist><?php endforeach; endif; ?>
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
	<!-- /.row -->
</section>




</body>
</html>