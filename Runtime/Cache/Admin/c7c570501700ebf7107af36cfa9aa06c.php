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
					<i class="fa fa-list"></i>运费设置列表
				</h3>
			</div>
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form action="<?php echo U('index');?>" id="search"
						class="navbar-form form-inline" method="get">
						<div class="form-group">
							<label class="control-label" for="input-order-id">关键词</label>
							<div class="input-group">
								<input type="text" name="<?php echo ($model::$freightId_d); ?>" value="<?php echo ($_GET[$model::$freightId_d]); ?>" placeholder="搜索词"
									id="input-order-id" class="form-control">
							</div>
						</div>
						<!--排序规则-->
						<button type="submit" id="button-filter search-order"
							onclick="javascript:$('#search').submit();"
							class="btn btn-primary">
							<i class="fa fa-search"></i> 筛选
						</button>
						<button type="button"
							onclick="location.href='<?php echo U('carryModeSet');?>'"
							class="btn btn-primary pull-right">
							<i class="fa fa-plus"></i>添加运费设置
						</button>
					</form>
				</div>
				<div id="ajax_return">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<?php if(is_array($notes)): foreach($notes as $key=>$value): ?><th class="sorting text-left"><?php echo ($value); ?></th><?php endforeach; endif; ?>
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$row): ?><tr>
									<td class="text-left"><?php echo ($row[$model::$id_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$freightId_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$firstThing_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$firstWeight_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$fristVolum_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$fristMoney_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$continuedHeavy_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$continuedVolum_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$continuedMoney_d]); ?></td>
									<td class="text-left"><?php echo ($row[$model::$carryWay_d]); ?></td>
									<td class="text-left">
									<a href="<?php echo U('edit', array('id' => $row[$model::$id_d]));?>"
										class="btn btn-primary">编辑</a> 
										<input type="button" class="btn btn-danger del_btn confirm_btn" data-id="<?php echo ($row["id"]); ?>" data-toggle="modal" data-target="#myModal"  onclick="Tool.deleteDataClose('<?php echo U('remove');?>',<?php echo ($row[$model::$id_d]); ?>)" value="删除"/>
									</td>
								</tr><?php endforeach; endif; endif; ?>
							</tbody>
						</table>
						<div class="page"><?php echo ($data['page']); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="http://www.shopsn.cn/Public/Common/js/alert.js"></script> 
<script src="http://www.shopsn.cn/Public/Admin/js/express/express.js"></script> 





</body>
</html>