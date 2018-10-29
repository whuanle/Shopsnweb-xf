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
                    <li>查看用户的评论</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">  
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
    <script src="http://www.shopsn.xyz/Public/Common/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/myAjax.js"></script>
    <br/>



<section class="content">
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-list"></i> 评论列表</h3>
    </div>
    <div class="panel-body">

        <div class="navbar navbar-default">
          <form action="<?php echo U('comment_list');?>" id="search" class="navbar-form form-inline" method="GET">
            <div class="form-group">
                <select id="search-user" name="type">
                    <option value="none" <?php if($where['type'] == 'none' ): ?>selected<?php endif; ?> >--准确查找--</option>
                    <option value="user_id" <?php if($where['type'] == 'user_id' ): ?>selected<?php endif; ?> >用户ID</option>
                    <option value="goods_id" <?php if($where['type'] == 'goods_id' ): ?>selected<?php endif; ?> >商品ID</option>
                    <option value="order_id" <?php if($where['type'] == 'order_id' ): ?>selected<?php endif; ?> >订单ID</option>
                </select>
                <input type="input" name="type_id" value="<?php echo ($where['type_id']); ?>" id="type_id">
            </div>
            <div class="form-group">
                <label for="search-content"> 关键内容 </label>
                <input type="input" name="content" id="search-content" value="<?php echo ($where['content']); ?>">
            </div>
            <!--排序规则-->
            <button type="submit" id="button-filter search-order"  onclick="javascript:$('#search').submit();" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> 筛选</button>
          </form>
        </div>

        <div id="ajax_return">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="sorting text-left">评价ID</th>
                        <th class="sorting text-left">商品</th>
                        <th class="sorting text-left">用户</th>
                        <th class="sorting text-left">内容</th>
                        <th class="sorting text-left">评分</th>
                        <th class="sorting text-left">时间</th>
                        <th class="sorting text-left">可见</th>
                        <th class="sorting text-left">操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                        <td><?php echo ($vo['id']); ?></td>
                        <td><?php echo ($vo['goods_id']); ?></td>
                        <td><?php echo ($vo['user_id']); ?></td>
                        <td><?php echo ($vo['content']); ?></td>
                        <td><?php echo ($vo['score']); ?></td>
                        <td><?php echo (date("Y-m-d H:i",$vo['create_time'])); ?></td>
                        <td>
                         <img width="20" height="20" src="/Public/Admin/img/<?php if($vo[status] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" onclick="changeTableVal('orderComment','id','<?php echo ($vo["id"]); ?>','status',this)"/>
                        </td>
                        <td>
                        <a class="btn btn-danger" onclick="delfunc(this)" data-url="<?php echo U('comment/handle');?>" data-id="<?php echo ($vo['id']); ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr><?php endforeach; endif; ?>

                    </tbody>
                </table>
                <div class="page"><?php echo ($page); ?></div>
            </div>
        </div>

            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> 
<script type="text/javascript">
function delfunc(obj){
    layer.confirm('确认删除？', {
          btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {act:'del',del_id:$(obj).attr('data-id')},
                dataType : 'json',
                success : function(data){
                    if(data==1){
                        layer.msg('操作成功', {icon: 1});
                        $(obj).parent().parent().remove();
                    }else{
                        layer.msg(data, {icon: 2,time: 2000});
                    }
                    layer.closeAll();
                }
            })
        }, function(index){
            layer.close(index);
            return false;// 取消
        }
    );
}
</script>




</body>
</html>