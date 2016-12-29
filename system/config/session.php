<?php
return [
	//引擎:file,mysql,memcache,redis
	'driver'   => 'file',
	//session_name
	'name'     => 'HDPHPID',
	//域名
	'domain'   => '',
	//过期时间
	'expire'   => 0,
	#File
	'file'     => [
		'path' => ROOT_PATH . '/storage/session',
	],
	#Mysql
	'mysql'    => [
		'table' => 'session',
	],
	#Memcache
	'memcache' => [
		'host' => 'localhost',
		'port' => 11211,
	],
	#Redis
	'redis'    => [
		'host'     => 'localhost',
		'port'     => 11211,
		'password' => '',
		'database' => 0,
	]
];