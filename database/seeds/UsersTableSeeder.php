<?php
/**
 * Created by PhpStorm.
 * User: rob
 * Date: 06/04/18
 * Time: 11:00 AM
 */

namespace database\seeds;

use Illuminate\Database\Seeder;


class UsersTableSeeder extends \DatabaseSeeder
{
	public function run(){
		factory('App\User', 100)->create();
	}
}