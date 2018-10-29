<?php if (!defined('THINK_PATH')) exit();?>
<div class="item item_price">
	<i class="icon"><img src="http://www.shopsn.xyz/Public/Admin/img/index/1.png" width="71"
		height="74"></i>
	<div class="desc">
		<div class="tit"><?php echo ($todayOrderNumber); ?></div>
		<span>今日订单总数</span>
	</div>
</div>
<div class="item item_order">
	<i class="icon"><img src="http://www.shopsn.xyz/Public/Admin/img/index/2.png"></i>
	<div class="desc">
		<div class="tit"><?php echo ($todayUserNumber); ?></div>
		<span>今日注册会员总数</span>
	</div>
	<i class="icon"></i>
</div>
<div class="item item_comment">
	<i class="icon"><img src="http://www.shopsn.xyz/Public/Admin/img/index/3.png" width="90"
		height="86"></i>
	<div class="desc">
		<div class="tit"><?php echo ($auditCommentNumber); ?></div>
		<span>今日待审评论数</span>
	</div>
</div>
<div class="item item_flow">
	<i class="icon"><img src="http://www.shopsn.xyz/Public/Admin/img/index/4.png" width="86"></i>
	<div class="desc">
		<div class="tit"><?php echo ($count["today_login"]); ?></div>
		<span>今日访问量</span>
	</div>
	<i class="icon"></i>
</div>