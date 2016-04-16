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

	Route::get('/category', 'AdminCategoryController@index');
	Route::get('/category/create', 'AdminCategoryController@create');
	Route::post('/category', 'AdminCategoryController@store');
	Route::get('/category/{id}/edit', 'AdminCategoryController@edit');
	Route::put('/category/{id}/update', 'AdminCategoryController@update');
	Route::delete('/category/{id}/delete', 'AdminCategoryController@destroy');

	Route::get('/', 'AdminHomeController@index');

});





