<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<head>
<meta charset="utf-8">
<title><?php echo C('admin_title');?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" type="image/x-icon" href="/Public/static/images/favicon.ico" media="screen"/>
<link href="http://www.shopsn.xyz/Public/Admin/css/login.css" rel="stylesheet" type="text/css" />
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery.SuperSlide.2.1.2.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/Layer/layer.js"></script>
<!--[if lte IE 8]>
	<script type="Text/Javascript" language="JavaScript">
	    function detectBrowser()
	    {
		    var browser = navigator.appName
		    if(navigator.userAgent.indexOf("MSIE")>0){ 
			    var b_version = navigator.appVersion
				var version = b_version.split(";");
				var trim_Version = version[1].replace(/[ ]/g,"");
			    if ((browser=="Netscape"||browser=="Microsoft Internet Explorer"))
			    {
			    	if(trim_Version == 'MSIE8.0' || trim_Version == 'MSIE7.0' || trim_Version == 'MSIE6.0'){
			    		alert('请使用IE9.0版本以上进行访问');
			    		return false;
			    	}
			    }
		    }
	   }
       detectBrowser();
    </script>
<![endif]-->
</head>

<body>
	<div class="login-layout">
    	<div class="logo"><img src="http://www.shopsn.xyz/Public/Admin/img/logo/logo.png"></div>
        <form name="loginform" id="loginform" method="post" action="<?php echo U('Public/login');?>" onSubmit="return check_login()">
            <div class="login-form" style="position: relative">
                <div class="formContent">
                	<div class="title">管理中心</div>
                    <div class="formInfo">
                    	<div class="formText">
                        	<i class="icon icon-user"></i>
                            <input type="text" name="account" id="account" autocomplete="off" class="input-text" value="" placeholder="用户名" />
                        </div>
                        <div class="formText">
                        	<i class="icon icon-pwd"></i>
                            <input type="password" name="password" id="password" autocomplete="off" class="input-text" value="" placeholder="密  码" />
                        </div>
                        <div class="formText">
                            <i class="icon icon-chick"></i>
                            <input type="text" name="vertify" id="code" autocomplete="off" class="input-text chick_ue" value="" placeholder="验证码" />
                            <img src="<?php echo U('Public/verify');?>" class="chicuele" id="imgVerify" onclick="javascript:this.src='<?php echo U('Public/verify');?>'+'/time/'+Math.random()" />
                             <input type="hidden" id="check_code" value="0"></td>
                        </div>
						<div class="formText submitDiv">
                          <span class="submit_span">
                          	<input type="submit" name="submit" class="sub" value="登录">
                          </span>
                       </div>
                    </div>
                </div>
                <div id="error" class="errorDetail">

                </div>
            </div>
        </form>
    </div>
    <div id="bannerBox">
        <ul id="slideBanner" class="slideBanner">
            <li><img src="http://www.shopsn.xyz/Public/Admin/img/login/1.jpg" class="img"></li>
            <li><img src="http://www.shopsn.xyz/Public/Admin/img/login/2.jpg" class="img"></li> 
             <li><img src="http://www.shopsn.xyz/Public/Admin/img/login/3.jpg" class="img"></li>
            <li><img src="http://www.shopsn.xyz/Public/Admin/img/login/4.jpg" class="img"></li>          
        </ul>
    </div>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/login/login.js"></script>
<script type="text/javascript"> var checkCode = "<?php echo U('Public/check_code');?>";
</script>
</body>
</html>