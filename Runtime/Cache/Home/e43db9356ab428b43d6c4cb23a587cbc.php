<?php if (!defined('THINK_PATH')) exit();?>
<?php if(!empty($brandData)): if(is_array($brandData)): foreach($brandData as $key=>$value): ?><a href="<?php echo U('Product/ProductList', ['brand' => $value[$brandModel::$id_d]]);?>" class="fl">
	<img src="<?php echo ($value[$brandModel::$brandBanner_d]); ?>" width="283" height="362">
	<p class="clearfix">
		<img src="<?php echo ($value[$brandModel::$brandLogo_d]); ?>" width="163" height="38" class="fl">
		<span class="fl"><?php echo ($value[$brandModel::$brandName_d]); ?></span>
</p><?php endforeach; endif; endif; ?>