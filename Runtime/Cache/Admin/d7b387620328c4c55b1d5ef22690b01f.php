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
                <ul>添加前台导航图片</li>
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
                            <i class="fa fa-list"></i> 导航特殊图片处理列表
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="navbar navbar-default">

                            <div class="form-group pull-right">
                                <a href="<?php echo U('add');?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加导航不规格图片</a>
                            </div>

                        </div>
                        <div>
                            <div class="table-responsive">
                                <table id="list-table" class="table table-bordered table-hover font_size">
                                    <thead>
                                    <tr role="row" align="center">
                                        <th class="sorting"  align="center">导航不规格图片标题</th>
                                        <th class="sorting" tabindex="0">操作</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                       <?php if(is_array($navImgs)): foreach($navImgs as $key=>$navImg): ?><tr role="row" align="center">
                                               <td align="center" class="sd"><?php echo ($navImg["nav_type"]); ?></td>
                                               <td>
                                                   <a class="btn btn-primary" href="<?php echo U('NavImg/edit',['title_type'=>$navImg['title_type']]);?>"><i class="fa fa-pencil"></i></a>
                                                   <a class="btn btn-danger"  href="<?php echo U('NavImg/remove',['title_type'=>$navImg['title_type']]);?>"><i class="fa fa-trash-o"></i></a>
                                               </td>
                                           </tr><?php endforeach; endif; ?>
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