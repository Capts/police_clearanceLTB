<?php

Route::group(['middleware' => 'guest'], function(){
	Route::get('/', function () {
	    return view('welcome');
	
	});
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
