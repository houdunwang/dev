<?php namespace system\database\seeds;
use houdunwang\database\build\Seeder;

class UsersTableSeeder extends Seeder {
    //执行
	public function up() {
		Db::table('news')->insert(['title'=>'后盾人abc']);
    }
    //回滚
    public function down() {

    }
}