<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'firstname', 'middlename', 'lastname', 'email', 'website', 'streetaddress',
	    'city', 'state', 'countryid', 'postalzipcode', 'mobliephone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
