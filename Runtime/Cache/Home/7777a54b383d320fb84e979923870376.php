<?php if (!defined('THINK_PATH')) exit();?><div class="clearfix active">
	<div class="evaluate-top clearfix">
		<div class="evaluate-top-left fl">
			<div class="fl active">
				<h2><?php echo ((isset($level['level_3']['percent']) && ($level['level_3']['percent'] !== ""))?($level['level_3']['percent']):"0"); ?>%</h2>
				<span>好评度</span>
			</div>
			<div class="fr praiseBar-parent">
				<div class="clearfix praiseBar">
					<span class="fl">好评(<em><?php echo ((isset($level['level_3']['percent']) && ($level['level_3']['percent'] !== ""))?($level['level_3']['percent']):"0"); ?></em>%)
					</span>
					<div class="fr clearfix">
						<i class="fl"></i>
					</div>
				</div>
				<div class="clearfix praiseBar">
					<span class="fl">中评(<em><?php echo ((isset($level['level_2']['percent']) && ($level['level_2']['percent'] !== ""))?($level['level_2']['percent']):"0"); ?></em>%)
					</span>
					<div class="fr clearfix">
						<i class="fl"></i>
					</div>
				</div>
				<div class="clearfix praiseBar">
					<span class="fl">差评(<em><?php echo ((isset($level['level_1']['percent']) && ($level['level_1']['percent'] !== ""))?($level['level_1']['percent']):"0"); ?></em>%)
					</span>
					<div class="fr clearfix">
						<i class="fl"></i>
					</div>
				</div>
			</div>
		</div>
		<dl class="evaluate-top-right fl clearfix">
			<dt class="fl">买家印象：</dt>
			<dd class="fl">
				<?php if(is_array($feel)): foreach($feel as $key=>$vo): ?><q class="comm-tags"><span><?php echo ($vo['title']); ?></span><em>(<?php echo ($vo['num']); ?>)</em></q> &nbsp;<?php endforeach; endif; ?>
			</dd>
		</dl>
	</div>
	<div class="evaluate-bottom"></div>

</div>
<!--评价筛选-->
<div class="evaluate-nav clearfix" id="comment-class">
	<a href="javscript:;" class="fl <?php if($type == 0): ?>active<?php endif; ?> " data-type="0">全部评价<em>(<?php echo ($level['total']); ?>)</em></a> 
	<a href="javscript:;" class="fl <?php if($type == 1): ?>active<?php endif; ?> " data-type="1">晒图<em>(<?php echo ((isset($level['total_pic']) && ($level['total_pic'] !== ""))?($level['total_pic']):"0"); ?>)</em></a> 
	<a href="javscript:;" class="fl <?php if($type == 2): ?>active<?php endif; ?> " data-type="2">好评<em>(<?php echo ((isset($level['level_3']['number']) && ($level['level_3']['number'] !== ""))?($level['level_3']['number']):"0"); ?>)</em></a> 
	<a href="javscript:;" class="fl <?php if($type == 3): ?>active<?php endif; ?> " data-type="3">中评<em>(<?php echo ((isset($level['level_2']['number']) && ($level['level_2']['number'] !== ""))?($level['level_2']['number']):"0"); ?>)</em></a> 
	<a href="javscript:;" class="fl <?php if($type == 4): ?>active<?php endif; ?> " data-type="4">差评<em>(<?php echo ((isset($level['level_1']['number']) && ($level['level_1']['number'] !== ""))?($level['level_1']['number']):"0"); ?>)</em></a> 
	<a href="javscript:;" class="fl <?php if($type == 5): ?>active<?php endif; ?> " data-type="5">只看当前商品评价</a>
</div>
<div class="comment-parentNode" id="comment">
	<!--全部评论-->
	<div class="comment-parent active">


	<?php if(count($list) < 1): ?><div style="text-align:center;line-height:100px">暂无评价~</div><?php endif; ?>

		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div class="Consultation clearfix">
			<div class="fl consuFloat">
				<div class="top">
				<?php  $str = ''; for ($i=0; $i<5 ; $i++) { if ($i < $vo['score']){ $str .= '<span class="active"> </span>'; } else { $str .= '<span></span>'; } } echo $str; ?>
				</div>
				<div class="data"><?php echo (date("Y-m-d H:i", $vo['create_time'])); ?></div>
			</div>
			<div class="fl consuCentent">
				<div class="top">
				<?php if(is_array($vo['feel'])): foreach($vo['feel'] as $key=>$value): ?><span><?php echo ($value['title']); ?></span><?php endforeach; endif; ?>
				</div>
				<div class="center"><?php echo ($vo['content']); ?></div>
				<div class="bottom">
					<div class="img-btn-main clearfix">
						<?php if(is_array($vo['images'])): foreach($vo['images'] as $key=>$value): ?><a href="javascript:;" class="fl"><img src="<?php echo ($value['path']); ?>" width="52" height="52"></a><?php endforeach; endif; ?>
					</div>
					<div class="up-img">
						<img src="<?php echo ($value['path']); ?>" width="370" height="278">
					</div>
				</div>
			</div>
			<div class="fl conRight">
				<p>
				<?php if(is_array($vo['spec'])): foreach($vo['spec'] as $key=>$value): ?><span><?php echo ($value['name']); ?></span> <em><?php echo ($value['item']); ?></em><br><?php endforeach; endif; ?>
				</p>
				<p>
					<span><?php echo ($vo['show_name']); ?></span> <?php if($vo['anonymous'] == 1): ?><em>（匿名）</em><?php endif; ?>
				</p>
			</div>
		</div><?php endforeach; endif; ?>
		<div class="page"><?php echo ($page); ?></div>
	</div>
	<!--晒图-->
	<div class="comment-parent">
		<div class="Consultation setto">
			<!--图片选择-->
			<div class="comments-showImgSwitch-thumbnails clearfix">
				<!--左选择按钮-->
				<a href="javscript:;" class="thumb-prevFl fl"></a>
				<!--图-->
				<div class="thumb-prevCentent fl">
					<ul class="clearfix">
					</ul>
				</div>
				<!--右选择按钮-->
				<a href="javscript:;" class="thumb-prevFr fr"></a>
			</div>
		</div>
		<!--详情图-->
		<div class="details-parent">
			<div class="" style="text-align: center;">
				<img src="" style="height: 502px;">
			</div>
			<div class="details-data"></div>
		</div>
	</div>
	<!--好评-->
	<div class="comment-parent">
	</div>
	<!--中评-->
	<div class="comment-parent">
	</div>
	<!--差评-->
	<div class="comment-parent">
	</div>
	<!--当前评论-->
	<div class="comment-parent">
	</div>
</div>

<script>
	
    $('.home-section .eva-comment .productDetafr .pro-comment div.Consultation a').on('click',function(){
        $(this).parents('.bottom').find('.up-img').show().parents('.bottom').find('.up-img img').attr('src',$(this).find('img').attr('src'));
    });
</script>