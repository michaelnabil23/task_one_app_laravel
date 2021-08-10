<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', 'WelcomeController@index')->name('welcome');

//user routes
Route::resource('users', 'UserController')->except(['show']);


//provider routes
Route::resource('providers', 'ProviderController')->except(['show']);
Route::resource('providers.locations', 'Provider\LocationController')->except(['show']);
