<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whatever', function (){
	return "who cares?";
});

Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');


Route::resource('profile', 'ActivityProfileController');
Route::get('posting/{id}', 'PostingController@show');

Route::resource('post', 'InterestPostController');

Route::get('users', 'UsersController@index');

Route::get('/places2', function (){
	return view('pages/places2');
});

Route::get('users/{id}', 'UsersController@show')->name('showuser');