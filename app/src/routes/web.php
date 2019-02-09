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

Route::get('/main', "QuizShowController@connected");
Route::get('/main/ajaxConnected', "QuizShowController@connectedAjax");
Route::get('/main/question', "QuizShowController@question");
Route::get('/main/previous', "QuizShowController@previousQuestion");
Route::get('/main/next', "QuizShowController@nextQuestion");
Route::get('/main/answers', "QuizShowController@answers");
Route::get('/main/ajaxanswered', "QuizShowController@ajaxAnswers");
Route::get('/main/score', "QuizShowController@score");
Route::get('/main/close', "QuizShowController@theend");
Route::get('/main/begin', "QuizShowController@begin");
Route::get('/main/restart', "QuizShowController@restartQuiz");
Route::get('/main/clean', "QuizShowController@deleteAnswers");

Route::get('/config', "QuizConfigController@listing");
Route::get('/config/new/question', "QuizConfigController@create");
Route::post('/config/question/{id}', "QuizConfigController@edit");
Route::get('/config/question/{id}', "QuizConfigController@edit");
Route::get('/config/deleteQuestion/{id}', "QuizConfigController@remove");

Route::get('/config/options/{questionId}', "QuizConfigController@listingOptions");
Route::get('/config/new/option/{questionId}', "QuizConfigController@createOption");
Route::post('/config/option/{id}', "QuizConfigController@editOption");
Route::get('/config/option/{id}', "QuizConfigController@editOption");
Route::get('/config/deleteOption/{id}', "QuizConfigController@removeOption");

Route::get('/play', "QuizPlayerController@login");
Route::post('/play', "QuizPlayerController@doLogin");
Route::get('/play/answer', "QuizPlayerController@answer");
Route::post('/play/answer', "QuizPlayerController@saveAnswer");
Route::get('/play/question', "QuizPlayerController@question");
