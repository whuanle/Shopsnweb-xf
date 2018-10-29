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



<link rel="stylesheet" href="/Public/Admin/css/goods/zTreeStyle.css"/>
<form class="form" onsubmit="hot_words.checkForm('.'+this.getAttribute('class'))">
	<div class="list">
	  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="details">
        <tbody>
        <?php if(!empty($classData)): ?><tr>
	        <td><div align="right">是否是一级分类：</div></td>
	        <td><select  id="aaa" class="tableHot" id="is_top" onchange="system.isTop(this.options[this.selectedIndex].value)">
            		<option>----- 请选择 -----</option>
	            	<option value="1">是</option>
	            	<option value="0">不是</option>
            	</select>
            </td>
          </tr>
	      <tr id="content">
	        <td><div align="right">分类内容：</div></td>
	        <td>
	       		<select name="p_id"  class="tableHot abs">
            		<option>----- 请选择配置分类 -----</option>
	                  <?php if(is_array($classData)): foreach($classData as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["config_class_name"]); ?></option><?php endforeach; endif; ?>
            	</select> 
            </td>
          </tr><?php endif; ?>
           <tr>
	        <td><div align="right">是否显示：</div></td>
	        <td><select name="is_open"  class="tableHot abs">
            		<option>----- 请选择 -----</option>
	            	<option value="1">隐藏</option>
	            	<option value="0">显示</option>
            	</select>
            </td>
          </tr>
          <?php if(!empty($classData)): ?><tr id="type">
		        <td><div align="right">展示类型：</div></td>
		        <td><select name="show_type"  class="tableHot">
	            		<option>----- 请选择 -----</option>
		            	<option value="input">文本框</option>
		            	<option value="textarea">大文本域</option>
		            	<option value="select">下拉选择框</option>
	            	</select>
	            </td>
          	</tr>
       		<tr id="Attribute">
		        <td><div align="right">类型属性：</div></td>
		        <td><select name="type"  class="tableHot">
	            		<option>----- 请选择 -----</option>
		            	<option value="radio">单选框</option>
		            	<option value="checkbox">复选框</option>
		            	<option value="text">输入框</option>
		            	<option value="datetime">时间框</option>
		            	<option value="password">密码框</option>
		            	<option value="image">图片框</option>
		            	<option value="autoCreateImage">二维码图片框</option>
		            	
	            	</select>
	            </td>
          	</tr>	
          	 <tr id="name">
	      	<td width="25%"><div align="right">name名称：</div></td>
	      	<td width="75%"><input class="tableHot" type="text" name="type_name"  value="" />
            <span id="account_trips"> * 与展示类型对应名字</span>
            </td>
	      </tr><?php endif; ?>
	    
	      
	      <tr>
	      	<td width="25%"><div align="right">内容名称：</div></td>
	      	<td width="75%"><input class="tableHot " type="text" name="config_class_name"  value="" />
            <span id="account_trips"> * 长度不低于1位</span>
            </td>
	      </tr>
        </tbody>
  </table>
</div>
</form>
<div class="footer">
     <button type="button" class="button" usb="<?php echo U('addClass');?>" id="button" style="min-width:160px;" onclick="system.submit('.form', this.getAttribute('usb'))">确 认</button>
</div>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script type="text/javascript" src="/Public/Admin/js/goods/hot_words.js?a=123"></script>
<script type="text/javascript" src="/Public/Admin/js/system/system.js?a=123"></script>




</body>
</html>