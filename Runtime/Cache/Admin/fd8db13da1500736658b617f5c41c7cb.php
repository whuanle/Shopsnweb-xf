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
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/user/user.css" />
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />   <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/prompt.css"/>
     <link rel="stylesheet"
    href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
    <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>查看所有的会员信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i> 用户列表
				</h3>
			</div>
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form action="" id="conditionForm" class="navbar-form form-inline"
						method="post" onsubmit="return false" url="<?php echo U('ajaxUserList');?>">
						<div class="form-group">
							<label class="control-label" for="input-mobile">手机号码</label>
							<div class="input-group">
								<input type="text" name="<?php echo ($userModel::$mobile_d); ?>" value="" placeholder="手机号码"
									id="input-mobile" class="form-control">
								<!--<span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>-->
							</div>
						</div>

						<div class="form-group">
							<label class="control-label" for="input-email">email</label>
							<div class="input-group">
								<input type="text" name="<?php echo ($userModel::$email_d); ?>" value="" placeholder="email"
									id="input-email" class="form-control">
								<!--<span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>-->
							</div>
						</div>
						<div class="form-group">
							<input type="hidden" name="order_by" value="<?php echo ($userModel::$id_d); ?>"> <input
								type="hidden" name="sort" value="desc">
							<button type="submit" onclick="Order.ajaxForMyOrder('conditionForm', 1);"
								id="button-filter search-order"
								class="btn btn-primary pull-right">
								<i class="fa fa-search"></i> 筛选
							</button>
						</div>
						<button type="button" onclick="send_message(0);"
							class="btn btn-primary">
							<i class="fa"></i> 发送站内信
						</button>
						<button type="button" onclick="send_mail(0);"
							class="btn btn-primary">
							<i class="fa"></i> 发送邮箱
						</button>
						<button type="button" onclick="Tool.alertEdit('<?php echo U('addUser');?>', '添加用户', 830, 600);" class="btn btn-primary  pull-right">
							<i class="fa fa-plus"></i>添加用户</i>
						</button>
						<button type="button"  class="btn btn-primary current-export cover_reload">当前页导出execl</button>
					</form>
				</div>
				<div id="ajaxGetReturn"></div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</section>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script src="http://www.shopsn.xyz/Public/Admin/js/order.js"></script>
<script src="http://www.shopsn.xyz/Public/Admin/js/user/excel.js"></script>
<script>
	var EXCEL_URL =  '<?php echo U("User/expGoods");?>';
</script>




</body>
</html>