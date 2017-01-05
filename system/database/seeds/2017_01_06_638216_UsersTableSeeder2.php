<?php namespace system\database\seeds;
use houdunwang\database\build\Seeder;
class UsersTableSeeder2 extends Seeder {
    //执行
	public function up() {
		Db::table('news')->insert(['title'=>'后盾人333']);
    }
    //回滚
    public function down() {
echo 11;
    }
}