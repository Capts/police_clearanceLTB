<?php

Route::group(['middleware' => 'guest'], function(){
	Route::get('/', function () {
	    return view('welcome');
	
	});
});


//dash route
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard')->middleware('auth');

	   


Auth::routes();

// Route::get('/home/{id}/{slug}', 'HomeController@index')->name('home');

Route::post('/applications/{id}/edit', 'ApplicationController@upload_image')->name('upload_image');
Route::resource('/applications', 'ApplicationController');
