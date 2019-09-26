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
Route::resource('/joboffers','JobOfferController');



Route::get('/job-offers-form', function () {
    return view('jobOffersForm'); 
});
Route::get('/super-admin', function () {
    return view('superAdmin');
 });


 Route::get('/new-job-offer', function () {
    return view('newJobOffer');
 });

 
