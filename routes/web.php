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

Route::get('/', 'PageController@index_PCM')
        ->name('blog.welcome');

Route::get('blog/{slug}', 'BlogController@singlePost_BCM')
        ->name('blog.single')
        ->where(array('slug' => '^([a-z]+(\-)?)+$'));

Route::get('blog', 'BlogController@index')
        ->name('blog.index');

Route::get('aboutus', 'PageController@aboutUs_PCM');
Route::get('contactus', 'PageController@contactUs_PCM');
Route::get('career', 'PageController@career_PCM');
Route::resource('posts', 'PostController');