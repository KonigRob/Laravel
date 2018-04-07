<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
	        $table->string('middlename');
	        $table->string('lastname');
            $table->string('email')->unique();
            $table->string('website');
	        $table->string('streetaddress');
	        $table->string('city');
	        $table->string('state');
	        $table->string('countryid');
	        $table->string('postalzipcode');
	        $table->string('mobilephone');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
