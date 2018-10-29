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



<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css" />
<div class="wrapper">
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<i class="fa fa-list"></i>&nbsp;客户反馈表
						</h3>
					</div>
					<div class="panel-body">
						<nav class="navbar navbar-default">
							<div class="collapse navbar-collapse">
								<form action="<?php echo U('Comment/ask_list');?>" id="searchForm">
									<!--class="navbar-form form-inline" role="search" method="post">-->
									<!--<div class="form-group">-->
										<!--<input type="text" class="form-control" name="<?php echo ($model::$content_d); ?>"-->
											<!--placeholder="搜索反馈内容">-->
									<!--</div>-->
									 <!--<div class="form-group">-->
										<!--<input type="text" class="form-control" name="<?php echo ($model::$userId_d); ?>"-->
											<!--placeholder="搜索用户">-->
									<!--</div>-->
									<!--<button type="button"-->
										<!--onclick="Consulation.ajaxGetHtml('<?php echo U('ajaxGetFeedback');?>', 'searchForm', <?php echo ($_GET['p']); ?>)"-->
										<!--class="btn btn-info">-->
										<!--<i class="fa fa-search"></i> 筛选-->
									<!--</button>-->
								</form>
							</div>
						</nav>
						<div id="ajax_return">
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script src="http://www.shopsn.cn/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
<script src="http://www.shopsn.cn/Public/Common/js/jquery-form.js"></script> 
<script src="http://www.shopsn.cn/Public/Admin/js/comment/comment.js?a=<?php echo time();?>"></script> 
<script type="text/javascript">
Consulation.ajaxGetHtml("<?php echo U('ajaxGetFeedback');?>", 'searchForm', 1);
</script>




</body>
</html>