$(function(){
	//素材家园独家编辑整理：www.sucaijiayuan.com
	var tophtml="<div id=\"izl_rmenu\" class=\"izl-rmenu\"><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=2197446006&site=qq&menu=yes\" class=\"btn btn-qq\"><span style='color:#FFF;position:relative; top:45px; left:10px;'>旅游客服1</span></a><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=3517762129&site=qq&menu=yes\" class=\"btn btn-qq\"><span style='color:#FFF;position:relative; top:45px; left:10px;'>旅游客服2</span></a><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=3495964501&site=qq&menu=yes\" class=\"btn btn-qq\"><span style='color:#FFF;position:relative; top:45px; left:10px;'>商城客服1</span></a><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=3187047846&site=qq&menu=yes\" class=\"btn btn-qq\"><span style='color:#FFF;position:relative; top:45px; left:10px;'>商城客服2</span></a><div class=\"btn btn-top\"></div></div>";
	$("#top").html(tophtml);
	$("#izl_rmenu").each(function(){
		$(this).find(".btn-wx").mouseenter(function(){
			$(this).find(".pic").fadeIn("fast");
		});
		$(this).find(".btn-wx").mouseleave(function(){
			$(this).find(".pic").fadeOut("fast");
		});
		$(this).find(".btn-phone").mouseenter(function(){
			$(this).find(".phone").fadeIn("fast");
		});
		$(this).find(".btn-phone").mouseleave(function(){
			$(this).find(".phone").fadeOut("fast");
		});
		$(this).find(".btn-top").click(function(){
			$("html, body").animate({
				"scroll-top":0
			},"fast");
		});
	});
	var lastRmenuStatus=false;
	$(window).scroll(function(){//bug
		var _top=$(window).scrollTop();
		if(_top>200){
			$("#izl_rmenu").data("expanded",true);
		}else{
			$("#izl_rmenu").data("expanded",false);
		}
		if($("#izl_rmenu").data("expanded")!=lastRmenuStatus){
			lastRmenuStatus=$("#izl_rmenu").data("expanded");
			if(lastRmenuStatus){
				$("#izl_rmenu .btn-top").slideDown();
			}else{
				$("#izl_rmenu .btn-top").slideUp();
			}
		}
	});
});