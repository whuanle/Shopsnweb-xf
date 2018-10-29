<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>管理后台</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <link href="/Public/Admin/css/css.css" rel="stylesheet" type="text/css" />
    <link href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
 	<link href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> 

    <link href="http://www.shopsn.xyz/Public/Common/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" /> 

    <link href="http://www.shopsn.xyz/Public/Common/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="http://www.shopsn.xyz/Public/Common/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <link href="http://www.shopsn.xyz/Public/Common/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />

    <script src="http://www.shopsn.xyz/Public/Common/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="http://www.shopsn.xyz/Public/Common/js/global.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/myFormValidate.js"></script>    
    <script src="http://www.shopsn.xyz/Public/Common/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/myAjax.js"></script>
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
    
    //全选
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }   
    
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['90%', '90%'],
            content: $(obj).attr('data-url'), 
        });
    }
    
    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
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
  </head>
  <body style="background-color:#ecf0f5;">
 

<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/prompt.css"/>
<link rel="stylesheet"
    href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
<div class="wrapper">
	
	<section class="content">
	 <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>平台可以查看,新增,编辑广告位</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
       <div class="row">
       		<div class="col-xs-12">
	       		<div class="box">
	             <div class="box-header">
              		<nav class="navbar navbar-default">				
	               		<div class="pull-right navbar-form">
	               			<label><a class="btn btn-block btn-primary" href="<?php echo U('Admin/Ad/space');?>">新增广告位</a></label>
	               		</div>
	               	</nav>	            
	             </div>
	             <div class="box-body">
		           <div class="row">
		            	<div class="col-sm-12">
			              <table id="list-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
			                 <thead>
			                   <tr role="row">
			                   	   <th>广告位ID</th>
				                   <th>广告位名称</th>
				                   <th>广告位宽度</th>
				                   <th>广告位高度</th>
				                   <th>状态</th>
				                   <th>操作</th>
			                   </tr>
			                 </thead>
							<tbody>
							  <?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr role="row">
							  	 <td><?php echo ($vo["id"]); ?></td>
			                     <td><?php echo ($vo["name"]); ?></td>
			                     <td><?php echo ($vo["width"]); ?></td>
			                     <td><?php echo ($vo["height"]); ?></td>
			                     <td>
                                     <img width="20" height="20" src="http://www.shopsn.xyz/Public/Common/img/<?php if($vo[is_open] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" onclick="changeTableVal('ad_space','id','<?php echo ($vo["id"]); ?>','is_open',this)"/>                                                                
                                             </td>
			                     <td>
			                      <a class="btn btn-primary" href="<?php echo U('Admin/Ad/space',array('act'=>'edit','space_id'=>$vo['id']));?>"><i class="fa fa-pencil"></i></a>
			                      <a class="btn btn-danger" onclick="delfunc(this)" data-url="<?php echo U('Ad/spaceHandle');?>" data-id="<?php echo ($vo["id"]); ?>"><i class="fa fa-trash-o"></i></a>
			                      <a class="btn btn-info" href="<?php echo U('Admin/Ad/adList',array('pid'=>$vo['id']));?>"><i class="fa fa-eye"></i></a>
			                     
								</td>
			                   </tr><?php endforeach; endif; ?>
			                   </tbody>
			               </table>
		               </div>
		          </div>
		         	
	              <div class="row">
	                    <div class="col-sm-12">
	                    	<div class="page"><?php echo ($page); ?></div>
	                    </div>		
	              </div>
	          </div>
	        </div>
       	</div>
       </div>
   </section>
</div>
</body>
</html>