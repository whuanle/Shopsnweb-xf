<?php if (!defined('THINK_PATH')) exit();?><ul class="pr-com-title clearfix">
	<li class="fl active">推荐配件</li>
	<li class="fl">优惠套餐</li>
	<li class="fl">最佳组合</li>
</ul>
<ul class="pr-content clearfix active">
	<!-- 推荐配件 -->
	<?php if(!empty($accessories)): if(is_array($accessories)): foreach($accessories as $key=>$vo): ?><li class="fl"><a>
			<div class="images-parent">
				<img src="<?php echo ($vo['pic_url']); ?>" height="115px">
			</div> <span> <input class="com_r" type="checkbox"
				id="r_<?php echo ($key); ?>" value="<?php echo ($vo['id']); ?>" price="<?php echo ($vo['price']); ?>"
				name="goods_id[]" /><label for="r_<?php echo ($key); ?>"><?php echo ($vo['title']); ?></label>
		</span> <span>￥<?php echo ($vo['price']); ?></span>
	</a></li><?php endforeach; endif; ?>
	<li class="pr-final fl">
		<p class="pr-join-one">
			<input type="button" value="加入购物车" onclick="comR.addCart()">
		</p>
	</li>
	<?php else: ?>
	<div class="no_goods">暂无产品</div><?php endif; ?>
</ul>

<!-- 优惠套餐 -->
<ul class="pr-content clearfix">
	<?php if(!empty($package['sub'])): if(is_array($package['sub'])): foreach($package['sub'] as $k=>$vo): ?><li class="fl"><a
		href="<?php echo U('Goods/goodsDetails', ['id'=>$vo['goods_id']]);?>">
			<div class="images-parent">
				<img src="<?php echo ($vo['pic_url']); ?>" height="115px">
			</div>
			<span><label><?php echo ($vo['title']); ?></label></span> <span>￥<?php echo ($vo['price']); ?></span> <?php if($k < ($package_size-1)): ?><em></em> <?php else: ?> <i></i><?php endif; ?>
	</a></li><?php endforeach; endif; ?> <?php if($package_size > 0): ?><li class="pr-final fl">
		<p class="clearfix">
			<b class="fl">套餐价:</b><span class="fl">￥<?php echo ($package['discount']); ?></span><span
				class="fl active">省￥<?php echo ($package['total']-$package['discount']); ?></span>
		</p>
		<p class="price">价格：￥<?php echo ($package['total']); ?></p>
		<p class="pr-join-one">
			<input type="button" value="加入购物车"
				onclick="Cart.addCart4Package(this, <?php echo ($package['package_id']); ?>, '<?php echo U('Cart/cart_add', ['type'=>2]);?>')">
		</p>
	</li><?php endif; ?> <?php else: ?>
	<div class="no_goods">暂无产品</div><?php endif; ?>
</ul>

<ul class="pr-content clearfix">
	<?php if(!empty($combo)): if(is_array($combo)): foreach($combo as $key=>$vo): ?><li class="fl"><a
		href="<?php echo U('Goods/goodsDetails', ['id'=>$vo['id']]);?>">

			<div class="images-parent">
				<img src="<?php echo ($vo['pic_url']); ?>" height="115px">
			</div> <span> <input class="com_b" type="checkbox"
				id="select_<?php echo ($key); ?>" value="<?php echo ($vo['id']); ?>" price="<?php echo ($vo['price']); ?>"
				name="goods_id[]" /><label for="select_<?php echo ($key); ?>"><?php echo ($vo['title']); ?></label>
		</span> <span>￥<?php echo ($vo['price']); ?></span>
	</a></li><?php endforeach; endif; ?>
	<li class="pr-final fl">
		<p class="pr-join-one">
			<input type="button" value="加入购物车" onclick="comb.addCart()">
		</p>
	</li>
	<?php else: ?>
	<div class="no_goods">暂无产品</div><?php endif; ?>
</ul>

<script type="text/javascript">
var COM_URL = "<?php echo U('AjaxAddCart/addCartByManyGoods');?>";
</script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/notice.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/goods/combination.js"></script>