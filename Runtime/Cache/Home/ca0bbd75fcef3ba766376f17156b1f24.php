<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo ($intnetTitle); ?></title>
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/base.css">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/style.css">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/settlement.css">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/toastr.min.css" />
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Home/css/confirm.css">
<script src="//lib.sinaapp.com/js/jquery/1.7.2/jquery.min.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/toastr.min.js"></script>
</head>
<body>

	<div class="home-section">
			<!--头部-->
	<div class="top1">
		<div class="header-2016">
			<div class="w clearfix">
				<!--头部左内容-->
				<!--头部左内容-->
				<ul class="fl" id="areaList">

				</ul>
				<!--头部右内容-->
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

		<div class="home-section">
			<!--二级头部-->
			<div class="home-header">
				<div class="home-header-main clearfix">
					<!--logo-->
					<a href="<?php echo U('Index/index');?>" class="logo fl">
					 	<img src="<?php echo ($logo_name); ?>" alt=""/>
                		<h2><?php echo ($intnetTitle); ?></h2>
					</a>
					<h5 class="fl title">结算页</h5>
					<!--搜索框-->
					<div class="home-search-parent fr">
						<div class="home-search clearfix">
							<input type="text" class="fl input" id="pp"/>
		                    <input type="hidden" name="id" class="fl input" value=""/>
		                    <input type="submit" class="fl btn" id="search" onmouseover="searcher()" value="搜&nbsp;索"/>
		                    <div class="gg"></div>
						</div>
						<dl class="home-hotsearch clearfix">
							<dt class="fl">热门搜索：</dt>
							<?php if(!empty($hot_words)): if(is_array($hot_words)): foreach($hot_words as $key=>$hot_word): ?><dd class="fl">
								<a href="javascript:;"><?php echo ($hot_word["hot_words"]); ?></a>
							</dd><?php endforeach; endif; endif; ?>
						</dl>
					</div>
				</div>
			</div>
		</div>

		
	<!--引入发票提示样式-->
	<link rel="stylesheet" type="text/css" href="http://www.shopsn.xyz/Public/Home/css/buynow.css">
	<script src="http://www.shopsn.xyz/Public/Home/js/jquery-1.7.2.min.js"></script>
	<form id="formId" method="post" action="<?php echo U('BuliderOrder');?>">
		<div class="conrm-section w">
			<div class="thisPon">
				<div class="ponState clearfix">
					<span class="fl one">1</span> <span class="fl two">2</span> <span
						class="fl three active">3</span>
				</div>
				<div class="ponTitle clearfix">
					<i class="fl l">我的购物车</i> <i class="fl c">确认订单信息</i> <i
						class="fl r active">成功提交订单</i>
				</div>
			</div>
			<!--填写核对订单信息-->
			<div class="orInfio">
				<h2 class="t">填写并核对订单信息</h2>
				<ul class="detailed">
					<li class="receipt">
						<div class="clearfix receiptCh">
							<h6 class="fl">收货人信息</h6>
							<a href="javascript:;" class="fr sd">新增加收货地址</a>
						</div>
						<div id="receive" class="receive"></div>
					</li>
					<li class="method">
						<h5>支付方式</h5>
						<div class="payment clearfix">
							<?php if(!empty($pay)): if(is_array($pay)): foreach($pay as $key=>$value): ?><span
									class='fl balance_money <?php if($value[$payModel::$isDefault_d] == 1): ?>active<?php endif; ?>'
									value="<?php echo ($value[$payModel::$id_d]); ?>"><?php echo ($value[$payModel::$typeName_d]); ?><em></em></span><?php endforeach; endif; endif; ?>
						</div>
					</li>
					<li class="distribution" id="expressData"></li>
					<li class="confirm">
						<div class="clearfix titPart">
							<h4 class="fl">确认订单信息</h4>
							<a href="<?php echo U('Cart/goods');?>" class="fr">返回修改购物车</a>
						</div>
						<div class="payment clearfix">
							<div class="subject clearfix">
    <span class="fl ition">商品信息</span> <span class="fl atte">商品属性</span> <span
        class="fl price">单价</span> <span class="fl number">数量</span> <span
        class="fl dint">优惠方式</span> <span class="fl sual"></span> <span
        class="fl sual">小计</span>
