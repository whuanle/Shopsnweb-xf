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
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />

<div class="wrapper">
	<section class="content">
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="navbar navbar-default">
						<form action="<?php echo U('searchGoods');?>" id="search-form2"
							class="navbar-form form-inline" method="post">
							<div class="form-group">
								<select name="<?php echo ($goodsModel::$classId_d); ?>" id="cat_id" class="form-control">
									<option value="">所有分类</option>
									<?php if(!empty($classData)): if(is_array($classData)): foreach($classData as $k=>$v): ?><option value="<?php echo ($v[$classModel::$id_d]); ?>"<?php if($v[$classModel::$id_d] == $_POST[$goodsModel::$classId_d]): ?>selected<?php endif; ?> ><?php echo ($v[$classModel::$className_d]); ?>
											</option><?php endforeach; endif; endif; ?>
								</select>
							</div>
							<div class="form-group">
								<select name="<?php echo ($goodsModel::$brandId_d); ?>" id="" class="form-control">
									<option value="">所有品牌</option>
									<?php if(!empty($brandData)): if(is_array($brandData)): foreach($brandData as $k=>$v): ?><option value="<?php echo ($v[$brandModel::$id_d]); ?>"<?php if($v[$brandModel::$id_d] == $_POST[$goodsModel::$brandId_d]): ?>selected<?php endif; ?>><?php echo ($v[$brandModel::$brandName_d]); ?>
											</option><?php endforeach; endif; endif; ?>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label" for="input-order-id">关键词</label>
								<div class="input-group">
									<input type="text" name="<?php echo ($goodsModel::$title_d); ?>" value="<?php echo ($_POST[$goodsModel::$title_d]); ?>"
										placeholder="搜索词" id="input-order-id" class="form-control">
								</div>
							</div>
							<button type="submit" id="button-filter search-order"
								class="btn btn-primary">
								<i class="fa fa-search"></i>查找
							</button>
						</form>
					</div>
					<div id="ajax_return">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<td class="text-left"><input type="radio" name="goods_id"></td>
									<td class="text-left">商品名称</td>
									<td class="text-left">价格</td>
									<td class="text-left">库存</td>
									<td class="text-left">操作</td>
									</tr>
								</thead>
								<tbody id="goos_table">
									<?php if(!empty($goodsData['data'])): if(is_array($goodsData['data'])): foreach($goodsData['data'] as $key=>$list): ?><tr>
										<td class="text-left">
											<input type="radio"
												name="goods_id" value="<?php echo ($list[$goodsModel::$id_d]); ?>"
												data-id="<?php echo ($list[$goodsModel::$id_d]); ?>" 
												data-name="<?php echo ($list[$goodsModel::$title_d]); ?>"
											/>
										</td>
										<td class="text-left"><?php echo ($list[$goodsModel::$title_d]); ?></td>
										<td class="text-left"><?php echo ($list[$goodsModel::$priceMember_d]); ?></td>
										<td class="text-left"><?php echo ($list[$goodsModel::$stock_d]); ?></td>
										<td><a href="javascript:void(0)"
											onclick="javascript:$(this).parent().parent().remove();">删除</a></td>
									</tr><?php endforeach; endif; endif; ?>
								</tbody>
							</table>
						</div>
						<div class="page">
							<div class="text-left col-sm-10"><?php echo ($goodsData["page"]); ?></div>
							<div class="text-right col-sm-2">
								<a href="javascript:void(0)" style="margin: 20px 0;"
									onclick="objSelect.selectGoods();" class="btn btn-info">确定</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> 
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/group/selectGoods.js?a=<?php echo time();?>"></script> 




</body>
</html>