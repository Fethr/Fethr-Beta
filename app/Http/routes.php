<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|---------------------------
| Home
|---------------------------
*/

Route::get('/', [
   'uses' => '\Fethr\Http\Controllers\HomeController@index',
    'as' => 'home',
]);

/*
|---------------------------
| Authentication
|---------------------------
*/

Route::get('/signup', [
    'uses' => '\Fethr\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);

Route::post('/signup', [
    'uses' => '\Fethr\Http\Controllers\AuthController@postSignup',
    'middleware' => ['guest'],
]);

Route::get('/signin', [
    'uses' => '\Fethr\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],
]);

Route::post('/signin', [
    'uses' => '\Fethr\Http\Controllers\AuthController@postSignin',
    'middleware' => ['guest'],
]);

Route::get('/signout', [
    'uses' => '\Fethr\Http\Controllers\AuthController@getSignout',
    'as' => 'auth.signout',
]);

/*
|---------------------------
| Search
|---------------------------
*/

Route::get('/search', [
   'uses' => '\Fethr\Http\Controllers\SearchController@getResults',
    "as" => 'search.results',
]);

/*
|---------------------------
| User Profile
|---------------------------
*/

Route::get('/user/{username}', [
   'uses' => '\Fethr\Http\Controllers\ProfileController@getProfile',
    "as" => 'profile.index',
]);

Route::get('/profile/edit', [
    'uses' => '\Fethr\Http\Controllers\ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware' => ['auth'],
]);

Route::post('/profile/edit', [
    'uses' => '\Fethr\Http\Controllers\ProfileController@postEdit',
    'middleware' => ['auth'],
]);

?>