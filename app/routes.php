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

	Route::get('/auth/login', [
		'as' => 'admin.auth.login',
		'uses' => 'AdminAuthController@getLogin'
	]);
	Route::post('/auth/login', [
		'as' => 'admin.auth.login.post',
		'uses' => 'AdminAuthController@postLogin'
	]);
	Route::get('/auth/logout', [
		'as' => 'admin.auth.logout',
		'uses' => 'AdminAuthController@getLogout'
	]);

	/*Route::controller('/auth', 'AdminAuthController', [
		'getLogin' => 'admin.auth.login',
		'postLogin' => 'admin.auth.login.post',
		'getLogout' => 'admin.auth.logout'
	]);*/

	Route::get('/', 'AdminHomeController@index');

});





