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
                    <li>添加和编辑导航菜单信息</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">  
    <link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <script src="http://www.shopsn.xyz/Public/Common/bootstrap/js/bootstrap.min.js"></script>

    <div class="nav">
        <div class="nav_title">
            <h4><img class="nav_img" src="http://www.shopsn.xyz/Public/Admin/img/tab.gif" /><span class="nav_a">导航菜单列表</span></h4>
        </div>
        <div class="nav_button">
            <a href="<?php echo U('add');?>"><button class="button">+ 添加导航菜单</button></a>
        </div>
    </div>
    <br/><br/>



    <table class="table table-hover">
        <tr align="center">
            <td>ID</td>
            <td>导航菜单名称</td>
            <td>是否显示</td>
            <td>排序</td>
            <td>创建时间</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($rows)): foreach($rows as $key=>$row): ?><tr  align="center">
                <td><?php echo ($row["id"]); ?></td>
                <td><?php echo ($row["nav_titile"]); ?></td>
                <td>
                    <img width="20" class="sort-control" height="20" data-id="<?php echo ($row["id"]); ?>" src="http://www.shopsn.xyz/Public/Common/img/<?php if($row["status"] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" data-flag="<?php if($row["status"] == 1): ?>true<?php else: ?>false<?php endif; ?>"/>
                </td>
                <td><input type="text" class="dj-sort" data-id="<?php echo ($row["id"]); ?>" value="<?php echo ((isset($row["sort"]) && ($row["sort"] !== ""))?($row["sort"]):50); ?>"/></td>
                <td><?php echo date('Y-m-d',$row['create_time']);?></td>
                <td>
                     <a href="<?php echo U('edit',['id'=>$row['id']]);?>" class="btn btn-primary">编辑</a>
                      <a href="<?php echo U('remove',['id'=>$row['id']]);?>" class="btn btn-danger">删除</a>
                </td>
            </tr><?php endforeach; endif; ?>
    </table>
    <div class="page"><?php echo ($page_show); ?></div>
    <input type="hidden" id="common" value="http://www.shopsn.xyz/Public/Common"/>
    <script type="text/javascript">
        //改变排序框的css
        $(".dj-sort").css({
            width:"80px",
            height:"30px"
        });
        $(function(){
            //改变排序的值
            $(".dj-sort").on("change",function(){
                var sort_id = $(this).attr("data-id");
                var sort_val = $(this).val();
                var data = {id:sort_id,sort:sort_val};
                var url = '<?php echo U("Nav/changeSort");?>';
                $.getJSON(url,data,function(json){
                    if(json.msg == 1){
                        layer.open({
                            title: '排序信息'
                            ,content: '更新排序成功'
                        });
                    }else{
                        layer.open({
                            title: '排序信息'
                            ,content: '更新排序失败'
                        });
                    }
                });
            });

            //单击改变是否显示
            var bFlag = false;//用来js点击事件反应完成后，才执行第二次点击的事件
            $(".sort-control").on('click',function(){

                if(bFlag == true)return;
                bFlag = true;
                var _this = $(this);
                var id = _this.attr("data-id");
                //获取域名
                var common = $("#common").val();
                var data_flag = _this.attr("data-flag");
                var data = {id:id,data_flag:data_flag};
                var url = '<?php echo U("Nav/changStatus");?>';
                $.getJSON(url,data,function(json){
                    if(json == "no"){
                        _this.attr("src",common+"/img/cancel.png");
                        _this.attr("data-flag","false");
                        bFlag = false;
                    }else {
                        _this.attr("src", common+"/img/yes.png");
                        _this.attr("data-flag", "true");
                        bFlag = false;
                    }
                });
            });
        });
    </script>




</body>
</html>