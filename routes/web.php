<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

//Route::get('/home/{id}', 'HomeController@show')->name('home.show');

Route::get('user-profile/{id}', 'HomeController@UserProfile')->name('home.user-profile');
Route::post('user-profile', 'HomeController@SendMesseges')->name('home.send-messeges');





///// test /////
route::get('test-one', 'TestformeController@index')->name('testforme');
route::post('test-one', 'TestformeController@index')->name('testforme');
