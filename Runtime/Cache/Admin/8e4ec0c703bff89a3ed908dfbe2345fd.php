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



<link href="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css" />
<script src="http://www.shopsn.xyz/Public/Common/daterangepicker/moment.min.js"
	type="text/javascript"></script> <script
	src="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker.js"
	type="text/javascript"></script>
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />


<section class="content ">
	<!-- Main content -->
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body ">
				<!--表单数据-->
				<form action="" method="post" id='form'>
					<!--通用信息-->
					<div class="tab-content col-md-10">
						<div class="tab-pane active" id="tab_tongyong">
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td class="col-sm-2">优惠券名称：</td>
										<td class="col-sm-4"><input type="text"
											value="<?php echo ($coupon[$couponModel::$name_d]); ?>" class="form-control" id="<?php echo ($couponModel::$name_d); ?>"
											name="<?php echo ($couponModel::$name_d); ?>"> <span id="err_attr_name"
											style="color: #F00; display: none;"></span></td>
										<td class="col-sm-4">请填写优惠券名称</td>
									</tr>
									<tr>
										<td>优惠券面额：</td>
										<td><input type="text" value="<?php echo ($coupon[$couponModel::$money_d]); ?>"
											class="form-control" id="<?php echo ($couponModel::$money_d); ?>" name="<?php echo ($couponModel::$money_d); ?>"></td>
										<td class="col-sm-4">优惠券可抵扣金额</td>
									</tr>
									<tr>
										<td>消费金额：</td>
										<td><input type="text" value="<?php echo ($coupon[$couponModel::$condition_d]); ?>"
											class="form-control active" id="<?php echo ($couponModel::$condition_d); ?>" name="<?php echo ($couponModel::$condition_d); ?>">
										</td>
										<td class="col-sm-4">可使用最低消费金额</td>
									</tr>
									<tr>
										<td>发放类型:</td>
										<td id="order-status">
											<input  disabled="disabled" <?php if($coupon[$couponModel::$type_d] == 0): ?>checked="checked"<?php endif; ?> name="<?php echo ($couponModel::$type_d); ?>" type="radio" value="0">面额模板 
											<input  disabled="disabled"<?php if($coupon[$couponModel::$type_d] == 1): ?>checked="checked"<?php endif; ?> name="<?php echo ($couponModel::$type_d); ?>" type="radio" value="1">按用户发放 
											<input  disabled="disabled"<?php if($coupon[$couponModel::$type_d] == 2): ?>checked="checked"<?php endif; ?> name="<?php echo ($couponModel::$type_d); ?>" type="radio" value="2">注册发放 
											<input  disabled="disabled"<?php if($coupon[$couponModel::$type_d] == 3): ?>checked="checked"<?php endif; ?> name="<?php echo ($couponModel::$type_d); ?>" type="radio" value="3">邀请发放 
											<input  disabled="disabled"<?php if($coupon[$couponModel::$type_d] == 4): ?>checked="checked"<?php endif; ?> name="<?php echo ($couponModel::$type_d); ?>" type="radio" value="4">线下发放</td>
									</tr>
									
									<tr>
										<td>发放数量:</td>
										<td><input type="text" class="form-control" value="<?php echo ($coupon[$couponModel::$createnum_d]); ?>"
											id="createnum" name="<?php echo ($couponModel::$createnum_d); ?>" placeholder="0"
											onpaste="this.value=this.value.replace(/[^\d]/g,'')"
											onkeyup="this.value=this.value.replace(/[^\d]/g,'')" /></td>
										<td class="col-sm-4">发放数量限制(默认为0则无限制)</td>
									</tr>
									
									<tr class="timed">
										<td>发放开始日期:</td>
										<td>
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"> <i
													class="glyphicon glyphicon-calendar fa fa-calendar"> </i>
												</span> <input type="text"
													value="<?php echo (date('Y-m-d',$coupon[$couponModel::$sendStart_time_d])); ?>"
													class="form-control" id="<?php echo ($couponModel::$sendStart_time_d); ?>"
													name="<?php echo ($couponModel::$sendStart_time_d); ?>">
											</div>
										</td>
										<td class="col-sm-4"></td>
									</tr>
									
									<tr class="timed">
										<td>发放结束日期:</td>
										<td>
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"> <i
													class="glyphicon glyphicon-calendar fa fa-calendar"> </i>
												</span> <input type="text"
													value="<?php echo (date('Y-m-d',$coupon[$couponModel::$sendEnd_time_d])); ?>"
													class="form-control" id="<?php echo ($couponModel::$sendEnd_time_d); ?>"
													name="<?php echo ($couponModel::$sendEnd_time_d); ?>">
											</div>
										</td>
										<td class="col-sm-4"></td>
									</tr>
									
									<tr>
			                        <td>使用起始日期:</td>
			                        <td>
			                            <div class="input-prepend input-group">
			                                <span class="add-on input-group-addon">
			                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
			                                </span>
			                                <input type="text" value="<?php echo (date('Y-m-d H:i:s',$coupon[$couponModel::$useStart_time_d])); ?>" class="form-control" id="<?php echo ($couponModel::$useStart_time_d); ?>" name="<?php echo ($couponModel::$useStart_time_d); ?>">
			                            </div>
			                        </td>
			                        <td class="col-sm-4"></td>
			                    </tr> 
									
									<tr>
										<td>有效截止日期:</td>
										<td>
											<div class="input-prepend input-group">
												<span class="add-on input-group-addon"> <i
													class="glyphicon glyphicon-calendar fa fa-calendar"></i>
												</span> <input type="text"
													value="<?php echo (date('Y-m-d',$coupon[$couponModel::$useEnd_time_d])); ?>"
													class="form-control" id="<?php echo ($couponModel::$useEnd_time_d); ?>" name="<?php echo ($couponModel::$useEnd_time_d); ?>">
											</div>
										</td>
										<td class="col-sm-4"></td>
									</tr>
								</tbody>
								 <tfoot>
                                	<tr>
                                	<td>
                                		<input type="hidden" name="<?php echo ($couponModel::$id_d); ?>" value="<?php echo ($coupon[$couponModel::$id_d]); ?>">
                                	</td>
                                	<td class="col-sm-4"></td>
                                	<td class="text-right"><input class="btn btn-primary" type="button" onclick="Conpon.addConpon('<?php echo U('saveEdit');?>', 'form')" value="保存"></td>
                                	</tr>
                                </tfoot>          
							</table>
						</div>
					</div>
				</form>
				<!--表单数据-->
			</div>
		</div>
	</div>
</section>
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> 
<script src="http://www.shopsn.xyz/Public/Admin/js/conpon/conpon.js?a=<?php echo time();?>"></script>




</body>
</html>