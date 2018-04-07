<?php

use database\seeds\UsersTableSeeder;
use database\seeds\CountriesTableSeeder;
//use database\seeds\CountriesSeeder;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
//         $this->call(CountriesTableSeeder::class);
//	    $this->call(CountriesSeeder::class);
    }
}
