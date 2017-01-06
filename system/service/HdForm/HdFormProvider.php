<?php namespace system\service\HdForm;
use houdunwang\framework\build\Provider;

class HdFormProvider extends Provider {
	//延迟加载
	public $defer = true;

	//服务运行时自动执行的方法
	public function boot() {
	}

	public function register() {
		$this->app->single( 'HdForm', function ( $app ) {
			return new HdForm($app);
		} );
	}
}