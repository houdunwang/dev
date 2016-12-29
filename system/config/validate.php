<?php
return [
	/**
	 * 验证错误显示类型
	 * redirect 直接跳转,会分配$errors到前台
	 * show 直接显示错误信息
	 * default 由开发者自行处理
	 */
	'dispose'  => 'redirect',

	/**
	 * 消息模板
	 * 当dispose为show时使用以下定义的模板显示错误信息
	 */
	'template' => ROOT_PATH . '/resource/view/validate.php',
];