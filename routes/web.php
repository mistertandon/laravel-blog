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

Route::get('/', function () {
    return view('landing.welcome');
});

Route::get('aboutus', 'PagesController@aboutUs_PCM');

Route::get('contactus', 'PagesController@contactUs_PCM');

Route::get('career', 'PagesController@career_PCM');
