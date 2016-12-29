<?php
return [
	//表字段缓存目录
	'cache_dir'   => ROOT_PATH.'/storage/field',
	//读库列表
	'read'        => [ ],
	//写库列表
	'write'       => [ ],
	//开启读写分离
	'proxy'       => false,
	//主机
	'host'        => 'localhost',
	//类型
	'driver'      => 'mysql',
	//帐号
	'user'        => 'root',
	//密码
	'password'    => '',
	//数据库
	'database'    => '',
	//表前缀
	'prefix'      => 'hd_'
];