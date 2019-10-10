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
    return view('welcome'); //nuevaOferta
});
Route::resource('/OfertaTrabajo','OfertasTrabajoController');
Route::get('/kata', 'KataController@index');

Route::resource ('kata', 'KataController');
Route::resource ('empresa', 'EmpresaController');

Route::get('/kataSent/{id}','KataController@kataSent');


Route::get('/editProfile', function() {
    return view('editProfile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('experience', 'ExperienceController');
    return view('welcome');


