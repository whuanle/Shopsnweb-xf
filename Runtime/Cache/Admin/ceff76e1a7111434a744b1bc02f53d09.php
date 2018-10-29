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
                    <li>查看所有的配置内容信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
	
	<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> 配置内容列表
					</h3>
				</div>
				<div class="panel-body">
					<div class="navbar navbar-default">
						<form class="navbar-form form-inline" action="" method="post">
							<!--
				            <div class="form-group">
				              	<input type="text" class="form-control" placeholder="搜索">
				            </div>
				            <button type="submit" class="btn btn-default">提交</button>
                         -->
							<div class="form-group pull-right">
								<a onclick="Tool.alertEdit('<?php echo U('addConfig');?>', '添加配置分类', 600, 550)"
									class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加配置分类</a>
							</div>
						</form>
					</div>
					<div id="ajax_return">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td  class="text-center w1"><input
											type="checkbox"
											onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
										<td class="text-center">配置编号</td>
										<td class="text-center">分类名称</td>
										<td class="text-center">添加时间</td>
										<td class="text-center">更新时间</td>
										<td class="text-center">操作</td>
									</tr>
								</thead>
								<tbody>
									<?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$list): ?><tr>
												<td class="text-center"><input type="checkbox"
													name="selected[]" value="<?php echo ($list[$model::$id_d]); ?>	"></td>
												<td class="text-center"><?php echo ($list[$model::$id_d]); ?></td>
												<td ><?php echo ($list[$model::$configClass_name_d]); ?></td>
												<td class="text-center"><?php echo (date('Y-m-d',$list[$model::$createTime_d])); ?></td>
												<td class="text-center"><?php echo (date('Y-m-d',$list[$model::$updateTime_d])); ?></td>
												<td class="text-center">
													<a
														onclick="hot_words.edit_or_add('<?php echo U('editConfig', array('id'=> $list[$model::$id_d]));?>')"
														data-toggle="tooltip" title="" class="btn btn-info"
														data-original-title="编辑"><i class="fa fa-pencil"></i></a>
													 <a
														onclick="hot_words.deleteConfigClass(<?php echo ($list[$model::$id_d]); ?>, '<?php echo U('delConfig');?>', '<?php echo U('isHaveClass');?>')"
														href="javascript:;"
														data-toggle="tooltip" title="" class="btn btn-danger"
														data-original-title="删除"><i class="fa fa-trash-o"></i></a>
													</td>
											</tr>
				                            <?php if(is_array($list['children'])): foreach($list['children'] as $key=>$sub): ?><tr>
					                           		<td class="text-center"><input type="checkbox" name="selected[]" value="<?php echo ($sub[$model::$id_d]); ?>	"></td>
					                                <td class="text-center"><div align="center"><?php echo ($sub[$model::$id_d]); ?></div></td>
					                                <td >&nbsp;&nbsp;&nbsp;&nbsp;┠─&nbsp;&nbsp;<?php echo ($sub[$model::$configClass_name_d]); ?></td>
					                                <td class="text-center"><?php echo (date('Y-m-d',$sub[$model::$createTime_d])); ?></td>
													<td class="text-center"><?php echo (date('Y-m-d',$sub[$model::$updateTime_d])); ?></td>
					                                <td class="text-center">
					                                    <a href="javascript:;" onclick="Tool.alertEdit('<?php echo U('editConfig', array('id'=> $sub[$model::$id_d]));?>', '编辑', 600, 550)"
						                                    data-toggle="tooltip" title="" class="btn btn-info"
															data-original-title="编辑"><i class="fa fa-pencil"></i></a>
					                                    <a href="javascript:;" onclick="hot_words.deleteConfigClass(<?php echo ($sub[$model::$id_d]); ?>, '<?php echo U('delConfig');?>', '<?php echo U('isHaveClass');?>')"
						                                    data-toggle="tooltip" title="" class="btn btn-danger"
															data-original-title="删除"><i class="fa fa-trash-o"></i></a>
					                                </td>
					                            </tr><?php endforeach; endif; endforeach; endif; endif; ?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="page">
						<div class="col-sm-6 text-left"></div>
						<div class="col-sm-6 text-right"><?php echo ($data["page"]); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</section>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script type="text/javascript" src="/Public/Admin/js/goods/hot_words.js"></script>
<script type="text/javascript" src="/Public/Admin/js/system/system.js?a=123"></script>
<script>/*hot_words.tree("<?php echo U('index');?>", 'jklj')*/</script>




</body>
</html>