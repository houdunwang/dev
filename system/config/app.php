<?php
return [
	/*
	|--------------------------------------------------------------------------
	| 调试模式开启时会有以下几点不同
	|--------------------------------------------------------------------------
	|
	| 1. 表字段不进行缓存,更改表结构后会立即应用
	| 2. 系统出现错误时直接显示,方便进行调试
	| 3. 路由不进行缓存,可直接看到路由效果便于开发
	*/
	'debug'    => true,

	/*
	|--------------------------------------------------------------------------
	| 应用目录
	|--------------------------------------------------------------------------
	|
	| 即控制器等文件存在的目录
	*/
	'path'     => 'app',

	/*
	|--------------------------------------------------------------------------
	| 加密密钥
	|--------------------------------------------------------------------------
	|
	| 系统在执行cookie处理、加密组件Entry都会用这个密钥进行加密处理
	*/
	'key'      => 'e29ab0dc8593094dc65e4b77cea4cbeb37f27abe1cb6b8e44acb071dbd09377b',

	/*
	|--------------------------------------------------------------------------
	| 系统时间显示使用的时区
	|--------------------------------------------------------------------------
	|
	| PRC为北京时间
	*/
	'timezone' => 'PRC',

	/*
	|--------------------------------------------------------------------------
	| 消息模板
	|--------------------------------------------------------------------------
	|
	| message 函数调用时使用的模板
	*/
	'message'  => ROOT_PATH . '/resource/view/message.php',

	/*
	|--------------------------------------------------------------------------
	| 确认消息模板
	|--------------------------------------------------------------------------
	|
	| confirm函数调用时显示的模板文件
	*/
	'confirm'  => ROOT_PATH . '/resource/view/confirm.php',

	/*
	|--------------------------------------------------------------------------
	| 404页面
	|--------------------------------------------------------------------------
	|
	| 请求页面不存或执行_404()函数时调用的视图模板
	*/
	'404'      => ROOT_PATH . '/resource/view/404.php',
];