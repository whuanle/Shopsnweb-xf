<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html  >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title><?php echo ($title); ?></title>

<link rel="stylesheet" href="http://www.shopsn.cn/Public/Admin/css/css.css?a=1546545633">
<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/dist/css/AdminLTE.css">
<script src="http://www.shopsn.cn/Public/Common/js/jquery-1.11.3.min.js"></script>
<script src="http://www.shopsn.cn/Public/Common/js/layer/layer.js"></script>
</head>
<body>



<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />   <link rel="stylesheet" href="http://www.shopsn.cn/Public/Admin/css/prompt.css"/>
     <link rel="stylesheet"
    href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css"/>
    <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>查看所有的日志信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<link href="http://www.shopsn.cn/Public/Common/daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css" />
<script src="http://www.shopsn.cn/Public/Common/daterangepicker/moment.min.js"
	type="text/javascript"></script> <script
	src="http://www.shopsn.cn/Public/Common/daterangepicker/daterangepicker.js"
	type="text/javascript"></script>

<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css" />
<div class="wrapper">
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> 日志
					</h3>
				</div>
				<div class="panel-body">
					<div class="navbar navbar-default">
						<form action="" id="searchForm" url="<?php echo U('ajaxGetListLog');?>"
							class="navbar-form form-inline" method="post"
							onsubmit="return false">
							<div class="form-group">
								<select name="<?php echo ($logModel::$type_d); ?>" id="type_id"
									class="form-control">
									<option value="">日志类型</option>
									<?php if(is_array($logType)): foreach($logType as $k=>$v): ?><option value="<?php echo ($k); ?>"><?php echo ($v); ?></option><?php endforeach; endif; ?>
								</select>
							</div>

							<div class="form-group">
								<select name="<?php echo ($logModel::$tableName_d); ?>" id="type_id"
									class="form-control">
									<option value="">操作表</option>
									<?php if(is_array($tableNote)): foreach($tableNote as $k=>$v): ?><option value="<?php echo ($k); ?>"><?php echo ($v); ?></option><?php endforeach; endif; ?>
								</select>
							</div>

							<div class="form-group">
								<label class="control-label" for="input-order-id">管理员账号</label>
								<div class="input-group">
									<input type="text" name="<?php echo ($logModel::$adminId_d); ?>"
										placeholder="管理员账号" id="input-order-id" class="input-sm">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="input-date-added">日志生成时间</label>
								<div class="input-group">
									<input type="text" name="<?php echo ($logModel::$createTime_d); ?>"
										value="<?php echo ($timegap); ?>" placeholder="下单日期" id="create_time"
										class="input-sm">
								</div>
							</div>
							<div class="form-group">
								<button type="submit"
									onclick="Tool.ajaxGetList('searchForm', 1, 'ajaxReturn')"
									id="button-filter" class="btn btn-primary pull-right">
									<i class="fa fa-search"></i> 筛选
								</button>
							</div>
						</form>
					</div>
					<div id="ajaxReturn"></div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper --> <script src="http://www.shopsn.cn/Public/Common/js/jquery-form.js"></script>
<script src="http://www.shopsn.cn/Public/Common/js/alert.js?a=<?php echo time();?>"></script> <script
	src="http://www.shopsn.cn/Public/Admin/js/log/log.js?a=<?php echo time();?>"></script> <script
	type="text/javascript">
		Tool.ajaxGetList("searchForm", 1, 'ajaxReturn');
	</script> 



</body>
</html>