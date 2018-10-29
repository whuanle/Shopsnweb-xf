<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($init_key_word); ?>" />
    <meta name="description" content="<?php echo ($intnet_description); ?>" />
    <title><?php echo ($intnetTitle); ?></title>
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
    <script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
</head>
<body>
<!--头部-->
<div class="top1">
    <div class="header-2016">
        <div class="w clearfix">
            <!--头部左内容-->
            <ul class="fl" id="areaList">
              
            </ul>

            <!--头部右内容-->
            <ul class="fr clearfix nav-right">
                <li class="fl clearfix">
                    
                    <?php if(!empty($userId['user_name'])): ?><span class="fl"><span style="color:red;"><?php echo ($userId["user_name"]); ?></span>&nbsp;<?php echo C('welcome');?></span>
                        <a href="<?php echo U('public/logout');?>" class="fl active">【退出】</a>
                    <?php else: ?>
                        <span class="fl"><?php echo C('welcome');?></span>
                        <a href="<?php echo U('public/login');?>" class="fl active">【登录】</a>
                        <a href="<?php echo U('public/reg');?>" class="fl active">【注册】</a><?php endif; ?>
                </li>
                <li class="fl">
                    |<a href="<?php echo U('Order/index');?>">我的订单</a>|
                </li>
                <li class="fl customerService">
                    <a href="<?php echo U('Order/index');?>">个人中心<i></i></a>
                    <div>
                        <p><a href="<?php echo U('UserData/user_data');?>">我的信息</a></p>
                        <p><a href="<?php echo U('Order/order_myorder');?>">我的订单</a></p>
                        <p><a href="<?php echo U('Assets/coupon');?>">我的优惠券</a></p>
                        <p><a href="<?php echo U('Assets/myCollection');?>">我的收藏</a></p>
                        <p><a href="<?php echo U('Assets/integral');?>">我的积分</a></p>
                    </div>
                </li>
                <li class="fl clearfix mobile">
                    <span class="fl">|</span>
                    <div class="mobile-phone fl">
                        <b></b>
                        <s></s>
                    </div>
                    <a href="javascript:;" class="fl">APP下载</a>
                </li>
                <li class="fl customerService">
                    |<a href="javascript:;">客户服务<i></i></a>|
                    <div>
                        <!--<p><a href="<?php echo U('Service/return_repair');?>">返修退换货</a></p>-->
                        <p><a href="<?php echo U('Service/after_sale');?>">售后管理</a></p>
                        <p><a href="<?php echo U('Service/advisoryReply');?>">咨询回复</a></p>
                        <p><a href="<?php echo U('Service/opinion');?>">意见建议</a></p>
                        <!--<p><a href="<?php echo U('Service/repair_choice');?>">上门维修服务</a></p>-->
                        <p><a href="<?php echo U('Service/announcement');?>">网站公告</a></p>
                        <p><a href="<?php echo U('Service/report_center');?>">投诉中心</a></p>
                    </div> 
                </li>
                <li class="fl customerService">
                    <a href="javascript:;">网站导航<i></i></a>
                    <div>
                        <p><a href="<?php echo U('UserData/user_data');?>">我的信息</a></p>
                        <p><a href="<?php echo U('Order/order_myorder');?>">我的订单</a></p>
                        <p><a href="<?php echo U('Assets/coupon');?>">我的优惠券</a></p>
                        <p><a href="<?php echo U('Assets/myCollection');?>">我的收藏</a></p>
                        <p><a href="<?php echo U('Assets/integral');?>">我的积分</a></p>
                    </div>
                </li>
                <li class="fl telephone"><em></em><?php echo ($intnet_phone); ?></li>
            </ul>
        </div>
    </div>
</div>


