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
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/user/user.css"/>
    <section class="content">
        <div class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-list"></i> 提现列表
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="navbar navbar-default">
                        <form id="form" data-url="<?php echo U('ajaxSelect');?>" data-delurl = "<?php echo U('del');?>" class="navbar-form form-inline">
                            <div class="form-group ">
                                <label class="control-label" for="input-date-added">申请日期-开始</label>
                                <div class="input-group">
                                    <input type="text" name="timeStart" id="timeStart"
                                           onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
                                           value="" placeholder="申请日期"
                                           class="input-sm">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" for="input-date-added">申请日期-结束</label>
                                <div class="input-group">
                                    <input type="text" name="timeEnd" id="timeEnd"
                                           onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
                                           value="" placeholder="申请日期"
                                           class="input-sm">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label" >申请人手机</label>
                                <div class="input-group">
                                    <input type="text" name="mobile" id="mobile"
                                           value="" placeholder="申请人手机"
                                           class="input-sm">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" >状态</label>
                                <select name="status" class="input-sm" id="status">
                                    <option value="999">选择状态</option>
                                    <option value="-1">未通过</option>
                                    <option value="0">待审批</option>
                                    <option value="1">待打款</option>
                                    <option value="2">已打款</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-plus" onclick="Withdrawal.select(1)">查询</i>
                            </button>

                            <button type="button"  class="btn btn-primary current-export cover_reload">导出execl</button>
                            <!--<button type="button" data-id="0" onclick="Withdrawal.del(this)"  class="btn btn-danger">-->
                            <!--<i class="fa fa-trash-o" >批量删除</i>-->
                            <!--</button>-->
                        </form>
                        <form action="<?php echo U('expIn');?>" enctype="multipart/form-data" method="post" class="form-inline" role="form" >
                            <div class="form-group" id='aaa' >
                                <input type="file" name="import-orders" />
                            </div>
                            <div class="form-group">
                                <input type="submit" value="导入Excel" class="col-sm-offset-2 btn btn-default" />
                            </div>

                        </form>


                    </div>
                    <div id="ajaxGetData">

                        <form >
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <td style="width: 1px;" class="text-center"><input
                                                type="checkbox"
                                                onclick="$('input[name*=\'selected\']').prop('checked', this.checked);">
                                        </td>

                                        <td class="text-center"><a
                                                href="javascript:">ID</a>
                                        </td>
                                        <td class="text-center">申请编号</td>
                                        <td class="text-center">申请人</td>

                                        <td class="text-center">手机号</td>

                                        <td class="text-center"><a
                                                href="javascript:">卡号</a>
                                        </td>
                                        <td class="text-center"><a
                                                href="javascript:">银行名称</a>
                                        </td>
                                        <td class="text-center"><a
                                                href="javascript:">卡户名</a>
                                        </td>

                                        <td class="text-center"><a
                                                href="javascript:">支付宝</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:">提现金额</a>
                                        </td>
                                        <!--<td class="text-center">-->
                                            <!--<a href="javascript:">激励金额</a>-->
                                        <!--</td>-->
                                        <td class="text-center">
                                            <a href="javascript:">总金额</a>
                                        </td>
                                        <td class="text-center">状态</td>
                                        <td class="text-center">审批结果</td>
                                        <td class="text-center">意见</td>
                                        <td class="text-center">审批人</td>
                                        <td class="text-center">审批时间</td>
                                        <td class="text-center">操作</td>
                                    </tr>
                                    </thead>
                                    <tbody id="tbody">

                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-3 text-left"></div>
                            <div class="col-sm-6 text-right" id="page"></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <script src="http://www.shopsn.xyz/Public/Common/My97Date/WdatePicker.js"></script>
    <script src="http://www.shopsn.xyz/Public/Admin/js/Withdrawal/Withdrawal.js"></script>
    <script>
        var EXCEL_IN = '<?php echo U("Withdrawal/expIn");?>';
        var EXCEL_OUT = '<?php echo U("Withdrawal/expOut");?>';
        var TO_EXAMINE= '<?php echo U("Withdrawal/toExamine");?>';
    </script>




</body>
</html>