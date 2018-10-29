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
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/prompt.css" />
<link rel="stylesheet"
    href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
<link href="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<script src="http://www.shopsn.xyz/Public/Common/daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<div class="wrapper">
    
    <section class="content ">
       <div id="explanation" class="explanation">
                <div id="checkZoom" class="title">
                    <i class="fa fa-lightbulb-o"></i>
                    <h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
                    <span title="收起提示" id="explanationZoom" style="display: block;"></span>
                </div>
                <ul>
                    <li>平台可以新增或编辑广告</li>
                    <li>平台无法删除</li>
                </ul>
            </div>
       <div class="row">
        <!-- Main content -->
        <div class="container-fluid">
        
            <div class="pull-right">
                <a href="javascript:history.go(-1)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="返回"><i class="fa fa-reply"></i></a>
				
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-list"></i> 添加广告</h3>
                </div>
                <div class="panel-body ">   
                    <!--表单数据-->
                    <form method="post" id="handlespace" action="<?php echo U('Admin/Ad/adHandle');?>">                    
                        <!--通用信息-->
                    <div class="tab-content col-md-10">                 	  
                        <div class="tab-pane active" id="tab_tongyong">                           
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td class="col-sm-2">广告名称：</td>
                                    <td class="col-sm-8">
                                        <input type="text" class="form-control" name="title" value="<?php echo ($info["title"]); ?>" placeholder="自定义广告名称">
                                        <span id="err_attr_name" style="color:#F00; display:none;"></span>                                        
                                    </td>
                                </tr>           
                                <tr>
                                    <td>广告类型：</td>
                                    <td>
                                        <select name="platform" class="input-sm">
                                        <option value="1" <?php if($info[platform] == 1): ?>selected<?php endif; ?> >电脑</option>
                                        <option value="2" <?php if($info[platform] == 2): ?>selected<?php endif; ?> >手机</option>
                                        </select>                                
                                    </td>
                                </tr>  
                                <tr>
                                    <td>广告位置：</td>
                                    <td>
                                        <select name="ad_space_id" class="input-sm" onchange="chose_space(this)" id="ad_space_id">
                                            <?php if(is_array($space)): $i = 0; $__LIST__ = $space;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item["id"]); ?>" data-height="<?php echo ($item[height]); ?>" data-width="<?php echo ($item['width']); ?>" <?php if($item[id] == $info[ad_space_id]): ?>selected<?php endif; ?>><?php echo ($item["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                  
                                        </select>      
                                    </td>
                                </tr>  
                                <tr>
                                    <td>开始日期：</td>
                                    <td>
                                        <fieldset>
                                        <div class="control-group">
                                                <div class="controls">
                                                        <div class="input-prepend input-group">
                                                                <span class="add-on input-group-addon">
                                                                        <i class="glyphicon glyphicon-calendar fa fa-calendar">
                                                                        </i>
                                                                </span>
                                                                <input type="text" style="width: 300px" name="start_time" id="start_time" class="form-control" value='<?php echo ((isset($info["start_time"]) && ($info["start_time"] !== ""))?($info["start_time"]):date("Y-m-d")); ?>'>
                                                        </div>
                                                </div>
                                        </div>
                                        </fieldset>
                                    </td>
                                </tr>  
                                <tr>
                                    <td>结束时间：</td>
                                    <td>
                                        <fieldset>
                                            <div class="control-group">
                                                    <div class="controls">
                                                            <div class="input-prepend input-group">
                                                                    <span class="add-on input-group-addon">
                                                                            <i class="glyphicon glyphicon-calendar fa fa-calendar">
                                                                            </i>
                                                                    </span>
                                                                    <input type="text" style="width: 300px" name="end_time" id="end_time" class="form-control" value='<?php echo ((isset($info["end_time"]) && ($info["end_time"] !== ""))?($info["end_time"]):date("Y-m-d", strtotime("+1 month"))); ?>'>
                                                            </div>
                                                    </div>
                                            </div>
                                            </fieldset>
                                    </td>
                                </tr>
                                <tr>
                                    <td>广告链接：</td>
                                    <td>
                                        <input type="text" class="form-control" name="ad_link" value="<?php echo ($info["ad_link"]); ?>" >
                                    </td>
                                </tr> 
                                <tr>
                                    <td>广告图片：</td>
                                    <td>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" style="width:350px;margin-left:-15px;" name="pic_url" id="pic_url" value="<?php echo ($info["pic_url"]); ?>" >
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="button" class="btn btn-default" onClick="GetUploadify3(1,'pic_url','ad')"  value="上传图片"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>广告大小：</td>
                                    <td id="ad_spec">宽: <span>0</span> px &nbsp; * &nbsp; 高: <span>0</span> px
                                    </td>
                                </tr>
                                <tr>
                                	<td>背景颜色：</td>
                                	<td> <input class="form-control" name="color_val" type="color" value="<?php echo ($info["color_val"]); ?>" style="width:200px;"/> </td>                              	
                                </tr>
                                <tr>
                                    <td>默认排序：</td>
                                    <td>
                                        <input type="text" class="input-sm" name="sort_num" value="<?php echo ($info["sort_num"]); ?>"  placeholder="50" id="sort_num">
                                    </td>
                                </tr>                                
                                </tbody> 
                                <tfoot>
                                	<tr>
                                	<td><input type="hidden" name="act" value="<?php echo ($act); ?>" id="act">
                                        <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                                	</td>
                                	<td class="text-right"><input class="btn btn-primary" type="button" onclick="adsubmit()" value="保存"></td></tr>
                                </tfoot>                               
                            </table>
                        </div>                           
                    </div>              
			    	</form><!--表单数据-->
                </div>
            </div>
        </div>
    </section>
