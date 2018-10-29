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
        <div class="person-section clearfix">
    <!--左分类-->
    <div class="ficationFl fl">
        <dl data="false" <?php if($active == 2): ?>class="active"<?php endif; ?>>
            <dt class="clearfix">
                <em class="fl"></em>
                <span class="fl">订单中心</span>
            </dt>
            <dd>
                <a href="<?php echo U('Order/order_myorder',['active'=>2]);?>">·&nbsp;&nbsp;我的订单</a>
            </dd>
            <?php if((member_status == '1') Or (member_status == '2')): ?><dd>
                    <a href="<?php echo U('OrderGroup/order_group',['active'=>2]);?>">·&nbsp;&nbsp;团购订单</a>
                </dd><?php endif; ?>
            <dd>
                <a href="<?php echo U('Order/cancel_order_record',['active'=>2]);?>">·&nbsp;&nbsp;取消订单记录</a>
            </dd>
        </dl>
        <dl data="false" <?php if($active == 1): ?>class="active"<?php endif; ?> >
            <dt class="clearfix">
                <em class="fl"></em>
                <span class="fl">资产中心</span>
            </dt>
            <dd>
                <a href="<?php echo U('Assets/balance',['active'=>1]);?>">·&nbsp;&nbsp;余额</a>
            </dd>
            <dd>
                <a href="<?php echo U('Cart/goods',['active'=>1]);?>">·&nbsp;&nbsp;我的购物车</a>
            </dd>
            <dd>
                <a href="<?php echo U('Assets/myCollection',['active'=>1]);?>">·&nbsp;&nbsp;我的收藏</a>
            </dd>
            <dd>
                <a href="<?php echo U('Assets/myComment',['active'=>1]);?>">·&nbsp;&nbsp;我的评价</a>
            </dd>
            <dd>
                <a href="<?php echo U('Assets/coupon',['active'=>1]);?>">·&nbsp;&nbsp;优惠券</a>
            </dd>
            <dd>
                <a href="<?php echo U('Assets/integral',['active'=>1]);?>">·&nbsp;&nbsp;积分</a>
            </dd>
            <dd>
                <a href="<?php echo U('Assets/punkte',['active'=>1]);?>">·&nbsp;&nbsp;积分兑换</a>
            </dd>
            <dd>
                <a href="<?php echo U('Assets/gekauft',['active'=>1]);?>">·&nbsp;&nbsp;我购买过的产品</a>
            </dd>
            <dd>
                <a href="<?php echo U('Assets/myTracks',['active'=>1]);?>">·&nbsp;&nbsp;浏览足迹</a>
            </dd>
        </dl>
        <dl data="false" <?php if($active == 3): ?>class="active"<?php endif; ?> >
            <dt class="clearfix">
                <em class="fl"></em>
                <span class="fl">财务中心</span>
            </dt>
            <dd>
                <a href="<?php echo U('Finance/my_invoice',['active'=>3]);?>">·&nbsp;&nbsp;我的发票</a>
            </dd>
            <?php if((member_status == '1') Or (member_status == '2')): ?><dd>
                    <a href="<?php echo U('Finance/my_shipment',['active'=>3]);?>">·&nbsp;&nbsp;我的发货</a>
                </dd>
                <dd>
                    <a href="<?php echo U('Finance/my_payment',['active'=>3]);?>">·&nbsp;&nbsp;我的付款</a>
                </dd>
                <dd>
                    <a href="<?php echo U('Finance/other_orders',['active'=>3]);?>">·&nbsp;&nbsp;其他订单</a>
                </dd>
                <dd>
                    <a href="<?php echo U('Finance/closed_order',['active'=>3]);?>">·&nbsp;&nbsp;已出兑账单</a>
                </dd>
                <dd>
                    <a href="<?php echo U('Finance/outstanding_order',['active'=>3]);?>">·&nbsp;&nbsp;未出兑账单</a>
                </dd><?php endif; ?>
        </dl>
        <!--<dl data="false" <?php if($active == 4): ?>class="active"<?php endif; ?> >-->
            <!--<dt class="clearfix">-->
                <!--<em class="fl"></em>-->
                <!--<span class="fl">特色业务</span>-->
            <!--</dt>-->
            <!--<dd>-->
                <!--<a href="<?php echo U('SpecialBusiness/enterprise_group',['active'=>4]);?>">·&nbsp;&nbsp;企业团购</a>-->
            <!--</dd>-->
            <!--<dd>-->
                <!--<a href="<?php echo U('SpecialBusiness/purchase_requisition',['active'=>4]);?>">·&nbsp;&nbsp;采购需求单</a>-->
            <!--</dd>-->
            <!--<dd>-->
                <!--<a href="<?php echo U('SpecialBusiness/join_application',['active'=>4]);?>">·&nbsp;&nbsp;加盟申请</a>-->
            <!--</dd>-->
            <!--<dd>-->
                <!--<a href="<?php echo U('SpecialBusiness/printer_rental',['active'=>4]);?>">·&nbsp;&nbsp;打印机租赁</a>-->
            <!--</dd>-->
        <!--</dl>-->
        <dl data="false" <?php if($active == 5): ?>class="active"<?php endif; ?>>
            <dt class="clearfix">
                <em class="fl"></em>
                <span class="fl">商品中心</span>
            </dt>
            <dd>
                <a href="<?php echo U('GoodsCenter/goods_search',['active'=>5]);?>">·&nbsp;&nbsp;商品搜索</a>
            </dd>
        </dl>
        <dl data="false" <?php if($active == 6): ?>class="active"<?php endif; ?>>
            <dt class="clearfix">
                <em class="fl"></em>
                <span class="fl">客户服务</span>
            </dt>
            <dd>
                <a href="<?php echo U('Service/return_repair',['active'=>6]);?>">·&nbsp;&nbsp;返修退换货</a>
            </dd>
            <dd>
                <a href="<?php echo U('Service/after_sale',['active'=>6]);?>">·&nbsp;&nbsp;售后管理</a>
            </dd>
            <dd>
                <a href="<?php echo U('Service/advisoryReply',['active'=>6]);?>">·&nbsp;&nbsp;咨询回复</a>
            </dd>
            <dd>
                <a href="<?php echo U('Service/opinion',['active'=>6]);?>">·&nbsp;&nbsp;意见建议</a>
            </dd>
            <!--<dd>-->
                <!--<a href="<?php echo U('Service/repair_choice',['active'=>6]);?>">·&nbsp;&nbsp;上门维修服务</a>-->
            <!--</dd>-->
            <dd>
                <a href="<?php echo U('Service/announcement',['active'=>6]);?>">·&nbsp;&nbsp;网站公告</a>
            </dd>
            <dd>
                <a href="<?php echo U('Service/report_center',['active'=>6]);?>">·&nbsp;&nbsp;投诉中心</a>
            </dd>
        </dl>
        <dl data="false" <?php if($active == 7): ?>class="active"<?php endif; ?>>
            <dt class="clearfix">
                <em class="fl"></em>
                <span class="fl">用户设置</span>
            </dt>
            <dd>
                <a href="<?php echo U('UserSet/address',['active'=>7]);?>">·&nbsp;&nbsp;收货地址</a>
            </dd>
            <?php if((member_status == '1') Or (member_status == '2')): ?><dd>
                    <a href="<?php echo U('UserSet/enterprise',['active'=>7]);?>">·&nbsp;&nbsp;企业信息</a>
                </dd><?php endif; ?>
            <dd>
                <a href="<?php echo U('UserSet/security',['active'=>7]);?>">·&nbsp;&nbsp;安全设置</a>
            </dd>
        </dl>
        <dl data="false" <?php if($active == 8): ?>class="active"<?php endif; ?>>
            <dt class="clearfix">
                <em class="fl"></em>
                <span class="fl">个人资料</span>
            </dt>
            <dd>
                <a href="<?php echo U('UserData/user_data',['active'=>8]);?>">·&nbsp;&nbsp;个人资料</a>
            </dd>
            <dd>
                <a href="<?php echo U('UserData/bind_account',['active'=>8]);?>">·&nbsp;&nbsp;账号绑定</a>
            </dd>
            <!--<dd>-->
                <!--<a href="<?php echo U('UserData/special_application',['active'=>8]);?>">·&nbsp;&nbsp;申请账期支付</a>-->
            <!--</dd>-->
        </dl>
        <dl data="false" <?php if($active == 9): ?>class="active"<?php endif; ?>>
            <dt class="clearfix">
                <em class="fl"></em>
                <span class="fl">分销中心</span>
            </dt>
            <dd>
                <a href="<?php echo U('Distribution/index',['active'=>9]);?>">·&nbsp;&nbsp;.分销记录</a>
            </dd>
            <dd>
                <a href="<?php echo U('Distribution/MyTeam',['active'=>9]);?>">·&nbsp;&nbsp;.我的团队</a>
            </dd>
        </dl>
        <!--<dl data="false">
    <dt class="clearfix">
        <em class="fl"></em>
        <span class="fl">分销中心</span>
    </dt>
    <dd>
        <a href="<?php echo U('Distribution/index');?>">·&nbsp;&nbsp;.分销记录</a>
    </dd>
    <dd>
        <a href="<?php echo U('Distribution/MyTeam');?>">·&nbsp;&nbsp;.我的团队</a>
    </dd>
