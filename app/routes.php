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


	Route::get('/a', function() {
		return "Admin a Page";
	});
	Route::get('/b', function() {
		return "Admin b Page";
	});
	Route::get('/c', function() {
		return "Admin c Page";
	});
	Route::get('/d', function() {
		return "Admin d Page";
	});

});

Route::get('/', function() {
	return "Main Page";
});

Route::get('/contact', function() {
	return View::make('contact');
});

Route::post('/contact', function() {
	return "submitted";
});

Route::get('/user/detail/{slug}', function($slug) {
	return $slug;
})->where('slug', '[A-Za-z-_]+');

Route::get('/user/profile/{id}', function($id) {
	if($id == 0)
		App::abort(404);

	return "page: " . $id;
})->where('id', '[0-9]+');

