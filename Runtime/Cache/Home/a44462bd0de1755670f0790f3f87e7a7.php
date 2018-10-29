<?php if (!defined('THINK_PATH')) exit();?><li class="fore1 fl clearfix"><em class="fl"></em> <a href="#" onclick="JavaScript:addFavorite2()" class="fl">收藏亿速网络</a></li>
<!--位置-->
<li class="fore2 fl clearfix"><?php if(!empty($defaultData)): ?><em class="fl"></em> <span class="fl" id="location"><?php echo ($default[$model::$areaId_d]); ?></span><?php endif; ?> <a href="javascript:;" class="fl" id="switch">[切换]</a> <!--位置切换选择-->
	<dl class="cityNav">

		<dt class="clearfix">
			<span class="fl">您所在的省份可能是：</span> <a href="javascript:;" class="fl"><?php echo ($areaLocation); ?></a>
			<i class="fr cancel"></i>
		</dt>
		<?php if(!empty($siteData)): if(is_array($siteData)): foreach($siteData as $key=>$value): ?><dd class="clearfix">
					<h4 class="fl"><?php echo ($areaConfig[$key]); ?></h4>
					<div class="clearfix fl">
						<?php if(is_array($value)): foreach($value as $item=>$area): ?><a href="<?php echo ($area[$siteModel::$url_d]); ?>" class="fl"><?php echo ($area[$regModel::$name_d]); ?></a><?php endforeach; endif; ?>
					</div>
				</dd><?php endforeach; endif; endif; ?>
</dl></li>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/top/areaList.js"></script>