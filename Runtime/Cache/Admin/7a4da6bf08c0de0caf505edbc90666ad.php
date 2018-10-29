<?php if (!defined('THINK_PATH')) exit();?><table class="table table-bordered" id="attri">
    <tr>
        <td colspan="2"><b>商品规格:</b></td>
    </tr>
    <?php if(is_array($specList)): foreach($specList as $k=>$vo): ?><tr id="">
        <td><?php echo ($vo[name]); ?>:</td>
        <td>
            <?php if(is_array($vo[spec_item])): foreach($vo[spec_item] as $k2=>$vo2): ?><button type="button" onclick="GoodsOption.getAttr('#attri button', '<?php echo U('getAddContentByGoodsAttribute');?>', 'spec_input_tab', this)"  data-spec_id='<?php echo ($vo[id]); ?>' data-item_id='<?php echo ($k2); ?>' class="btn <?php
 if(in_array($k2, $itemsId)) echo 'btn-success'; else echo 'btn-default'; ?>" >
                    <?php echo ($vo2); ?>
                </button>
                     <!--   <img width="35" height="35" src="<?php echo ((isset($specImageList[$k2]) && ($specImageList[$k2] !== ""))?($specImageList[$k2]):'http://www.shopsn.xyz/Public/Common/img/add-button.jpg'); ?>" id="item_img_<?php echo ($k2); ?>" onclick="GetUploadify3('<?php echo ($k2); ?>');"/>
                        <input type="hidden" name="item_img[<?php echo ($k2); ?>]" value="<?php echo ($specImageList[$k2]); ?>" />-->
                &nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
        </td>
    </tr><?php endforeach; endif; ?>
</table>
<div id="goods_spec_table2"> <!--ajax 返回 规格对应的库存--> </div>

<script>

GoodsOption.getAttr('#attri button', '<?php echo U('getAddContentByGoodsAttribute');?>', 'spec_input_tab')

</script>