<div class="home-section">
    <!--二级头部-->
    <div class="home-header">
        <div class="home-header-main clearfix">
            <!--logo-->
            <a href="/" class="logo fl">
                <img src="<?php echo ($logo_name); ?>" alt=""/>
                <h2><?php echo ($intnetTitle); ?></h2>
            </a>
            <h5 class="fl title">
                购物车
            </h5>
            <!--搜索框-->
            <div class="home-search-parent fr">
                <div class="home-search clearfix">
                    <input type="text" class="fl input" id="pp"/>
                    <input type="hidden" name="id" class="fl input" value=""/>
                    <input type="submit" class="fl btn" id="search" onmouseover="searcher()" value="搜&nbsp;索"/>
                    <div class="gg"></div> 
                </div>
                <dl class="home-hotsearch clearfix">
                    <dt class="fl">热门de搜索：</dt>
                    <?php if(is_array($hot_words)): foreach($hot_words as $key=>$hot_word): ?><dd class="fl"><a href="<?php echo U('Product/ProductList',['id'=>$hot_word['id']]);?>"><?php echo ($hot_word["hot_words"]); ?></a></dd><?php endforeach; endif; ?>
                </dl>
            </div>
        </div>
    </div>
</div>

<script>
function searcher(){
    var _url ="<?php echo U('Goods/searchOne');?>";
    var _data=$('#pp').val();
    $.post(_url,{title:_data},function(data){
        if(data.status==0){
            layer.msg(data.message);
        }
        if(data.status==1){
            $("input[name='id']").val(data.data);
        }
    })
}

$('#pp').keyup(function(){
    var _url ="<?php echo U('Goods/search');?>";
    var _data=$(this).val();
    $.post(_url,{title:_data},function(data){
        if(data.status==0){
            /*  layer.msg(data.message);*/
        }
        if(data.status==1){
            var _a=data.data;
            var _b="<?php echo U('Goods/goodsDetails');?>"
            var _html='';
            for (var i in _a){
                _html +='<div><a href="'+_b+'?id='+_a[i].id+'"> '+_a[i].title+'</a></div>';
            }
        }
        $('.gg').html(_html);
        if(data.status==2){
            $('.gg').html('');
        }
    })
});
</script>

<link rel="stylesheet" href="/Public/Home/css/goods.css">

<div class="cart w">
    <div class="cart-filter-bar clearfix">
        <div class="fl">
            <ul class="switch-cart clearfix">
                <li class="fl <?php if($type == 1): ?>active<?php endif; ?>"><a href="<?php echo U('goods', ['type'=>1]);?>">全部商品（<b><?php echo ($cart_count); ?></b>）</a></li>
                <li class="fl <?php if($type == 2): ?>active<?php endif; ?>"><a href="<?php echo U('goods', ['type'=>2]);?>">降价商品（<b><?php echo ($cart_cuts); ?></b>）</a></li>
            </ul>
        </div>
        <div class="cart-store fr">
            <span>已选商品（不含运费） <b>￥0.00</b></span>
            <input type="button" value="结算"  onclick="comfirm_now()">
        </div>
    </div>
    
    <div class="cart-main">
        <div class="cart-thead clearfix">
            <label class="fl t-checkbox"><input type="checkbox"> 全选</label>
            <span class="fl t-goods">商品信息</span>
            <span class="fl t-good">颜色</span>
            <span class="fl t-price">单价</span>
            <span class="fl t-quantity">数量</span>
            <span class="fl t-sum">金额</span>
            <span class="fl">操作</span>
        </div>
        <dl class="cart-list"  style="display: block;">
            <!-- <dt class="clearfix">
                <span class="fl">满送活动</span>
                <em class="fl">满200元,送文具大礼包一套（赠完即止）</em>
            </dt> -->

            <?php if(is_array($cart_goods)): foreach($cart_goods as $key=>$goods): ?><dd class="clearfix" data-id="<?php echo ($goods['cart_id']); ?>" data-goods-id="<?php echo ($goods['goods_id']); ?>" data-url="<?php echo U('/Home/cart/update_num');?>">
                    <div class="cart-checkbox fl">
                        <input type="checkbox">
                    </div>
                    <div class="p-goods fl clearfix">
                        <div class="p-img fl">
                            <a href="javascript:;"><img src="<?php echo ($goods["pic_url"]); ?>"></a>
                        </div>
                        <div class="p-name fl">
                            <a href="<?php echo U('/Home/goods/goodsDetails', ['id'=>$goods['goods_id']]);?>"> <?php echo ($goods["title"]); ?></a>
                        </div>
                    </div>
                    <div class="p-good fl"> 
                    <?php if(empty($goods['spec'])): echo ($goods["title"]); endif; ?>
                    <?php if(is_array($goods['spec'])): foreach($goods['spec'] as $key=>$vo): echo ($vo["name"]); ?> : <?php echo ($vo["item"]); ?><br><?php endforeach; endif; ?>
                    </div>
                    <div class="p-price fl">
                        <i>￥<?php echo ($goods["price_market"]); ?></i><br>
                        <b>￥<?php echo ($goods["price_member"]); ?></b>
                    </div>
                    <div class="p-quantity fl clearfix">
                        <a href="javascript:;" class="fl decrement <?php if($goods["goods_num"] == 1): ?>active<?php endif; ?> ">-</a>
