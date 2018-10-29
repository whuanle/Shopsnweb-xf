<?php if (!defined('THINK_PATH')) exit();?><!--咨询-->
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/goodsDetail.css?a=<?php echo time();?>">
	<dt>商品咨询</dt>
	<dd>
		<div class="clearfix put-input">
			<input type="text" class="fl" name="<?php echo ($model::$content_d); ?>"/> 
			<input type="button" 
				value="我要提问"  onclick="GoodsObj.Consulation(this, '<?php echo U('consulationSubmit');?>')" class="fl btn">
		</div>
	</dd>
		<?php if(!empty($data['data'])): if(is_array($data['data'])): foreach($data['data'] as $key=>$value): ?><dd>
					<div class="clearfix con-title">
						<em class="fl"></em>
						<h2 class="fl"><?php echo ($value[$model::$content_d]); ?></h2>
						<span class="fr"><?php echo (date("Y-m-d H:i:s", $value[$model::$addTime_d])); ?></span>
					</div>
					<div class="clearfix centent">
						<em class="fl"></em>
						<p class="fl">
							<?php echo ($value['reply_content']); ?><span><?php echo (date("Y-m-d H:i:s", $value['reply_time'])); ?></span>
						</p>
					</div>
				</dd><?php endforeach; endif; endif; ?>
	<dd>
		<div class="pro-comment_Paging"><?php echo ($data['page']); ?></div>
	</dd>
	<script>
    $(".pagination  a").click(function(){
        var page = $(this).data('p');
        console.log(page);
        GoodsObj.ajaxGetGuess('Consultation', page, "<?php echo U('ajaxGetGoodsConsulation');?>");
    });
</script>