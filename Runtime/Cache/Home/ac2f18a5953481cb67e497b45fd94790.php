<?php if (!defined('THINK_PATH')) exit();?><div class="Coupon_Title">
	<h6>使用优惠</h6>
</div>
<?php if(!empty($data['notUse'])): ?><div class="Coupon_Click">
		<?php if(is_array($data['notUse'])): foreach($data['notUse'] as $key=>$value): ?><a href="javascript:;" conpouId="<?php echo ($value[$mCouponList::$id_d]); ?>" eventMonery="<?php echo ($value[$model::$money_d]); ?>" class="Selection_Selection" onclick="SettlementCoupon.ck(this, '<?php echo U('validateCouponUse');?>')">
				<div class="Selection_Selection_top">
					<input type="hidden" value="<?php echo ($value[$mCouponList::$id_d]); ?>"  name="<?php echo ($mCouponList::$id_d); ?>"/>
					<input type="hidden" value="<?php echo ($value[$mCouponList::$cId_d]); ?>" name="<?php echo ($mCouponList::$cId_d); ?>"/>
					<span class="Amount" monery="<?php echo ($value[$model::$money_d]); ?>">￥<?php echo ($value[$model::$money_d]); ?></span> <span class="Fullness">满<?php echo ($value[$model::$condition_d]); ?></span>
				</div>
				<div class="Coupon_validity">有效期至<?php echo (date("Y-m-d", $value[$model::$useEnd_time_d])); ?></div>
				<div class="Coupon_Bottom">[<?php echo ($value[$model::$name_d]); ?>] [限本网站商品]</div> 
			</a><?php endforeach; endif; ?>
	</div><?php endif; ?>
<?php if(!empty($data['alreadyUse'])): ?><div class="not_available">
		<?php if(is_array($data['alreadyUse'])): foreach($data['alreadyUse'] as $key=>$value): ?><a href="javascript:;" class="not_available_a">
				<div class="not_available_a_top">
					<span class="Amount">￥<?php echo ($value[$model::$money_d]); ?></span> <span class="Fullness">满<?php echo ($value[$model::$condition_d]); ?></span>
				</div>
				<div class="not_available_validity">有效期至<?php echo (date("Y-m-d", $value[$model::$useEnd_time_d])); ?></div>
				<div class="not_available_Bottom">[<?php echo ($value[$model::$name_d]); ?>] [限本网站商品]</div>
			</a><?php endforeach; endif; ?>
	</div><?php endif; ?>
<div class="Coupon_Summary" id="conpouMonery">
	金额抵用<span class="Coupon_Summary_erd" id="useConpon"><em>￥</em>0.00 </span> 优惠券0张，优惠<span>0.00</span>元
</div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/Coupon/coupon.js"></script>
<script type="text/javascript">
SettlementCoupon.undo();
</script>