<input type="text" class="fl" value="<?php echo ($goods["goods_num"]); ?>" onblur="update_input_number('<?php echo U('/Home/cart/update_num');?>', <?php echo ($goods['cart_id']); ?>, this, 1)">
                        <a href="javascript:;" class="fl increment">+</a>
                    </div>
                    <div class="p-sum fl">￥<em><?php echo ($goods['sum']); ?></em></div>
                    <div class="p-ops fl">
                        <a href="<?php echo U('/Home/cart/move_coll', ['act'=>'add', 'goods_id'=>$goods['goods_id']]);?>" class="cart-follow">移入收藏夹</a>
                        <a href="<?php echo U('/Home/cart/cart_del', ['cart_id'=>$goods[cart_id]]);?>" class="cart-remove">删除</a>
                    </div>
                </dd><?php endforeach; endif; ?>
        </dl>

        <dl class="cart-list package-list">
            <?php if(is_array($package_list)): foreach($package_list as $key=>$vo1): ?><dt class="clearfix"  data-url="<?php echo U('/Home/cart/update_num');?>"  data-id="<?php echo ($vo1['cart_id']); ?>">

                    <label class="checkbox-main checkbox-warp fl"><input type="checkbox">【套餐<?php echo ($key+1); ?>】</label>
                    <div class="p-quantity fl clearfix"><b>￥<?php echo ($vo1['discount']); ?></b></div>
                    <div class="search-main fl clearfix">
                        <a href="javascript:;" class="fl decrement <?php if($vo1["goods_num"] == 1): ?>active<?php endif; ?> ">-</a>
<input type="text" class="fl" value="<?php echo ($vo1['goods_num']); ?>" onblur="update_input_number('<?php echo U('/Home/cart/update_num');?>', <?php echo ($vo1['cart_id']); ?>, this, 2)">
                        <a href="javascript:;" class="fl increment">+</a>
                    </div>
                    <div class="p-sum fl">￥<em style="color: #d45558;"><?php echo ($vo1['discount_sum']); ?></em></div>
                    <div class="p-ops fl">
                        <a href="<?php echo U('/Home/cart/cart_del', ['cart_id'=>$vo1['cart_id']]);?>" class="fr delete-btn">删除</a>
                    </div>
                </dt>

                <?php if(is_array($vo1['sub'])): foreach($vo1['sub'] as $key=>$vo2): ?><dd class="clearfix" data-id="<?php echo ($vo1['cart_id']); ?>">
                    <div class="p-goods fl clearfix">
                        <div class="p-img fl">
                            <a href="<?php echo U('/Home/goods/goodsDetails', ['id' => $vo2['goods_id']]);?>"><img src="<?php echo ($vo2['pic_url']); ?>"></a>
                        </div>
                        <div class="p-name fl">
                            <a href="<?php echo U('/Home/goods/goodsDetails', ['id' => $vo2['goods_id']]);?>"><?php echo ($vo2['title']); ?></a>
                        </div>
                    </div>
                    <div class="p-good fl">
                        <?php if(empty($vo2['spec'])): echo ($vo2['title']); endif; ?>
                        <?php if(is_array($vo2['spec'])): foreach($vo2['spec'] as $key=>$vo3): echo ($vo3['name']); ?>:<?php echo ($vo3['item']); ?> &nbsp;<?php endforeach; endif; ?>
                    </div>
                    <div class="p-price fl">
                        <i>￥<?php echo ($vo2['price_member']); ?></i><br>
                        <b>￥<?php echo ($vo2['discount']); ?></b>
                    </div>
                    <div class="p-quantity fl clearfix"><?php echo ($vo1['goods_num']); ?></div>
                    <div class="p-sum fl">￥<em><?php echo ($vo2['sum']); ?></em></div>
                    <div class="p-ops fl">
                        <a href="javascript:;" class="cart-remove"></a>
                    </div>
                </dd><?php endforeach; endif; endforeach; endif; ?>
        </dl>


