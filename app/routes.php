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

Route::group(array('prefix' => 'admin'), function() {

	Route::resource('/category', 'AdminCategoryController');
	Route::resource('/sms', 'AdminSMSController');
	Route::resource('/user', 'AdminUserController');

	Route::controller('/auth', 'AdminAuthController', [
		'getLogin' => 'admin.auth.login',
		'postLogin' => 'admin.auth.login.post',
		'getLogout' => 'admin.auth.logout'
	]);

	Route::get('/', 'AdminHomeController@index');

});





