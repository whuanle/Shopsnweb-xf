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

	<section class="content">
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> 用户列表
					</h3>
					<h4 style="color:red">本功能为二次开发预留（渠道用户等用途），不参与默认商城功能</h4>
				</div>
				<div class="panel-body">
					<div class="navbar navbar-default">
						<form action="" id="conditionForm" class="navbar-form form-inline"
							method="post" onsubmit="return false" url="<?php echo U('ajaxGetApprovalUserList');?>">
							<?php if(!empty($search)): if(is_array($search)): foreach($search as $key=>$value): ?><div class="form-group">
										<label class="control-label" for="input-mobile"><?php echo ($value); ?></label>
										<div class="input-group">
											<input type="text" name="<?php echo ($key); ?>" value=""
												placeholder="<?php echo ($value); ?>" id="input-mobile" class="form-control">
											<!--<span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>-->
										</div>
									</div><?php endforeach; endif; endif; ?>
							<div class="form-group">
								<input type="hidden" name="order_by" value="<?php echo ($userModel::$id_d); ?>">
								<input type="hidden" name="sort" value="desc">
								<button type="submit"
									onclick="Tool.ajaxGetList('conditionForm', 1, 'ajaxGetReturn');"
									id="button-filter search-order"
									class="btn btn-primary pull-right">
									<i class="fa fa-search"></i> 筛选
								</button>
							</div>
							<button type="button" onclick="send_mail(0);"
								class="btn btn-primary">
								<i class="fa"></i> 发送邮箱
							</button>
						</form>
					</div>
					<div id="ajaxGetReturn"></div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/user/showList.js"></script>




</body>
</html>