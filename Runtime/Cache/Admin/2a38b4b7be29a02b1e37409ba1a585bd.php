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
                    <li>品牌名称搜索,添加,编辑品牌</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">  
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i> 品牌列表
				</h3>
			</div>
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form id="search-form2" class="navbar-form form-inline"
						method="post" action="<?php echo U('index');?>">
						<div class="form-group">
							<label for="input-order-id" class="control-label">名称:</label>
							<div class="input-group">
								<input type="text" class="form-control" id="input-order-id"
									placeholder="搜索词" value="<?php echo ($_POST[$model::$brandName_d]); ?>" name="<?php echo ($model::$brandName_d); ?>">
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary" id="button-filter search-order"
								type="submit">
								<i class="fa fa-search"></i> 筛选
							</button>
						</div>
						<button type="button" class="btn btn-primary pull-right"
							onclick="Tool.alertEdit('<?php echo U('addBrand');?>','添加品牌', 900, 600)">
							<i class="fa fa-plus"></i> 添加品牌
						</button>
					</form>
				</div>

				<div id="ajax_return">

					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting text-left">ID</th>
									<th class="sorting text-left">品牌名称</th>
									<th class="sorting text-left">Logo</th>
									<th class="sorting text-left">商品分类</th>
									<th valign="middle">是否推荐</th>
									<th class="sorting text-left">更新日期</th>
									<th class="sorting text-left">操作</th>
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($brand['data'])): if(is_array($brand['data'])): foreach($brand['data'] as $key=>$list): ?><tr>
									<td class="text-right"><?php echo ($list[$model::$id_d]); ?></td>
									<td class="text-left"><?php echo ($list[$model::$brandName_d]); ?></td>
									<td class="text-left"><a
										href="<?php echo ($list[$model::$brandLogo_d]); ?>?a=<?php echo time();?>"
										target="_blank"><img
											onmouseover="$(this).attr('width','80').attr('height','45');"
											onmouseout="$(this).attr('width','40').attr('height','30');"
											width="40" height="30" src="<?php echo ($list[$model::$brandLogo_d]); ?>" /></a></td>
									<td class="text-left"><?php echo ($list[$classModel::$className_d]); ?></td>

                                    <td>
                                        <img title="<?php echo ($title['recommend']); ?>" data-status="<?php echo ($list[$model::$recommend_d]); ?>" width="20" height="20" src="<?php echo ($image_type[$list[$model::$recommend_d]]); ?>"
                                             onclick="Brand.recommend(<?php echo ($list[$model::$id_d]); ?>,this,'<?php echo U('isRecommend');?>')"/>
                                    </td>

									<td class="text-left"><?php echo (date('Y-m-d
										H:i:s', $list[$model::$updateTime_d])); ?></td>
									<td class="text-left"><a
										onclick="Tool.alertEdit('<?php echo U('editBrandHtml',array($model::$id_d=>$list[$model::$id_d]));?>','编辑品牌', 900, 600)"
										href="javascript:;" data-toggle="tooltip" title=""
										class="btn btn-primary" data-original-title="编辑"><i
											class="fa fa-pencil"></i></a> <a href="javascript:void(0);"
										onclick="Brand.delBrand(<?php echo ($list[$model::$id_d]); ?>, '<?php echo U('delBrand');?>')"
										id="button-delete6" data-toggle="tooltip" title=""
										class="btn btn-danger" data-original-title="删除"><i
											class="fa fa-trash-o"></i></a></td>
								</tr><?php endforeach; endif; endif; ?>
							</tbody>
						</table>
					</div>

					<div class="page">
						<div class="col-sm-6 text-left"></div>
						<div class="col-sm-6 text-right"><?php echo ($brand["page"]); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/brand/brand.js"></script>
<script>
	var imgUrl = <?php echo ($json_image_type); ?>;
</script>




</body>
</html>