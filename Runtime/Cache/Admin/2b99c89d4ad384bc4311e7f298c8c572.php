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
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<tr height="30px">
						 	   <th class="sorting text-left">ID</th>
                               <th class="sorting text-left">商品名称</th>
                              <!--  <th class="sorting text-left">货号</th> -->
                               <th class="sorting text-left">商品分类</th>
                               <th valign="middle">市场价</th>
                               <th class="sorting text-left">会员价</th>
                               <th class="sorting text-left">库存</th>
                               <th class="sorting text-left">是否上架</th>
                               <th class="sorting text-left">是否推荐</th>
                               <th class="sorting text-left">操作</th>
							</tr>
							<tbody id="goos_table">
								<?php if(!empty($proGoods)): if(is_array($proGoods)): foreach($proGoods as $key=>$list): ?><tr>
											<td class="text-left"><?php echo ($list[$goodsModel::$id_d]); ?></td>
											<td class="text-left" width="157px"><?php echo ($list[$goodsModel::$title_d]); ?></td>
											<!-- <td class="text-left"><?php echo ($list[$goodsModel::$code_d]); ?></td> -->
											<td class="text-left"><?php echo ($list[$goodsClassModel::$className_d]); ?></td>
											<td class="text-left"><?php echo ($list[$goodsModel::$priceMarket_d]); ?></td>
											<td class="text-left"><?php echo ($list[$goodsModel::$priceMember_d]); ?></td>
											<td class="text-left"><?php echo ($list[$goodsModel::$stock_d]); ?></td>
											<td class="text-left"><?php if(($list[$goodsModel::$shelves_d]) == 1): ?><img src="http://www.shopsn.xyz/Public/Common/img/yes.png" key="<?php echo ($goodsModel::$shelves_d); ?>" onclick="GoodsOption.isShelves('<?php echo U('isShelve');?>', this)" data-status="<?php echo ($list[$goodsModel::$shelves_d]); ?>" data-id="<?php echo ($list[$goodsModel::$id_d]); ?>"  data-flag="true"/>
                                                <?php else: ?>
                                                <img src="http://www.shopsn.xyz/Public/Common/img/cancel.png" key="<?php echo ($goodsModel::$shelves_d); ?>" onclick="GoodsOption.isShelves('<?php echo U('isShelve');?>', this)" data-status="<?php echo ($list[$goodsModel::$shelves_d]); ?>"   data-id="<?php echo ($list[$goodsModel::$id_d]); ?>"  data-flag="false"/><?php endif; ?></td>
                                            <td class="text-left">
	                                            <?php if(($list[$goodsModel::$recommend_d]) == 1): ?><img src="http://www.shopsn.xyz/Public/Common/img/yes.png"  key="<?php echo ($goodsModel::$recommend_d); ?>" onclick="GoodsOption.isShelves('<?php echo U('isShelve');?>', this)"  data-status="<?php echo ($list[$goodsModel::$recommend_d]); ?>" data-id="<?php echo ($list[$goodsModel::$id_d]); ?>" data-flag="true"/>
	                                                <?php else: ?>
	                                                <img src="http://www.shopsn.xyz/Public/Common/img/cancel.png" key="<?php echo ($goodsModel::$recommend_d); ?>" onclick="GoodsOption.isShelves('<?php echo U('isShelve');?>', this)"  data-status="<?php echo ($list[$goodsModel::$recommend_d]); ?>" data-id="<?php echo ($list[$goodsModel::$id_d]); ?>"  data-flag="false"/><?php endif; ?>
                                        	</td>
                                        	<td>
                                        		<a target="_blank" class="btn btn-primary" href="/index.php/Home/Goods/goodsDetails/<?php echo ($goodsModel::$id_d); ?>/<?php echo ($list[$goodsModel::$id_d]); ?>">预览</a>
                                        		<a target="_blank" class="btn btn-danger del_btn confirm_btn" onclick="Tool.deleteDataClose('<?php echo U('deleteOneGood');?>', <?php echo ($list[$goodsModel::$id_d]); ?>)">删除</a>
                                        	</td>
										</tr><?php endforeach; endif; endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> 
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/goods.js?a=<?php echo time();?>"></script> 
<script type="text/javascript">
GoodsOption.imgUrl = 'http://www.shopsn.xyz/Public/Common';
</script>



</body>
</html>