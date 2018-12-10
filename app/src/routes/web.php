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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/rsvp', "RsvpController@confirm");
Route::post('/rsvp/cancellation', "RsvpController@cancel");
Route::get('/rsvp', "RsvpController@confirm");
Route::get('/confirmed', "RsvpController@confirmed");

Route::get('/main', "QuizShowController@question");
Route::get('/main/question', "QuizShowController@question");
Route::get('/main/next', "QuizShowController@nextQuestion");
Route::get('/main/answers', "QuizShowController@answers");
Route::get('/main/ajaxanswered', "QuizShowController@ajaxAnswers");
Route::get('/main/score', "QuizShowController@score");

Route::get('/play', "QuizPlayerController@login");
Route::post('/play', "QuizPlayerController@doLogin");
Route::get('/play/answer', "QuizPlayerController@answer");
Route::post('/play/answer', "QuizPlayerController@saveAnswer");
Route::get('/play/question', "QuizPlayerController@question");
