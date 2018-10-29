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
<div class="wrapper">
	<section class="content ">
		<!-- Main content -->
		<div class="container-fluid">
			<div class="pull-right">
				<a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
					class="btn btn-default" data-original-title="返回"><i
					class="fa fa-reply"></i></a>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i>退换货或者退款
					</h3>
				</div>
				<div class="panel-body ">
					<!--表单数据-->
					<form method="post" id="return_form">
						<!--通用信息-->
						<div class="tab-content col-md-10">
							<div class="tab-pane active" id="tab_tongyong">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td class="col-sm-2">订单编号：</td>
											<td class="col-sm-8"><a
												href="<?php echo U('orderDetail',array($org::$orderId_d =>$data[$org::$orderId_d]));?>"><?php echo ($data[$order::$orderSn_id_d]); ?></a>
											</td>
										</tr>
										<tr>
											<td>用户：</td>
											<td><?php echo ($data[$user::$userName_d]); ?></td>
										</tr>
										<tr>
											<td>申请日期：</td>
											<td><?php echo (date("Y-m-d H:i",$data[$org::$createTime_d])); ?></td>
										</tr>
										<tr>
											<td>商品名称：</td>
											<td>
                                                <a href="<?php echo C('front_url');?>/Home/Goods/goodsDetails/id/<?php echo ($data['goods_id']); ?>.html" target="_blank"> <?php echo ($data[$goods::$title_d]); ?></a>
                                            </td>
										</tr>
										<?php if($status == 9): ?><tr>
												<td>退款状态：</td>
												<td>退款成功【退货】请处理后续操作</td>
											</tr><?php endif; ?>
										<tr>
											<td>退换货：</td>
											<td>
												<div class="form-group col-xs-3"> <!-- name="type" -->
													<select class="form-control" disabled="disabled">
														<?php if(is_array($refund)): foreach($refund as $key=>$value): ?><option  value="<?php echo ($key); ?>"<?php if($data[$org::$type_d] == $key): ?>selected="selected"<?php endif; ?>><?php echo ($value); ?>
															</option><?php endforeach; endif; ?>
													</select>
												</div> 
												<?php if((($data[$org::$type_d] == 1 && $data[$org::$isReceive_d] == 2)) && ($status != 9) ): ?><a href="<?php echo U('cancelReturnOrder',array($org::$id_d=>$data[$org::$id_d], $org::$type_d => $data[$org::$type_d]));?>" >
														<input class="btn btn-primary" type="button"
														value="【退货】款">
													</a><?php endif; ?>
											</td>
										</tr>
                                        <tr>
                                            <td>退货原因：</td>
                                            <td><textarea id="tuihuo_case" cols="" rows=""
                                                          readonly="readonly" class="area returnGoods"
                                                    ><?php echo ($data[$org::$tuihuoCase_d]); ?></textarea>
                                            </td>
                                        </tr>
										<tr>
											<td>退货描述：</td>
											<td><textarea id="reason" cols="" rows=""
													readonly="readonly" class="area returnGoods"
													><?php echo ($data[$org::$explain_d]); ?></textarea>
											</td>
										</tr>
										<tr>
											<td>用户上传照片：</td>
											<!--<td>-->
                                                <!--<a href="<?php echo ($data[$org::$voucher_d]); ?>" target="_blank">-->
                                                <!--<img src="<?php echo ($data[$org::$voucher_d]); ?>" width="85" height="85" />-->
                                                <!--</a>&nbsp;&nbsp;&nbsp;-->
                                            <!--</td>-->
                                            <td>
                                                <?php if(is_array($imgs)): foreach($imgs as $key=>$img): ?><a href="<?php echo ($img); ?>" target="_blank">
                                                        <img src="<?php echo ($img); ?>" width="85" height="85" />
                                                    </a>&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                                            </td>

										</tr>
										<tr>
											<td>状态：</td>
											<td>
												<div class="form-group  col-xs-3">
													<select class="form-control" name="<?php echo ($org::$status_d); ?>">
														<?php if(is_array($returnGoods)): foreach($returnGoods as $key=>$value): ?><option value="<?php echo ($key); ?>"<?php if($data[$org::$status_d] == $key): ?>selected="selected"<?php endif; ?>>
																<?php echo ($value); ?>
															</option><?php endforeach; endif; ?>
													</select>
												</div>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td><input type="hidden" name="<?php echo ($org::$id_d); ?>"
												value="<?php echo ($data[$org::$id_d]); ?>"></td>
											<td class="text-right"><input class="btn btn-primary"
												type="button" onclick="Tool.savePost('return_form', '<?php echo U('editReturnGoods');?>')" value="保存"></td>
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
</div>
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>




</body>
</html>