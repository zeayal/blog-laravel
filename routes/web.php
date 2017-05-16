<?php

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

// Blog
Route::group(['domain' => 'blog.ocliuziyang.dev'], function () {
    Route::get('/', 'Blog\HomeController@index')->name('blog.index');
    Route::get('about', 'Blog\HomeController@about');
    Route::get('post', 'Blog\HomeController@post');
    Route::get('contact', 'Blog\HomeController@contact');
});

Route::group(['prefix' => '/'], function () {
    // Home
    Route::get('/', 'HomeController@index');

    // Authentication routes...
    Route::get('getLogin', 'LoginController@getLogin')->name('getLogin');
    Route::post('login', 'LoginController@postLogin')->name('login');
    Route::get('login/{type}', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Registration routes...
    Route::get('register', 'RegisterController@getRegister')->name('register');
    Route::post('register', 'RegisterController@postRegister')->name('register');
});

// Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth.admin']], function () {
    Route::get('/', function () {
        return view('admin.home');
    });
});


