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
                    <li>商品添加,关键词搜索,编辑修改商品的属性</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">  
    <link rel="stylesheet"  href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet"
	href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
    <script src="http://www.shopsn.xyz/Public/Common/bootstrap/js/bootstrap.min.js"></script>
    <br/>



    <section class="content">
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-list"></i> 商品列表</h3>
        </div>
        <div class="panel-body">
          <div class="navbar navbar-default">
              <form action="<?php echo U('goods_list');?>" name="searchform" id="search" class="navbar-form form-inline" method="get">
                <div class="form-group">
                  <select name="<?php echo ($goodsModel::$classId_d); ?>" id="cat_id" class="form-control">
                    <option value="">所有分类</option>
                    <?php if(!empty($classData)): if(is_array($classData)): foreach($classData as $k=>$v): ?><option <?php if($_GET[$goodsModel::$classId_d] == $k): ?>selected="selected"<?php endif; ?> value="<?php echo ($k); ?>"> <?php echo ($v); ?></option><?php endforeach; endif; endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <select name="<?php echo ($goodsModel::$brandId_d); ?>" id="brand_id" class="form-control">
                    <option value="">所有品牌</option>
                    	<?php if(!empty($brandList)): if(is_array($brandList)): foreach($brandList as $key=>$value): ?><option  <?php if($_GET[$goodsModel::$brandId_d] == $key): ?>selected="selected"<?php endif; ?> value="<?php echo ($key); ?>"><?php echo ($value); ?></option><?php endforeach; endif; endif; ?>
                  </select>
                </div>                

                <div class="form-group">
                  <select name="<?php echo ($goodsModel::$shelves_d); ?>" id="is_on_sale" class="form-control">
                    <option value="" selected="selected">全部</option>
                    <option value="1">上架</option>
                    <option value="0">下架</option>
                  </select>
                </div>                

                <div class="form-group">
                  <label class="control-label" for="input-order-id">关键词</label>
                  <div class="input-group">
                    <input type="text" name="<?php echo ($goodsModel::$title_d); ?>" value="<?php echo ($_GET[$goodsModel::$title_d]); ?>" placeholder="搜索词" id="input-order-id"   class="form-control input-order-id">
                  </div>
                </div>                  
                <!--排序规则-->
                  <button type="submit" id="button-filter search-order"  onclick="javascript:$('#search').submit();" class="btn btn-primary"><i class="fa fa-search"></i> 筛选</button>
                 <!--  <button type="button"  class="btn btn-primary all-export">全部导出execl</button> -->
                  <button type="button"  class="btn btn-primary current-export">当前页导出execl</button>
                  <button type="button" onclick="location.href='<?php echo U('goods_add');?>'" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>添加新商品</button>
              </form>
          </div>
                 <div id="ajax_return">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="sorting text-left" width="50px">选项</th>
                                    <th class="sorting text-left">Id</th> 
                                    <th class="sorting text-left">商品名称</th>
                                 
                                    <th class="sorting text-left">商品分类</th>
                                   <!--  <th valign="middle">市场价</th>
                                    <th class="sorting text-left">会员价</th> -->
                                    <th class="sorting text-left"  width="80px">库存</th>
                                    <th class="sorting text-left"  width="80px">是否上架</th>
                                    <th class="sorting text-left"  width="80px">是否推荐</th>
                                    <th class="sorting text-left">上架时间</th>
                                    <th class="sorting text-left">排序</th>
                                    <th class="sorting text-left">操作 <a href="javascript:;" onclick="$('#form2').submit()" class="btn btn-primary" >批量编辑</a><a href="javascript:;" id="goods_more_deleted" class="btn btn-primary">批量删除</a></th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="<?php echo U('Goods/goods_more_save');?>" method="post" id="form2">
                                <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
                                        <td class="text-left" width="50px"><input type="checkbox" name="checkbox[]" id="more_deleted" value="<?php echo ($row["id"]); ?>"></td>
                                          <td class="text-left margin-padding" ><?php echo ($row["id"]); ?></td>
                                        <td class="text-left margin-padding" ><?php echo ($row["title"]); ?></td>
                                        <td class="text-left"><?php echo ($goods_class[$row['class_id']]); ?></td>
                                       <!--  <td class="text-left"><?php echo ($row["price_market"]); ?></td>
                                        <td class="text-left"><?php echo ($row["price_member"]); ?></td> -->
                                        <td class="text-left"  width="50px"><?php echo ($row["stock"]); ?></td>

                                        <td class="text-left shelves-one" width="80px">
                                            <?php if(($row['shelves']) == 1): ?><img  src="http://www.shopsn.xyz/Public/Common/img/yes.png" key="shelves" onclick="GoodsOption.isShelves('<?php echo U('isShelves');?>', this)"  data-status="<?php echo ($row['shelves']); ?>" data-id="<?php echo ($row["id"]); ?>"/>
                                                <?php else: ?>
                                                <img  src="http://www.shopsn.xyz/Public/Common/img/cancel.png"   key="shelves" onclick="GoodsOption.isShelves('<?php echo U('isShelves');?>', this)"  data-status="<?php echo ($row['shelves']); ?>" data-id="<?php echo ($row["id"]); ?>"/><?php endif; ?></td>

                                        <td class="text-left  shelves-two" width="80px">
                                            <?php if(($row['recommend']) == 1): ?><img title="<?php echo ($title['recommend']); ?>" src="http://www.shopsn.xyz/Public/Common/img/yes.png"  key="recommend" onclick="GoodsOption.isShelves('<?php echo U('isShelves');?>', this)"  data-status="<?php echo ($row['recommend']); ?>" data-id="<?php echo ($row['id']); ?>"/>
                                                <?php else: ?>
                                                <img title="<?php echo ($title['recommend']); ?>" src="http://www.shopsn.xyz/Public/Common/img/cancel.png"  key="recommend" onclick="GoodsOption.isShelves('<?php echo U('isShelves');?>', this)"  data-status="<?php echo ($row['recommend']); ?>"  data-id="<?php echo ($row["id"]); ?>"/><?php endif; ?>
                                        </td>
                                         <td class="text-left">
                                           <?php echo (date('Y-m-d', $row["create_time"])); ?>
                                        </td>
                                        <td class="text-left">
                                            <input type="txet" data-id="<?php echo ($row["id"]); ?>" value="<?php echo ((isset($row["sort"]) && ($row["sort"] !== ""))?($row["sort"]):50); ?>" name="sort" class="form-control" style="width:90px;" />
                                        </td>
                                        <td  class="text-left">
                                        	<a href="javascript:;"
														onclick="Tool.alertEdit('<?php echo U('lookGoods', array('id' => $row['id']));?>','商品列表', 1000, 600)"
														data-toggle="tooltip" title=""
														class="btn btn-info goods_list">查看</a> 
											<a href="<?php echo U('modifyGoods', array('id' => $row['id']));?>" class="btn btn-primary">编辑</a> 
                                            <input type="button" class="btn btn-danger del_btn confirm_btn" onclick="Tool.deleteData('<?php echo U('removeGoods');?>', <?php echo ($row["id"]); ?>)" data-id="<?php echo ($row["id"]); ?>" data-toggle="modal" data-target="#myModal" value="删除"/>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </form>
                                </tbody>
                                <input type="hidden" id="p-value" value="<?php echo $_GET['p'];?>"/>
                                <input type="hidden" id="common" value="http://www.shopsn.xyz/Public/Common"/>
                            </table>
                            <div class="page"><?php echo ($page_show); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> 
  <script type="text/javascript">
      $(function() {

          //全部导出excel
          $('.all-export').on('click', function () {
              //商品分类
              var cat_id_value = $("#cat_id").val();
              //品牌
              var brand_value = $("#brand_id").val();
              //上架和下架
              var shelves_value = $("#is_on_sale").val();
              //关键词
              var title_value = $("#input-order-id").val();
              var data = {class_id: cat_id_value, brand_id: brand_value, shelves: shelves_value, title: title_value};
              var url = '<?php echo U("Goods/expGoods");?>';
              var tj_value = JSON.stringify(data);
              submitForm(url,tj_value);
          });

          //当前页导出
          $(".current-export").on('click',function(){
              //商品分类
              var cat_id_value = $("#cat_id").val();
              //品牌
              var brand_value = $("#brand_id").val();
              //上架和下架
              var shelves_value = $("#is_on_sale").val();
              var p_value = $("#p-value").val();
              p_value?p_value:p_value=1;
              //关键词
              var title_value = $("#input-order-id").val();
              var data = {class_id: cat_id_value, brand_id: brand_value, shelves: shelves_value, title: title_value,p:p_value};
              var url = '<?php echo U("Goods/expGoods");?>';
              var tj_value = JSON.stringify(data);
              submitForm(url,tj_value);
          });

          /**
           * js模拟表单get提交
           * @param action url地址
           * @param params 要传递的值
           */
          function submitForm(action, params) {
              var form = $("<form></form>");
              form.attr('action', action);
              form.attr('method', 'get');
              form.attr('target', '_self');
              var input1 = $("<input type='hidden' name='tj_value' value='' />");
              input1.attr('value', params);
              form.append(input1);
              form.appendTo("body");
              form.css('display', 'none');
              form.submit();
          }
      });
  $(document).ready(function() {

     

      $(".form-control").on('change',function(){
          var id = $(this).attr("data-id");
          var sort = $(this).val();
          var data = {id:id,sort:sort};
          var url = '<?php echo U("Goods/editSorm");?>';
          $.getJSON(url,data,function(json){
              if(json.msg == 1){
                  layer.open({
                      title: '排序信息'
                      ,content: '更新排序成功'
                  });
              }
          });
      });

  });


