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
                    <li>修改热卖的商品的信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">



    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet"
          href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
    <div class="wrapper">

        <section class="content">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-list"></i>超强人气
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div>
                            <div class="table-responsive">
                                <table id="list-table" class="table table-bordered table-hover font_size">
                                    <thead>
                                    <tr role="row" align="center">
                                        <th class="sorting"  align="center">热卖商品导航的不规格标题</th>
                                        <th class="sorting" tabindex="0">操作</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                       <tr role="row" align="center">
                                            <td align="center" class="sd">超强人气</td>
                                            <td>
                                                <a class="btn btn-primary" href="<?php echo U('SuperPop/edit',['nav_type'=>'超强人气']);?>"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>




</body>
</html>