</div>
<script>
function adsubmit(){
    var act  = document.getElementById('act').value;
    var sort = document.getElementById('sort_num');
    if (act == 'add' && sort.value == '') {
        sort.value = 50;
    }
	$('#handlespace').submit();
}

$(document).ready(function() {

    Date.prototype.Format = function(fmt) {
      var o = {
        "M+" : this.getMonth()+1,                 //月份   
        "d+" : this.getDate(),                    //日   
        "h+" : this.getHours(),                   //小时   
        "m+" : this.getMinutes(),                 //分   
        "s+" : this.getSeconds(),                 //秒   
        "q+" : Math.floor((this.getMonth()+3)/3), //季度   
        "S"  : this.getMilliseconds()             //毫秒   
      };
      if(/(y+)/.test(fmt))
          fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));   

      for(var k in o) {
          if(new RegExp("("+ k +")").test(fmt))   
              fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
      }
      return fmt;   
    } 

    var time = (new Date()).Format("yyyy-MM-dd");
	$('#start_time').daterangepicker({
		format:"YYYY-MM-DD",
		singleDatePicker: true,
		showDropdowns: true,
		minDate:'2016-01-01',
		maxDate:'2030-01-01',
		startDate:time,
	    locale : {
            applyLabel : '确定',
            cancelLabel : '取消',
            fromLabel : '起始时间',
            toLabel : '结束时间',
            customRangeLabel : '自定义',
            daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],
            monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月' ],
            firstDay : 1
        }
	});
	
	$('#end_time').daterangepicker({
		format:"YYYY-MM-DD",
		singleDatePicker: true,
		showDropdowns: true,
		minDate:'2016-01-01',
		maxDate:'2030-01-01',
		startDate:time,
	    locale : {
            applyLabel : '确定',
            cancelLabel : '取消',
            fromLabel : '起始时间',
            toLabel : '结束时间',
            customRangeLabel : '自定义',
            daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],
            monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月' ],
            firstDay : 1
        }
	});
});

/*
 * 上传图片 后台专用
 * @access  public
 * @null int 一次上传图片张图
 * @elementid string 上传成功后返回路径插入指定ID元素内
 * @path  string 指定上传保存文件夹,默认存在Public/upload/temp/目录
 * @callback string  回调函数(单张图片返回保存路径字符串，多张则为路径数组 )
 */
function GetUploadify3(num,elementid,path,callback)
{
    var upurl ='/adminprov.php?m=Admin&c=Uploadify&a=upload&num='+num
        +'&input='+elementid+'&path='+path+'&func='+callback;

    var iframe_str='<iframe frameborder="0" ';
    iframe_str=iframe_str+'id=uploadify ';          
    iframe_str=iframe_str+' src='+upurl;
    iframe_str=iframe_str+' allowtransparency="true" class="uploadframe" scrolling="no"> ';
    iframe_str=iframe_str+'</iframe>';
    $("body").append(iframe_str);
    $("iframe.uploadframe").css("height",$(document).height()).css("width","100%").css("position","absolute").css("left","0px").css("top","0px").css("z-index","999999").show();
    $(window).resize(function(){
        $("iframe.uploadframe").css("height",$(document).height()).show();
    });
}

/**
 * 获取广告位置
 * @param  {object} obj [description]
 * @return {[type]}     [description]
 */
function chose_space(obj)
{
    var op = $(obj).find("option:selected");
    var h  = $(op).attr('data-height');
    var w  = $(op).attr('data-width');
    $('#ad_spec').find('span').each(function(index, span){
        if (index == 0) {
            $(span).text(w);
        } else if (index == 1) {
            $(span).text(h);
        }
    });
}
$('#ad_space_id').trigger('change');
</script>
 </body>
 </html>