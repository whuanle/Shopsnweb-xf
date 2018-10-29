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
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/prompt.css"/>
<link rel="stylesheet"
    href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
 <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>查看发货仓仓库信息</li>
                    
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row"> 
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<script src="http://www.shopsn.xyz/Public/Common/bootstrap/js/bootstrap.min.js"></script> <br />



<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i>仓库列表[页面数据缓存3秒钟]
				</h3>
			</div>
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form action="<?php echo U('sendGoodsList');?>" id="search"
						class="navbar-form form-inline" method="get">
						<div class="form-group">
							<label class="control-label" for="input-order-id">关键词</label>
							<div class="input-group">
								<input type="text" name="<?php echo ($sendModel::$stockName_d); ?>" value="<?php echo ($_GET[$sendModel::$stockName_d]); ?>" placeholder="搜索词"
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
							onclick="location.href='<?php echo U('addSendAddress');?>'"
							class="btn btn-primary pull-right">
							<i class="fa fa-plus"></i>添加发货地址
						</button>
					</form>
				</div>
				<div id="ajax_return">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting text-left">ID</th>
									<th class="sorting text-left">仓库名称</th>
									<th class="sorting text-left">发货仓地址</th>
									<th class="sorting text-left">详细地址</th>
									<th class="sorting text-left">是否启用</th>
									<th class="sorting text-left">是否默认</th>
									<th class="sorting text-left">添加时间</th>
									<th class="sorting text-left">更新时间</th>
									<th class="sorting text-left">操作</th>
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$row): ?><tr>
									<td class="text-left"><?php echo ($row[$sendModel::$id_d]); ?></td>
									<td class="text-left"><?php echo ($row[$sendModel::$stockName_d]); ?></td>
									<td class="text-left"><?php echo ($row[$regionModel::$name_d]); ?></td>
									<td class="text-left"><?php echo ($row[$sendModel::$addressDetail_d]); ?></td>
									<td class="text-left shelves-one"><?php if($row[$sendModel::$status_d] == 1): ?><img
											src="http://www.shopsn.xyz/Public/Common/img/yes.png" onclick="Tool.isShow(this, '<?php echo U('isOpen');?>')" class="cursor"
											data-flag="true" /> <?php else: ?> <img
											src="http://www.shopsn.xyz/Public/Common/img/cancel.png" onclick="Tool.isShow(this, '<?php echo U('isOpen');?>')" class="cursor"
											data-flag="false" /><?php endif; ?> <input type="hidden"
										value="<?php echo ($row[$sendModel::$status_d]); ?>" falg="1"
										name="<?php echo ($sendModel::$status_d); ?>" /> <input type="hidden"
										value="<?php echo ($row[$sendModel::$id_d]); ?>" name="<?php echo ($sendModel::$id_d); ?>" />
									</td>
									<td class="text-left shelves-one"><?php if($row[$sendModel::$default_d] == 1): ?><img
											src="http://www.shopsn.xyz/Public/Common/img/yes.png" onclick="Tool.isShow(this, '<?php echo U('isDefault');?>')" class="cursor"
											data-flag="true" /> <?php else: ?> <img
											src="http://www.shopsn.xyz/Public/Common/img/cancel.png" onclick="Tool.isShow(this, '<?php echo U('isDefault');?>')" class="cursor"
											data-flag="false" /><?php endif; ?>
											<input type="hidden" value="<?php echo ($row[$sendModel::$default_d]); ?>" falg="1" name="<?php echo ($sendModel::$default_d); ?>"/>
	                                        <input type="hidden" value="<?php echo ($row[$sendModel::$id_d]); ?>"	   name="<?php echo ($sendModel::$id_d); ?>"/>
									</td>
									<td class="text-left"><?php echo ($row[$sendModel::$createTime_d]); ?></td>
									<td class="text-left"><?php echo ($row[$sendModel::$updateTime_d]); ?></td>
									<td class="text-left"><a
										href="<?php echo U('editHtml', array('id' => $row[$sendModel::$id_d]));?>"
										class="btn btn-primary">编辑</a> <input type="button"
										class="btn btn-danger del_btn confirm_btn"
										onclick="Tool.deleteDataClose('<?php echo U('deleteBySendAddress');?>', <?php echo ($row[$sendModel::$id_d]); ?>)"
										data-toggle="modal" data-target="#myModal" value="删除" /></td>
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
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> <script
	src="http://www.shopsn.xyz/Public/Admin/js/express/express.js?a=time()"></script> 



</body>
</html>