<?php namespace app\home\controller;

use system\model\News;

class Entry {
	public function index() {

	}
	public function post(News $m){
		dd($m);
		return view();
	}
}