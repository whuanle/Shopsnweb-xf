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
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/prompt.css" />
<link rel="stylesheet"
    href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
 <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>平台查看,添加,修改管理员</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
  <div class="row">
<div class="nav">
	<div class="nav_title">
		<h4>
			<img class="nav_img" src="/Public/Admin/img/tab.gif" /><span
				class="nav_a">添加用户</span>
		</h4>
	</div>
	<?php if( $_SESSION['aid'] == 1): ?><div class="nav_button">
		<a href="javascript:;" onclick="add();"><button class="button">+
				添加用户</button></a>
	</div><?php endif; ?>
</div>

<div class="list">
	<table width="100%" border="0" cellpadding="0" cellspacing="0"
		class="list_table">
		<thead>
			<tr>
				<td width="8%"><div align="center">ID</div></td>
				<td width="12%"><div align="center">用户名</div></td>
				<td width="11%"><div align="center">所属分组</div></td>
				<td width="13%"><div align="center">最近登录时间</div></td>
				<td width="9%"><div align="center">登录次数</div></td>
				<td width="12%"><div align="center">登录状态</div></td>
				<td width="13%"><div align="center">创建时间</div></td>
				<td width="22%"><div align="center">操作</div></td>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr id="del<?php echo ($vo["id"]); ?>">
				<td height="50"><div align="center"><?php echo ($vo["id"]); ?></div></td>
				<td><div align="center"><?php echo ($vo["account"]); ?></div></td>
				<td><div align="center"><?php echo ($vo["group"]); ?></div></td>
				<td><div align="center">
						<?php if( !empty($vo['login_time']) ): echo (date("Y-m-d
						H:i:s",$vo["login_time"])); endif; ?>
					</div></td>
				<td><div align="center"><?php echo ($vo["login_count"]); ?></div></td>
				<td><div align="center">
						<?php if( $vo["status"] == 1 ): ?>已允许<?php else: ?>
						<span style="color: #F00">已禁用</span><?php endif; ?>
					</div></td>
				<td><div align="center"><?php echo (date("Y-m-d
						H:i:s",$vo["create_time"])); ?></div></td>
				<td><div align="center">
						<?php if($vo['id'] != 1): ?><a class="a_button"
							href="javascript:;" onClick="edit(<?php echo ($vo["id"]); ?>);">编辑</a> <a
							class="a_button" href="javascript:;" onclick="del(<?php echo ($vo[id]); ?>)">删除</a><?php endif; ?>
					</div></td>
			</tr><?php endforeach; endif; ?>
		</tbody>
	</table>
</div>

<!-- 分页 -->
<div class="page"><?php echo ($page); ?></div>
<script type="text/javascript">
var ADMIN_ADD  = "<?php echo U('admin_add');?>";
var ADMIN_EDIT = "<?php echo U('admin_edit');?>";
var ADMIN_DEL  = "<?php echo U('admin_del');?>";
</script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/admin/admin.js"></script> 



</body>
</html>