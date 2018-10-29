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
                    <li>查看尾货清仓信息</li>
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
								<form class="navbar-form form-inline" action="<?php echo U('index');?>"
									method="post">
									<div class="form-group">
										<input type="text" name="<?php echo ($goodsModel::$title_d); ?>"
											class="form-control" placeholder="搜索"
											value="<?php echo ($_POST[$goodsModel::$title_d]); ?>">
									</div>
									<button type="submit" class="btn btn-default">提交</button>
									<div class="form-group pull-right">
										<a href="<?php echo U('addHtml');?>" class="btn btn-primary pull-right"><i
											class="fa fa-plus"></i>添加尾货清仓</a>
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
										<tr role="row" align="center">
											<th class="sorting" tabindex="0">商品名称</th>
											<th class="sorting" tabindex="0">折扣类型</th>
											<th class="sorting" tabindex="0">开始时间</th>
											<th class="sorting" tabindex="0">结束时间</th>
											<th class="sorting" tabindex="0">优惠</th>
											<th class="sorting" tabindex="0">是否限制时购买</th>
											<th class="sorting" tabindex="0">操作</th>
										</tr>
									</thead>
									<tbody>
										<?php if(!empty($promotionData['data'])): if(is_array($promotionData['data'])): foreach($promotionData['data'] as $k=>$vo): ?><tr role="row" align="center">
											<td class=""><?php echo ($vo[$goodsModel::$title_d]); ?></td>
											<td><?php if($vo[$poopModel::$typeId_d] == -1): ?>买就送代金卷<?php else: echo ($vo[$proType::$promationName_d]); endif; ?></td>
											<td><?php echo ($startTime); ?></td>
											<td><?php echo ($endTime); ?></td>
											<td><?php if(!empty($vo[$couponModel::$name_d])): echo ($vo[$couponModel::$name_d]); else: echo ($vo[$poopModel::$expression_d]); endif; ?></td>
											<td><?php if(!empty($vo[$poopModel::$status_d])): ?><img src="http://www.shopsn.xyz/Public/Common/img/yes.png"
													key="<?php echo ($poopModel::$status_d); ?>"
													data-status="<?php echo ($vo[$poopModel::$status_d]); ?>"
													data-id="<?php echo ($vo[$poopModel::$id_d]); ?>" /> <?php else: ?> <img
													src="http://www.shopsn.xyz/Public/Common/img/cancel.png"
													key="<?php echo ($poopModel::$status_d); ?>"
													data-status="<?php echo ($vo[$poopModel::$status_d]); ?>"
													data-id="<?php echo ($vo[$poopModel::$id_d]); ?>" /><?php endif; ?></td>
											<td><a class="btn btn-primary"
												href="<?php echo U('editHtml',array('id'=>$vo[$poopModel::$id_d], $poopModel::$goodsId_d => $vo[$poopModel::$goodsId_d]));?>"><i
													class="fa fa-pencil"></i></a> 
												<a 
													class="btn btn-danger"
													onclick="Poop.deleteDataByRomente('<?php echo U('deletePoopClear');?>', this)"
												><i class="fa fa-trash-o"></i> 
													<input type="hidden" name="<?php echo ($poopModel::$id_d); ?>" value="<?php echo ($vo[$poopModel::$id_d]); ?>"/>
													<input type="hidden" name="<?php echo ($poopModel::$goodsId_d); ?>" value="<?php echo ($vo[$poopModel::$goodsId_d]); ?>"/>
												</a></td>
										</tr><?php endforeach; endif; endif; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="page">
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
<script type="text/javascript"
	src="http://www.shopsn.xyz/Public/Admin/js/promation/poop.js?a=<?php echo time();?>"></script>




</body>
</html>