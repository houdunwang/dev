<?php namespace system\service\HdForm;
use houdunwang\framework\build\Facade;

//外观构造类
class HdFormFacade extends Facade{

	public static function getFacadeAccessor(){
		return 'HdForm';
	}
}