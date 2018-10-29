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

	<link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
	<div class="nav">
		<div class="nav_title">
			<h4><img class="nav_img" src="http://www.shopsn.xyz/Public/Admin/img/tab.gif" /><span class="nav_a">添加导航菜单</span></h4>
		</div>
	</div>
	<br/><br/>



	<form action="<?php echo U();?>" method="post">
		<table class="table table-bordered">
			<tr>
				<td>导航菜单名称:</td>
				<td>
					<input type="text" name="nav_titile"  value="<?php echo ($row["nav_titile"]); ?>" class="form-control" style="width:550px;"/>
				</td>
			</tr>
			<tr>
				<td>PC链接地址</td>
				<td>
					<input type="text"  name="link"  value="<?php echo ($row["link"]); ?>" class="form-control" style="width:550px;"/>
				</td>
			</tr>
            <tr>
                <td>移动端链接地址</td>
                <td>
                    <input type="text"  name="mobile_link"  value="<?php echo ($row["mobile_link"]); ?>" class="form-control" style="width:550px;"/>
                </td>
            </tr>
			<tr>
				<td>导航菜单类型</td>
				<td>
					<label class="radio-inline">
						<input type="radio" name="type" class="type" id="inlineRadio3" value="0">不选
					</label>
					<label class="radio-inline">
						<input type="radio" name="type" class="type" id="inlineRadio4" value="1"> 新
					</label>
				</td>
			</tr>
			<tr>
				<td>排序</td>
				<td>
					<input type="text"  name="sort" class="form-control" value="<?php echo ((isset($row["sort"]) && ($row["sort"] !== ""))?($row["sort"]):50); ?>" style="width:550px;"/>
				</td>
			</tr>
			<tr>
				<td>是否显示</td>
				<td>
					<label class="radio-inline">
						<input type="radio" name="status" class="status" id="inlineRadio1" value="1"> 是
					</label>
					<label class="radio-inline">
						<input type="radio" name="status" class="status" id="inlineRadio2" value="0"> 否
					</label>
				</td>
			</tr>
		</table>
		<input type="hidden" name="id" value="<?php echo ($row["id"]); ?>">
		<input class="btn btn-primary btn-lg" type="submit" value="提交">
	</form>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js"></script>
	<script type='text/javascript'>
		$(function(){
			//回显供应商状态
			$('.status').val([<?php echo ((isset($row["status"]) && ($row["status"] !== ""))?($row["status"]):1); ?>]);
			//回显导航类型
			$('.type').val([<?php echo ((isset($row["type"]) && ($row["type"] !== ""))?($row["type"]):0); ?>]);
		});
	</script>




</body>
</html>