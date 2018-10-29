<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单中心</title>
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/payment.css">
	<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/css/page.css">
	<script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
	
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
                    <?php if($userId['user_name']!=null): ?><span class="fl"><span style="color:red;"><?php echo ($userId["user_name"]); ?></span>&nbsp;欢迎来到亿速网络！</span>
                        <a href="<?php echo U('public/logout');?>" class="fl active">【退出】</a><?php endif; ?>
                    <?php if($userId['user_name']==null): ?><span class="fl">欢迎来到亿速网络！</span>
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
							<p><a href="<?php echo U('Service/return_repair');?>">返修退换货</a></p>
							<p><a href="<?php echo U('Service/after_sale');?>">售后管理</a></p>
							<p><a href="<?php echo U('Service/advisoryReply');?>">咨询回复</a></p>
							<p><a href="<?php echo U('Service/opinion');?>">意见建议</a></p>
							<p><a href="<?php echo U('Service/repair_choice');?>">上门维修服务</a></p>
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
<!--二级头部-->
	<div class="public-header1">
		<div class="center-parent w clearfix">
			<!--logo-->
			<a href="<?php echo U('Index/index');?>" class="logo fl">
				<h2>亿速网络</h2>
				<img src="http://www.shopsn.xyz/Public/Home/img/logo_center.png">
			</a>
			<!--返回主页-->
			<div class="myHome fl">
				<h2>我的商城</h2>
				<a href="<?php echo U('Index/index');?>">返回商城首页</a>
			</div>
			<!--导航-->
			<ul class="nav clearfix fl">
				<li class="fl">
					<a href="<?php echo U('Index/index');?>">首页</a>
				</li>
				<li class="fl clearfix">
					<a href="javascript:;" class="fl">账户设置</a>
					<em class="fl"></em>
					<div class="like clearfix">
						<em></em>
						<dl class="fl">
							<dt>安全设置</dt>
							<dd><a href="<?php echo U('UserSet/password_edit');?>">修改登录密码</a></dd>
							<dd><a href="javascript:;">手机绑定</a></dd>
							<dd><a href="<?php echo U('UserSet/security_question');?>">密保问题设置</a></dd>
						</dl>
						<dl class="fl">
							<dt>个人资料</dt>
							<dd><a href="<?php echo U('UserSet/address');?>">收货地址</a></dd>
							<dd><a href="<?php echo U('UserData/user_data');?>">修改头像、昵称</a></dd>
						</dl>
						<dl class="fl">
							<dt>账号绑定</dt>
							<dd><a href="<?php echo U('userData/bind_account');?>">支付宝绑定</a></dd>
							<dd><a href="javascript:layer.msg('暂不支持');">银行卡绑定</a></dd>
							<dd><a href="javascript:layer.msg('暂不支持');">微信绑定</a></dd>
							<dd><a href="<?php echo U('userData/bind_account');?>">微博绑定</a></dd>
							<dd><a href="javascript:layer.msg('暂不支持');">分享绑定</a></dd>
						</dl>
					</div>
				</li>
				<li class="fl">
					<a href="<?php echo U('Order/logistics_message');?>">消息</a>
					<i><?php if(empty($mes_count)): ?>0<?php else: echo ($mes_count); endif; ?></i>
				</li>
			</ul>
			<!--购物车and搜索框-->
			<div class="mainRight fr clearfix">
				<!--搜索框-->
				<form  id="formsarch" action="<?php echo U('Product/ProductList');?>" method="get" class="clearfix fl search">
					<input type="hidden" name="show" value="show"/>
                    <input type="text" class="fl input" id="pp" name="keyword" value=""/>
                    <input type="hidden" id="ser-id" name="id" class="fl input" value=""/>
                    <input type="submit" class="fl btn" id="search" onmouseover="searcher()" value="搜&nbsp;索"/>
                    <div class="gg"></div>   
                </form>

				<!--购物车--> 
				<div class="home-shopping hover fl">
					<div class="home-shopping-top clearfix">
						<em class="fl"></em>
						<span class="fl"><a href="<?php echo U('Cart/goods');?>">我的购物车</a></span>
						<i class="fl"></i>
					</div>
					<div class="home-individual clearfix">
						<span class="fl"></span>
						<em class="fl" id="couts"><?php echo ($cartCount?$cartCount:0); ?></em>
						<i></i>
					</div>
					<dl class="home-shopping-up">
						<?php if($cartCount==0): ?><dt>购物车没有任何东西，赶紧选吧。</dt><?php endif; ?>
						<?php if($cartCount!=0): if(is_array($carts)): $i = 0; $__LIST__ = $carts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cart): $mod = ($i % 2 );++$i;?><dd class="clearfix active">
									<a href="javscript:;" class="fl">
										<img src="<?php echo ($cart["pic_url"]); ?>" alt="">
									</a>
									<a href="<?php echo U('Goods/goods_details',['id'=>$cart['id'],'goods_num'=>$cart['goods_num']]);?>" class="fl con">
										<?php echo ($cart["title"]); ?>
									</a>
									<strong class="fl">
										<span>￥<?php echo ($cart["price_new"]); ?></span>x<?php echo ($cart["goods_num"]); ?><br>
										<a href="javascript:;" class="dels" data="<?php echo ($cart["id"]); ?>">删除</a>
									</strong>
								</dd><?php endforeach; endif; else: echo "" ;endif; endif; ?>
					</dl>
				</div>
			</div>
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
        $('.dels').click(function(){
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
            var _id=$(ele).attr('g');
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
	
	<div class="person-section clearfix">
		<!--左分类-->
		<div class="ficationFl fl">
			<dl data="false">
				<dt class="clearfix">
					<em class="fl"></em>
					<span class="fl">订单中心</span>
				</dt>
				<dd>
					<a href="<?php echo U('Order/order_myorder');?>">·&nbsp;&nbsp;我的订单</a>
				</dd>
				<?php if((member_status == '1') Or (member_status == '2')): ?><dd>
					<a href="<?php echo U('OrderGroup/order_group');?>">·&nbsp;&nbsp;团购订单</a>
				</dd><?php endif; ?>
				<dd>
					<a href="<?php echo U('Order/cancel_order_record');?>">·&nbsp;&nbsp;取消订单记录</a>
				</dd>
			</dl>
			<dl data="false">
				<dt class="clearfix">
					<em class="fl"></em>
					<span class="fl">资产中心</span>
				</dt>
				<dd>
					<a href="<?php echo U('Assets/balance');?>">·&nbsp;&nbsp;余额</a>
				</dd>
				<dd>
					<a href="<?php echo U('Cart/goods');?>">·&nbsp;&nbsp;我的购物车</a>
				</dd>
				<dd>
					<a href="<?php echo U('Assets/myCollection');?>">·&nbsp;&nbsp;我的收藏</a>
				</dd>
				<dd>
					<a href="<?php echo U('Assets/myComment');?>">·&nbsp;&nbsp;我的评价</a>
				</dd>
				<dd>
					<a href="<?php echo U('Assets/coupon');?>">·&nbsp;&nbsp;优惠券</a>
				</dd>
				<dd>
					<a href="<?php echo U('Assets/integral');?>">·&nbsp;&nbsp;积分</a>
				</dd>
				<dd>
					<a href="<?php echo U('Assets/punkte');?>">·&nbsp;&nbsp;积分兑换</a>
				</dd>
				<dd>
					<a href="<?php echo U('Assets/gekauft');?>">·&nbsp;&nbsp;我购买过的产品</a>
				</dd>
				<dd>
					<a href="<?php echo U('Assets/myTracks');?>">·&nbsp;&nbsp;浏览足迹</a>
				</dd>
			</dl>
			<dl data="false">
				<dt class="clearfix">
					<em class="fl"></em> 
					<span class="fl">财务中心</span>
				</dt>
				<dd>
					<a href="<?php echo U('Finance/my_invoice');?>">·&nbsp;&nbsp;我的发票</a>
				</dd>				
				<?php if((member_status == '1') Or (member_status == '2')): ?><dd>
						<a href="<?php echo U('Finance/my_shipment');?>">·&nbsp;&nbsp;我的发货</a>
					</dd>
					<dd>
						<a href="<?php echo U('Finance/my_payment');?>">·&nbsp;&nbsp;我的付款</a>
					</dd>
					<dd>
						<a href="<?php echo U('Finance/other_orders');?>">·&nbsp;&nbsp;其他订单</a>
					</dd>
					<dd>
						<a href="<?php echo U('Finance/closed_order');?>">·&nbsp;&nbsp;已出兑账单</a>
					</dd>
					<dd>
						<a href="<?php echo U('Finance/outstanding_order');?>">·&nbsp;&nbsp;未出兑账单</a>
					</dd><?php endif; ?>
			</dl>
			<dl data="false">
				<dt class="clearfix">
					<em class="fl"></em>
					<span class="fl">特色业务</span>
				</dt>
				<dd>
					<a href="<?php echo U('SpecialBusiness/enterprise_group');?>">·&nbsp;&nbsp;企业团购</a>
				</dd>
				<dd>
					<a href="<?php echo U('SpecialBusiness/purchase_requisition');?>">·&nbsp;&nbsp;采购需求单</a>
				</dd>
				<dd>
					<a href="<?php echo U('SpecialBusiness/join_application');?>">·&nbsp;&nbsp;加盟申请</a>
				</dd>
				<dd>
					<a href="<?php echo U('SpecialBusiness/printer_rental');?>">·&nbsp;&nbsp;打印机租赁</a>
				</dd>
			</dl>
			<dl data="false">
				<dt class="clearfix">
					<em class="fl"></em>
					<span class="fl">商品中心</span>
				</dt>
				<dd>
					<a href="<?php echo U('GoodsCenter/goods_search');?>">·&nbsp;&nbsp;商品搜索</a>
				</dd>
			</dl>
			<dl data="false" class="active">
				<dt class="clearfix">
					<em class="fl"></em>
					<span class="fl">客户服务</span>
				</dt>
				<dd>
					<a href="<?php echo U('Service/return_repair');?>">·&nbsp;&nbsp;返修退换货</a>
				</dd>
				<dd>
					<a href="<?php echo U('Service/after_sale');?>">·&nbsp;&nbsp;售后管理</a>
				</dd>
				<dd>
					<a href="<?php echo U('Service/advisoryReply');?>">·&nbsp;&nbsp;咨询回复</a>
				</dd>
				<dd>
					<a href="<?php echo U('Service/opinion');?>">·&nbsp;&nbsp;意见建议</a>
				</dd>
				<dd>
					<a href="<?php echo U('Service/repair_choice');?>">·&nbsp;&nbsp;上门维修服务</a>
				</dd>
				<dd>
					<a href="<?php echo U('Service/announcement');?>">·&nbsp;&nbsp;网站公告</a>
				</dd>
				<dd>
					<a href="<?php echo U('Service/report_center');?>">·&nbsp;&nbsp;投诉中心</a>
				</dd>
			</dl>
			<dl data="false">
				<dt class="clearfix">
					<em class="fl"></em>
					<span class="fl">用户设置</span>
				</dt>
				<dd>
					<a href="<?php echo U('UserSet/address');?>">·&nbsp;&nbsp;收货地址</a>
				</dd>
				<?php if((member_status == '1') Or (member_status == '2')): ?><dd>
					<a href="<?php echo U('UserSet/enterprise');?>">·&nbsp;&nbsp;企业信息</a>
				</dd><?php endif; ?>
				<dd>
					<a href="<?php echo U('UserSet/security');?>">·&nbsp;&nbsp;安全设置</a>
				</dd>
			</dl>
			<dl data="false">
				<dt class="clearfix">
					<em class="fl"></em>
					<span class="fl">个人资料</span>
				</dt>
				<dd>
					<a href="<?php echo U('UserData/user_data');?>">·&nbsp;&nbsp;个人资料</a>
				</dd>
				<dd>
					<a href="<?php echo U('UserData/bind_account');?>">·&nbsp;&nbsp;账号绑定</a>
				</dd>
				<dd>
					<a href="<?php echo U('UserData/special_application');?>">·&nbsp;&nbsp;申请账期支付</a>
				</dd>
			</dl>
		</div>
		<!--内容-->
		<div class="mordrMain fr atest-content-wrap">
			<div class="title clearfix">
				<ul class="clearfix fl">
					<li class="fl hover active"><a href="javascript:;">售后管理</a></li>
				</ul>
			</div>
			<dl class="con-main">
				<dt class="clearfix">
					<span class="fl sales-nr">售后编号</span>
					<span class="fl order-nr">订单编号</span>
					<span class="fl sales-reason">售后原因</span>
					<span class="fl state">状态</span> 
					<span class="fl timer">申请时间</span>
					<span class="fl operation">操作</span>
				</dt>
				<?php if(is_array($data["res"])): $i = 0; $__LIST__ = $data["res"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dd class="clearfix">
						<span class="fl sales-nr"><?php echo ($vo["id"]); ?></span>
						<span class="fl order-nr"><?php echo ($vo["order_id"]); ?></span>
						<span class="fl sales-reason"><?php if(empty($vo["tuihuo_case"])): ?>&nbsp;<?php else: echo (substr($vo["tuihuo_case"],0,45)); endif; ?></span>
						<span class="fl state">
							<?php switch($vo["status"]): case "0": ?>审核中<?php break;?>
								<?php case "1": ?>审核失败<?php break;?>
								<?php case "2": ?>审核通过<?php break;?>
								<?php case "3": ?>退货中<?php break;?>
								<?php case "4": ?>退款中<?php break;?>
								<?php case "4": ?>完成<?php break; endswitch;?>
						</span>
						<span class="fl timer"><?php echo (date("Y-m-d H:i",$vo["create_time"])); ?></span>
						<a href="<?php echo U('Service/check_detail',array('id'=>$vo['id']));?>" class="fl operation">查看详情 </a>
					</dd><?php endforeach; endif; else: echo "" ;endif; ?>
			</dl>
			<div class="page">
				<?php echo ($data["page"]); ?>
			</div>
		</div>
		<!--右侧一键到顶 and 客服-->
		<ul class="home-tab">
	<li>
		<em></em>
		<span><?php echo ($z_count?$z_count:0); ?></span>
		<div class="userTips">
			<p>已过期的优惠券：<b><?php echo ($OverdueCoupon?$OverdueCoupon:0); ?></b></p>
			<p>使用过的优惠券：<b><?php echo ($UsedCoupon?$UsedCoupon:0); ?></b></p>
			<p>可以使用的优惠券：<b><?php echo ($UsableCoupon?$UsableCoupon:0); ?></b></p>
		</div>
	</li>
	<li>		
		<a  class="kefu-font" <?php if($userId['user_name']==null): ?>href='<?php echo U('public/login');?>'<?php else: ?>href='javascript:;' onclick='easemobim.bind({
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
	<li><a  class="kefu-font" <?php if($userId['user_name']==null): ?>href='<?php echo U('public/login');?>'<?php else: ?>href='javascript:;' onclick='easemobim.bind({
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
				var trueName = '<?php echo ($userId["user_name"]); ?>';
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
	</div>
	<!--尾部-->


<div class="public-footer">
		<div class="public-footer-top clearfix">
			<ul class="code clearfix fl">
				<li class="code-fl fl">
					<img class="lazy" src="<?php echo ($init_qr_code); ?>">
					<p>亿速网络官方微信服务号 扫一扫，享更多优惠</p>
				</li>
				<li class="code-fr fl">
					<p class="active"><?php echo ($intnet_phone); ?></p>
					<p>工作日(9:00-18:00)</p>
				</li>
			</ul>
			<div class="footer007 fl clearfix">
				<?php if(is_array($article_lists)): foreach($article_lists as $key=>$article_list): ?><dl class="fl">
						<dt><?php echo ($key); ?></dt>
						<?php if(is_array($article_list)): foreach($article_list as $key=>$article): ?><dd>
								<a href="<?php echo U('Article/articleDetails',['id'=>$article['id']]);?>"><?php echo ($article["name"]); ?></a>
							</dd><?php endforeach; endif; ?>
					</dl><?php endforeach; endif; ?>
			</div>
		</div>
		<div class="footer009">
			<img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/footer.png" alt="">
		</div>
		<div class="footer10">
			<a href="javascript:;">关于我们</a>|
			<a href="javascript:;">联系我们</a>|
			<a href="javascript:;">加盟我们</a>|
			<a href="javascript:;">商城APP</a>|
			<a href="javascript:;">友情链接</a>
		</div>
		<div class="footer10">
			<a href="javascript:;"><?php echo ($record_number); ?></a>|
			<a href="javascript:;">有任何问题请联系我们在线客服 电话：<?php echo ($intnet_phone); ?></a>
		</div>
		<div class="footer10">
			<a href="javascript:;">互联网出版许可证编号新出网证(京)字150号</a>|
			<a href="javascript:;">出版物经营许可证</a>|
			<a href="javascript:;">网络文化经营许可证京网文[2014]2148-348号</a>|
			<a href="javascript:;">违法和不良信息举报电话：4006561155</a>
		</div>
		<div class="footer10">
			<span><?php echo ($whatWen); ?></span>
		</div>
		<div class="footer11">
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/1.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/2.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/3.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/4.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/5.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/6.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/7.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/8.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/9.jpg" alt=""></a>
			<a href="javascript:;"><img class="lazy" data-original="http://www.shopsn.xyz/Public/Home/img/10.jpg" alt=""></a>
		</div>
	</div>
<script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
	<script type="text/javascript">
	var AREA_LIST_CITY = "<?php echo U('getList');?>";
	</script>
<script src="http://www.shopsn.xyz/Public/Home/js/header.js"></script>
</body>
</html>