<?php if (!defined('THINK_PATH')) exit();?>
<?php if(!empty($brandEnglish)): if(is_array($brandEnglish)): foreach($brandEnglish as $key=>$value): ?><a href="<?php echo U('Product/ProductList', ['brand' => $key]);?>" class="fl">
	<?php echo ($value); ?>
</a><?php endforeach; endif; endif; ?>