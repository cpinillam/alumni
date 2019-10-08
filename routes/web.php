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

use App\Providers\RouteServiceProvider;

//*FAQ ROUTES LINE 16 TO LINE 40

Route::view('/', 'faq.faqIndex');
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
Auth::routes();
