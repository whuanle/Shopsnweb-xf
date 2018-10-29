<?php if (!defined('THINK_PATH')) exit();?><ul>
	<li><a href="<?php echo U('Order/orderList');?>">
			<i class="ice ice_w"></i>
			<div class="t">待处理订单</div> <span class="number"><?php echo ($orderUntreateCount); ?></span>
	</a></li>
	<li><a href="<?php echo U('Goods/goods_list');?>"> <i
			class="ice ice_y"></i>
			<div class="t">商品数量</div> <span class="number"><?php echo ($goodsCount); ?></span>
	</a></li>
	<li><a href="<?php echo U('Article/article_index');?>"> <i
			class="ice ice_f"></i>
			<div class="t">文章数量</div> <span class="number"><?php echo ($arctileCount); ?></span>
	</a></li>
	<li><a href="<?php echo U('User/userList');?>"> <i class="ice ice_n"></i>
			<div class="t">会员总数</div> <span class="number"><?php echo ($userCount); ?></span>
	</a></li>
</ul>