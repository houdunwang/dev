<?php namespace system\database\migrations;
use houdunwang\database\build\Migration;
use houdunwang\database\build\Blueprint;

class ChangeArticleTable extends Migration {
    //执行
	public function up() {
		Schema::table('article', function (Blueprint $table) {
			$table->string('name', 50)->add();
		});
    }

    //回滚
    public function down() {

    }
}