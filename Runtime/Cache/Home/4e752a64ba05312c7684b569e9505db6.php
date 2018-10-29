<?php if (!defined('THINK_PATH')) exit();?><h5>配送方式</h5>
<div class="payment clearfix" id="expressSellect">
	<?php if(!empty($expressData)): if(is_array($expressData)): foreach($expressData as $key=>$value): ?><span class='fl' value="<?php echo ($key); ?>" discount="<?php echo ($value[$expressModel::$discount_d]); ?>" ><?php echo ($value[$expressModel::$name_d]); ?><em></em></span><?php endforeach; endif; endif; ?>
</div>
<script type="text/javascript">
 var URL = "<?php echo U('sumFreight');?>";
</script>
<script src="http://www.shopsn.xyz/Public/Home/js/settlement/shipping.js"></script>