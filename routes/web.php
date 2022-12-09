<?php

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

//navigation
Route::group(['namespace' => 'App\Http\Controllers\Nav'], function () {
    Route::get('/', 'HomeController')->name('nav.home');
    Route::get('/news', 'HomeController')->name('nav.news');
    Route::get('/about', 'HomeController')->name('nav.about');
    Route::get('/getintouch', 'HomeController')->name('nav.getintouch');
});

