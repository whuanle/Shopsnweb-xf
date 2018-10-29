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
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i> 收货地址列表
				</h3>
			</div>
			<div class="panel-body">

				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>

								<td class="text-left">收货人</td>

								<td class="text-left">联系方式</td>

								<td class="text-left">邮政编码</td>

								<td class="text-left">地址</td>
							</tr>
						</thead>
						<tbody>
							<?php if(!empty($userAddressData)): if(is_array($userAddressData)): $i = 0; $__LIST__ = $userAddressData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
										<td class="text-left"><?php echo ($list[$userAddress::$realname_d]); ?></td>
		
										<td class="text-left"><?php echo ($list[$userAddress::$mobile_d]); ?></td>
										<td class="text-left"><?php echo ($list[$userAddress::$zipcode_d]); ?></td>
										<td class="text-left">
											<?php echo ($list[$userAddress::$provId_d]); ?>,<?php echo ($list[$userAddress::$city_d]); ?>,<?php echo ($list[$userAddress::$dist_d]); ?>,<?php echo ($list[$userAddress::$address_d]); ?>
										</td>
									</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</section>




</body>
</html>