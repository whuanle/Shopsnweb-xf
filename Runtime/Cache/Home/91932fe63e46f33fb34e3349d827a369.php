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
    <!--头部广告-->
    <!--头部广告过渡动画前-->
    <?php if($show_category): ?><div class="header-advertisement-one">
            <?php if(is_array($top_big_ad)): foreach($top_big_ad as $key=>$big_ad): ?><div class="advertisement">
                    <a data="<?php echo ($big["ad_link"]); ?>" gg="<?php echo ($big["id"]); ?>" onclick="addAd(this)" target=_blank>
                        <img src="http://www.shopsn.xyz<?php echo ($big_ad["pic_url"]); ?>" width="100%" height="100"> </a>
                        <input type="button" class="advertisement_delete" id="advertisement_delete"/>
                </div><?php endforeach; endif; ?>
            <span class="home-delete-one">x</span>
        </div>
        <div class="header-advertisement">
            <?php if(is_array($top_small_ad)): foreach($top_small_ad as $key=>$small_ad): ?><div class="advertisement">
                    <a onclick="javascript:location.href='<?php echo ($small_ad["ad_link"]); ?>'" target=_blank><img src="http://www.shopsn.xyz<?php echo ($small_ad["pic_url"]); ?>" width="100%" height="100"> </a>
                </div><?php endforeach; endif; ?>
            <span class="home-delete"></span>
        </div><?php endif; ?>
    <!--二级头部-->
    <div class="home-header">
        <div class="home-header-main clearfix">
            <!--logo-->
            <a href="<?php echo U('Index/index');?>" class="logo fl">
               <img style="max-width: 200px;" src="<?php echo ($logo_name); ?>" alt=""/>
                <h2><?php echo ($intnetTitle); ?></h2>
            </a>
            <!--搜索框-->
            <div class="home-search-parent fl">
                <div class="home-search clearfix">
                    <form  id="formsarch" action="<?php echo U('Product/ProductList');?>" method="get">
                        <input type="text" class="fl input" name="keyword" id="pp" <?php if(!empty($goods_title)): ?>value="<?php echo (msubstr($goods_title,0,40)); ?>"<?php endif; ?>/>
                        <input type="hidden" name="show" value="show"/>
                        <input type="hidden" name="id" class="fl input"  id="ser-id" value=""/>
                        <input type="submit" class="fl btn" id="search" value="搜&nbsp;索"/>
                        <div class="gg"></div>
                    </form>

                </div>
                <dl class="home-hotsearch clearfix">
                <dt class="fl">热门搜索：</dt>
                <?php if(is_array($hot_words)): foreach($hot_words as $key=>$hot_word): ?><dd class="fl"><a href="<?php echo U('Product/ProductList',['id'=>$hot_word['id']]);?>"><?php echo ($hot_word["hot_words"]); ?></a></dd><?php endforeach; endif; ?>
            </dl>
            </div>
            <!--购物车-->
            <div class="home-shopping fl">
                <div class="home-shopping-top clearfix">
                    <em class="fl"></em>
                    <span class="fl"><a href="<?php echo U('Cart/goods');?>">我的购物车</a></span>
                    <i class="fl"></i>
                </div>
                <div class="home-individual clearfix">
                    <span class="fl"></span>
                    <em class="fl" id="couts"><?php if($cartCount == true): echo ($cartCount); ?> <?php else: ?> 0<?php endif; ?></em>
                    <i></i>
                </div>
                <dl class="home-shopping-up"id="new_cart_data">
                    <?php if(empty($cartCount)): ?><dt id="cart_no">购物车没有任何东西，赶紧选吧。</dt>
                    <?php else: ?>
                        <?php if(is_array($carts)): $i = 0; $__LIST__ = $carts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart): $mod = ($i % 2 );++$i; if($cart['buy_type']==1): ?><dd class="clearfix active">
                                <a href="javscript:;" class="fl">
                                    <img src="<?php echo ($cart["pic_url"]); ?>" alt="">
                                </a>
                                <a href="<?php echo U('Goods/goodsDetails',['id'=>$cart['goods_id'],'goods_num'=>$cart['goods_num']]);?>" class="fl con">
                                    <?php echo ($cart["title"]); ?>
                                </a>
                                <strong class="fl">
                                    <span>￥<?php echo ($cart["price_new"]); ?></span>x<?php echo ($cart["goods_num"]); ?><br>
                                    <a href="javascript:;" class="dels" data="<?php echo ($cart["id"]); ?>">删除</a>
                                </strong>
                            </dd><?php endif; ?>
                            <?php if($cart['buy_type']==2): ?><dd class="clearfix active">
                                    <a href="javscript:;" class="fl">

                                    </a>
                                    <a href="<?php echo U('Cart/goods');?>" class="fl con">
                                        套餐
                                    </a>
                                    <strong class="fl">
                                        <span>￥<?php echo ($cart["price_new"]); ?></span><br>
                                        <a href="javascript:;" class="dels" data="<?php echo ($cart["id"]); ?>">删除</a>
                                    </strong>
                                </dd><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                </dl>
            </div>
            <!--二维码-->
            <div class="fr home-code"></div>
        </div>
    </div>

    <!--二级导航-->
    <div class="homeNavBar">
        <div class="w clearfix" style="z-index:2;">
            <dl <?php if($show_category): ?>class="fl level homeNavBar-index"<?php else: ?> class="fl level paperone"<?php endif; ?>>
                <dt class="clearfix">
                    <i class="fl"></i>
                    <span class="fl">全部商品分类</span>
                    <em class="fl"></em>
                </dt>
                <?php if(is_array($goods_categories)): foreach($goods_categories as $key=>$top_cat): if(($top_cat["fid"]) == "0"): ?><dd class="menu">
                            <div class="clearfix">
                                <i class="fl <?php echo ($top_cat["css_class"]); ?>"></i>
                                <span class="fl"><a href="<?php echo U('Product/ProductList',['cid'=>$top_cat['id']]);?>"><?php echo ($top_cat["class_name"]); ?></a></span>
                                <em class="fr"></em>
                            </div>
                            <div class="i-mc">
                                <?php if(is_array($goods_categories)): foreach($goods_categories as $key=>$second_cat): if(($second_cat["fid"]) == $top_cat["id"]): ?><dl class="classification2 clearfix">
                                            <dt class="fl">
                                                <a href="<?php echo U('Product/ProductList',['cid'=>$second_cat['id']]);?>"><?php echo ($second_cat["class_name"]); ?>&nbsp;<b>></b></a>
                                            </dt>
                                            <dd class="fl clearfix">
                                                <?php if(is_array($goods_categories)): foreach($goods_categories as $key=>$third_cat): if(($third_cat["fid"]) == $second_cat["id"]): ?><a href="<?php echo U('Product/ProductList',['cid'=>$third_cat['id']]);?>" class="fl">
                                                                <?php echo ($third_cat["class_name"]); ?>
                                                            </a><?php endif; endforeach; endif; ?>
                                            </dd>
                                        </dl><?php endif; endforeach; endif; ?>
                            </div>
                        </dd><?php endif; endforeach; endif; ?>
                </dd>
            </dl>
            <ul class="fr clearfix navitems-2016">
                <!--<li class="fl"><a href="http://www.shopsn.xyz">首页</a></li>-->
                <?php if(is_array($navs)): foreach($navs as $key=>$nav): ?><li class="fl">
                        <a <?php if($nav['link']==$nowurl): ?>class="active"<?php endif; ?> href="<?php echo ($nav["link"]); ?>"><?php echo ($nav["nav_titile"]); ?></a>
                        <?php if($nav["type"] == 1): ?><span><img src="http://www.shopsn.xyz/Public/Home/img/new1.gif" alt=""></span><?php endif; ?>
                    </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </div>

    <!--ajax商品搜索功能-->
    <script>
        var _this = null;
        var clear = null;
        var timer = null;
        $('#pp').on('input',function(){
            _this = $(this);
            clearInterval(clear);
            clear = setTimeout(function(){
                var _url ="<?php echo U('Goods/search');?>";
                var _data = _this.val();
                $.post(_url,{title:_data},function(data){
                    if(data.status==0){
                        /*	layer.msg(data.message);*/
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
                    $('input[name="id"]').val(_a[0].id);
                    if(data.status==2){
                        $('.gg').html('');
                    }
                },'json')
            },300);
        }).on('keydown',function(ev){
            if(ev.keyCode == 13){
                if($(this).val() == ''){
                    alert('搜索不能为空！');
                }else{
                    clearTimeout(timer);
                    timer = setTimeout(function(){
                        $('#pp').parents('form').submit();
                    },800);
                }
                return false;
            }
            ev.stopPropagation();
        });
    </script>
    <!--ajax删除购物车里面的商品-->
    <script>
        $('#new_cart_data').on('click','.dels',function(){
            var _url="<?php echo U('Goods/dels');?>";
            var _id=$(this).attr('data');
            $.post(_url,{id:_id},function(data){
                if(data.status==0){
                    layer.msg(data.message);
                }
            })
            var _count=parseInt($('#couts').html());
            $(this).parent().parent().remove('dd');
            $('#couts').html(_count-1);
        })
    </script>
    <!--搜索跳转-->
    <!--<script>
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
    </script>-->
    <script>
        function addAd(ele){
            var _id=$(ele).attr('gg');
            var _reurl=$(ele).attr('data');
            var _locatUrl="<?php echo U('Ad/addhit');?>";
            $.post(_locatUrl, {id:_id},function(data){
                console.log(data.msg);
            },'JSON')
            window.location.href=_reurl;
        }
    </script>
   <script>
       $("#formsarch").submit(function(){
           $("#ser-id").remove();
       });

   </script>
 

 

	
<!--头部-->
<div class="home-section">

	<!--Banner-->
	<div class="integraM-content-wrap">
		<div class="brasp-banner w clearfix">
			<div class="main-left fl">
				<div class="portrait">
					<img src="<?php echo ((isset($user['user_header']) && ($user['user_header'] !== ""))?($user['user_header']):'http://www.shopsn.xyz/Public/Home/img/user_avatar.png'); ?>">
				</div>
				<div class="detailed clearfix">
				 <?php if($user): ?><h2 class="name fl">Dear：
					<?php if(empty($user['nick_name'])): echo ($user['user_name']); ?>
						<?php else: ?>
						<?php echo ($user['nick_name']); endif; ?>
					</h2>
					<span class="state fl">欢迎回来</span>
					<span class="integral fl">积分</span>
					<em class="fl"><?php echo ((isset($user["integral"]) && ($user["integral"] !== ""))?($user["integral"]):0); ?></em>
				<?php else: ?>
					<a href="<?php echo U('/Home/public/login');?>"><span class="state fl">请登录</span></a><?php endif; ?>
				</div>
				<ul class="link">
					<li>
						<a href="#we_change" class="clearfix">
							<em class="fl">·</em>
							<span class="fl">我能兑换</span>
							<i class="fr">></i>
						</a>
					</li>
					<li>
						<a href="<?php echo U('about');?>" class="clearfix">
							<em class="fl">·</em>
							<span class="fl">兑换须知</span>
							<i class="fr">></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="main-right fr">
				<div class="banner">
					<ul class="solid">
					<?php if(is_array($ads)): foreach($ads as $key=>$vo): ?><li><a onclick="addAd(this)" data="<?php echo ($vo['ad_link']); ?>" gg="<?php echo ($vo['id']); ?>" href="javascript:;"><img src="<?php echo ($vo['pic_url']); ?>" width="980" height="364"></a></li><?php endforeach; endif; ?>
					</ul>
					<div class="page"></div>
					<a href="javascript:;" class="btn-left"><</a>
					<a href="javascript:;" class="btn-right">></a>
				</div>
				<dl class="clearfix">
					<dt class="fl">按分值浏览 :</dt>
					<dd class="fl"><a href="<?php echo U('goods', ['min'=>0, 'max'=>1000]);?>">0-1000</a></dd>
					<dd class="fl"><a href="<?php echo U('goods', ['min'=>1000, 'max'=>2000]);?>">1000-2000</a></dd>
					<dd class="fl"><a href="<?php echo U('goods', ['min'=>2000, 'max'=>3000]);?>">2000-3000</a></dd>
					<dd class="fl"><a href="<?php echo U('goods', ['min'=>3000, 'max'=>5000]);?>">3000-5000</a></dd>
					<dd class="fl"><a href="<?php echo U('goods', ['min'=>5000, 'max'=>10000]);?>">5000-10000</a></dd>
					<dd class="fl"><a href="<?php echo U('goods', ['min'=>10000, 'max'=>20000]);?>">10000-20000</a></dd>
					<dd class="fl"><a href="<?php echo U('goods', ['min'=>20000]);?>">20000以上</a></dd>
				</dl>
			</div>
		</div>
		<div class="hot-content-main w">
			<div class="title">
				<h2><span>热兑商品</span>排行榜</h2>
				<p>购商品返积分，聚惠享不停</p>
			</div>
			<div class="con-main">
				<a href="javascript:;" class="btn-left"></a>
				<a href="javascript:;" class="btn-right"></a>
				<ul class="clearfix">

					<?php if(is_array($hot)): foreach($hot as $k=>$vo): ?><li class="fl">
<span class='branding 
<?php if($k == 0): ?>one
<?php elseif($k == 1): ?>
two
<?php elseif($k == 2): ?>
three<?php endif; ?> '></span>
							<div class="creenshot">
								<a href="javascript:;"><img src="<?php echo ($vo['pic_url']); ?>" alt="<?php echo ($vo['title']); ?>"></a>
							</div>
							<div class="products-description">
								<p><a href="javascript:;"><?php echo ($vo['title']); ?></a></p>
								<span class="integral">积分 <?php echo ($vo['integral']); ?></span>&nbsp;<span class="integral">¥ <?php echo ($vo['money']); ?></span><br>
					<input type="button" value="马上兑换" data-url="<?php echo U('cart', ['goods_id'=>$vo['goods_id']]);?>" onclick="addtocar(this)">
							</div>
						</li><?php endforeach; endif; ?>

				</ul>
			</div>
			<?php if($adm): ?><div class="banner">
				<a data="<?php echo ($adm['ad_link']); ?>" gg="<?php echo ($adm['id']); ?>" onclick="addAd(this)" href="javascript:;">
					<img src="<?php echo ($adm['pic_url']); ?>">
				</a>
			</div><?php endif; ?>
		</div>
		<div class="ex-content-main w" id="we_change">
			<div class="title">
				<h2><span>我能兑换</span>的商品</h2>
				<p>购商品返积分，聚惠享不停</p>
			</div>
			<!-- <ol class="nav1 clearfix">
				<li class="fl active">精选推荐</li>
				<li class="fl">现金＋</li>
				<li class="fl">文管用品</li>
				<li class="fl">综合文具</li>
				<li class="fl">办公用品</li>
				<li class="fl">纸品本册</li>
				<li class="fl">学生用品</li>
			</ol> -->
			<div class="nav2 clearfix">
				<dl class="clearfix fl">
					<dt class="fl">热门分类 :</dt>
					<dd class="fl active" data-url="<?php echo U('canGoods');?>">全部</dd>
					<?php if($class): if(is_array($class)): foreach($class as $key=>$vo): ?><dd class="fl" data-url="<?php echo U('canGoods', ['class'=>$vo['id']]);?>"><?php echo ($vo['class_name']); ?></dd><?php endforeach; endif; endif; ?>
				</dl>
				<a href="<?php echo U('goods');?>" class="fr">查看更多 ></a> 
			</div>
			<ul class="centent clearfix">

			<?php if(is_array($can)): foreach($can as $k=>$vo): ?><li class="fl <?php if($k%5 == 4): ?>active<?php endif; ?> ">
					<div class="creenshot">
						<a href="javascript:;"><img src="<?php echo ($vo['pic_url']); ?>" alt="<?php echo ($vo['title']); ?>"></a>
					</div>
					<div class="products-description">
						<p><a href="javascript:;"><?php echo ($vo['title']); ?></a></p>
						<span class="integral">积分 <?php echo ($vo['integral']); ?></span>
						<span class="integral">¥ <?php echo ($vo['money']); ?></span><br>
				<input type="button" value="马上兑换" data-url="<?php echo U('cart', ['goods_id'=>$vo['goods_id']]);?>" onclick="addtocar(this)">
					</div>
				</li><?php endforeach; endif; ?>

			</ul>
		</div>
	</div>

</div>
<script src="http://www.shopsn.xyz/Public/Home/js/header.js"></script>
<script src="http://www.shopsn.xyz/Public/Home/js/expansion.js"></script>
<script>
	$(function(){
		//热门排行
		var oBtnfl  = $('.integraM-content-wrap .hot-content-main .con-main .btn-left');
		var oBtnfr  = $('.integraM-content-wrap .hot-content-main .con-main .btn-right');
		var oParent = $('.integraM-content-wrap .hot-content-main .con-main');
		var oMove   = $('.integraM-content-wrap .hot-content-main .con-main ul');
		var aLi     = $('.integraM-content-wrap .hot-content-main .con-main ul li');
		var aSpan   = $('.integraM-content-wrap .hot-content-main .con-main ul .branding');
		var Width   = 1200;
		var iNow    = 0;
		var length  = parseInt(aLi.length/5) + 1;

		// 添加索引
		aLi.each(function(index,obj){
			aSpan.eq(index).html($(obj).index()+1);
		});
		oParent.on('mouseenter',function(){
			oBtnfl.addClass('active');
			oBtnfr.addClass('active');
		}).on('mouseleave',function(){
			oBtnfl.removeClass('active');
			oBtnfr.removeClass('active');
		});
		// 点击向左滚动
		oBtnfl.on('click',function(){
			iNow--;
			if (iNow < length) {
				iNow = 0;
			}
			oMove.stop().animate({left:-iNow*Width});
		}).on('mouseenter',function(){
			if(iNow <= 0){
				$(this).addClass('hover');
			}else{
				$(this).removeClass('hover');
			}
		});
		// 点击向右滚动
		oBtnfr.on('click',function(){
			iNow++;
			if (iNow >= length) {
				iNow = length-1;
				return false; 
			}
			oMove.stop().animate({left:-iNow*Width});
		});
		// 内容导航
		$('.integraM-content-wrap .nav1 li').on('mouseenter',function(){
			$('.integraM-content-wrap .nav1 li').removeClass('active').eq($(this).index()).addClass('active');
		});
		$('.integraM-content-wrap .nav2 dd').on('click',function(){
			$('.integraM-content-wrap .nav2 dd').removeClass('active').eq($(this).index()-1).addClass('active');
			requestGoods(this);
		});

		// 轮播
		$('.brasp-banner .solid li').eq(0).css('zIndex','1');
		var Length = $('.brasp-banner .solid li').length,
			iNow = 0,
			timer = null,
			_this = null,
			clear = null,
			bFlag = false;
		for(var i = 0; i < Length; i++){
			$('.brasp-banner .page').append($('<a href="javascript:;"></a>'))
		}
		$('.brasp-banner .page a').eq(0).addClass('hover');
		function move(){
			$('.brasp-banner .solid li').eq(iNow).fadeIn(600).siblings().fadeOut(600); 
			$('.brasp-banner .page a').eq(iNow).addClass('hover').siblings('a').removeClass('hover');
		}
		function block(){
			iNow++;
			if(iNow >= Length){
				iNow = 0;
			}
			move();
		}
		timer = setInterval(block,3000);
		$('.brasp-banner').on('mouseenter',function(){
			clearInterval(timer);
			$('.brasp-banner .btn-left').addClass('active');
			$('.brasp-banner .btn-right').addClass('active');
		}).on('mouseleave',function(){
			timer = setInterval(block,3000);
			$('.brasp-banner .btn-left').removeClass('active');
			$('.brasp-banner .btn-right').removeClass('active');
		});
		$('.brasp-banner .page a').on('mouseenter',function(){
			_this = $(this).index();
			clear = setTimeout(function(){
				iNow = _this;
				move();
			},100);
		}).on('mouseleave',function(){
			clearInterval(clear);
		});
		$('.brasp-banner .btn-left').on('click',function(){
			if(bFlag == true)return;
			bFlag = true;
			setTimeout(function(){
				bFlag = false;
			},600)
			iNow--;
			if(iNow <= -1){
				iNow = Length-1;
			}
			move();
		});
		$('.brasp-banner .btn-right').on('click',function(){
			if(bFlag == true)return;
			bFlag = true;
			setTimeout(function(){
				bFlag = false;
			},600)
			iNow++;
			if(iNow >= Length){
				iNow = 0;
			}
			move();
		});
	});

	// 添加到积分购物车
	function addtocar(input) {
		var href = $(input).attr('data-url');
		window.location.href = href;
	}

	// 获取分类下的产品
	function requestGoods(ele) {
		var url = $(ele).attr('data-url');
		var obj = $('.integraM-content-wrap .centent');
		$.get(url, [], function(ret){
			if (!ret) {
				layer.msg('数据加载失败!请刷新后重试');
				return false;
			}

			// 遍历插入数据
			obj.html('');
			$.each(ret, function(index, goods) {
				var li  = $('<li></li>');
				li.addClass('fl');
				var div = $('<div></div>');
				div.addClass('creenshot');
				var a   = $('<a href="javascript:;"></a>');
				var img = $('<img />');
				img.attr('src', goods.pic_url);
				img.attr('alt', goods.title);
				a.append(img);
				div.append(a);
				li.append(div);

				var div2 = $('<div></div>');
				div2.addClass('products-description');
				var p2   = $('<p></p>');
				var a2   = $('<a href="javascript:;"></a>')
				a2.text(goods.title);
				p2.append(a2);
				div2.append(p2);
				var span = $('<span></span>');
				span.addClass('integral');
				span.text('积分 '+goods.integral);
				div2.append(span);
				div2.append('<br>');
				var input = $('<input/>');
				input.attr('type', 'button');
				input.attr('value', '马上兑换');
				input.attr('data-url', '<?php echo U(cart);?>'+'/goods_id/'+goods.goods_id);
				input.attr('onclick', 'addtocar(this)');
				div2.append(input);
				li.append(div2);
				obj.append(li);
			});
		})
	}
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