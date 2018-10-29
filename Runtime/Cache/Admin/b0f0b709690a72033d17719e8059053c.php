<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="http://www.shopsn.xyz/Public/Admin/css/index/index.css" rel="stylesheet" type="text/css">
    <link href="http://www.shopsn.xyz/Public/Common/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-ui.min.js"></script>
</head>
<style>
    .goods_title{
        word-break: keep-all;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<body class="iframe_body">
<div class="warpper">
    <div class="title">仪表盘</div>
    <div class="content start_content" style="min-width: 1400px">
        <div class="contentWarp">
            <div class="contentWarp_item clearfix">
                <div class="section_select" id="today">
                </div>
            </div>
            <div class="contentWarp_item clearfix">
                <div class="section_order_select" id="all">
                  
                </div>
                <div class="clear"></div>
                <div class="section section_order_count" >
                <div class="sc_title">
                <i class="sc_icon"></i>
                <h3>商品销售排行</h3>
                </div>
                <div class="sc_warp">
                <table cellpadding="0" cellspacing="0" class="system_table">
                <tbody>
                <tr>
                <td class="gray_bg">排行</td>
                <td>商品信息</td>
                <td class="gray_bg">销量</td>
                </tr>

                <?php if(is_array($sells)): foreach($sells as $key=>$item): if($key < 3): ?><tr>
                            <td class="gray_bg"><?php echo ($key + 1); ?></td>
                                <td class="goods_title" title="<?php echo ($item["title"]); ?>"><a  target="_blank" href="<?php echo C('domain');?>/index.php/Home/Goods/goodsDetails/id/<?php echo ($item["goods_id"]); ?>"><?php echo ($item["title"]); ?> </a></td>
                            <td class="gray_bg"><?php echo ($item["sum"]); ?></td>
                        </tr>
                    <?php else: ?>
                        <tr>
                            <td display="none" class="gray_bg display-none"><?php echo ($key + 1); ?></td>

                                <td display="none" class="goods_title display-none"  title="<?php echo ($item["title"]); ?>"><a  target="_blank" href="<?php echo C('domain');?>/index.php/Home/Goods/goodsDetails/id/<?php echo ($item["goods_id"]); ?>"><?php echo ($item["title"]); ?></a></td>
                            <td  display="none" class="gray_bg display-none"><?php echo ($item["sum"]); ?></td>
                        </tr><?php endif; endforeach; endif; ?>
                <tr>
                    <td></td><td><a id="td-toggle" href="javascript:;" onclick="td_toggle()">点击查看更多</a></td><td></td></tr>

                </tbody></table>
                </div>
                </div>

            </div>
        </div>
        <div class="section section_order_count" >
            <div class="sc_title">
                <i class="sc_icon"></i>
                <h1 style="font-size: large">版本信息</h1>
            </div>
            <div class="sc_warp">
                <table cellpadding="0" cellspacing="0" class="system_table">
                    <tbody><tr>
                        <td class="gray_bg">程序版本:</td>
                        <td>ShopsN <?php echo ($versionInfor["shop_version"]); ?></td>
                        <td class="gray_bg">更新时间:</td>
                        <td><?php echo ($versionInfor["update_version"]); ?></td>
                    </tr>
                    <tr>
                        <td class="gray_bg">程序开发:</td>
                        <td><?php echo ($versionInfor["company_name"]); ?></td>
                        <td class="gray_bg">版权所有:</td>
                        <td>盗版必究</td>
                    </tr>
                    <tr>
                        <td class="gray_bg">官方授权:</td>
                        <td><a href="http://<?php echo ($versionInfor['internet_url']); ?>" target="_blank">
                            <?php if(S('JOM34LSDM98SDO354') == '1'): ?>已授权 <?php elseif(S('JOM34LSDM98SDO354') == '3'): ?> <span style="color: red;">授权已到期,请及时续费</span><?php else: ?><span style="color: red;">未授权</span><?php endif; ?>
                        </a></td>
                    </tr>
                    </tbody></table>
            </div>
        </div>
        <div class="contentWarp">
            <div class="section system_section">
                <div class="system_section_con">
                    <div class="sc_title">
                        <i class="sc_icon"></i>
                        <h3>系统信息</h3>
                    </div>
                    <div class="sc_warp divInfor" id="system_warp">
                        <table cellpadding="0" cellspacing="0" class="system_table">
                            <tbody><tr>
                                <td class="gray_bg">服务器操作系统:</td>
                                <td><?php echo ($osInfor["os"]); ?></td>
                                <td class="gray_bg">服务器域名/IP:</td>
                                <td><?php echo ($osInfor["domain"]); ?> [ <?php echo ($osInfor["ip"]); ?> ]</td>
                            </tr>
                            <tr>
                                <td class="gray_bg">服务器环境:</td>
                                <td><?php echo ($osInfor["web_server"]); ?></td>
                                <td class="gray_bg">PHP 版本:</td>
                                <td><?php echo ($osInfor["phpv"]); ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">Mysql 版本:</td>
                                <td><?php echo ($osInfor["mysql_version"]); ?></td>
                                <td class="gray_bg">GD 版本:</td>
                                <td><?php echo ($osInfor["gdinfo"]); ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">文件上传限制:</td>
                                <td><?php echo ($osInfor["fileupload"]); ?></td>
                                <td class="gray_bg">最大占用内存:</td>
                                <td><?php echo ($osInfor["memory_limit"]); ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">最大执行时间:</td>
                                <td><?php echo ($osInfor["max_ex_time"]); ?></td>
                                <td class="gray_bg">安全模式:</td>
                                <td><?php echo ($osInfor["safe_mode"]); ?></td>
                            </tr>
                            <tr>
                                <td class="gray_bg">Zlib支持:</td>
                                <td><?php echo ($osInfor["zlib"]); ?></td>
                                <td class="gray_bg">Curl支持:</td>
                                <td><?php echo ($osInfor["curl"]); ?></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="foor">
    <p><b><?php echo ($str); ?></b></p>
</div>
<script type="text/javascript">
var TODAY_URL = "<?php echo U('getTodayShopInformation');?>";
var ALL_URL   = "<?php echo U('getAllShopInformation');?>"
</script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js"></script>
<script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/index.js"></script>
<script type="text/javascript">

</script>
</body>

</html>