<!-- 
        <div class="p-single clearfix">
            <a href="javascript:;" class="fr">去凑单</a> 
            <span class="fr">再买82.00元，满200元,送文具大礼包一套（赠完即止）商品合计：<em>￥0.00</em></span> 
        </div> -->


        <!--结算浮动条-->
        <div class="ui-ceilinglamp">
            <div class="toolbar-wrap w">
                <div class="fl toolbar-left">
                    <label><input type="checkbox"> 全选</label>
                    <a href="<?php echo U('/Home/cart/cart_del');?>" onclick="return delete_many(this);" class="remove-batch">删除</a>
                    <a href="<?php echo U('/Home/cart/move_coll');?>" onclick="return move_many(this)" class="follow-batch">移入收藏夹</a>
                </div>
                <div class="fr toolbar-right">
                    <span class="fl">已选商品 <em class="active">0</em> 件合计</span>
                    <span class="fl active">（不含运费）：<em>￥</em><b>0.00</b></span>
                    <input type="button" value="结算" class="fl" onclick="comfirm_now()">
                </div>
            </div>
        </div>  
        <!--已删除商品-->
        <?php if(empty($cart_del) == false): ?><div class="cart-removed">
                <div class="r-tit">已删除商品，您可以重新购买或加关注：</div>
            <?php if(is_array($cart_del)): $i = 0; $__LIST__ = $cart_del;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="r-item clearfix">
                    <div class="r-name fl">
                        <a href="javascript:;"><?php echo ($data["title"]); ?></a>
                    </div>
                    <div class="r-price fl">¥<?php echo ($data["price_member"]); ?></div>
                    <div class="r-quantity fl"><?php echo ($data["goods_num"]); ?></div>
                    <div class="r-ops fl">
<a href="<?php echo U('/Home/cart/cart_add');?>" data-id="<?php echo ($data['goods_id']); ?>" goods-num="<?php echo ($data['goods_num']); ?>" onclick="return again(this)">重新购买</a>
<a href="<?php echo U('/Home/cart/move_coll', ['goods_id'=>$data['goods_id']]);?>">移到我的收藏夹</a>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        <?php else: ?>
            <div class="cart-removed" style="display: none;">
                <div class="r-tit">已删除商品，您可以重新购买或加关注：</div>

                <div class="r-item clearfix">
                    <div class="r-name fl">
                        <a href="javascript:;"></a>
                    </div>
                    <div class="r-price fl"></div>
                    <div class="r-quantity fl"></div>
                    <div class="r-ops fl">
                        <a href="<?php echo U('/Home/cart/cart_add');?>">重新购买</a>
                        <a href="<?php echo U('/Home/cart/move_coll');?>">移到我的收藏夹</a>
                    </div>
                </div>
            </div><?php endif; ?>

        <!--喜欢 关注-->
        <div class="guessLike">
            <ol class="clearfix nav-botm">
                <li class="fl active"><a href="javscript:;">猜你喜欢</a></li>
                <li class="fl"><a href="javscript:;">我的关注</a></li>
                <li class="fl"><a href="javscript:;">最近浏览</a></li>
            </ol>
            <div class="goods-list">
                <ul class="c-panel-main active clearfix">
                    <?php if(is_array($guessLove)): foreach($guessLove as $key=>$vo): ?><li class="fl">
                            <div class="img-pat">
                                <a href="<?php echo U('/Home/goods/goodsDetails', ['id' => $vo['id']]);?>">
                                    <img src="<?php echo ($vo["pic_url"]); ?>">
                                </a>
                            </div>
                            <p> <?php echo ($vo["title"]); ?></p>
                            <i>￥<?php echo ($vo["price"]); ?></i>
                        </li><?php endforeach; endif; ?>
                </ul>
                <ul class="c-panel-main clearfix">
                <?php if(is_array($collection)): foreach($collection as $key=>$vo): ?><li class="fl">
                        <div class="img-pat">
                            <a href="<?php echo U('/Home/goods/goodsDetails', ['id' => $vo['id']]);?>">
                                <img src="<?php echo ($vo['pic_url']); ?>">
                            </a>
                        </div>
                        <p> <?php echo ($vo['title']); ?></p>
                        <i>￥<?php echo ($vo['price']); ?></i>
                    </li><?php endforeach; endif; ?>
                </ul>
                <ul class="c-panel-main clearfix">
                    <?php if(is_array($recent)): foreach($recent as $key=>$vo): ?><li class="fl">
                            <div class="img-pat">
                                <a href="<?php echo U('/Home/goods/goodsDetails', ['id' => $vo['id']]);?>">
                                    <img src="<?php echo ($vo['pic_url']); ?>">
                                </a>
                            </div>
                            <p> <?php echo ($vo['title']); ?></p>
                            <i>￥<?php echo ($vo['price']); ?></i>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--删除-->
