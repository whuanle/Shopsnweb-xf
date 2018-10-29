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

    <div class="nav">
        <div class="nav_title">
            <h4><img class="nav_img" src="http://www.shopsn.xyz/Public/Admin/img/tab.gif" /><span class="nav_a">商品分类添加</span></h4>
        </div>
    </div>
    <br/><br/>



	<link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Admin/css/goods/goods.css"/>
    <link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/ComboSelect/combo.select.css" />
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
    <section class="content">
        <div class="container-fluid">
            <div class="pull-right">
                <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="返回"><i class="fa fa-reply"></i></a>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i> 商品分类详情</h3>
                </div>
                <div class="panel-body">

                    <form method="post" action="<?php echo U();?>" enctype="multipart/form-data" autocomplete="off">

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_tongyong">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td>分类名称:</td>
                                        <td>
                                            <input type="text" value="" id="cate-name" name="class_name" class="form-control" style="width:400px;float:left"/>
                                            <span class="cate-name-error">分类名称已经存在</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>上级分类：</td>
                                        <td>

                                          	<!--<div class="drop-main fl">-->
                                                <!--<div class="drop clearfix ">-->
                                                    <!--<span class="vision">请输入/选择商品分类</span>-->
                                                    <!--<input type="text" autocomplete="off" name="key_words" class="fl" onkeyup="Tool.cin(this, '<?php echo U('getClassByNameData');?>');">-->
                                                    <!--<a href="javascript:;" class="fl" data="false">∨</a>-->
                                                <!--</div>-->
                                                <!--<ul class="menu">-->
                                                <!--</ul>-->
                                            <!--</div>-->
                                            <select name="fid" id="firstt" class="form-control" style="width: 150px;" >
                                                <option value="0" selected="selected">顶级分类</option>
                                                <?php if(is_array($abclass)): foreach($abclass as $key=>$one): ?><option value=<?php echo ($one["id"]); ?>><?php echo ($one["class_name"]); ?></option>
                                                    <?php if(is_array($one["children"])): foreach($one["children"] as $key=>$two): ?><option value=<?php echo ($two["id"]); ?>>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($two["class_name"]); ?></option><?php endforeach; endif; endforeach; endif; ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>商品分类描述</td>
                                        <td>
                                            <textarea rows="3" cols="100" name="description"></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>分类图片</td>
                                        <td>
                                           
                                            <input onclick="Tool.uploadify('<?php echo C('upload_url');?>/uploadNum/1/path/class/input/image/config/class_image_conf');" type="button" value="上传图片"/>

                                            <input type="text" value="" name="pic_url" id="image" class="form-control large img_url" readonly="readonly"  style="width:500px;display:initial;"/>

                                        </td>
                                    </tr>



                                    <tr>
                                        <td>是否显示</td>
                                        <td>
                                            <label class="radio-inline">
                                                <input type="radio" name="hide_status" class="status" id="inlineRadio3" value="1"> 是
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="hide_status" class="status" id="inlineRadio4" value="0"> 否
                                            </label>

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
    <script type="text/javascript"src="http://www.shopsn.xyz/Public/Common/ComboSelect/jquery.combo.select.js"></script> 
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/listener.js"></script>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/search.js"></script>
    
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goodsclass/goodsclass_add.js"></script>
    <script>
    var CLASS_GET_LIST = "<?php echo U('getAllClass');?>";
    var GET_AB_CLASS = "<?php echo U('getAbClass');?>";
        var status_value = [<?php echo ((isset($row1["hide_status"]) && ($row1["hide_status"] !== ""))?($row1["hide_status"]):1); ?>];

        $("form").submit(function(e){
            var cate_name = $("#cate-name").val();

            if(!cate_name){
                alert("分类名称不能为空");
                return false;
            }
            if($("#cate-name").attr("error")){
                alert("分类名称已经存在，请重新填写分类名称");
                return false;
            }
        });
       $("#cate-name").on({
           blur:function(){
               var cate_name = $("#cate-name").val();
               var data = {cate_name:cate_name};
               var url = '<?php echo U("GoodsClass/testCatename");?>';

               $.getJSON(url,data,function(result){
                    if(result.msg == 1){
                        $(".cate-name-error").css("display","block");
                        $("#cate-name").attr("error","xs");
                    }
               });
           },
           focus:function(){
               $(".cate-name-error").css("display","none");
               $("#cate-name").attr("error","")
           }
       });

    </script>




</body>
</html>