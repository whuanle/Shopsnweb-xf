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
                    <li>查看团购信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">



<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<div class="wrapper">

	<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i> 团购列表
				</h3>
			</div>
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form action="<?php echo U('index');?>" id="conditionForm"
						class="navbar-form form-inline" method="post" url="<?php echo U('ajaxGetData');?>">

				            <div class="form-group">
				              	<input type="text" name="<?php echo ($model::$title_d); ?>"  value="<?php echo ($_POST[$model::$title_d]); ?>" class="form-control" placeholder="搜索">
				            </div>
				            <button type="submit" class="btn btn-default">提交</button>
				            <div class="form-group pull-right">
					            <a href="<?php echo U('addGroupBuy');?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加团购</a>
				            </div>
					</form>
				</div>
				<div>
					<div class="table-responsive">             
		              <table id="list-table" class="table table-bordered table-hover font_size">
		                 <thead>
		                   <tr role="row" align="center">
			                   <th class="sorting"  align="center">团购标题</th>
			                   <th class="sorting" tabindex="0">团购价</th>
			                   <th class="sorting" tabindex="0">开始时间</th>
			                   <th class="sorting" tabindex="0">结束时间</th>
			                   <th class="sorting" tabindex="0">已参团</th>
			                   <th class="sorting" tabindex="0">参团库存</th>
			                   <th class="sorting" tabindex="0">折扣</th>
			                   <th class="sorting" tabindex="0">操作</th>
		                   </tr>
		                 </thead>
						<tbody>
							  <?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $k=>$vo): ?><tr role="row" align="center">
					                     <td align="center" class="sd"><?php echo ($vo[$model::$title_d]); ?></td>
					                     <td><?php echo ($vo[$model::$price_d]); ?></td>
					                     <td><?php echo (date("Y-m-d H:i:s", $vo[$model::$startTime_d])); ?></td>
					                     <td><?php echo (date("Y-m-d H:i:s", $vo[$model::$endTime_d])); ?></td>
					                     <td><?php echo ($vo[$model::$buyNum_d]); ?></td>
										 <td><?php echo ($vo[$model::$goodsNum_d]); ?></td>
										 <td><?php echo sprintf("%.2f", $vo[$model::$price_d]/$vo[$goodsModel::$priceMember_d])*100;?>折</td>
										 <td>
					                      <!-- <a target="_blank" href="<?php echo U('Home/Activity/group',array('id'=>$vo['goods_id']));?>" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="查看详情"><i class="fa fa-eye"></i></a> -->
					                      <a class="btn btn-primary" href="<?php echo U('editGroupHtml',array('id'=>$vo[$model::$id_d]));?>"><i class="fa fa-pencil"></i></a>
					                      <a class="btn btn-danger" href="javascript:void(0)" onclick="Tool.deleteData('<?php echo U('deleteData');?>', <?php echo ($vo[$model::$id_d]); ?>)"><i class="fa fa-trash-o"></i></a>
										</td>
					                   </tr><?php endforeach; endif; endif; ?>
		                   </tbody>
		                 <tfoot>
		                 </tfoot>
		               </table>
	               </div>
	          </div>
              <div class="row">
              	    <div class="col-sm-6 text-left"></div>
                    <div class="col-sm-6 text-right"><?php echo ($data["page"]); ?></div>
              </div>
	          </div>
			</div>
		</div>
	<!-- /.row -->
</section>
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script> 




</body>
</html>