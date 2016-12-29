<?php
return [
	/**
	 * 模板目录
	 */
	'path'         => 'view',

	//模板后缀
	'prefix'       => '.php',

	//标签
	'tags'         => [ ],

	//左标签
	'tag_left'     => '<',

	//右标签
	'tag_right'    => '>',

	//blade 模板功能开关
	'blade'        => true,

	//缓存目录
	'cache_dir'    => ROOT_PATH . '/storage/view/cache',

	//编译目录
	'compile_dir'  => ROOT_PATH . '/storage/view/compile',
];