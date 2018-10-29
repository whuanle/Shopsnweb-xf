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
                    <li>查看所有的订单信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<section class="content">
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-list"></i> 订单列表
				</h3>
			</div>
			<div class="panel-body">
				<div class="navbar navbar-default">
					<form  id="conditionForm"
						class="navbar-form form-inline" method="post" url="<?php echo U('ajaxGetData');?>">
						<div class="form-group">
							<label class="control-label" for="input-order-id">收货人</label>
							<div class="input-group">
								<input type="text" name="realname" placeholder="收货人"
									id="input-member-id" class="input-sm wx_100">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label" for="input-order-id">订单编号</label>
							<div class="input-group">
								<input type="text" name="order_sn_id" placeholder="订单编号"
									id="input-order-id" class="input-sm" >
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label" for="input-order-id">手机号码</label>
							<div class="input-group">
								<input type="text" name="mobile" placeholder="手机号码"
									id="input-order-id" class="input-sm" >
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label" for="input-date-added">开始日期</label>
							<div class="input-group">
								<input type="text" name="timegap"
									onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
									value="<?php echo ($timegap); ?>" placeholder="下单日期" id="create_time"
									class="input-sm">
							</div>
						</div>
                        <div class="form-group">
                            <label class="control-label" for="input-date-added">结束日期</label>
                            <div class="input-group">
                                <input type="text" name="timeEnd"
                                       onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
                                       value="" placeholder="下单日期" id="timeEnd"
                                       class="input-sm">
                            </div>
                        </div>
						<div class="form-group">
							<select name="order_status" class="input-sm" >
								<option value="">订单状态</option>
								<?php if(!empty($condition)): if(is_array($condition)): foreach($condition as $k=>$v): ?><option value="<?php echo ($k); ?>"><?php echo ($v); ?></option><?php endforeach; endif; endif; ?>
							</select> <input type="hidden" name="orderBy" value="id"> <input
								type="hidden" name="sort" value="desc"> <input
								type="hidden" name="user_id" value="<?php echo ($_GET['user_id']); ?>">
						</div>
						<div class="form-group">
							<a href="javascript:void(0)"
									onclick="Order.ajaxForMyOrder('conditionForm',1)"
								id="button-filter search-order" class="btn btn-primary"><i
								class="fa fa-search"></i> 筛选</a>
						</div>
                        <div class="form-group">
                            <a href="javascript:void(0)"
                               onclick="Order.export()"
                               id="button-filter current-export" class="btn btn-primary"> 导出excel</a>
                        </div>

						<!-- <button type="submit" class="btn btn-default pull-right">
							<i class="fa fa-file-excel-o"></i>&nbsp;导出excel
						</button> -->
					</form>
				</div>
				<div id="ajaxGetReturn"></div>

			</div>
		</div>
	</div>
	<!-- /.row -->
</section>
<script src="http://www.shopsn.xyz/Public/Common/My97Date/WdatePicker.js"></script> 
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script src="http://www.shopsn.xyz/Public/Admin/js/order.js"></script>
<script>
    Order.export_url = "<?php echo U('Order/expOrders');?>";
</script>




</body>
</html>