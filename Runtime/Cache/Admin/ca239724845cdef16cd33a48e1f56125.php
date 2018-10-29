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
                    <li>查看商品的规格信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">  
    <link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <script src="http://www.shopsn.xyz/Public/Common/bootstrap/js/bootstrap.min.js"></script>
    <div class="nav">
        <div class="nav_title">
            <h4><img class="nav_img" src="http://www.shopsn.xyz/Public/Admin/img/tab.gif" /><span class="nav_a">商品规格列表</span></h4>
        </div>
        <div class="nav_button">
            <a href="<?php echo U('add');?>"><button class="button">+ 添加商品规格</button></a>
        </div>
    </div>
    <br/><br/>



    <table class="table table-hover">
        <tr align="center">
            <td>ID</td>
            <td>商品规格类型</td>
            <td>规格名称</td>
            <td>规格项</td>
            <td>是否显示</td>
            <td>创建时间</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr  align="center">
                <td><?php echo ($row["id"]); ?></td>
                <td><?php echo ($goodsType[$row['type_id']]); ?></td>
                <td><?php echo ($row["name"]); ?></td>
                <td><?php echo ($row["spec_item"]); ?></td>
                <td>
                    <?php if($row["status"] == 1): ?><img src="http://www.shopsn.xyz/Public/Admin/img/yes.gif"/>
                        <?php else: ?>
                        <img src="http://www.shopsn.xyz/Public/Admin/img/no.gif"/><?php endif; ?>
                </td>
                <td><?php echo date('Y-m-d',$row['create_time']);?></td>
                <td>
                    <a href="<?php echo U('edit',['id'=>$row['id']]);?>" class="btn btn-primary">编辑</a>
                    <input type="button" class="btn btn-danger del_btn" data-id="<?php echo ($row["id"]); ?>" data-toggle="modal" data-target="#myModal" value="删除"/>
                  <!--  <a href="<?php echo U('remove',['id'=>$row['id']]);?>" class="btn btn-danger">删除</a>-->
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
    <div class="page"><?php echo ($page_show); ?></div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">确认删除</h4>
                </div>
                <div class="modal-body">
                    是否确认删除该数据,删除后不可恢复!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirm_btn">确认</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function(){
            $(".del_btn").click(function(){
                var id = $(this).attr('data-id');
                $("#confirm_btn").attr("data-id",id);
            });
            $("#confirm_btn").click(function(){
                 var id = $(this).attr('data-id');
                 var url = '<?php echo U("GoodsSpec/remove");?>';
                 data = {id:id};
                 $.getJSON(url,data,function(data){
                 if(data=="success"){
                 ($(".del_btn[data-id='"+id+"']").parent().parent()).remove();
                 }else{
                 alert("删除失败");
                 }
                 });
            });
        });
    </script>





</body>
</html>