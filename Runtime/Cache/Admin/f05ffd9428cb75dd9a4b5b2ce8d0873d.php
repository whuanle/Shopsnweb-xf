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

<div class="nav">
	<div class="nav_title">
		<h4>
			<img class="nav_img" src="http://www.shopsn.xyz/Public/Admin/img/tab.gif" /><span class="nav_a">编辑仓库</span>
		</h4>
	</div>
</div>
<br />
<br />



<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<section class="content">
	<div class="container-fluid">
		<div class="pull-right">
			<a href="" data-toggle="tooltip" title="" class="btn btn-default"
				data-original-title="返回"><i class="fa fa-reply"></i></a>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i> 添加发货地址
				</h3>
			</div>
			<div class="panel-body">

				<form method="post" id="formId">

					<div class="tab-content">
						<div class="tab-pane active" id="tab_tongyong">
							<table class="table table-bordered">
								<tbody>
									<tr>
										<td>仓库名称:</td>
										<td><input type="text" isNumber="0" name="<?php echo ($sendModel::$stockName_d); ?>" value="<?php echo ($stockData[$sendModel::$stockName_d]); ?>"
											class="form-control w380 title" id="title">
											<span id="err_title" class="rxd">仓库名称没有填写</span> <span
											id="err_title1" class="rxd">仓库名称已存在，请重新取名</span></td>
									</tr>
									<tr>
										<td>发货仓所在地区：</td>
										<td>
											<div class="col-xs-3">
												<select name=<?php echo ($sendModel::$addressId_d); ?>[] " isNumber="1"
													area-key="<?php echo ($sendModel::$addressId_d); ?>"
													id="cat_id"
													onchange="Region.changeSelectTab(this, 'cat_id_2');"
													class="form-control req w236">
													<option value="0">请选择地区</option>
													<?php if(is_array($areaList)): foreach($areaList as $key=>$value): ?><option <?php if($areaId == $key): ?>selected="selected"<?php endif; ?>  value="<?php echo ($key); ?>"><?php echo ($value[$regionModel::$name_d]); ?></option><?php endforeach; endif; ?>
												</select>
											</div>
											<div class="col-xs-3">
												<select name="<?php echo ($sendModel::$addressId_d); ?>[]" area-key="<?php echo ($sendModel::$addressId_d); ?>" isNumber="1" area-this-id="<?php echo ($cityId); ?>" area-id="<?php echo ($areaId); ?>" next="cat_id_3"
													id="cat_id_2"
													onchange="Region.changeSelectTab(this, 'cat_id_3');"
													class="form-control req w236">
													<option value="0">请选择</option>
												</select>
											</div>
											<div class="col-xs-3">
												<select name=<?php echo ($sendModel::$addressId_d); ?>[] "  area-key="<?php echo ($sendModel::$addressId_d); ?>" isNumber="1" area-this-id="<?php echo ($stockData[$sendModel::$addressId_d]); ?>" area-id="<?php echo ($cityId); ?>"
													id="cat_id_3" class="form-control req w236">
													<option value="0">请选择</option>
												</select>
											</div> <span id="err_cat_id" class="rxd">&nbsp;&nbsp;&nbsp;&nbsp;地区分类没有选择</span>

										</td>
									</tr>
									<tr>
										<td>详细地址</td>
										<td><textarea rows="3" cols="100" class="req"
												isNumber="0" name="<?php echo ($sendModel::$addressDetail_d); ?>"><?php echo ($stockData[$sendModel::$addressDetail_d]); ?></textarea>
										</td>
									</tr>
									<tr>
										<td>是否启用</td>
										<td><label class="radio-inline"> <input
												type="radio" name="<?php echo ($sendModel::$status_d); ?>" class="status"
												id="inlineRadio3" <?php if($stockData[$sendModel::$status_d] == 1): ?>checked="checked"<?php endif; ?> value="1"> 是
										</label> <label class="radio-inline"> <input type="radio"
												name="<?php echo ($sendModel::$status_d); ?>" class="status"
												<?php if($stockData[$sendModel::$status_d] == 0): ?>checked="checked"<?php endif; ?>
												id="inlineRadio4" value="0"> 否
										</label></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="pull-right">
					
						<input type="submit"
							onclick="Region.addSendAddress('formId', '<?php echo U('saveEdit');?>');"
							class="btn btn-primary" data-toggle="tooltip"
							data-original-title="保存" value='保存' />
							<input type="hidden"  isNumber="0" name="<?php echo ($sendModel::$id_d); ?>" value="<?php echo ($stockData[$sendModel::$id_d]); ?>"/>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> <script
	type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/region/region.js?a=<?php echo time();?>"></script>
<script type="text/javascript">
Region.setareaListUrl("<?php echo U('ajaxGetRegionList');?>");
Region.getAreaListById(document.getElementById('cat_id_2'));
setTimeout(function () {
	Region.getAreaListById(document.getElementById('cat_id_3'));
},800);

</script> 



</body>
</html>