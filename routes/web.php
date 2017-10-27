<?php

Route::group(['middleware' => 'guest'], function(){
	Route::get('/', function () {
	    return view('welcome');
	
	});
});


//dash route
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard')->middleware('auth');

//change password
Route::get('change-password', 'Auth\UpdatePasswordController@updateget')->name('updatepass.get');
Route::post('change-password', 'Auth\UpdatePasswordController@update')->name('updatepass.post');

Auth::routes();

// Route::get('/home/{id}/{slug}', 'HomeController@index')->name('home');

Route::post('/applicant/{id}/edit', 'ApplicantController@upload_image')->name('upload_image');
Route::resource('/applicant', 'ApplicantController');

Route::get('/application/apply', 'ApplicationController@create')->name('application.create');
Route::resource('/application', 'ApplicationController', ['except' => ['create']]);

Route::get('/transactions/result', 'AdminController@result')->name('transaction.search'); //for result
Route::get('/transactions/search', 'AdminController@search')->name('search'); //search method
Route::get('/transactions', 'AdminController@transaction')->name('transaction.index'); //index