</div>
<?php if(!empty($goodsSpec)): $price = 0; ?>
    <?php $number = 0; ?>
    <?php if(is_array($goodsSpec)): foreach($goodsSpec as $key=>$value): $number = !empty($_POST['goods_num']) ? $_POST['goods_num'] : $value[$cartModel::$goodsNum_d]; ?>
        <div class="paymentCon clearfix">
            <div class="con-parent clearfix fl">
                <a href="javascript:;" class="fl position-parent"> <img
                        src="<?php echo ($value[$goodsImage::$picUrl_d]); ?>">
                </a>

                <div class="fl ition">
                    <input type="hidden"
                           name="goods_id[<?php echo ($value[$goodsModel::$id_d]); ?>][goods_price]"
                           value='<?php if(!empty($value[$goodsModel::$priceMember_d])): echo $price = $value[$goodsModel::$priceMember_d]; else: echo $price = $value[$cartModel::$priceNew_d]; endif; ?>'/>
                    <?php if(!empty($value['cart_id'])): ?><input type="hidden"
                                                                     name="cart_id[]" value="<?php echo ($value['cart_id']); ?>"/><?php endif; ?>

                    <input type="hidden"
                           name="goods_id[<?php echo ($value[$goodsModel::$id_d]); ?>][stock]"
                           value="<?php echo ($value[$goodsModel::$stock_d]); ?>"/> <input type="hidden"
                                                                            name="goods_id[<?php echo ($value[$goodsModel::$id_d]); ?>][sku]"
                                                                            value="<?php echo ($value['sku']); ?>"/> <input
                        type="hidden"
                        name="goods_id[<?php echo ($value[$goodsModel::$id_d]); ?>][<?php echo ($goodsModel::$title_d); ?>]"
                        value="<?php echo ($value[$goodsModel::$title_d]); ?>"/> <input class="goods_id" type="hidden"
                                                                         name="goods_id[<?php echo ($value[$goodsModel::$id_d]); ?>][goods_id]"
                                                                         value="<?php echo ($value[$goodsModel::$id_d]); ?>"/> <input
                        type="hidden"
                        name="goods_id[<?php echo ($value[$goodsModel::$id_d]); ?>][goods_num]"
                        value="<?php echo ($number); ?>"/> <a href="javascript:;"><?php echo ($value[$goodsModel::$description_d]); ?></a>
                </div>
            </div>
            <div class="fl atte"><?php echo ($value[$specModel::$key_d]); ?></div>
            <div class="fl price"><?php echo ($price); ?></div>
            <div class="fl number"><?php echo ($number); ?></div>
            <div class="fl dint">
                <?php if($value[$goodsModel::$status_d] == 0): ?>暂无

                    <?php else: ?>

                    <?php echo ($activityType[$value[$goodsModel::$status_d]]); ?>、<?php echo ($value['expression']); endif; ?>
            </div>
            <div class="fl sual" id="sslh"><?php echo ($price); ?></div>
        </div>

        <!--<div class="paymentCon clearfix gift gift-pid-<?php echo ($value['id']); ?> "  style="display: none;" >-->
            <!--<div style="margin-left: 10%" class="con-parent clearfix fl">-->
                <!--<a href="javascript:;" class="fl position-parent"> <img-->
                        <!--src="">-->
                <!--</a>-->
                <!--<div></div>-->
            <!--</div>-->
        <!--</div>-->
        <div class="paymentCon clearfix gift-pid-<?php echo ($value['id']); ?>" style="display: none; margin-left: 10%">
            <div class="con-parent clearfix fl">
                <a href="javascript:;" class="fl position-parent">
                    <img src=""> <span class="icon">赠品</span>
                </a>
                <div class="fl ition">
                    <a href="javascript:;"></a>
                </div>
            </div>
         </div><?php endforeach; endif; ?>

    <!--  < vo list na me=" gifts_data" i d =" gift" >
<div class="paymentCon clearfix">
	<div class="con-parent clearfix fl">
		<a href="javascript:;" class="fl position-parent"> <img
			src="{ gift.img_url}"> <span class="icon">赠品</span>
		</a>
		<div class="fl ition">
			<a href="javascript:;">{ gift. title}</a>
		</div>
	</div>
	<div class="fl atte">{ gift. new_type}</div>
	<div class="fl price">{ gift. price}.00</div>
	<div class="fl number">{ gift. gift_number}</div>
	<div class="fl dint">{g ift. discount}</div>
	<div class="fl sual" id="sslh">{ gift . Subtotal}.00</div>
