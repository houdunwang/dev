<?php namespace app\home\controller;

use houdunwang\model\Model;
use system\model\News;

class Entry {
	public function index( News $m ) {
		$m['title'] = 'abc';
		$d          = $m->save();
		dd( $d );
	}
}