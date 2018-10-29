<?php if (!defined('THINK_PATH')) exit();?><div class="categoryOne">
	<h2>
		<i></i>本店搜索
	</h2>
	<div>
		<form action="<?php echo U('Product/ProductList');?>" method="get">


		<p class="clearfix one">
			<span class="fl">关键字&nbsp;&nbsp;</span> <input type="text" class="fl" name="keyword">
		</p>
		<p class="clearfix two">
			<span class="fl">价格&nbsp;&nbsp;</span>
			<i class="fl">￥<input type="text" name="begin_price" value=""></i>
			<i class="fl">￥<input type="text" name="end_price" value=""></i>
			<input type="hidden" name="show" value="show"/>
		</p>
		<p class="three">
			<input type="submit" value="搜&nbsp;索" class="btn product-search">
		</p>
		</form>
	</div>
</div>
<?php if(!empty($recGoods)): ?><dl class="proTop10">
		<dt>
			<i></i>畅销排行Top10
		</dt>
		<?php if(is_array($recGoods)): foreach($recGoods as $key=>$value): if(!empty($value[$goodsImages::$picUrl_d])): ?><dd class="top10Item">
					<a href="<?php echo U('Goods/goodsDetails',['id' => $value['id']]);?>">
						<div class="img-parent fl">
							<img src="<?php echo ($value[$goodsImages::$picUrl_d]); ?>" height="80" width="80"> <span><?php echo ($key+1); ?></span>
						</div>
						<div class="top10Item-fr fl">
							<p><?php echo ($value[$goodsModel::$title_d]); ?></p>
							<p><?php echo ($value[$goodsModel::$description_d]); ?></p>
							<span>¥<?php if(!empty($_SESSION['user_id'])): echo ($value[$goodsModel::$priceMember_d]); else: echo ($value[$goodsModel::$priceMarket_d]); endif; ?></span>
						</div>
					</a>
				</dd>
			<?php else: ?>
				<dd class="clearfix top10Item2">
					<span class="fl"><?php echo ($key); ?></span> <a href="<?php echo U('Goods/goodsDetails',['id' => $value['id']]);?>" class="fl"><?php echo ($value[$goodsModel::$title_d]); ?></a>
				</dd><?php endif; endforeach; endif; ?>
	</dl><?php endif; ?>