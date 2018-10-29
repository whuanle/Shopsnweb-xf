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
<script src="http://www.shopsn.cn/Public/Common/bootstrap/js/bootstrap.min.js"></script> <br />



<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i>支付类型列表
				</h3>
			</div>
			<div class="panel-body">
				<!-- <div class="navbar navbar-default">
					<form action="<?php echo U('goods_list');?>" id="search"
						class="navbar-form form-inline" method="get">
						<button type="button"
							onclick="location.href='<?php echo U('addSiteHtml');?>'"
							class="btn btn-primary pull-right">
							<i class="fa fa-plus"></i>添加站点
						</button>
					</form>
				</div> -->
				<div id="ajax_return">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<?php if(is_array($comment)): foreach($comment as $key=>$value): ?><th class="sorting text-left"><?php echo ($value); ?></th><?php endforeach; endif; ?>
									<!-- <th class="sorting text-left">操作</th> -->
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($data)): if(is_array($data)): foreach($data as $key=>$row): ?><tr>
									<td class="text-left"><?php echo ($row[$model::$id_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$typeName_d]); ?></td>
									<td class="text-left"><?php echo (date("Y-m-d
										H:i:s", $row[$model::$createTime_d])); ?></td>
									<td class="text-left"><?php echo (date("Y-m-d
										H:i:s", $row[$model::$updateTime_d])); ?></td>
									<td class="text-left"><img
										src="<?php echo ($imageType[$row[$model::$status_d]]); ?>"
										data-status="<?php echo ($row[$model::$status_d]); ?>"
										data-id = "<?php echo ($row[$model::$id_d]); ?>"
										onclick="SwitchStatus.getInstance(this).switchImage()" /></td>
									<td class="text-left"><img
										data-id = "<?php echo ($row[$model::$id_d]); ?>"
											data-status="<?php echo ($row[$model::$isDefault_d]); ?>"
										class="all"
										onclick="SwitchStatus.setURL(EDIT_DEFAULT).getInstance(this).setDefault()"
										src="<?php echo ($imageType[$row[$model::$isDefault_d]]); ?>" /></td>


									<!-- <td class="text-left"><a
										href="<?php echo U('modifyGoods', array($model::$id_d => $row[$model::$id_d]));?>"
										class="btn btn-primary">配置</a></td> -->
								</tr><?php endforeach; endif; endif; ?>
							</tbody>
						</table>
						<div class="page"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="http://www.shopsn.cn/Public/Common/js/alert.js"></script> <script
	src="http://www.shopsn.cn/Public/Common/js/noticeAdmin.js?a=3454"></script> <script
	src="http://www.shopsn.cn/Public/Common/js/switchStatus.js?a=11546546546546546546546465454"></script> <script>
var IMG_TYPE = <?php echo ($jsonImageType); ?>;
var EDIT_DEFAULT = "<?php echo U('editDefault');?>";
var EDIT_STATUS_URL = "<?php echo U('editIsOpen');?>";
SwitchStatus.setURL(EDIT_STATUS_URL);
SwitchStatus.setImagType(IMG_TYPE);
</script> 



</body>
</html>