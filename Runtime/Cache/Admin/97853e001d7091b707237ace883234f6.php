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


 <!-- Main content --> <block
	name="content">
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
                    <li>查看所有退货单信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<div>
	<section class="content">
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> 退货单或退款列表[缓存2秒钟]
					</h3>
				</div>
				<div class="panel-body">
					<div class="well" >
						<div class="row">
							<form action="" id="conditionForm" class="form-inline"
								method="post" onsubmit="return false" url="<?php echo U('ajaxGetReturnGoods');?>">
								<div class="form-group">
									<label class="control-label" for="input-order-id">状态</label> <select
										class="form-control" id="status" name="<?php echo ($model::$status_d); ?>">
										<option value="">全部</option>
										<?php if(is_array($returnGoodsType)): foreach($returnGoodsType as $key=>$value): ?><option value="<?php echo ($key); ?>"><?php echo ($value); ?></option><?php endforeach; endif; ?>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="input-order-id">订单 编号</label>
									<div class="input-group">
									
										<input type="text" name="<?php echo ($model::$orderId_d); ?>" value=""
											placeholder="订单 编号" id="input-order-id" class="form-control">
										<input type="hidden" name="sort" value='desc'/>
									</div>
								</div>

								<button type="submit" onclick="Order.ajaxForMyOrder('conditionForm', 1)"
									id="button-filter search-order" class="btn btn-primary ">
									<i class="fa fa-search"></i> 筛选
								</button>

							</form>
						</div>
					</div>
					<div id="ajaxGetReturn"></div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>  
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/order.js?a=<?php echo time();?>"></script>




</body>
</html>