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
                    <li>可以选择不同的(短信)通知类型</li>
                    <li>可以修改配置及其模板</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row"
<div class="nav">
	<div class="nav_title">
    	<h4><img class="nav_img" src="/Public/Admin/img/tab.gif" /><span class="nav_a">通知系统</span></h4>
    </div>
    <div class="nav_button">
    </div>
</div>



<div class="list">
	  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
      <thead>
	    <tr>
	      <td width="23%"><div align="center">通知类型</div></td>
	      <td width="34%"><div align="center">状态</div></td>
	      <td width="29%"><div align="center">操作</div></td>
        </tr>
        </thead>

		<?php if(is_array($sms_types)): foreach($sms_types as $key=>$value): ?><tr id="">
	      <td><div align="center">短信通知(<?php echo ($value["sms_title"]); ?>)</div></td>
	      <td></td>
	      <td><div align="center">
			  <a class="a_button" onClick="admin_system();" href="javascript:;">配置</a>
			<a class="a_button" name="edit" href="<?php echo U('sms_template',['sms_id' =>$value['id']]);?>">模板</a>
		  </div></td>
	      </tr><?php endforeach; endif; ?>
		<script type="text/javascript">
			var ADMIN_SYSTEM_SAVE  = "<?php echo U('admin_system_save');?>";
			//		var ADMIN_EDIT = "<?php echo U('admin_edit');?>";
			//		var ADMIN_DEL  = "<?php echo U('admin_del');?>";
		</script>
		<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/admin/admin.js"></script>
  </table>
</div>
<!-- 分页 -->
<div class="page">
<?php echo ($page); ?>
</div>




</body>
</html>