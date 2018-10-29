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
	<!-- Main content -->
	<!--<div class="container-fluid">-->
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> 用户信息
					</h3>
				</div>
				<div class="panel-body">
					<form action="<?php echo U('saveDetail');?>" method="post">
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td class="col-sm-2">会员昵称:</td>
									<td><input type="text" class="form-control"
										name="<?php echo ($userModel::$userName_d); ?>" value="<?php echo ($data[$userModel::$userName_d]); ?>"></td>
									<td></td>
								</tr>
								<tr>
									<td>用户积分:</td>
									<td><?php echo ($data[$userModel::$integral_d]); ?> 
										<span class="user_edit">账户余额：<?php echo ($data[$balanceModel::$accountBalance_d]); ?></span>
										<span class="user_edit">账户锁定余额：<?php echo ($data[$balanceModel::$lockBalance_d]); ?></span>
									</td>
									<td></td>
								</tr>
                                <tr>
                                    <td>分销会员等级：</td>
                                    <td>
                                        <select name="<?php echo ($userModel::$memberStatus_d); ?>">
                                            <?php if(is_array($memberStatus)): foreach($memberStatus as $key=>$v): ?><option value="<?php echo ($key); ?>" <?php if($key == $data[$userModel::$memberStatus_d]): ?>selected<?php endif; ?> ><?php echo ($v); ?></option><?php endforeach; endif; ?>
                                        </select>
                                    </td>
                                </tr>

								<tr>
									<td>邮件地址:</td>
									<td><input type="text" class="form-control" name="<?php echo ($userModel::$email_d); ?>"
										value="<?php echo ($data[$userModel::$email_d]); ?>"></td>
									<td>电子邮箱</td>
								</tr>
								
								<tr>
									<td>性别:</td>
									<td id="order-status">
										<?php echo ($data[$userModel::$sex_d]); ?>
									</td>
									
								</tr>
								
								<tr>
									<td>手机:</td>
									<td><input type="text" class="form-control" name="<?php echo ($userModel::$mobile_d); ?>"
										value="<?php echo ($data[$userModel::$mobile_d]); ?>"></td>
									<td></td>
								</tr>
								
								<tr>
									<td>新密码:</td>
									<td><input type="password" class="form-control" name="<?php echo ($userModel::$password_d); ?>[]"
										value=""></td>
									<td></td>
								</tr>
								
								<tr>
									<td>再次输入密码:</td>
									<td><input  type="password" class="form-control" name="<?php echo ($userModel::$password_d); ?>[]"
										value=""></td>
									<td></td>
								</tr>
								
								
								<?php if(!empty($data[$userModel::$memberStatus_d]) && ($data[$userModel::$memberStatus_d] == 1 || $data[$userModel::$memberStatus_d] == 2)): ?><tr>
										<td>折扣率:</td>
										<td><input type="text" class="form-control" name="<?php echo ($userModel::$memberDiscount_d); ?>" 
												   onkeyup="this.value=this.value.replace(/[^\d.]/g,'')" 
												   onpaste="this.value=this.value.replace(/[^\d.]/g,'')"
												   value="<?php echo ($data[$userModel::$memberDiscount_d]); ?>">
										</td>
										<td></td>
									</tr><?php endif; ?>
								<tr>
									<td>冻结用户:</td>
									<td><input name="<?php echo ($userModel::$status_d); ?>" type="radio" value="0"
									<?php if($data[$userModel::$status_d] == 0): ?>checked<?php endif; ?> >是 <input
										name="<?php echo ($userModel::$status_d); ?>" type="radio" value="1"
									<?php if($data[$userModel::$status_d] == 1): ?>checked<?php endif; ?> >否</td>
									<td></td>
								</tr>
								<tr>
									<td>注册时间:</td>
									<td>
										<?php echo (date('Y-m-d H:i',$data[$userModel::$createTime_d])); ?>
										<input type="hidden" name="<?php echo ($userModel::$id_d); ?>" value="<?php echo ($data[$userModel::$id_d]); ?>"/>
									</td>
									<td></td>
								</tr>

								<tr>
									<td></td>
									<td>
										<button type="submit" class="btn btn-info">
											<i class="ace-icon fa fa-check bigger-110"></i> 保存
										</button> 
									</td>
								</tr>
							</tbody>
						</table>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- /.content -->
</section>




</body>
</html>