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

Route::get('/jobs', function () {
    return view('content'); //nuevaOferta
}); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/joboffers','JobOfferController');

/* Route::get('/offer','JobOfferController@index')->name('offer');
Route::get('/project','JobOfferController@index')->name('project'); */


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

    //Auth::routes();

    //Route::get('/home', 'HomeController@index')->name('home');




//Route::resource('/OfertaTrabajo','OfertasTrabajoController');
Route::get('/kata', 'KataController@index');

Route::resource ('kata', 'KataController');
Route::resource ('empresa', 'EmpresaController');

Route::get('/kataSent/{id}','KataController@kataSent');


Route::get('/editProfile', function() {
    return view('editProfile');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('experience', 'ExperienceController');
    //return view('welcome');

use App\Providers\RouteServiceProvider;



Route::view('/faq', 'faq.faqIndex');
// Route::get('/readquestion', 'PostController@getAllQuestions');
Route::get('/readquestion', 'PostController@show')->name('allquestions');

Route::get('/uniquequestion/{post_id}', 'PostController@showUniqueQuestionID');
Route::post('/createanswer', 'AnswerController@store');


Route::resource('answers', 'AnswerController')->except([
    'store'
]);
Route::resource('questions', 'PostController')->except([
    'showUniqueQuestionID', 'show'
]);


Route::get('/createquestion', function () {
    return view('faq.createQuestion');
});
//Auth::routes();
