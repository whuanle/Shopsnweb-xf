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
                    <li>商品的分类,可修改删除</li>
                    <li>注：添加一个顶级分类或二级分类，则其下必须有对应的三级分类，如没有则不要添加</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">  
	<div class="breadcrumbs" id="breadcrumbs">
	<ol class="breadcrumb">
        <li>分类列表页</li>
	</ol>
</div>




<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<section class="content">
       <div class="row">
       		<div class="col-xs-12">
	       		<div class="box">
	             <div class="box-header">
	               	<nav class="navbar navbar-default">	     
				        <div class="collapse navbar-collapse">
						   <div class="navbar-form row">
				            	<div class="col-md-1">
									<button class="btn bg-navy" type="button" onclick="tree_open(this);"><i class="fa fa-angle-double-down"></i>展开</button>
					            </div>
					            <div class="col-md-9">
					            	<span class="warning">温馨提示：顶级分类（一级大类）设为推荐时才会在首页楼层中显示【三秒钟缓存】</span>
					            </div>
					            <div class="col-md-2">
					            <a href="<?php echo U('add');?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>新增分类</a>
				            	</div>
				            </div>
				      	</div>
	    			</nav> 	               
	             </div><!-- /.box-header -->
	           <div class="box-body">
	           <div class="row">
	            <div class="col-sm-12">
	              <table id="list-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
	                 <thead>
	                   <tr role="row">
	                   	   <th valign="middle">分类ID</th>
		                   <th valign="middle">分类名称</th>
                           <th valign="middle">分类图片</th>
                           <th valign="middle">是否推荐</th>
		                   <th valign="middle">是否显示</th>
		                   <th valign="middle">是否热卖单品</th>
		                   <th valign="middle">是否打印耗材推荐</th>
		                   <th valign="middle">是否办公硬件推荐</th>
						   <th valign="middle">排序</th>
		                   <th style="min-width:350px" valign="middle">操作</th>
	                   </tr>
	                 </thead>
			<tbody>
			<?php if(!empty($parent['data'])): if(is_array($parent['data'])): foreach($parent['data'] as $k=>$vo): ?><tr role="row" align="center" class="<?php echo ($vo["level"]); ?>" id="<?php echo ($vo["level"]); ?>_<?php echo ($vo["id"]); ?>" <?php if($vo[level] > 0): ?>style="display:none"<?php endif; ?>>
			  			 <td><?php echo ($vo[$model::$id_d]); ?></td>
	                     <td align="left" style="padding-left:<?php echo ($vo['level'] * 5); ?>em"> 
	                      <?php if(isset($vo['hasSon']) && $vo['hasSon'] == 1): ?><span class="glyphicon glyphicon-plus btn-warning" style="padding:2px; font-size:12px;"  id="icon_<?php echo ($vo["level"]); ?>_<?php echo ($vo[$model::$id_d]); ?>" aria-hidden="false" onclick="rowClicked(this)" ></span>&nbsp;<?php endif; ?>
                             <span><?php echo ($vo[$model::$className_d]); ?></span>
			     		 </td>
                         <td><span><img onmouseover="$(this).attr('width','150').attr('height','45');"
										onmouseout="$(this).attr('width','40').attr('height','30');" 
										width="40"
										height="30"
										src="<?php if(isset($vo[$model::$picUrl_d])): echo ($vo[$model::$picUrl_d]); endif; ?>"/>
							</span></td>
                         <td>
                             <img width="20" height="20" title="<?php echo ($title['recommend']); ?>" src="http://www.shopsn.xyz/Public/Common/img/<?php if($vo[$model::$shoutui_d] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" status="<?php echo ($vo[$model::$shoutui_d]); ?>" onclick="MySort.sort(this,<?php echo ($vo[$model::$id_d]); ?>, '<?php echo ($model::$shoutui_d); ?>','<?php echo U('isRecommend');?>')"/>
                         </td>
				         <td>
                             <img width="20" height="20" src="http://www.shopsn.xyz/Public/Common/img/<?php if($vo[$model::$hideStatus_d] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" status="<?php echo ($vo[$model::$hideStatus_d]); ?>" onclick="MySort.sort(this,<?php echo ($vo[$model::$id_d]); ?>, '<?php echo ($model::$hideStatus_d); ?>','<?php echo U('isRecommend');?>')"/>                             
                         </td>
				         <td>
							 <img title="<?php echo ($title['hot']); ?>" width="20" class="hot-control" height="20" data-id="<?php echo ($vo[$model::$id_d]); ?>" src="http://www.shopsn.xyz/Public/Common/img/<?php if($vo[$model::$hotSingle_d] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" data-flag="<?php if($vo[$model::$hotSingle_d] == 1): ?>true<?php else: ?>false<?php endif; ?>"/>
						 </td>
						<td>
							<img width="20" class="printing-control" height="20" data-id="<?php echo ($vo[$model::$id_d]); ?>" src="http://www.shopsn.xyz/Public/Common/img/<?php if($vo[$model::$isPrinting_d] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" data-flag="<?php if($vo[$model::$isPrinting_d] == 1): ?>true<?php else: ?>false<?php endif; ?>"/>
						</td>
						<td>
							<img width="20" class="hardware-control" height="20" data-id="<?php echo ($vo[$model::$id_d]); ?>" src="http://www.shopsn.xyz/Public/Common/img/<?php if($vo[$model::$isHardware_d] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" data-flag="<?php if($vo[$model::$isHardware_d] == 1): ?>true<?php else: ?>false<?php endif; ?>"/>
						</td>
	                     <td>
                         	<input type="text" name="<?php echo ($model::$sortNum_d); ?>" onblur="MySort.sortNumber(this, '<?php echo U('isRecommend');?>', <?php echo ($vo[$model::$id_d]); ?>)" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" size="4" value="<?php echo ($vo[$model::$sortNum_d]); ?>" class="input-sm" />
                          </td>
	                     <td style="min-width:350px">
	                      <a class="btn btn-primary" href="<?php echo U('edit',['id'=> $vo[$model::$id_d]]);?>">编辑</a>
                          <a class="btn btn-danger" href="<?php echo U('remove',['id'=>$vo[$model::$id_d]]);?>">移除分类</a>
                     	  <a class="btn btn-danger" href="<?php echo U('delClassGoods',['id'=>$vo[$model::$id_d]]);?>">移除分类商品</a>
			     		</td>
	                   </tr><?php endforeach; endif; endif; ?>
	                   </tbody>
	               </table></div></div>
				       <input type="hidden" id="common" value="http://www.shopsn.xyz/Public/Common"/>
		               <div class="page">
			               <div class="col-sm-5">
			               		<div class="dataTables_info" id="example1_info" role="status" aria-live="polite"><?php echo ($parent['page']); ?></div>
			               </div>                                   
		               </div>
	             </div><!-- /.box-body -->
	           </div><!-- /.box -->
       		</div>
       </div>
     </section>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/goodsClass.js?a=<?php echo time();?>"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goodsclass/ajaxchangetype.js"></script>
<script>
	var IMAGE_TYPE      = <?php echo json_encode(C('image_type'));?>;
	var AJAX_CHAGE_TYPE = '<?php echo U("GoodsClass/changType");?>';
</script>





</body>
</html>