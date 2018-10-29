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
                    <li>添加关键词,便于搜索查找</li>
                    <li>注：请不要完全删除所有关键词，最少保留一个（可以编辑）</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">  
	<div class="nav">
	    <div class="nav_title">
	        <h4><img class="nav_img" src="/Public/Admin/img/tab.gif" /> <a  class="nav_a" url="<?php echo U('add_hot_words');?>" >添加关键词</a></h4>
	    </div>
		    <?php if( $_SESSION['aid'] == 1): ?><div class="nav_button">
		            <a  class="a_button" onclick="hot_words.edit_or_add(this.getAttribute('url'))" url="<?php echo U('add_hot_words');?>">添加</a>
		        </div><?php endif; ?>
	</div>




	<div class="list">
	    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
	        <thead>
	        <tr>
	            <td width="15%"><div align="center">关键词编号</div></td>
	            <td width="20%"><div align="center">关键词</div></td>
	            <td width="20%"><div align="center">商品分类</div></td>
	            <td width="15%"><div align="center">添加时间</div></td>
				<td width="15%"><div align="center">更新时间</div></td>
	            <td width="12%"><div align="center">操作</div></td>
	        </tr>
	        </thead>
	        <tbody>
	        <?php if(is_array($data["data"])): foreach($data["data"] as $key=>$vo): ?><tr id="del<?php echo ($vo["id"]); ?>">
	                <td height="50" class="hot" ><div  align="center"><?php echo ($vo["id"]); ?></div></td>
	                <td><div align="center"><?php echo ($vo["hot_words"]); ?></div></td>
	                <td><div align="center"><?php echo ($vo["goods_class_id"]); ?></div></td>
	                <td><div align="center"><?php echo ($vo["create_time"]); ?></div></td>
	                <td><div align="center"><?php echo ($vo["update_time"]); ?></div></td>
	                <td class="footd">
	                    <div align="center">
	                        <a  class="a_button"  id="form" onclick="hot_words.deleteHotWords(<?php echo ($vo["id"]); ?>,this.getAttribute('usb'))" usb="<?php echo U('deleteHotWords');?>" title="移除">移除</a>
	                        <a  class="a_button" sub="<?php echo U('editHotWords',array('id' => $vo['id']));?>" onclick="hot_words.edit_or_add(this.getAttribute('sub'))" title="移除">编辑</a>
	                	</div>
	                </td>
	            </tr><?php endforeach; endif; ?>
	        </tbody>
	    </table>
	</div>
	
	<!-- 分页 -->
	<div class="page">
	    <?php echo ($data["page"]); ?>
	</div>
<script type="text/javascript" src="/Public/Admin/js/goods/hot_words.js"></script>




</body>
</html>