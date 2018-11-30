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
Route::get('/rsvp', "RsvpController@confirm");
Route::get('/confirmed', "RsvpController@confirmed");

Route::get('/main', "GameShowController@question");
Route::get('/main/question', "GameShowController@question");
Route::get('/main/answers', "GameShowController@answers");
Route::get('/main/score', "GameShowController@score");

Route::get('/play', "GameShowController@playerLogin");
Route::get('/play/answer', "GameShowController@playerAnswer");
Route::get('/play/question', "GameShowController@playerQuestion");
