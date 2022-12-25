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
    Route::get('/adminpanel', 'AdminPanelController')->name('nav.adminpanel')->middleware('admin');
});


// Articles CRUD

Route::group(['namespace' => 'App\Http\Controllers\Article'], function () {

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/articles/create', 'CreateController')->name('articles.create');
        Route::patch('articles/{article}', 'UpdateController')->name('articles.update');
        Route::get('articles/{article}/edit', 'EditController')->name('articles.edit');
        Route::delete('articles/{article}', 'DestroyController')->name('articles.destroy');
        Route::post('/articles', 'StoreController')->name('articles.store');
    });

    Route::get('/articles/{article}', 'ShowController')->name('articles.show');


});

// News CRUD

Route::group(['namespace' => 'App\Http\Controllers\News'], function () {
    Route::group(['middleware' => 'admin'], function () {
        Route::patch('news/{news}', 'UpdateController')->name('news.update');
        Route::get('news/{news}/edit', 'EditController')->name('news.edit');
        Route::delete('news/{news}', 'DestroyController')->name('news.destroy');
        Route::post('/news', 'StoreController')->name('news.store');

        Route::get('/news/create', 'CreateController')->name('news.create');
    });

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
    Route::post('/register/confirm', 'SendConfirmEmailController')->name('auth.register.confirm')->middleware('unauth');
    Route::get('/register/create', 'CreateController')->name('auth.register')->middleware('unauth');
    Route::post('/register', 'StoreController')->name('auth.register.store')->middleware('unauth');
});

// Auth

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('/logout', 'LogoutController')->name('auth.logout')->middleware('auth');
    Route::get('/login/create', 'CreateController')->name('auth.create')->middleware('unauth');
    Route::post('/auth/login', 'LoginController')->name('auth.login')->middleware('unauth');
});
