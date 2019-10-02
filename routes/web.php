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
    return view('faq.createQuestion');
});


Route::resource('questions', 'PostController');
Route::resource('answers', 'AnswerController');


//TODO Refactor routes
Route::get('/createquestion', function () {
    return view('faq.createQuestion');
});


Auth::routes();


Route::get('/readquestion', function () {
    return view('faq.readQuestion');
});

Route::get('/uniquequestion', function () {
    return view('faq.uniqueQuestion');
});

Route::get('/createanswer', function () {
    return view('faq.createAnswer');
});
