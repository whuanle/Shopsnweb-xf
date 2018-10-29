<?php if (!defined('THINK_PATH')) exit();?><form method="post" enctype="multipart/form-data" target="_blank" id="form-goodsType">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></th>                
                <th class="sorting text-left">ID</th>
                <th class="sorting text-left">属性名称</th>
                <th class="sorting text-left">商品类型</th>
                <th class="sorting text-left">属性值的输入方式</th>
                <th class="sorting text-left">可选值列表</th>
                <th class="sorting text-center">筛选</th>
                <th class="sorting text-left">排序</th>
                <th class="sorting text-right">操作</th> 
            </tr>
            </thead>
            <tbody>
              <?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$list): ?><tr>
                    <td class="text-center">
                        <input type="checkbox" name="selected[]" value="6">
                    </td>
                    <td class="text-right"  data-name="<?php echo ($attrModel::$id_d); ?>" data-id="<?php echo ($list[$attrModel::$id_d]); ?>"><?php echo ($list[$attrModel::$id_d]); ?></td>
                    <td class="text-left"><?php echo ($list[$attrModel::$attrName_d]); ?></td>
                    <td class="text-left"><?php echo ($list[$goodsType::$name_d]); ?></td>
                    <td class="text-left"><?php echo ($input_type[$list[$attrModel::$inputType_d]]); ?></td>
                    <td class="text-left"><?php echo (mb_substr($list[$attrModel::$attrValues_d],0,30,'utf-8')); ?></td>
                    <td class="text-center"data-id="<?php echo ($list[$attrModel::$attrIndex_d] == 0 ? 1: 0); ?>" data-name="<?php echo ($attrModel::$attrIndex_d); ?>">                        
                        <?php echo ($attr_index[$list[$attrModel::$attrIndex_d]]); ?>
                    </td>                    
                    <td class="text-left">
                        <input type="text" url="<?php echo U('updateSort');?>" onchange="selectTool.updateSort(this)" name="<?php echo ($attrModel::$order_d); ?>" data-name="<?php echo ($attrModel::$id_d); ?>" data-value="<?php echo ($list[$attrModel::$id_d]); ?>" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')"  size="4" value="<?php echo ($list[$attrModel::$order_d]); ?>"/>
                    </td>
                    <td class="text-right">                       
                        <a onclick="Tool.alertEdit('<?php echo U('editAttribute',array($attrModel::$id_d=>$list[$attrModel::$id_d]));?>', '编辑属性', 850, 600)" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="编辑"><i class="fa fa-pencil"></i></a>
                        <a onclick="selectTool.deleteData(this);" url="<?php echo U('delGoodsAttribute');?>" data-id="<?php echo ($list[$attrModel::$id_d]); ?>" id="button-delete6" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="删除"><i class="fa fa-trash-o"></i></a></td>
                </tr><?php endforeach; endif; endif; ?>
            </tbody>
        </table>
    </div>
</form>
<div class="row">
    <div class="col-sm-6 text-left"></div>
    <div class="col-sm-6 text-right"><?php echo ($data["page"]); ?></div>
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/common.js"></script>
<script>
	URL_PDU = "<?php echo U('saveStatus');?>";
</script>