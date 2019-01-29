<?php

#
# Guest (Guest Middleware)
#
Route::get('/', function () { return view('welcome'); })->name('welcome');

Auth::routes([ 'register' => true, 'verify' => false ]);

Route::get('/help', function () { return view('help'); })->name('help');
Route::get('/docs', function () { return view('docs'); })->name('docs');
Route::get('/faq', function () { return view('faq'); })->name('faq');

#
# Authenticated Users (Auth Middleware)
#

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::patch('/profile', 'ProfileController@update');

Route::get('/feedback', 'FeedbackController@index')->name('feedback');
Route::post('/feedback', 'FeedbackController@store');

#
# Administrators (Admin Middleware)
#

// Users
Route::get('/users', 'UserController@index');
Route::get('/users/add', 'UserController@create');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::get('/users/{id}', 'UserController@show');
Route::post('/users/search', 'UserController@search');
Route::post('/users', 'UserController@store');
Route::patch('/users/{id}', 'UserController@update');
Route::delete('/users/{id}', 'UserController@destroy');