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
                    <li>查看所有的配置信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<link rel="stylesheet"
	href="/Public/Admin/css/system/bootstrap.min.css" />
<link rel="stylesheet" href="/Public/Admin/css/system/system.css" />
<link href="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css" />
<script src="http://www.shopsn.xyz/Public/Common/daterangepicker/moment.min.js"
	type="text/javascript"></script> <script
	src="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker.js"
	type="text/javascript"></script>
<div class="aw-content-wrap">

	<?php if(!empty($data)): if(is_array($data)): foreach($data as $key=>$value): ?><form class="form">
		<div class="mod">
			<div class="mod-head">
				<h3>
					<span class="pull-left"><?php echo ($value["config_class_name"]); ?>：<input
					<?php if(!empty($value['parent_key'])): ?>readonly="readonly"<?php endif; ?> type="text" value="<?php echo ($value["parent_key"]); ?>"
						name="parent_key"/>
					</span> <span class="pull-right"><a href="javascript:;"
						onclick="sys.submit(this, '<?php echo U('saveConfig');?>');"
						class="btn btn-xs btn-primary mod-site-save">快速保存</a></span>
				</h3>
			</div>
			<div class="tab-content mod-content">
				<input type="hidden" value="<?php echo ($value["id"]); ?>" name="class_id" />
				<?php if(!empty($value['children'])): ?><table class="table table-striped">
					<?php if(is_array($value["children"])): foreach($value["children"] as $key=>$child): switch($child["type"]): case "radio": case "checkbox": ?><tr>
						<td>
							<div class="form-group">
								<span class="col-sm-4 col-xs-3 control-label"><?php echo ($child["config_class_name"]); ?>:</span>
								<div class="col-sm-6 col-xs-8">
									<div class="btn-group mod-btn">
										<label type="button" class=" mod-btn-color">
											<<?php echo ($child["show_type"]); ?> type="<?php echo ($child["type"]); ?>"
											name="<?php echo ($child["type_name"]); ?>" value="0"<?php if ($child['value'] == 0) { ?>
											checked="checked"<?php } ?> /> 是
										</label> <label type="button" class=" mod-btn-color">
											<<?php echo ($child["show_type"]); ?> type="<?php echo ($child["type"]); ?>"
											name="<?php echo ($child["type_name"]); ?>" value="1"<?php if ($child['value'] == 1) { ?>
											checked="checked"<?php } ?> /> 否
										</label>
									</div>
								</div>
							</div>
						</td>
					</tr><?php break;?> <?php case "text": case "password": case "datetime": ?><tr>
						<td>
							<div class="form-group">
								<span class="col-sm-4 col-xs-3 control-label"><?php echo ($child["config_class_name"]); ?>:</span>
								<div class="col-sm-5 col-xs-8"><<?php echo ($child["show_type"]); ?>
									name="<?php echo ($child["type_name"]); ?>" type="<?php echo ($child["type"]); ?>"
									class="form-control" value="<?php echo ($child['value']); ?>"/></div>
							</div>
						</td>
					</tr><?php break;?> <?php case "image": ?><tr>
						<td>
							<div class="col-sm-3">
							    <span class="col-sm-4 col-xs-3 control-label"><?php echo ($child["config_class_name"]); ?>:</span>
								<img src="<?php echo ($child['value']); ?>" width="100" id="logo" height="100" />
							</div>
							<div class="goods_xc">
								<input type="hidden" name="<?php echo ($child["type_name"]); ?>" class="allPic"
									value="<?php echo ($child['value']); ?>" /> <a href="javascript:void(0);"
									onclick="Tool.uploadify('<?php echo C('upload_url');?>/uploadNum/1/path/intnet/input/logo/callBack/Tool.requstFather/config/intnet_logo_config');"><img
									src="http://www.shopsn.xyz/Public/Admin/img/add-button.jpg" width="100" height="100" /></a> <br />
								<a href="javascript:void(0)">&nbsp;&nbsp;</a>
							</div>
						</td>
					</tr><?php break;?> 
					<?php case "autoCreateImage": ?><td>
							<div class="form-group">
							<input type="hidden" name="<?php echo ($child["type_name"]); ?>" value="<?php echo ($child['value']); ?>" />
					  			<span class="col-sm-4 col-xs-3 control-label"><?php echo ($child["config_class_name"]); ?>:</span>
					  			<img src="<?php echo ($child['value']); ?>" width="80" height="80" />
					  		</div>
					  	</td><?php break; endswitch; endforeach; endif; ?>
				</table><?php endif; ?>
			</div>
		</div>
	</form><?php endforeach; endif; endif; ?>
</div>
<script type="text/javascript" src="/Public/Admin/js/jquery.form.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/listener.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
 <script
	type="text/javascript" src="/Public/Admin/js/sys/sys.js?a=<?php echo time();?>"></script> 



</body>
</html>