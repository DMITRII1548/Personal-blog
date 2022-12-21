<?php

use GuzzleHttp\Middleware;
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

// Navigation

Route::group(['namespace' => 'App\Http\Controllers\Nav'], function () {
    Route::get('/', 'HomeController')->name('nav.home');
    Route::get('/news', 'NewsController')->name('nav.news');
    Route::get('/about', 'AboutController')->name('nav.about');
    Route::get('/getintouch', 'GetInTouchController')->name('nav.getintouch');
});


// Articles CRUD

Route::group(['namespace' => 'App\Http\Controllers\Article'], function () {

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/articles/create', 'CreateController')->name('articles.create');
        Route::post('/articles', 'StoreController')->name('articles.store');
    });

    Route::get('/articles/{article}', 'ShowController')->name('articles.show');


});

// News CRUD

Route::group(['namespace' => 'App\Http\Controllers\News'], function () {
    Route::get('/news/{news}', 'ShowController')->name('news.show');
});


// Comment

Route::group(['namespace' => 'App\Http\Controllers\Comment', 'middleware' => 'auth'], function () {
    Route::group(['namespace' => 'Article'], function () {
        Route::post('/articles/{article}/comments', 'StoreController')->name('articles.comments.store');
    });
    Route::group(['namespace' => 'News'], function () {
        Route::post('/news/{news}/comments', 'StoreController')->name('news.comments.store');
    });
});

// Register

Route::group(['namespace' => 'App\Http\Controllers\Register'], function () {
    Route::get('/register/create', 'CreateController')->name('auth.register')->middleware('unauth');
    Route::post('/register', 'StoreController')->name('auth.register.store')->middleware('unauth');
});

// Auth

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('/logout', 'LogoutController')->name('auth.logout')->middleware('auth');
    Route::get('/login/create', 'CreateController')->name('auth.create')->middleware('unauth');
    Route::post('/auth/login', 'LoginController')->name('auth.login')->middleware('unauth');
});
