<?php if (!defined('THINK_PATH')) exit();?><div class="table-responsive">
     <table class="table table-bordered table-hover">
         <thead>
             <td class="text-left"><input type="checkbox" id="parentId" onclick="Order.checkBoxAll('parentId','son')">全选</td>
             <td class="text-left">会员ID</td>            
             <td class="text-left">会员等级</td>
             <td class="text-left">会员昵称 </td>
             <td class="text-left">手机</td>
             <td class="text-left">邮箱</td>
             <td class="text-left">操作</td>
         </tr>
         </thead>
         <tbody id="goos_table">
         	<if condition="!empty($data['data'])">
             <?php if(is_array($data['data'])): foreach($data['data'] as $key=>$list): ?><tr>
                  	<td class="text-left">                
                           <input type="checkbox" class="son" onclick="Order.childrenBox(this, 'parentId')"  name="<?php echo ($userModel::$id_d); ?>[]" value="<?php echo ($list[$userModel::$id_d]); ?>"/>
                      </td>
                      <td class="text-left"><?php echo ($list[$userModel::$id_d]); ?></td>
                      <td class="text-left"><?php echo ($list[$userLevel::$levelName_d]); ?></td>
                      <td class="text-left">
                                <?php echo ($list[$userModel::$userName_d]); ?>
                      </td>
                      <td class="text-left"><?php echo ($list[$userModel::$mobile_d]); ?></td>
                      <td class="text-left"><?php echo ($list[$userModel::$email_d]); ?></td>
                      <td><a href="javascript:void(0)" onclick="javascript:$(this).parent().parent().remove();">删除</a></td>
                  </tr><?php endforeach; endif; ?>
         </tbody>
     </table>
 </div>
 <div class="row">
    <div class="text-left col-sm-10">
       <?php echo ($data["page"]); ?>
    </div>
   <div class="text-right col-sm-2">
                          
	</div>
</div>			    
<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        Order.ajaxForMyOrder('conditionForm', page);
    });
</script>