<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */


/**
 * Authenticate routes
 */
Route::get('login', 'Auth\LoginController@getLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.validateLogin');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showUserRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('auth.makeRegister');
/**
 * Blog routes
 */
Route::get('blog/{slug}', 'BlogController@singlePost_BCM')
        ->name('blog.single')
        ->where(array('slug' => '^([a-z]+(\-)?)+$'));

Route::get('blog', 'BlogController@index')
        ->name('blog.index');

/**
 * Static pages route.
 */
Route::get('aboutus', 'PageController@aboutUs_PCM');
Route::get('contactus', 'PageController@contactUs_PCM');
Route::get('career', 'PageController@career_PCM');
Route::get('/', 'PageController@index_PCM')
        ->name('page.welcome');

/**
 * Posts routes
 */
Route::resource('posts', 'PostController');


//Auth::routes();

Route::get('/home', 'HomeController@index');
