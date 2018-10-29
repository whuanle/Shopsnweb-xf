<?php if (!defined('THINK_PATH')) exit();?><div class="guessYouLike1 clearfix">
	<h4 class="fl">猜你喜欢</h4>
	<span class="fr clearfix"  onclick="GoodsObj.changeFor('guess', <?php echo ($page); ?>)">换一换</span>
</div>
<?php if(!empty($data)): ?><ul class="guessYouLike2" id="addGuess">
		<?php if(is_array($data)): foreach($data as $key=>$value): ?><li class="fl">
				<div class="like2-img">
					<a href="<?php echo U('goodsDetails', array($goodsModel::$id_d => $value[$goodsModel::$id_d]));?>"><img height="100" width="100" src="<?php echo ($value[$goodsImages::$picUrl_d]); ?>" alt=""></a>
				</div>
				<p><?php echo ($value[$goodsModel::$title_d]); ?></p>
				<span>(已有2人评论)</span>
				<i>￥<?php if(!empty($_SESSION['user_d'])): echo ($value[$specModel::$preferential_d]); else: echo ($value[$specModel::$price_d]); endif; ?></i>
			</li><?php endforeach; endif; ?>
	</ul><?php endif; ?>