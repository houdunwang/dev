<?php
return [
	/**
	 * 错误提示页面
	 * 发生错误并且闭关DEBUG时,用于显示错误内容的页面
	 */
	'bug'         => ROOT_PATH . '/resource/view/bug.php',

	//Notice类型错误显示
	'show_notice' => false,
	//开启Trace
	'trace'       => true,
	//Trace选项卡
	'level'       => [
		'view'  => '视图',
		'sql'   => 'sql语句',
		'file'  => '加载文件',
		'error' => '错误',
		'debug' => '调试',
	],
];