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
                    <li>查看商品的赠品信息</li>
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
									action="<?php echo U('gift');?>" method="post">
									<div class="form-group">
										<input type="text" name="like_data" class="form-control"
											   placeholder="通过名称或金额搜索">
									</div>
									<button type="submit" class="btn btn-default">提交</button>
									<div class="form-group pull-right">
										<a href="<?php echo U('addGift');?>"
											class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加商品赠品</a>
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
											<th class="sorting" tabindex="0">赠品促销类型</th>
											<th class="sorting" tabindex="0">商品名称/使用满金额</th>
											<th class="sorting" tabindex="0">适用范围</th>
											<th class="sorting" tabindex="0">开始时间</th>
											<th class="sorting" tabindex="0">结束时间</th>
											<th class="sorting" tabindex="0">操作</th>
										</tr>
									</thead>
									<tbody>
											<?php if(is_array($gift_list)): $i = 0; $__LIST__ = $gift_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr role="row" align="center">
													<td class=""><?php echo ($list["type_name"]); ?></td>
													<td><?php echo ($list["expression"]); ?></td>
													<td><?php echo ($list["sum"]); ?></td>
													<td><?php echo (date('y-m-d',$list["start_time"])); ?></td>
													<td><?php echo (date('y-m-d',$list["end_time"])); ?></td>
													<td><a href="javascript:;"
														   onclick="Tool.alertEdit('<?php echo U('Promotion/lookGifts');?>?id=<?php echo ($list["id"]); ?>&type=<?php echo ($list["type"]); ?>','促销商品', 800, 600)"
														   data-url="<?php echo U('Promotion/get_gifts',array('id'=>$list.id));?>"
														   data-toggle="tooltip" title=""
														   class="btn btn-info goods_list">查看赠品</a> <a
															class="btn btn-primary"
															href="<?php echo U('Promotion/editGift');?>?id=<?php echo ($list["id"]); ?>"><i
															class="fa fa-pencil"></i></a> <a class="btn btn-danger"
																							 onclick="Tool.ajax('<?php echo U('deleteGift');?>', {id:<?php echo ($list["id"]); ?>}, function(res){
															alert(res['message']);
															return Tool.notice(res);
														})"
																							 data-url=" " data-id="<?php echo ($vo["id"]); ?>"><i
															class="fa fa-trash-o"></i></a></td>
												</tr><?php endforeach; endif; else: echo "" ;endif; ?>
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