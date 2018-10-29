<?php if (!defined('THINK_PATH')) exit(); if(is_array($guess_goods)): foreach($guess_goods as $key=>$guess_good): ?><li class="fl">
        <div class="like2-img">
            <a href="<?php echo U('Goods/goodsDetails',['id'=>$guess_good['id']]);?>"><img src="http://www.shopsn.cn<?php echo ($guess_good["pic_url"]); ?>" alt="" width="100" height="100"></a>
        </div>
        <p><?php echo ($guess_good["title"]); ?></p>
        <span>(已有<?php echo ($guess_goods['comment_member']); ?>人评论)</span>
        <i>￥<?php echo ($guess_good["price_market"]); ?></i>
    </li><?php endforeach; endif; ?>