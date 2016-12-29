<?php
return [
	//调试模式
	'debug'              => true,
	//应用目录
	'path'               => 'app',
	//加密key
	'key'                => 'ce9fdeba3a030fbcb0e2ffb2a00a34b7e1008bc55abe0251e5e1d417cd8b5476',
	//页面编码
	'charset'            => 'utf-8',
	//时区
	'timezone'           => 'PRC',
	//自动加载文件
	'auto_load_file'     => [ ],
	//注册命名空间
	'autoload_namespace' => [ ],
	//类别名
	'alias'              => [ ],
	//消息模板
	'message'            => ROOT_PATH . '/resource/view/message.php',
	//有确定提示的模板页面
	'confirm'            => ROOT_PATH . '/resource/view/confirm.php',
	//404页面
	'404'                => ROOT_PATH . '/resource/view/404.php',
];