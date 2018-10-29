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
	<section class="content ">
		<!-- Main content -->
		<div class="container-fluid">
			<div class="pull-right">
				<a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
					class="btn btn-default" data-original-title="返回"><i
					class="fa fa-reply"></i></a>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> 添加尾货清仓
					</h3>
				</div>
				<div class="panel-body ">
					<!--表单数据-->
					<form method="post" id="promotion">
						<!--通用信息-->
						<div class="tab-content col-md-10">
							<div class="tab-pane active" id="tab_tongyong">
								<table class="table table-bordered">
									<tbody>
										<tr>
											<td class="col-sm-2">促销活动类型：</td>
											<td class="col-xs-8"><select id="prom_type"
												name="<?php echo ($poopModel::$typeId_d); ?>"
												onchange="Poop.prom(this, 'expression', '<?php echo U('getCouponModel');?>')"
												class="form-control w150">
													<option value="0">---请选择---</option>
													<option value="-1">买就送代金卷</option>
													<?php if(!empty($classData)): if(is_array($classData)): foreach($classData as $key=>$value): ?><option value="<?php echo ($key); ?>"><?php echo ($value[$promotionTypeModel::$promationName_d]); ?></option><?php endforeach; endif; endif; ?>
											</select></td>
										</tr>
										<tr id="expression">

										</tr>

										<tr>
											<td>限时活动：</td>
											<td><input type="radio" name="<?php echo ($poopModel::$status_d); ?>"
												checked="checked" value="1" /> 是 <input type="radio"
												name="<?php echo ($poopModel::$status_d); ?>" value="0" /> 否</td>
										</tr>
										
										<tr>
											<td>排序：</td>
											<td><input type="text" name="<?php echo ($poopModel::$sort_d); ?>"
												 value="50" /> 
										</tr>
										
										<tr>
											<tr>
											<td>设置尾货清仓商品：</td>
											<td>
												<div class="col-xs-9">
													<input type="text" disabled="disabled" id="goods_name"  class="form-control" />
												</div>
												<div class="col-xs-3">
													<input type="hidden" id="goods_id" name="<?php echo ($poopModel::$goodsId_d); ?>"/> 
													<input class="btn btn-primary" type="button"
														onclick="Poop.selectGoods('<?php echo U('searchGoods');?>')" value="选择商品">
												</div>
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td><input class="btn btn-default" type="reset"
												value="重置"></td>
											<td class="text-right"><input class="btn btn-primary"
												type="button"
												onclick="Tool.addPromation('promotion', '<?php echo U('addProData');?>')"
												value="保存"></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</form>
					<!--表单数据-->
				</div>
			</div>
		</div>
	</section>
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/group/callBack.js"></script>
<script type="text/javascript"
	src="http://www.shopsn.xyz/Public/Admin/js/promation/poop.js?a=<?php echo time();?>"></script> 



</body>
</html>