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
<script src="http://www.shopsn.xyz/Public/Common/bootstrap/js/bootstrap.min.js"></script> 



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
                    <li>查看支付配置信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i> 支付配置列表
				</h3>
			</div>
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form action="<?php echo U('goods_list');?>" name="searchform" id="search"
						class="navbar-form form-inline" method="get">
						<button type="button" onclick="Tool.alertEdit('<?php echo U('addPayHTML');?>', '添加配置', 850, 650)"
							class="btn btn-primary pull-right">
							<i class="fa fa-plus"></i>添加支付配置
						</button>
					</form>
				</div>
				<div id="ajax_return">
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="sorting text-left">ID</th>
									<th class="sorting text-left">支付类型名称</th>
									<th class="sorting text-left">支付账号</th>
									<th class="sorting text-left" >商户号</th>
									<th class="sorting text-left">微信或支付宝随机字符串</th>
									<th class="sorting text-left">微信用户标识</th>
									<th class="sorting text-left">平台</th>
									<th class="sorting text-left">编辑</th>
								</tr>
							</thead>
							<tbody>
								<?php if(!empty($payConfig)): if(is_array($payConfig)): foreach($payConfig as $key=>$row): ?><tr>
										<td class="text-left"><?php echo ($row[$payModel::$id_d]); ?></td>
										<td class="text-left margin-padding"><?php echo ($row[$payTypeModel::$typeName_d]); ?></td>
										<td class="text-left"><?php echo ($row[$payModel::$payAccount_d]); ?></td>
                                        <td class="text-left"><?php echo ($row[$payModel::$mchid_d]); ?></td>
										<td class="text-left"><?php echo ($row[$payModel::$payKey_d]); ?></td>
										<td class="text-left"><?php echo ($row[$payModel::$openId_d]); ?></td>
										<td class="text-left"><?php echo ($platform[$row[$payModel::$type_d]]); ?></td>
										<td class="text-left"> <button
											onclick="Tool.alertEdit('<?php echo U('modifyPay', array('id' => $row[$payModel::$id_d], 'pay' => $row[$payTypeModel::$typeName_d]));?>', '编辑配置<?php echo ($row[$payTypeModel::$typeName_d]); ?>', 900, 650)"
											class="btn btn-primary">编辑</button> </td>
									</tr><?php endforeach; endif; endif; ?>
							</tbody>
						</table>
						<div class="page"><?php echo ($page_show); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> <script
	type="text/javascript">
     
  </script> 



</body>
</html>