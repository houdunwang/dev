<?php namespace app\home\controller;

class Entry {
	public function index() {
		dd(q('cid'));
		echo u('Home.Index.add');
		return view();
	}
}