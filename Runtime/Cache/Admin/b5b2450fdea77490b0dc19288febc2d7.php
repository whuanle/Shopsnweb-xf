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
                    <li>查看所有的会员等级信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<nav class="navbar navbar-default">
						<div class="collapse navbar-collapse">
							<div class="navbar-form row">
								<a
									onclick="Tool.alertEdit('<?php echo U('levelHtml');?>', '新增等级', 800, 600)"
									class="btn btn-primary pull-right"><i class="fa fa-plus"></i>新增等级</a>
							</div>
						</div>
					</nav>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="row">
						<div class="col-sm-12">
							<table id="list-table"
								class="table table-bordered table-striped dataTable" role="grid"
								aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th class="sorting" tabindex="0">等级</th>
										<th class="sorting" tabindex="0">等级名称</th>
										<th class="sorting" tabindex="0">积分下限</th>
										<th class="sorting" tabindex="0">积分上限</th>
										<th class="sorting" tabindex="0">折扣率</th>
										<th class="sorting" tabindex="0">等级描述</th>
										<th class="sorting" tabindex="0">操作</th>
									</tr>
								</thead>
								<tbody>
									<?php if(!empty($userLevel['data'])): if(is_array($userLevel['data'])): foreach($userLevel['data'] as $k=>$vo): ?><tr role="row" align="center">
										<td><?php echo ($vo[$model::$id_d]); ?></td>
										<td><?php echo ($vo[$model::$levelName_d]); ?></td>
										<td><?php echo ($vo[$model::$integralSmall_d]); ?></td>
										<td><?php echo ($vo[$model::$integralBig_d]); ?></td>
										<td><?php echo ($vo[$model::$discountRate_d]); ?>%</td>
										<td><?php echo ($vo[$model::$description_d]); ?></td>
										<td><a class="btn btn-primary"
											onclick="Tool.alertEdit('<?php echo U('editLevelHtml',array('level_id'=>$vo[$model::$id_d]));?>', '新增等级', 800, 600)"><i
												class="fa fa-pencil"></i></a> <a class="btn btn-danger" h
											ref="javascript:void(0)"
											onclick="UserLevel.deleteLevel('<?php echo U('deleteLevelHandle');?>', <?php echo ($vo[$model::$id_d]); ?>)"><i
												class="fa fa-trash-o"></i></a></td>
									</tr><?php endforeach; endif; endif; ?>
								</tbody>
								<tfoot>

								</tfoot>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 text-left"></div>
						<div class="col-sm-6 text-right"><?php echo ($userLevel["page"]); ?></div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</section>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> <script
	src="http://www.shopsn.xyz/Public/Admin/js/user/user.js"></script> 



</body>
</html>