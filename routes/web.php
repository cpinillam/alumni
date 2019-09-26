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


Route::get('/kata', 'KataController@index')->name('home');
Route::get('/kata/create', 'KataController@create');
//Auth::routes();

Route::resource ('kata', 'KataController');

Route::get('kata/{katum}/edit','KataController@edit');
Route::get('kata/{katum}','KataController@destroy');
Route::get('/kataSend/{id}','KataController@kataSend');