</div>
</ vo list>--><?php endif; ?>
<!--订单备注-->
<div class="rderNote clearfix">
    <span class="fl">添加订单备注：</span> <input type="text" class="fl"
                                           name="<?php echo ($orderModel::$remarks_d); ?>" placeholder="提示：请勿填写有关支付、收货、发票方面的信息">
    <em class="fl"> 提示：请勿填写有关支付、收货、发票方面的信息</em>
</div>
						</div>
					</li>
					<!--满赠商品-->
					<li class="confirm" id="asd">
						<div class="clearfix titPart">
							<h4 class="fl">满赠商品(只能选择一件商品)</h4>
						</div>

					</li>
					<!--发票信息-->
					<li class="iceInion">
						<h6>发票信息</h6>
						<!--拷贝京东html代码-->
						<div class="tips-new-white">
							<b></b><span><i></i>开企业抬头发票须填写纳税人识别号，以免影响报销</span>
						</div>
						<div class="whether">
							<div id="new_a" style="display:inline">
								<?php if($invoice_data == false): ?><span>默认</span>
									<?php else: ?>
									<span style='margin-right:20px;'><?php echo ($invoice_data["invoice_type"]); ?></span><span style='margin-right:20px;'><?php echo ($invoice_data["invoice_header"]); ?></span><span><?php echo ($invoice_data["invoice_title"]); ?></span><?php endif; ?>
							</div><a
								href="javascript:;">修改</a>
						</div>
					</li>
					<input type="hidden" value="<?php echo ($invoice_info['id']); ?>" name="invoice_id">
					<li id="invoiceHTML"></li>
					<li class="Coupon" id="userConpon"></li>
				</ul>
				<div class="atmoney">
					<p>
						<b><?php echo $myNumber = empty($numberTotal) ? $_POST['goods_num'] : $numberTotal; ?></b>件商品，总商品金额：￥<em id="totalMonery"><?php echo ($totalMonery); ?></em>
					</p>
					<p>
						优惠券：<em id="whatCoupon">0.0</em>
					</p>
					<p id="shipping">
						<em>运费：￥</em>0.00
					</p>
				</div>
				<div class="total">
					<p class="one">
						<span>应付总额：</span>￥ <b id="total" style="color: #3b8ab8;font-size: 15px"><?php echo ($totalMonery); ?></b><span style="color: red;font-size: large"><br>会员折扣价:￥<?php echo ($totalMoneryDiscount); ?></span>
					</p>
					<p class="two">寄送至： <?php echo ($data[$region::$provId_d]); ?>
						<?php echo ($data[$region::$city_d]); ?> <?php echo ($data[$region::$dist_d]); ?>
						<?php echo ($data[$region::$address_d]); ?> 收货人：<?php echo ($data[$region::$realname_d]); ?>
						<?php echo substr_replace($data[$region::$mobile_d],'****',3,4);;?></p>
				</div>

				<div class="randbtn clearfix">
					<input type="hidden" name="formWhat" value="<?php echo ($_SESSION['bulidOrder']); ?>" />
					<input type="hidden" name="<?php echo ($orderModel::$wareId_d); ?>" value="<?php echo ($_POST['ware_id']); ?>" />
					<input type="hidden" id="expId" name="<?php echo ($orderModel::$expId_d); ?>" />
					<input type="hidden" id="expressType" />
					<input type="hidden" name="<?php echo ($orderModel::$shippingMonery_d); ?>" id="shippingMonery" />
					<input type="hidden" name="couponListId" id="couponListId" />
					<input type="hidden" id="payType" name="<?php echo ($orderModel::$payType_d); ?>" />
					<input type="hidden" id="addressId" name="<?php echo ($orderModel::$addressId_d); ?>" />
					<input type="hidden" id="priceMonery" name="<?php echo ($orderModel::$priceSum_d); ?>" />
					<input type="hidden" id="express" name="<?php echo ($orderModel::$freightId_d); ?>" />
					<input type="hidden" id="check" name="check" value="<?php echo ($check); ?>" /><!--防止表单多次提交验证-->

					<input type="button" onclick="InterAddress.submitOrder('formId')"
						   value="提交订单" class="fr" /> <a href="<?php echo U('Cart/goods');?>" class="fr">返回购物车</a>
					<span id="font-botton">库存以实际支付时间为准，手慢无</span>
				</div>
			</div>
		</div>
	</form>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script> <script
		type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script> <script
		type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/validateCustom.js"></script>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/Settlement.js?a=<?php echo time();?>"></script>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/confirm.js?a=<?php echo time();?>"></script>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/settlement/address.js"></script>
	<script type="text/javascript">
        var PAY_ID = <?php echo C('balanceId');?>;
        var AREA_LIST = "<?php echo U('getAreaList');?>";
        var SHIPPING  = "<?php echo U('shipping');?>";
        var COUPON	  = "<?php echo U('coupon');?>";
        var INVOICE	  = "<?php echo U('invoice');?>";
        var BALANCE   = "<?php echo U('getBalaceMoney');?>";
        var GOODS_NUM = "<?php echo ($myNumber); ?>";
        var RECEIVE   = "<?php echo U('getAreaListByUserId');?>";
        var allBox = $(":checkbox");
        var gift_url  = "<?php echo U('getGiftInfo');?>";
        var grtUrl = "<?php echo U('getaddresstype');?>";
        var CHECK = "<?php echo U('check');?>";
        allBox.click(function () {
            allBox.removeAttr("checked");
            $(this).attr("checked", "checked");
        });
	</script>
	<script type="text/javascript" src="http://www.shopsn.xyz/Public/Home/js/settlement/pay_type.js"></script>


		<!--地址编辑and新建-->
