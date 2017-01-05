<?php
return [
	//表字段缓存目录
	'cache_dir'   => ROOT_PATH.'/storage/field',
	//读库列表
	'read'        => [ ],
	//写库列表
	'write'       => [ ],
	/**
	 * 以下为基本配置段
	 * 当read与write段为空时,使用以下配置项设置read与write段
	 */
	//主机
	'host'        => '127.0.0.1',
	//类型
	'driver'      => 'mysql',
	//帐号
	'user'        => 'root',
	//密码
	'password'    => 'admin888',
	//数据库
	'database'    => 'hdphp3',
	//表前缀
	'prefix'      => 'hd_'
];