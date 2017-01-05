<?php namespace app\home\controller;

use system\model\News;

class Entry {
	public function index() {
		dd(Schema::tableExists( 'migrations' ));
		dd(Db::getQueryLog());
	}
}