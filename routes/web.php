<?php
//use Illuminate\Support\Facades\Input;
//use App\JobOffer;

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

Route::resource('/personalsprojects','PersonalProjectController');

Route::get('/project-form',function(){
    return view('newPersonalProject');
});

/* Route::post('/search',function(){
    $content = Request::input('q');
    $specificContent = JobOffer::where('')
/* }); */

Route::post('/search','JobOfferController@search');


Route::post('/validate/{joboffer}','JobOfferController@validar'); 


//
Route::get('/job-offers-form', function () {
    return view('jobOffersForm'); 
});
Route::get('/super-admin', function () {
    return view('superAdmin');
 });


 Route::get('/new-job-offer', function () {
    return view('newJobOffer');
 });

 
 Route::get('/log-admin','UserTemporalController@beAdmin');
 Route::get('/log-coder','UserTemporalController@dontBeAdmin');

 Route::get('/toContoller','JobOfferController@index');