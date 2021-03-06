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



		<link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
	   <section class="content">
        <!-- Main content -->
        <div class="container-fluid">
            <div class="pull-right">
                <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="返回"><i class="fa fa-reply"></i></a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i> 品牌详情</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_tongyong" data-toggle="tab">商品类型</a></li>
                    </ul>
                    <!--表单数据-->
                    <form method="post" id="addEditBrandForm" >             
                        <!--通用信息-->
                    <div class="tab-content">                 	  
                        <div class="tab-pane active" id="tab_tongyong">
                           
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td>品牌名称:</td>
                                    <td>
                                        <input type="text" value="<?php echo ($brand["name"]); ?>" name="brand_name" class="form-control" style="width:200px;"/>
                                        <span id="err_name" style="color:#F00; display:none;">品牌名称不能为空</span>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>品牌字母:</td>
                                    <td>
                                        <input type="text" value="<?php echo ($brand["letter"]); ?>" name="letter" placeholder="列如：A" class="form-control" style="width:200px;"/>
                                        <span style="color:#F00; display:none;">品牌名称不能为空</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>所属分类:</td>
                                    <td>
                                        <div class="col-sm-3">
	                                        <select name="goods_class_id" id="parent_id_1" onchange="Brand.change(this,'<?php echo U('getChildren');?>');" class="form-control">
                                                    <option value="0">请选择分类</option> 
	                                            <?php if(is_array($goodsClass)): foreach($goodsClass as $key=>$v): ?><optgroup label="<?php echo ($v[$model::$className_d]); ?>" value="<?php echo ($v[$model::$id_d]); ?>"  >
		                                            	<?php if(!empty($v['children'])): if(is_array($v['children'])): foreach($v['children'] as $key=>$children): if($children[$model::$fid_d] == $v[$model::$id_d]): ?><option value="<?php echo ($children[$model::$id_d]); ?>"  class="parse"><?php echo ($children[$model::$className_d]); ?></option><?php endif; endforeach; endif; endif; ?>
	                                                </optgroup><?php endforeach; endif; ?>                                            
											</select>
	                                    </div>                                    
	                                    <div class="col-sm-3">
	                                      <select name="cat_id" id="parent_id_2"  class="form-control" style="width:250px;">
	                                        <option value="0">请选择分类</option>
	                                      </select>  
	                                    </div>     
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>品牌logo:</td>
                                    <td>
                                        <div class="col-sm-3">
                                            <input type="text" value="<?php echo ($brand["logo"]); ?>" readonly="readonly" name="brand_logo" id="logo" class="form-control" style="width:350px;margin-left:-15px;"/>
                                        </div>
                                        <div class="col-sm-3">
                                            <input onclick="Tool.uploadify('<?php echo C('upload_url');?>/uploadNum/1/input/logo/config/brand_logo_config');" type="button" class="btn btn-default" value="上传logo"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>品牌banner:</td>
                                    <td>
                                        <div class="col-sm-3">
                                            <input type="text" value="<?php echo ($brand["banner"]); ?>" readonly="readonly" name="brand_banner" id="banner" class="form-control" style="width:350px;margin-left:-15px;"/>
                                        </div>
                                        <div class="col-sm-3">
                                            <input onclick="Tool.uploadify('<?php echo C('upload_url');?>/uploadNum/1/input/banner/config/brand_banner_config');" type="button" class="btn btn-default" value="上传banner"/>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>品牌描述:</td>
                                    <td>
										<textarea rows="4" cols="60" name="brand_description"></textarea>
                                        <span id="err_desc" style="color:#F00; display:none;"></span>                                        
                                    </td>
                                </tr>                                  
                                </tbody>                                
                                </table>
                        </div>                           
                    </div>              
                    <div class="pull-right">
                        <input type="button" class="btn btn-primary" data-toggle="tooltip"  onclick="Brand.addBrand('addEditBrandForm', '<?php echo U('addBrands');?>')"  data-original-title="保存" value='保存'>
                    </div>
			    </form><!--表单数据-->
                </div>
            </div>
        </div>    <!-- /.content -->
    </section>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/brand/brand.js"></script>




</body>
</html>