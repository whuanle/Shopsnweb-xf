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

<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://www.shopsn.cn/Public/Admin/css/prompt.css"/>
<link rel="stylesheet"
    href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css"/>
 <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>订单数据的统计分析</li>
                    <li>地区订单,支付方式,本月订单</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row"> 



<link href="http://www.shopsn.cn/Public/Common/daterangepicker/daterangepicker-bs3.css"
	rel="stylesheet" type="text/css" />
<script src="http://www.shopsn.cn/Public/Common/daterangepicker/moment.min.js"
	type="text/javascript"></script> <script
	src="http://www.shopsn.cn/Public/Common/daterangepicker/daterangepicker.js"
	type="text/javascript"></script>

<link rel="stylesheet" href="http://www.shopsn.cn/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.cn/Public/Common/bootstrap/css/font-awesome.min.css" />
<div class="tabbable tabs-left">
	<div class="tab-content">
		<table class="table table-striped table-bordered">
			<thead>
				<th>订单统计</th>
			</thead>
			<tbody>
				<tr >
						<td colspan="4">
							<a  onclick="javascript:window.location.href='<?php echo U('Analysis/order');?>?date=7';"
							class="btn <?php if($this->date_num == 6) echo 'btn-primary'; ?>">
								最近7天 </a>&nbsp;
                            <a onclick="javascript:window.location.href='<?php echo U('Analysis/order');?>?date=23';"
							class="btn <?php if($this->date_num == 29) echo 'btn-primary'; ?>">
								最近30天 </a>&nbsp;&nbsp; 
						    <!--<input type="text" class="form-control w300" name="start_time" id="start_time" value="<?php if(isset($this->start_time)) echo $this->start_time; ?>" onfocus="AnalysisOrder.dataPick(this)"> ~ -->
                            <!--<input type="text" class="form-control w300" name="end_time" id="end_time" value="<?php if(isset($this->end_time)) echo $this->end_time; ?>" onfocus="AnalysisOrder.dataPick(this)">-->
                            <!--<button type="submit" class="btn btn-primary" id="check" onclick="javascript:window.location.href='<?php echo U('Analysis/order');?>?date=<?php echo ($this->start_time); ?>" >查看</button>-->

                                <input type="date" name="start_time" id="start_time" class="form-control w300" >
                                <input type="date" name="end_time" id="end_time" class="form-control w300">
                                <button type="submit" class="btn btn-primary" id="check" onclick="sub(this)" >查看</button>

						</td>
				</tr>
				<tr>
					<td width="25%"><b> 今日订单： </b > <em id="dayNumber"></em> </td>
					<td width="25%"><b> 本月订单： </b> <em id="dayMonth"></em></td>
					<td width="25%"><b> 已付款订单： </b> <?php echo ($moneryTotal); ?></td>
					<td width="25%"><b> 订单总数： </b> <?php echo ($totalNumber); ?></td>
				</tr>
				<tr>
					<td colspan="4">
						<div id="user_chart" class="user_chart"></div>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<div id="payment_type_chart" class="payment_type_chart"></div>
					</td>
					<td colspan="2">
						<div id="express_type_chart" class="payment_type_chart"></div>
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<div id="order_map_chart" class="payment_type_chart"></div>
					</td>
				</tr>
			</tbody>
		</table>
		<script src="http://www.shopsn.cn/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
		<script src="http://www.shopsn.cn/Public/Common/js/echarts3.5/echarts.min.js"></script>
		<script src="http://www.shopsn.cn/Public/Common/js/echarts3.5/theme/shine.js"></script>
		<script>
			var path="http://www.shopsn.cn/Public/Common/js/echarts3.5/map/china.json";
			var NUMBER_DAY_URL = "<?php echo U('curretDayNumber');?>";
			var NUMBER_MOUTH_URL = "<?php echo U('curretMonthNumber');?>";
			var PAY_TYPE_URL     = "<?php echo U('payMemtMonery');?>";
			var DISTR_URL		 = "<?php echo U('distributionMode');?>";
			var AREA_URL_LIST	 = "<?php echo U('getAreaOrderNumber');?>";
			var DATA_STR = <?php echo ($dataStr); ?>;
			var ORDER_NUMBER = <?php echo ($dataNumber); ?>;
			var PAY_ORDER_NUMBER = <?php echo ($payNumber); ?>;
			console.log(PAY_ORDER_NUMBER);
			console.log(ORDER_NUMBER);
		</script>
		<script src="http://www.shopsn.cn/Public/Admin/js/analysis/orderAnalysis.js?a=<?php echo time();?>"></script>
		<script>
            var CHECK_LIST	 = "<?php echo U('Analysis/order');?>";
             function sub() {
                 var startTime = $("#start_time").val();
                 var endTime = $("#end_time").val();
                 var url = CHECK_LIST+'?start_time='+startTime+'&end_time='+endTime;

                 if(startTime){
                     javascript:window.location.href=url;
                 }else{
                     alert('开始时间必填')
                 }
                 console.log(url);

            }
		</script>
	</div>
</div>




</body>
</html>