<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html  >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title><?php echo ($title); ?></title>

<link rel="stylesheet" href="http://www.shopsn.cn/Public/Admin/css/css.css?a=1546545633">
<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/dist/css/AdminLTE.css">
<script src="http://www.shopsn.cn/Public/Common/js/jquery-1.11.3.min.js"></script>
<script src="http://www.shopsn.cn/Public/Common/js/layer/layer.js"></script>
</head>
<body>

    <link rel="stylesheet"  href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <script src="http://www.shopsn.cn/Public/Common/bootstrap/js/bootstrap.min.js"></script>
    <br/>



    <section class="content">
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-list"></i>快递公司列表</h3>
        </div>
        <div class="panel-body">
          <div class="navbar navbar-default">
              <form action="<?php echo U('express');?>" id="search" class="navbar-form form-inline" method="get">
                <div class="form-group">
                  <label class="control-label" for="input-order-id">关键词</label>
                  <div class="input-group">
                    <input type="text" name="<?php echo ($expressModel::$name_d); ?>" value="<?php echo ($_GET[$expressModel::$name_d]); ?>" placeholder="搜索词" id="input-order-id" class="form-control">
                  </div>
                </div>                  
                <!--排序规则-->
                <button type="submit" id="button-filter search-order"  onclick="javascript:$('#search').submit();" class="btn btn-primary"><i class="fa fa-search"></i> 筛选</button>
                <button type="button" onclick="location.href='<?php echo U('addFreightHTML');?>'" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加快递列表</button>
              </form>
          </div>
                    <div id="ajax_return">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="sorting text-left">ID</th>
                                    <th class="sorting text-left">快递公司名称</th>
                                    <th class="sorting text-left">快递公司编码</th>
                                    <th class="sorting text-left">快递公司url</th>
                                    <th class="sorting text-left">是否启用</th>
                                    <th class="sorting text-left">是否常用</th>
                                    <th class="sorting text-left">是否支持服务站配送</th>
                                </tr>
                                </thead>
                                <tbody>
                                	<?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$row): ?><tr>
		                                        <td class="text-left"><?php echo ($row[$expressModel::$id_d]); ?></td>
		                                        <td class="text-left"><?php echo ($row[$expressModel::$name_d]); ?></td>
		                                        <td class="text-left"><?php echo ($row[$expressModel::$code_d]); ?></td>
		                                        <td class="text-left"><?php echo ($row[$expressModel::$url_d]); ?></td>
		                                         <td class="text-left shelves-one">
	                                            <?php if($row[$expressModel::$status_d] == 1): ?><img src="http://www.shopsn.cn/Public/Common/img/yes.png"  onclick="ExpressWQ.isCommon('<?php echo U('isCommon');?>',
	                                               			<?php echo ($row[$expressModel::$id_d]); ?>,
                                               		<?php echo ($row[$expressModel::$status_d]); ?>, '<?php echo ($expressModel::$status_d); ?>')" class="cursor" data-flag="true"/>
	                                                <?php else: ?>
	                                                <img src="http://www.shopsn.cn/Public/Common/img/cancel.png" onclick="ExpressWQ.isCommon('<?php echo U('isCommon');?>',
	                                                	<?php echo ($row[$expressModel::$id_d]); ?>,
	                                                	<?php echo ($row[$expressModel::$status_d]); ?>,'<?php echo ($expressModel::$status_d); ?>'
	                                                	)"  class="cursor"  data-flag="false"/><?php endif; ?></td>
	                                        <td class="text-left  shelves-two">
	                                            <?php if($row[$expressModel::$order_d] == 1): ?><img src="http://www.shopsn.cn/Public/Common/img/yes.png" onclick="ExpressWQ.isCommon('<?php echo U('isCommon');?>', 
	                                                	<?php echo ($row[$expressModel::$id_d]); ?>,
	                                                	<?php echo ($row[$expressModel::$order_d]); ?>,'<?php echo ($expressModel::$order_d); ?>'
	                                                	)"  class="cursor" data-flag="true"/>
	                                                <?php else: ?>
	                                                <img src="http://www.shopsn.cn/Public/Common/img/cancel.png"   onclick="ExpressWQ.isCommon('<?php echo U('isCommon');?>', 
	                                                <?php echo ($row[$expressModel::$id_d]); ?>,
                                                	<?php echo ($row[$expressModel::$order_d]); ?>, '<?php echo ($expressModel::$order_d); ?>')"  class="cursor" data-flag="false"/><?php endif; ?>
	                                        </td>
	                                         <td class="text-left  shelves-two">
	                                            <?php if($row[$expressModel::$ztState_d] == 1): ?>是 <?php else: ?>否<?php endif; ?>
	                                        </td>
		                                    </tr><?php endforeach; endif; endif; ?>
                                </tbody>
                            </table>
                            <div class="page"><?php echo ($data['page']); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <script src="http://www.shopsn.cn/Public/Common/js/alert.js"></script>
   <script src="http://www.shopsn.cn/Public/Admin/js/express/express.js"></script>




</body>
</html>