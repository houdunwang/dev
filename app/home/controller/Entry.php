<?php namespace app\home\controller;

use houdunwang\model\Model;
use system\model\News;

class Entry {
	public function __construct() {
//		Middleware::set('auth');
		Middleware::exe('auth');
	}

	public function index() {
		return view( '', 5 );
	}

	public function post() {
		return view()->with('title','后盾人');
	}
}