<div class="ui-dia-parent-t">
    <div class="ui-mask"></div>
    <div class="ui-dia">
        <div class="ui-dialog-title clearfix">
            <span class="fl"></span>
            <a href="javascript:;" class="fr"></a>
        </div>
        <div class="ui-dialog-content">
            <div class="item-fore">
                <h3></h3>
                <p></p>
            </div>
            <div class="op-btns">
                <a href="javascript:;" class="btn-2"></a>
                <a href="javascript:;" class="btn-1"></a>
            </div>
        </div>
    </div>
</div>


<script src="/Public/Home/js/shoppingCart.js"></script>
<script src="http://www.shopsn.xyz/Public/Home/js/cart/cart.js"></script>
<script type="text/javascript">
var BUILD = "<?php echo U('Settlement/cartSettlement');?>";
var delete_many_url = "<?php echo U('goods');?>";
</script>

<!--右侧一键到顶 and 客服-->
<ul class="home-tab">
	<li>
		<em></em>
		<span><?php if(empty($z_count)): ?>0 <?php else: echo ($z_count); endif; ?></span>
		<div class="userTips">
			<p>已过期的优惠券：<b><?php if(empty($OverdueCoupon)): ?>0 <?php else: echo ($OverdueCoupon); endif; ?></b></p>
			<p>使用过的优惠券：<b><?php if(empty($UsedCoupon)): ?>0 <?php else: echo ($UsedCoupon); endif; ?></b></p>
			<p>可以使用的优惠券：<b><?php if(empty($UsableCoupon)): ?>0 <?php else: echo ($UsableCoupon); endif; ?></b></p>
		</div>
	</li>
	<li>
		<a  class="kefu-font" <?php if(empty($userId['user_name'])): ?>href='<?php echo U('public/login');?>'<?php else: ?>href='javascript:;' onclick='easemobim.bind({
        //请使用自己的租户ID
         tenantId: "39449",
         //是否隐藏小的悬浮按钮
         hide: true
        })'<?php endif; ?>>客服</a>
		<div class="userTips one">

		</div>
	</li>
	<li>
		物流
		<div class="userTips one">
			<iframe name="kuaidi100" src="https://www.kuaidi100.com/frame/app/index.html?canvas_pos=600" width="600" height="360" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>

		</div>
	</li>
	<li>
		<a href="<?php echo U('Cart/goods');?>" class="kefu-font">购物车</a>
	</li>
	<li><a  class="kefu-font" <?php if(empty($userId['user_name'])): ?>href='<?php echo U('public/login');?>'<?php else: ?>href='javascript:;' onclick='easemobim.bind({
        //请使用自己的租户ID
         tenantId: "39449",
         //是否隐藏小的悬浮按钮
         hide: true
        })'<?php endif; ?>>投诉</a>
		<div class="userTips one">

		</div>
	</li>
		<script>
				window.easemobim = window.easemobim || {};
				var trueName = "<?php if(!empty($userId['user_name'])): echo ($userId["user_name"]); else: ?>''<?php endif; ?>";
				easemobim.config = {
					//访客信息，以下参数支持变量
					visitor: {
						trueName:trueName,
						qq: '',
						phone:trueName,
						companyName: '',
						userNickname:trueName,
						description: '',
						email: ''
					},
				};
			</script>
			<script src='//kefu.easemob.com/webim/easemob.js'></script>
	<li>关闭</li>
