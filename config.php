<?php
// +----------------------------------------------------------------------
// | OnlineRetailers [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2003-2023 www.yisu.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed 亿速网络（http://www.yisu.cn）
// +----------------------------------------------------------------------
// | Author: 王强 <opjklu@126.com>及其团队协作开发
// +----------------------------------------------------------------------
/* 数据库配置 */
return array(
    'DB_TYPE' => 'mysql', //数据库类型
    'DB_HOST' => '#DB_HOST#', //数据库主机
    'DB_NAME' => '#DB_NAME#', //数据库名称
    'DB_USER' => '#DB_USER#', //数据库用户名
    'DB_PWD' => '#DB_PWD#', //数据库密码
    'DB_PORT' => '#DB_PORT#', //数据库端口
    'DB_PREFIX' => '#DB_PREFIX#', //数据库前缀
	'DB_CHARSET'=> '#DB_CHARSET#', // 字符集
	'DB_DEBUG'  => '#DB_DEBUG#', // 数据库调试模式 开启后可以记录SQL日志
    'TMPL_ACTION_SUCCESS'=>'Public:dispatch_jump',		//自定义success跳转页面
    'TMPL_ACTION_ERROR'=>'Public:dispatch_jump',		//自定义error跳转页面
    'IMG_ROOT_PATH'    => '/Uploads/goods/'
);
?>