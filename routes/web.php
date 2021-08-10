<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::redirect('/', '/dashboard');
Route::redirect('/home', '/dashboard');
Route::domain('{user_name:user_name}.' . config('app.site_url'))->group(function () {
    Route::get('/', 'HomeController@index');
});