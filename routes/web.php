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
Route::resource('/joboffers','JobOffersController');



Route::get('/formulario-oferta', function () {
    return view('ofertaFormulario'); 
});
Route::get('/super-admin', 'JobOffersController@index');


 Route::get('/nueva-oferta', function () {
    return view('nuevaOferta');
 });