<div class="ui-dialog" id="however">
	<div class="ui-dialog-child"></div>
	<div class="consignee">
		<div class="ui-dialog-title clearfix">
			<span class="fl">新增收货人信息</span> <a href="javascript:;" class="fr"></a>
		</div>
		<div class="inPtn">
			<form id="formAddressId" method="post">
				<p class="clearfix">
					<span class="fl"><i>*</i> 收货人：</span> <input type="text"
						msg="请输入中文" name="<?php echo ($region::$realname_d); ?>" validateRule="1"
						class="fl itxt req">
				</p>
				<p class="clearfix">
					<span class="fl"><i>*</i> 所在地区：</span> <select isNumber="1"
						name="<?php echo ($region::$provId_d); ?>" class="fl req" id="parent"
						onclick="InterAddress.getAreaListClear($(this), '<?php echo U('getAreaList');?>', $('#city'));">
						<option value="0">—请选择—</option>
					</select> <select name="<?php echo ($region::$city_d); ?>" class="fl req" id="city"
						isNumber="1" class="req"
						onclick="InterAddress.getAreaListClear($(this), '<?php echo U('getAreaList');?>', $('#dist'));">
						<option value="0">—请选择—</option>
					</select> <select name="<?php echo ($region::$dist_d); ?>" class="fl req" isNumber="1"
						class="req" id="dist">
						<option value="0">—请选择—</option>
					</select>
				</p>
				<p class="clearfix">
					<span class="fl"><i>*</i> 详细地址：</span> <input type="text"
						name="<?php echo ($region::$address_d); ?>" class="fl req" nsg="请输入详细地址">
				</p>
				<p class="clearfix">
					<span class="fl"><i>*</i> 手机号码：</span> <input type="text"
						isNumber="1" name="<?php echo ($region::$mobile_d); ?>" validateRule="2"
						class="fl itxt req" msg="请输入电话号码"> <span
						class="fl deviation">固定电话：</span> <input type="text" isNumber="1"
						name="<?php echo ($region::$telphone_d); ?>" validateRule="3" class="fl itxt req">
				</p>
				<p class="clearfix">
					<span class="fl">&nbsp;&nbsp; 邮箱：</span> <input type="text"
						validateRule="4" name="<?php echo ($region::$email_d); ?>" class="fl itxt req">
					<em class="fl deviation ">用来接收订单提醒邮件，便于您及时了解订单状态</em>
				</p>
				<p class="clearfix">
					<span class="fl">地址别名：</span> <input type="text"
						name="<?php echo ($region::$alias_d); ?>" class="fl itxt">
				</p>
				<input type="submit"
					onclick="InterAddress.addUserAddress('formAddressId', '<?php echo U('UserAddress/addReceiveAddress');?>');"
					class="submit" value="保存收货人信息">
			</form>
		</div>
	</div>
</div>
	</div>
	<div class="Invoice_background"></div>
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