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
                    <li>商品属性的增加,编辑,删除</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">  
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<div class="wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-list"></i> 商品属性</h3>
        </div>
        <div class="panel-body">
          <div class="navbar navbar-default">
              <form action="" id="searchForm"  url="<?php echo U('ajaxGetData');?>" class="navbar-form form-inline" method="post" onsubmit="return false">
                <div class="form-group">
                  <select name="<?php echo ($model::$typeId_d); ?>" id="type_id" class="form-control">
                    	<option value="">所有分类</option>
                        <?php if(is_array($parentClassData)): foreach($parentClassData as $k=>$v): ?><option value="<?php echo ($k); ?>"><?php echo ($v); ?></option><?php endforeach; endif; ?>
                   </select>
                </div>                  
                <div class="form-group">                 
	                <button type="submit" onclick="selectTool.ajaxGetList('searchForm', 1, 'ajaxReturn')" id="button-filter" class="btn btn-primary pull-right">
	                 <i class="fa fa-search"></i> 筛选
	                </button>
                </div>
                <button type="button" onclick="Tool.alertEdit('<?php echo U('addGoodsAttribute');?>', '添加属性', 850, 600)" class="btn btn-primary pull-right">
                 <i class="fa fa-plus"></i> 添加属性
                </button>
              </form>
          </div>
          <div id="ajaxReturn"> </div>
        </div>
      </div>
    </div>
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<!-- /.content-wrapper --> 
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/attribute.js?a=<?php echo time();?>"></script> 
<script>
selectTool.ajaxGetList("searchForm", 1, 'ajaxReturn');
</script> 




</body>
</html>