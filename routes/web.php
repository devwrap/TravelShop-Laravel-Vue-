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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/home/{user}', 'HomeController@show');

Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'destroy']]);

Route::post('/request/save/{user}', 'RequestController@save')->name('request.save');
Route::resource('requests', 'RequestController', ['only' => ['index', 'create','show']]);

//Route::get('/users/{user}', 'UsersController@show')->middleware('auth')->name('user.show');

//Route::get('/users', 'UsersController@index')->middleware('auth')->name('user.index');