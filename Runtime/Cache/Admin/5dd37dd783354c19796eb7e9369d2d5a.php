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
                    <li>查看所有的用户充值记录信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<link href="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<script src="http://www.shopsn.xyz/Public/Common/daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />

<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i> 会员充值记录
				</h3>
			</div>
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form action="" id="search-form2" class="navbar-form form-inline"
						method="post">
						<div class="form-group">
							<label class="control-label" for="input-mobile">会员昵称</label>
							<div class="input-group">
								<input type="text" name="<?php echo ($userModel::$userName_d); ?>" value="<?php echo ($_POST[$userModel::$userName_d]); ?>" placeholder="模糊查询"
									id="input-mobile" class="form-control">
								<!--<span class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></span>-->
							</div>
						</div>
						<div class="form-group">
							<div class="input-group margin">
								<div class="input-group-addon">
									选择时间 <i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right w300"
									name="timegap" value="<?php echo ($_POST['timegap']); ?>" id="start_time">
							</div>
						</div>
						<div class="form-group">
							<input type="hidden" name="order_by" value="user_id"> <input
								type="hidden" name="sort" value="desc">
							<button type="submit" id="button-filter search-order"
								class="btn btn-primary pull-right">
								<i class="fa fa-search"></i> 筛选
							</button>
						</div>
						<a href="<?php echo U('userList');?>" class="btn btn-info pull-right">会员列表</a>
					</form>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-left">会员ID</td>
								<td class="text-left">会员昵称</td>
								<td class="text-left">充值单号</td>
								<td class="text-left">充值资金</td>
								<td class="text-left">提交时间</td>
								<td class="text-left">支付方式</td>
								<td class="text-left">支付状态</td>
							</tr>
						</thead>
						<tbody>
							<?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$list): ?><tr>
										<td class="text-left"><?php echo ($list[$recharge::$userId_d]); ?></td>
										<td class="text-left"><?php echo ($list[$userModel::$userName_d]); ?></td>
										<td class="text-left"><?php echo ($list[$recharge::$orderSn_d]); ?></td>
										<td class="text-left"><?php echo ($list[$recharge::$account_d]); ?></td>
										<td class="text-left"><?php echo (date("Y-m-d H:i",$list[$recharge::$ctime_d])); ?></td>
										<td class="text-left"><?php echo ($list[$recharge::$payName_d]); ?></td>
										<td class="text-left"><?php if($list[$recharge::$payStatus_d] == 0): ?>待支付<?php else: ?>已支付<?php endif; ?></td>
									</tr><?php endforeach; endif; endif; ?>
						</tbody>
					</table>
					<div class="pull-right"><?php echo ($data["page"]); ?></div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/user/timeplunis.js"></script>




</body>
</html>