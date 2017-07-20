<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::match(array('GET','POST'),'/', 'AdminController@index');
Route::get('logout', function(){
	Auth::logout();
	Session::flush();
	return Redirect::to('/');
});
Route::get('home', function(){
	return Redirect::to('index');
});
Route::get('index',array('before' => 'auth','uses' => 'AdminController@home'));
Route::get('profile','hrhController@profile');

Route::match(array('GET','POST'),'register','hrhController@register');
Route::match(array('GET','POST'),'ajax_test','hrhController@ajax_test');