</dl>-->

    </div>

		<!--内容-->
		<div class="mordrMain fr">
			<div class="title clearfix">
				<ul class="clearfix fl">
					<li class="fl <?php if($status == '0'): ?>hover<?php endif; ?>"><a href="<?php echo U('Order/order_myorder');?>">所有订单 (<i><?php echo ($count["count"]); ?></i>)</a></li>
					<li class="fl <?php if($status == '1'): ?>hover<?php endif; ?>"><a href="<?php echo U('Order/paymentForlist');?>">待付款(<i><?php echo ($count["payment_count"]); ?></i>)</a></li>
					<li class="fl <?php if($status == '5'): ?>hover<?php endif; ?>"><a href="<?php echo U('Order/shipped');?>">待发货(<i><?php echo ($count["delivery_count"]); ?></i>)</a></li>
					<li class="fl <?php if($status == '2'): ?>hover<?php endif; ?>"><a href="<?php echo U('Order/receiptOfGoods');?>">待收货(<i><?php echo ($count["receiving_count"]); ?></i>)</a></li>
					<li class="fl <?php if($status == '3'): ?>hover<?php endif; ?>"><a href="<?php echo U('Order/paymentsWaite');?>">待评价(<i><?php echo ($count["comment_count"]); ?></i>)</a></li>
					<li class="fl <?php if($status == '6'): ?>hover<?php endif; ?> active"><a href="<?php echo U('Order/ReturnPrice');?>">退款(<i><?php echo ($count["return_count"]); ?></i>)</a></li>
				</ul>
				<a href="<?php echo U('Order/order_recycle_bin');?>" class="recovery fr clearfix">
					<em class="fl"></em>
					<span class="fr">订单回收站（<b><?php echo ($count["recycle_count"]); ?></b>）</span>
				</a>
			</div>
			<!--订单搜索范围查找-->
			<form action="<?php echo U('Order/search_order');?>" method="post" class="form">
				<div class="rangeSearch">
					<div class="search clearfix">
						<input type="text" name="name" class="fl t" id="name" placeholder="请输入商品标题或者订单编号进行搜索">
						<input type="button" value="订单搜索" class="fl b" id="search" onclick="check_order()">
						<div class="cndo fl">
							<h2 class="clearfix">
								<span class="fl">精简筛选条件</span>
								<em class="fl"></em>
							</h2>
						</div>
					</div>
					<div class="more-part clearfix">
						<div class="fl type clearfix">
							<span class="fl">订单类型</span>
							<select name="type" id="" class="fl typeCh">
								<option>全部</option>
							</select>
						</div>
						<div class="fl dealTimer clearfix">
							<span class="fl">成交时间</span>
							<input type="text" name="control_date" id="control_date" placeholder="请选择开始时间范围" class="fl">
							<em class="fl">-</em>
							<input type="text" name="control_date2" id="control_date2" placeholder="请选择结束时间范围" class="fl">
						</div>
						<script>
							$('.mordrMain .rangeSearch .more-part  .dealTimer input').on('focus',function(){
								new Calendar().show(this);
							}).on('blur',function(){
								new Calendar().show();
							});
							
						</script>
						<div class="fl type clearfix">
							<span class="fl">交易状态</span>
							<select name="trans" id="" class="fl typeCh">
								<option value="">全部</option>
								<option value="11">待付款</option>
								<option value="1">已付款</option>
								<option value="3">已发货</option>
								<option value="4">已收货</option>
								<option value="5">退款中的订单</option>
							</select>
						</div>
						<div class="fl type clearfix" style="margin-left:100px;">
							<span class="fl">评价状态</span>
							<select name="comment" id="" class="fl typeCh">
								<option value="">全部</option>
								<option value="2">待评价</option>
								<option value="1">已评价</option>
							</select>
						</div>
					</div>
				</div>
            </form>

			<!--宝贝交易状态-->
			<ol class="clearfix tradingStatus">
				<li class="fl one">宝贝</li>
				<li class="fl two">单价</li>
				<li class="fl three">数量</li>
				<li class="fl four">商品操作</li>
				<li class="fl four">实付款</li>
				<li class="fl five">交易状态</li>
				<li class="fl four">交易操作</li>
			</ol>
			<!--订单-->
			<?php if(empty($data)): ?><div style="width:100%;text-align:center;font-size:30px;color:red;">亲!暂时没有数据!</div>
			<?php else: ?>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="myderCentent" id="del<?php echo ($vo["order_id"]); ?>">
					<div class="ctitle clearfix">
						<label class="fl">
							<input type="checkbox">
							<span><?php echo (date("Y-m-d",$vo["create_time"])); ?></span>
						</label>
						<span class="fl sPent">
							<em>订单号：</em>
							<em><?php echo ($vo["order_sn_id"]); ?></em>
						</span>
						<?php if(($vo["order_status"] == '4') OR ($vo["order_status"] == '9')): ?><i class="fr del" data-value="<?php echo ($vo["order_id"]); ?>"></i><?php endif; ?>

						<div class="fr clearfix conFr">
							<div class="four fl">
								<span>总价格:￥<?php echo ($vo["price_sum"]); ?></span>
								<span>(含运费：￥<?php echo ($vo["shipping_monery"]); ?>)</p>
							</div>
							<?php if($vo["order_status"] == '0'): if($vo["order_type"] == '0'): ?><div class="five fl">
										<span>等待买家付款</span>
										<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
									</div>
									<div class="five fl details">
										<a href="javascript:;" class="hover" onclick="cancel(<?php echo ($vo['order_id']); ?>)">取消订单</a>
										<a href="<?php echo U('PayOrder/payOrder',array('order_id'=>$vo['order_id']));?>" class="payment">立即支付</a>
									</div><?php endif; ?>
								<?php if($vo["order_type"] == '1'): ?><div class="five fl">
										<span>货到付款</span>
										<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
									</div>
									<div class="five fl details">
										<a href="javascript:;" class="hover" onclick="cancel(<?php echo ($vo['order_id']); ?>)">取消订单</a>
										<a href="javascript:;" class="convertible">货到付款</a>
									</div><?php endif; ?>
							<?php elseif($vo["order_status"] == '-1'): ?>
                                <div class="five fl">
									<span>订单已取消</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="javascript:;" class="convertible">已取消</a>
								</div>
							<?php elseif($vo["order_status"] == '1'): ?>
                                <div class="five fl">
									<span>等待发货</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="javascript:;" class="convertible">已支付</a>
								</div>
							<?php elseif($vo["order_status"] == '2'): ?>
                                <div class="five fl">
									<span>等待发货</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="javascript:;" class="convertible">待发货</a>
								</div>
							<?php elseif($vo["order_status"] == '3'): ?>
                                <div class="five fl">
									<span>已发货</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="<?php echo U('Order/logistics',array('id'=>$vo['order_id']));?>" class="hover">查看物流</a>
									<a href="javascript:;" class="confirm receipt" data-value="<?php echo ($vo["order_id"]); ?>">待收货</a>
								</div>
							<?php elseif($vo["order_status"] == '4' and $vo["comment_status"] == '0'): ?>
                                <div class="five fl">
									<span>交易成功</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="<?php echo U('Order/comment_select_goods',array('id'=>$vo['order_id']));?>" class="convertible">待评价</a>
								</div>
							<?php elseif($vo["order_status"] == '4' and $vo["comment_status"] == '1'): ?>
                                <div class="five fl">
									<span>交易成功</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="javascript:;" class="convertible">已评价</a>
								</div>
							<?php elseif($vo["order_status"] == '5'): ?>
								<div class="five fl">
									<span>退款审核中</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
								    <a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="hover">查看退单</a>
									<a href="javascript:;" class="hover">退款审核中</a>
								</div>
							<?php elseif($vo["order_status"] == '6'): ?>
								<div class="five fl">
									<span>审核失败</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="hover">查看退单</a>
									<a href="javascript:;" class="convertible">审核失败</a>
								</div>	
							<?php elseif($vo["order_status"] == '7'): ?>
								<div class="five fl">
									<span>审核成功</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="hover">查看退单</a>
									<!--<a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="hover">添加退货物流信息</a>-->
									<a href="javascript:;" class="convertible">审核成功</a>
								</div>
							<?php elseif($vo["order_status"] == '8'): ?>
								<div class="five fl">
									<span>等待退款</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
								    <a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="hover">查看退单</a>
									<a href="javascript:;" class="convertible">等待退款</a>
								</div>
							<?php elseif($vo["order_status"] == '9'): ?>
								<div class="five fl">
									<span>退款成功</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="hover">查看退单</a>
									<a href="javascript:;" class="convertible">退款成功</a>
								</div>
							<?php else: ?>
                                <div class="five fl">
									<span>交易完成</span>
									<a href="<?php echo U('Order/order_details',array('id'=>$vo['order_id']));?>" class="hover">订单详情</a>
								</div>
								<div class="five fl details">
									<a href="<?php echo U('PayOrder/payOrder',array('order_id'=>$vo['order_id']));?>" class="payment">交易完成</a>
								</div><?php endif; ?>
						</div>
					</div>
					<div class="con clearfix">
						<div class="fl clearfix conFl">							
							<?php if(is_array($vo["goods"])): $i = 0; $__LIST__ = $vo["goods"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><div class="conLoop clearfix">
									<div class="one clearfix fl">
										<div class="imgsPt fl">
											<img src="<?php echo ($goods["images"]); ?>">
										</div>
										<div class="conRight fl">
											<a href="<?php echo U('Goods/goodsDetails',array('id'=>$goods['goods_id']));?>"><?php echo ($goods["title"]); ?></a>
											<p>商品编号：<?php echo ($goods["goods_id"]); ?></p>
										</div>
									</div>
									<div class="two fl">￥<?php echo ($goods["goods_price"]); ?></div>
									<div class="three fl"><?php echo ($goods["goods_num"]); ?></div>
									<div class="four fl">
										    <?php if(($vo["order_status"] == '4') OR ($vo["order_status"] == '2')OR ($vo["order_status"] == '3')OR ($vo["order_status"] == '1')): ?><a href="<?php echo U('Service/return_goods',array('goods_id'=>$goods['goods_id'],'order_id'=>$vo['order_id']));?>" class="hover">申请售后</a><br/>
											<?php elseif(($goods["status"] == '5') OR ($goods["status"] == '6') OR ($goods["status"] == '7') OR ($goods["status"] == '8') OR ($goods["status"] == '9')): ?>
											<a href="javascript:;" class="hover">已申请售后</a><br/><?php endif; ?>
											<a href="<?php echo U('Service/report',array('goods'=>$goods['goods_id']));?>" class="hover">投诉卖家</a>
										<!-- </egt> -->
									</div>
									<div class="status fl">
									    <?php if($goods["status"] == '5'): ?><a href="javascript:;" class="payment">退款审核中</a><br><a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="tui">查看退单</a><br>
											<a href="<?php echo U('Order/buy_again',array('id'=>$goods['goods_id']));?>" class="tui">再次购买</a>
										<?php elseif($goods["status"] == '6'): ?>
											<a href="javascript:;" class="payment">审核失败</a><br><a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="tui">查看退单</a><br>
											<a href="<?php echo U('Order/buy_again',array('id'=>$goods['goods_id']));?>" class="tui">再次购买</a>
										<?php elseif($goods["status"] == '7'): ?>
											<a href="javascript:;" class="payment">审核成功</a><br>
											<a data-url="<?php echo U('Service/addExpHtml');?>" data-id="<?php echo ($vo['order_id']); ?>" onclick="openLayer.addExp(this)" class="payment">添加物流信息</a><br>
                                            <a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="tui">查看退单</a><br>
											<a href="<?php echo U('Order/buy_again',array('id'=>$goods['goods_id']));?>" class="tui">再次购买</a>
										<?php elseif($goods["status"] == '8'): ?>
											<a href="javascript:;" class="payment">退款中</a><br><a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="tui">查看退单</a><br>
											<a href="<?php echo U('Order/buy_again',array('id'=>$goods['goods_id']));?>" class="tui">再次购买</a>
										<?php elseif($goods["status"] == '9'): ?>
											<a href="javascript:;" class="payment">退款成功</a><br><a href="<?php echo U('Service/check_list',array('id'=>$vo['order_id']));?>" class="tui">查看退单</a><br>
											<a href="<?php echo U('Order/buy_again',array('id'=>$goods['goods_id']));?>" class="tui">再次购买</a>
										<?php else: ?>
											<a href="<?php echo U('Order/buy_again',array('id'=>$goods['goods_id']));?>" class="tui">再次购买</a><?php endif; ?>
									</div>
								</div>
								<?php if(is_array($goods["type1"])): $i = 0; $__LIST__ = $goods["type1"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type1): $mod = ($i % 2 );++$i;?><div class="conLoop clearfix">
										<div class="one clearfix fl">
											<div class="imgsPt fl">
												<span class="icon">赠品</span>
												<img src="<?php echo ($type1["img_url"]); ?>">
											</div>
											<div class="conRight fl">
												<a><?php echo ($type1["title"]); ?></a>
												<p>商品编号：<?php echo ($type1["goods_id"]); ?></p>
											</div>
										</div>
										<div class="two fl">￥<?php echo ($type1["goods_price"]); ?>.00</div>
										<div class="three fl"><?php echo ($type1["goods_num"]); ?></div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
								<?php if($goods["type0"] != null): ?><div class="conLoop clearfix">
									<div class="one clearfix fl">
										<div class="imgsPt fl">
											<span class="icon">赠品</span>
											<img src="<?php echo ($goods["type0"]["img_url"]); ?>">
										</div>
										<div class="conRight fl">
											<a><?php echo ($goods["type0"]["title"]); ?></a>
											<p>商品编号：<?php echo ($goods["type0"]["goods_id"]); ?></p>
										</div>
									</div>
									<div class="two fl">￥<?php echo ($goods["type0"]["goods_price"]); ?>.00</div>
									<div class="three fl"><?php echo ($goods["type0"]["goods_num"]); ?></div>
								</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
			<div class="page">				
				<?php echo ($page); ?>
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
	<div class="ui-alert-main">
		<h5 class="title clearfix">
			<i class="layui-layer-ico layui-layer-ico0 fl"></i>
			<span class="fl">订单取消申请</span>
		</h5>
		<div class="input-main clearfix">
			<span class="fl"><i>*</i>取消原因:</span>
			<div class="input-main fl"><input type="text" id="reason"></div>
		</div>
		<dl>
			<dt>温馨提示:</dt>
			<dd>·&nbsp;订单成功取消后无法恢复</dd>
			<dd>·&nbsp;该商品已服金额将返还银行卡/平台账户</dd>
			<dd>·&nbsp;拆单后取消订单,使用优惠券将不再返回</dd>
		</dl>
		<div class="drop-down clearfix">
			<label class="fl clearfix">
				<input type="radio" name="data" class="fl">
				<span class="fl">不想买了</span>
			</label>
			<label class="fl clearfix">
				<input type="radio" name="data"  class="fl">
				<span  class="fl">该商品降价了</span>
			</label>
			<label class="fl clearfix">
				<input type="radio" name="data"  class="fl">
				<span class="fl">其他渠道价格更低</span>
			</label>
			<label class="fl clearfix">
				<input type="radio" name="data" class="fl">
				<span class="fl">支付方式有误/无法支付</span>
			</label>
			<label class="fl clearfix">
				<input type="radio" name="data" class="fl">
				<span class="fl">重复下单/误下单</span>
			</label>
			<label class="fl clearfix">
				<input type="radio" name="data" class="fl">
				<span class="fl">商品买了(颜色丶尺寸丶是的撒)</span>
			</label>
			<label class="fl clearfix">
				<input type="radio" name="data" class="fl">
				<span class="fl">忘记使用优惠券</span>
			</label>
			<label class="fl">
				<input type="radio" name="data">
				<span>发票信息有误</span>
			</label>
			<label class="fl clearfix">
				<input type="radio" name="data" class="fl">
				<span class="fl">配送信息有误</span>
			</label>
			<label class="fl clearfix">
				<input type="radio" name="data" class="fl">
				<span class="fl">订单不能预计时间送达</span>
			</label>
		</div>
	</div>
<script src="http://www.shopsn.xyz/Public/Home/js/order/order.js"></script>
<script src="http://www.shopsn.xyz/Public/Home/js/service/service.js"></script>
<!-- <script src="http://www.shopsn.xyz/Public/Home/js/header.js"></script> -->
<script src="http://www.shopsn.xyz/Public/Home/js/myOrder.js"></script>	
<script src="http://www.shopsn.xyz/Public/Home/js/Calendar.js"></script>
<script>	
 $('.myderCentent .conFr').on('click','.details .receipt',function(){
    var id = $(this).attr('data-value');
        parent.layer.confirm('是否确定收货？', {
            btn: ['是','否'], //按钮
            shade: 0.5 //显示遮罩
        }, function(){
            $.post("/index.php/Home/Order/confirm_receipt", { "id": id},function(data){
                if(data == 1){
                    parent.layer.msg('收货成功!', { icon: 1, time: 1000 }, function(){
                            $("#del"+id).remove();
                        });
                }else{
                    parent.layer.msg('收货失败!', {icon: 2, time: 2000 }); 
                }
            }, "json");
        },function(){
            // $("#del"+id+" td").css('border-top','0');
            // $("#del"+id+" td").css('border-bottom','1px solid #EFEFEF');
        });
});
 //下拉
 $('.ui-alert-main .input-main .input-main input').on('focus',function(){
 	$(this).parents('.ui-alert-main').find('.drop-down').addClass('block');
 });
  $('.ui-alert-main .input-main .input-main input').on('blur',function(){
  	var _this = $(this)
 	setTimeout(function(){
 		_this.parents('.ui-alert-main').find('.drop-down').removeClass('block');
 	},200);
 });
  $('.ui-alert-main .drop-down label').on('click',function(){
  	$(this).parents('.ui-alert-main').find('.input-main input').val($(this).find('span').html())
  });

</script>


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