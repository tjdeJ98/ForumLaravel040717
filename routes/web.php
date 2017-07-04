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

Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/makePost', 'PostController@makePost');
    Route::post('/makePost', 'PostController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
