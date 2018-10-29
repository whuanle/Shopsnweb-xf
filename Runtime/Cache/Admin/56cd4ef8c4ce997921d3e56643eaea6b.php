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
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form  id="search-form"
						class="navbar-form form-inline" method="post">
						<div class="form-group">
							<select name="<?php echo ($userLevel::$id_d); ?>" id="<?php echo ($userLevel::$id_d); ?>" class="form-control">
								<option value="">请选择</option>
								<?php if(!empty($data)): if(is_array($data)): foreach($data as $key=>$vo): ?><option value="<?php echo ($vo[$userLevel::$id_d]); ?>"<?php if($vo[$userLevel::$id_d] == $levelId): ?>selected<?php endif; ?>>
										<?php echo ($vo[$userLevel::$levelName_d]); ?>
									</option><?php endforeach; endif; endif; ?>
							</select>
						</div>
						<input type="hidden" name="<?php echo ($couponModel::$cId_d); ?>" id="<?php echo ($couponModel::$cId_d); ?>" class='axp'  value="<?php echo ($_GET['id']); ?>">
						<input type="hidden" name="<?php echo ($couponModel::$type_d); ?>" id="<?php echo ($couponModel::$type_d); ?>" class='axp' value="<?php echo ($_GET['type']); ?>">
						<button type="button" onclick="SendCoupon.sendCouponByUserLevel('<?php echo U('sendCouponByUserLevel');?>', 'axp', '<?php echo ($userLevel::$id_d); ?>')"  id="button-filter" class="btn btn-info">确定发送优惠券</button>
					</form>
				</div>
				<div class="navbar navbar-default">
					<form action="" id="conditionForm" class="navbar-form form-inline" url="<?php echo U('ajaxGetUser');?>"
						method="post" onsubmit="return false">
						<div class="form-group">
							<label class="control-label" for="input-mobile">手机号码</label>
							<div class="input-group">
								<input type="text" name="<?php echo ($user::$mobile_d); ?>" value=<?php echo ($_POST[$user::$mobile_d]); ?>"" placeholder="手机号码"
									id="input-mobile" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label" for="input-email">email</label>
							<div class="input-group">
								<input type="text" name="<?php echo ($user::$email_d); ?>" value="<?php echo ($_POST[$user::$email_d]); ?>" placeholder="email"
									id="input-email" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" for="input-order-id">昵称关键词</label>
							<div class="input-group">
								<input type="text" name="<?php echo ($user::$userName_d); ?>" value="<?php echo ($_POST[$user::$userName_d]); ?>"
									placeholder="搜索词" id="input-order-id" class="form-control">
							</div>
						</div>
						<button type="button" onclick="Order.ajaxForMyOrder('conditionForm', 1)"
							id="button-filter search-order" class="btn btn-primary">
							<i class="fa fa-search"></i>查找
						</button>
						<button type="button" onclick="SendCoupon.sendCoupon('<?php echo U('sendCouponUser');?>','axp');" id="button-filter"
							class="btn btn-info pull-right">确定发送优惠券</button>
					</form>
				</div>
				<form method="post" action="" id="form-user">
					<input type="hidden" name="cid" id="cid" value="<?php echo ($_GET['id']); ?>">
					<div id="ajaxGetReturn"></div>
				</form>
			</div>
		</div>
	</div>
</section>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script src="http://www.shopsn.xyz/Public/Admin/js/order.js"></script>
<script src="http://www.shopsn.xyz/Public/Admin/js/conpon/SendCoupon.js"></script>



</body>
</html>