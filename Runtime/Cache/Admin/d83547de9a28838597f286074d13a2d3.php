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



    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet"
          href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-list"></i> 分销列表
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="navbar navbar-default">
                        <form id="conditionForm"
                              class="navbar-form form-inline" method="post" url="<?php echo U('ajaxGetData');?>">
                            <div class="form-group">
                                <label class="control-label" for="">下单日期-开始</label>
                                <div class="input-group">
                                    <input type="text" name="timegap-1"
                                           onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
                                           value="<?php echo ($timegap); ?>" placeholder="下单日期" id=""
                                           class="input-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="">下单日期-结束</label>
                                <div class="input-group">
                                    <input type="text" name="timegap-2"
                                           onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
                                           value="<?php echo ($timegap); ?>" placeholder="下单日期" id=""
                                           class="input-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="">分销状态</label>
                                <select name="distribution_status" class="input-sm">
                                    <option value="0">未分销</option>
                                    <option value="1">已分销</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="">每页显示</label>
                                <select name="listRows" class="input-sm">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <label class="control-label" for="">条</label>

                            </div>
                            <div class="form-group">
                                <a href="javascript:void(0)"
                                   onclick="Distribution.ajaxForMyOrder(1)"
                                   id="" class="btn btn-primary"><i
                                        class="fa fa-search"></i> 筛选</a>
                            </div>
                            <div class="form-group">
                                <a href="javascript:void(0)"
                                   onclick="Distribution.distribution()"
                                   id="button-filter search-order" class="btn btn-primary"><i
                                        class="fa fa-search"></i>一键分销</a>
                            </div>

                        </form>
                    </div>
                    <div id="ajaxGetReturn"></div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <script src="http://www.shopsn.xyz/Public/Common/My97Date/WdatePicker.js"></script>
    <!--<script src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>-->
    <script src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
    <script src="http://www.shopsn.xyz/Public/Admin/js/Distribution.js"></script>




</body>
</html>