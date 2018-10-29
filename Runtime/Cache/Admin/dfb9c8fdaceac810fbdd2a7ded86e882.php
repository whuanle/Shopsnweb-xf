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


<div class="nav">

	<div class="nav_title">

		<h4>
			<img class="nav_img" src="http://www.shopsn.cn/Public/Admin/img/tab.gif" /><span class="nav_a">添加商品类型</span>
		</h4>

	</div>

</div>

<br />
<br />





<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />

<link rel="stylesheet"
	href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css" />

<section class="content">

	<!-- Main content -->

	<div class="container-fluid">
		<div class="pull-right">

			<a href="" data-toggle="tooltip" title="" class="btn btn-default"
				data-original-title="返回"><i class="fa fa-reply"></i></a>

		</div>

		<div class="panel panel-default">

			<div class="panel-heading">

				<h3 class="panel-title">
					<i class="fa fa-list"></i> 商品规格详情
				</h3>

			</div>

			<div class="panel-body">

				<!--表单数据-->

				<form method="post" action="<?php echo U();?>">

					<!--通用信息-->

					<div class="tab-content">

						<div class="tab-pane active" id="tab_tongyong">



							<table class="table table-bordered">

								<tbody>

									<tr>

										<td>商品规格名称:</td>

										<td><input type="text" value="<?php echo ($row["name"]); ?>" name="name"
											class="form-control" style="width: 400px;" /></td>

									</tr>

									<tr>

										<td>所属商品类型:</td>

										<td><select class="form-control" name="type_id"
											style="width: 400px;">

												<option value="">请选择</option>
												<?php if(is_array($rows)): foreach($rows as $key=>$row2): ?><option value="<?php echo ($key); ?>"<?php if($key == $row['type_id']): ?>selected="selected"<?php endif; ?>>

													<?php echo ($row2); ?>

												</option><?php endforeach; endif; ?>



										</select></td>

									</tr>

									<tr>

										<td>商品规格项:<br /> (注意：1行为1个规格项)
										</td>
										<td><textarea rows="6" cols="80" name="items"><?php echo ($row["items"]); ?></textarea>
										</td>



									</tr>

									<tr>

										<td>排序</td>

										<td><input type="text" value="<?php echo ((isset($row["sort"]) && ($row["sort"] !== ""))?($row["sort"]):20); ?>"
											name="sort" class="form-control" style="width: 400px;" /></td>

									</tr>

									<tr>

										<td>是否显示</td>

										<td><label class="radio-inline"> <input
												type="radio" name="status" class="status" id="inlineRadio1"
												value="1"> 是

										</label> <label class="radio-inline"> <input type="radio"
												name="status" class="status" id="inlineRadio2" value="0">
												否

										</label></td>

									</tr>

									<input type="hidden" name="id" value="<?php echo ($row["id"]); ?>" />



								</tbody>

							</table>

						</div>

					</div>

					<div class="pull-right">
						<input type="submit" class="btn btn-primary" data-toggle="tooltip"
							data-original-title="保存" value='保存'>

					</div>

				</form>
				<!--表单数据-->

			</div>

		</div>

	</div>
	<!-- /.content -->

</section>

<script type="text/javascript" src="http://www.shopsn.cn/Public/Common/js/alert.js"></script>

<script type='text/javascript'>

        $(function(){

            //回显商品规格状态

            $('.status').val([<?php echo ((isset($row["status"]) && ($row["status"] !== ""))?($row["status"]):1); ?>]);

        });

    </script> 



</body>
</html>