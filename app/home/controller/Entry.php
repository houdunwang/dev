<?php namespace app\home\controller;

use houdunwang\model\Model;
use system\model\News;

class Entry {
	public function index( News $m ) {
		return view();
	}
	public function post( News $m ) {
		View::with(['a'=>3]);
		return view();
	}
}