</ul>
<!--一键到顶-->
<div class="hm-go-top-parent">
	<div class="hm-go-top active"></div>
	<div class="hm-tit-top">顶部</div>
</div>


<!--尾部-->
<div class="public-footer">
	<div class="public-footer-top clearfix">
		<ul class="code clearfix fl">
			<li class="code-fl fl">
				<img width="102" height="102" src="<?php echo ($init_qr_code); ?>" alt="二维码">
				<p>亿速网络官方微信服务号 扫一扫，享更多优惠</p>
			</li>
			<li class="code-fr fl">
				<p class="active"><?php echo ($intnet_phone); ?></p>
				<p>工作日(9:00-18:00)</p>
			</li>
		</ul>
		<div class="footer007 fl clearfix">
			<?php if(is_array($article_lists)): foreach($article_lists as $key=>$article_list): ?><dl class="fl">
					<dt><?php echo (msubstr($key,0,5)); ?></dt>
					<?php if(is_array($article_list)): foreach($article_list as $key=>$article): ?><dd>
							<a href="<?php echo U('Article/articleDetails',['id'=>$article['id']]);?>"><?php echo (msubstr($article["name"],0,8)); ?></a>
						</dd><?php endforeach; endif; ?>
				</dl><?php endforeach; endif; ?>
		</div>
	</div>
	<div class="footer009">
		<img class="lazy" src="http://www.shopsn.xyz/Public/Home/img/footer.png" data-original="http://www.shopsn.xyz/Public/Home/img/footer.png" alt="">
	</div>
	<div class="footer10">
		<a href="http://test.shopsn.net">上海XXXXXXXX公司</a>
	</div>
	<div class="footer10">
		<a href="javascript:;">关于我们</a>|
		<a href="javascript:;">联系我们</a>|
		<a href="javascript:;">加盟我们</a>|
		<a href="javascript:;">商城APP</a>|
		<a href="javascript:;">友情链接</a>
	</div>
	<div class="footer11">
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/1.jpg" src="http://www.shopsn.xyz/Public/Home/img/1.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/2.jpg" src="http://www.shopsn.xyz/Public/Home/img/2.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/3.jpg" src="http://www.shopsn.xyz/Public/Home/img/3.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/4.jpg" src="http://www.shopsn.xyz/Public/Home/img/4.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/5.jpg" src="http://www.shopsn.xyz/Public/Home/img/5.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/6.jpg" src="http://www.shopsn.xyz/Public/Home/img/6.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/7.jpg" src="http://www.shopsn.xyz/Public/Home/img/7.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/8.jpg" src="http://www.shopsn.xyz/Public/Home/img/8.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/9.jpg" src="http://www.shopsn.xyz/Public/Home/img/9.jpg" alt=""></a>
		<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/10.jpg" src="http://www.shopsn.xyz/Public/Home/img/10.jpg" alt=""></a>
	</div>

	<div class="footer10">
		<span><?php echo ($str); ?>提供技术支持</span>
	</div>

</div>
<script type="text/javascript">
var AREA_LIST_CITY = "<?php echo U('getList');?>";
</script>
<script src="http://www.shopsn.xyz/Public/Home/js/header.js"></script>
<script src="http://www.shopsn.xyz/Public/Home/js/home.js"></script>

</body>
</html>