//批量删除操作-动态绑定
     $(document).ready(function(){
         $(document).on("click","#goods_more_deleted",function(){
             var spCodesTemp = "";
             $('input:checkbox[id=more_deleted]:checked').each(function (i) {
                 if (0 == i) {
                     spCodesTemp = $(this).val();
                 } else {
                     spCodesTemp += ("," + $(this).val());
                 }

             });
             console.log(spCodesTemp);
             if(spCodesTemp == ''){
                 alert('商品未选择');
                 return false;
             }
             parent.layer.confirm('真的要删除吗？', {
                 btn: ['确认','取消'], //按钮
                 shade: 0.5 //显示遮罩
             },function() {
                 //获取所有被全选中的checkbox值
                 $.ajax({
                     type: 'POST',
                     url: "<?php echo U('goods/ajax_goods_more_deleted');?>",
                     data: 'formdata=' + spCodesTemp,
                     success: function (data) {
                         if (data['delete'] == true) {
                             parent.layer.msg('批量删除成功,2秒后刷新页面');
                             setTimeout(url_href = function () {
                                 window.location.href = data['url'];
                             }, 2000);
                         }
                     }
                 })
             },function(){})
         })
     })
      //手动单击切换换上架
    /*  var bFlag = false;//用来js点击事件反应完成后，才执行第二次点击的事件
      $(".shelves-one img").on("click",function(){
          if(bFlag == true)return;
          bFlag = true;
          var _this = $(this);
          var id = _this.attr("data-id");
          //获取域名
          var common = $("#common").val();
          var data_flag = _this.attr("data-flag");
          var data = {id:id,data_flag:data_flag};
          var url = '<?php echo U("Goods/changeShelves");?>';
          $.getJSON(url,data,function(json){
              if(json == "no"){
                  _this.attr("src",common+"/img/cancel.png");
                  _this.attr("data-flag","false");
                  bFlag = false;
              }else{
                  _this.attr("src",common+"/img/yes.png");
                  _this.attr("data-flag","true");
                  bFlag = false;
              }
          });
      });

      //手动单击切换是否推荐
      var flag = false;//用来js点击事件反应完成后，才执行第二次点击的事件
      $(".shelves-two img").on("click",function(){
          if(flag == true)return;
          flag = true;
          _thisreco = $(this);
          var id = _thisreco.attr("data-id");
          //获取域名
          var common = $("#common").val();
          var data_flag = _thisreco.attr("data-flag");
          var data = {id:id,data_flag:data_flag};
          var url = '<?php echo U("Goods/changeRecommend");?>';
          $.getJSON(url,data,function(json){
              if(json == "no"){
                  _thisreco.attr("src",common+"/img/cancel.png");
                  _thisreco.attr("data-flag","false");
                  flag = false;
              }else{
                  _thisreco.attr("src",common+"/img/yes.png");
                  _thisreco.attr("data-flag","true");
                  flag = false;
              }
          });
      });*/

  </script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/goods.js?a=<?php echo time();?>"></script> 
<script type="text/javascript">
GoodsOption.imgUrl = 'http://www.shopsn.xyz/Public/Common';
</script>




</body>
</html>