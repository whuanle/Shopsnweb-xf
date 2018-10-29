<?php if (!defined('THINK_PATH')) exit();?>
<?php if(!empty($userAddress)): if(is_array($userAddress)): foreach($userAddress as $key=>$addr): ?><div data-id="<?php echo ($addr[$model::$id_d]); ?>"
	class='consignee-item clearfix <?php if($addr[$model::$status_d] != 1): ?>none<?php endif; ?>'>
	<div
		class='fl myAddress <?php if($addr[$model::$status_d] == 1): ?>active<?php else: ?>place<?php endif; ?>'
		data-id="<?php echo ($addr[$model::$id_d]); ?>"
		onclick="InterAddress.choseAddress(this)">
		<?php echo ((isset($addr[$model::$alias_d]) && ($addr[$model::$alias_d] !== ""))?($addr[$model::$alias_d]):$addr[$model::$realname_d]); ?> <em></em>
	</div>
	<span class="fl"><?php echo ($addr[$model::$realname_d]); ?></span> <span
		class="fl ed">
		<?php echo ($addr[$model::$provId_d]); ?>、<?php echo ($addr[$model::$city_d]); ?>、
		<?php echo ($addr[$model::$dist_d]); ?>、<?php echo ($addr[$model::$address_d]); ?></span> <span class="fl"><?php echo substr_replace($addr[$model::$mobile_d],'****',3,4);?></span>
	<a href="javascript:;"
		onclick="InterAddress.editAddress(<?php echo ($addr[$model::$id_d]); ?>, '<?php echo U('editAddress');?>')"
		class="fr">编辑</a>
</div><?php endforeach; endif; endif; ?>
<div class="addr-switch switch-on cursor" id="consigneeItemAllClick"
	onclick="InterAddress.showConsigneeAll(this)">
	<span>更多地址</span><b></b>
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/settlement/address.js"></script>