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
                    <li>添加文章分类</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
    <div class="nav">
        <div class="nav_title">
            <h4><img class="nav_img" src="http://www.shopsn.xyz/Public/Admin/img/tab.gif" /><span class="nav_a">文章分类添加</span></h4>
        </div>
    </div>
    <br/><br/><br/>



    <link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
    <section class="content">
        <div class="container-fluid">
            <div class="pull-right">
                <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="返回"><i class="fa fa-reply"></i></a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i> 文章分类详情</h3>
                </div>
                <div class="panel-body">

                    <form method="post" action="<?php echo U();?>" >

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_tongyong">

                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>文章分类名称:</td>
                                        <td>
                                            <input type="text" value="<?php echo ($row["name"]); ?>" name="name" class="form-control" style="width:400px;"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>文章分类描述</td>
                                        <td>
                                            <textarea rows="6" cols="80" name="intro"><?php echo ($row["intro"]); ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>排序</td>
                                        <td>
                                            <input type="text"  name="sort" class="form-control" value="<?php echo ((isset($row["sort"]) && ($row["sort"] !== ""))?($row["sort"]):10); ?>" style="width:550px;"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>是否显示</td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" class="status" id="inlineRadio3" value="1"> 是
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" class="status" id="inlineRadio4" value="0"> 否
                                            </label>
                                            <input type="hidden" name="id" value="<?php echo ($row["id"]); ?>"/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="pull-right">
                            <input type="submit" class="btn btn-primary" data-toggle="tooltip"   data-original-title="保存" value='保存'>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js"></script>
    <script type='text/javascript'>
        $(function(){
            //回显文章分类显示
            $('.status').val([<?php echo ((isset($status) && ($status !== ""))?($status):1); ?>]);

        });
    </script>





</body>
</html>