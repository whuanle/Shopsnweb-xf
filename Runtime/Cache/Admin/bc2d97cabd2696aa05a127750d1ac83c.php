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
                    <li>查看添加的活动信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<div class="wrapper">
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<nav class="navbar navbar-default">
							<div class="collapse navbar-collapse">
								<form class="navbar-form form-inline"
									action="<?php echo U('index');?>" method="post">
									<div class="form-group">
										<input type="text" name="<?php echo ($proGoodsModel::$name_d); ?>" class="form-control"
											placeholder="搜索" value="<?php echo ($_POST[$proGoodsModel::$name_d]); ?>">
									</div>
									<button type="submit" class="btn btn-default">提交</button>
									<div class="form-group pull-right">
										<a href="<?php echo U('addHtml');?>"
											class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加活动</a>
									</div>
								</form>
							</div>
						</nav>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<table id="list-table"
									class="table table-bordered table-striped dataTable">
									<thead>
										<tr role="row">
											<th class="sorting" tabindex="0">活动名称</th>
											<th class="sorting" tabindex="0">活动类型</th>
											<th class="sorting" tabindex="0">适用范围</th>
											<th class="sorting" tabindex="0">开始时间</th>
											<th class="sorting" tabindex="0">结束时间</th>
											<th class="sorting" tabindex="0">操作</th>
										</tr>
									</thead>
									<tbody>
										<?php if(!empty($promotionData['data'])): if(is_array($promotionData['data'])): foreach($promotionData['data'] as $k=>$vo): ?><tr role="row" align="center">
													<td class=""><?php echo ($vo[$proGoodsModel::$name_d]); ?></td>
													<td><?php if($vo[$proGoodsModel::$type_d] == -1): ?>买就送代金卷<?php else: echo ($vo[$proType::$promationName_d]); endif; ?></td>
													<td><?php echo ($vo[$proGoodsModel::$group_d]); ?></td>
													<td><?php echo (date('Y-m-d',$vo[$proGoodsModel::$startTime_d])); ?></td>
													<td><?php echo (date('Y-m-d',$vo[$proGoodsModel::$endTime_d])); ?></td>
													<td><a href="javascript:;"
														onclick="Tool.alertEdit('<?php echo U('lookGoods', array('id' => $vo[$proGoodsModel::$id_d]));?>','促销商品', 800, 600)"
														data-url="<?php echo U('Promotion/get_goods',array('id'=>$vo['id']));?>"
														data-toggle="tooltip" title=""
														class="btn btn-info goods_list">查看商品</a> <a
														class="btn btn-primary"
														href="<?php echo U('editHtml',array('id'=>$vo[$proGoodsModel::$id_d]));?>"><i
															class="fa fa-pencil"></i></a> <a class="btn btn-danger"
														onclick="Tool.ajax('<?php echo U('deletePro');?>', {id:<?php echo ($vo[$proGoodsModel::$id_d]); ?>}, function(res){
															return Tool.notice(res);
														})"
														data-url=" " data-id="<?php echo ($vo["id"]); ?>"><i
															class="fa fa-trash-o"></i></a></td>
												</tr><?php endforeach; endif; endif; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 text-left"></div>
							<div class="col-sm-6 text-right"><?php echo ($promotionData["page"]); ?></div>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> 




</body>
</html>