<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    // Route::get('products', 'ProductController@index');
    Route::resource('products', 'ProductController');
});

// Route::get('/{tinyurl}', function ($model){
// 	return 'HomeController@show';
// });

Route::get('/{id}', 'HomeController@show');