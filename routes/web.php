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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('tests','TestController@index')->name('tests.index');
Route::get('tests/result','TestController@result')->name('tests.result');
Route::get('tests/create','TestController@create')->name('tests.create');
Route::post('tests','TestController@store')->name('tests.store');
