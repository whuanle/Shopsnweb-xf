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
                    <li>查看所有公告信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
    <link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <div class="nav">
        <div class="nav_title">
            <h4><img class="nav_img" src="http://www.shopsn.xyz/Public/Admin/img/tab.gif" /><span class="nav_a">公告列表</span></h4>
        </div>
        <div class="nav_button">
            <a href="<?php echo U('add');?>"><button class="button">+ 添加公告</button></a>
        </div>
    </div><br/><br/>



    <table class="table table-hover">
        <tr align="center">
            <td>ID</td>
            <td>公告标题</td>
            <td>是否显示</td>
            <td>创建时间</td>
            <td>排序</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr  align="center">
                <td><?php echo ($row["id"]); ?></td>
                <td><?php echo ($row["title"]); ?></td>
                <td>
                    <?php if($row["status"] == 1): ?><img src="http://www.shopsn.xyz/Public/Admin/img/yes.gif"/>
                        <?php else: ?>
                        <img src="http://www.shopsn.xyz/Public/Admin/img/no.gif"/><?php endif; ?>
                </td>
                <td><?php echo date('Y-m-d',$row['create_time']);?></td>
                 <td><?php echo ($row["sort"]); ?></td>
                <td>
                    <a href="<?php echo U('edit',['id'=>$row['id']]);?>" class="btn btn-primary">编辑</a>
                    <a href="<?php echo U('remove',['id'=>$row['id']]);?>" class="btn btn-danger">删除</a>
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
    <div class="page"><?php echo ($page_show); ?></div>




</body>
</html>