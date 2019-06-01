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

Auth::routes();

Route::middleware('auth')->group(function(){
  Route::get('/home', 'TweetsController@index')->name('home');

  Route::get('/tweets/{tweet}', 'TweetsController@show');
  Route::post('/tweets', 'TweetsController@store');

  Route::get('/profiles/{username}', 'ProfilesController@show');
  Route::get('/profiles/edit/{user}', 'ProfilesController@edit');
  Route::patch('/profiles/edit/{user}', 'ProfilesController@update');

  Route::post('/like/{tweet}', 'LikesController@store');
  Route::delete('/like/{tweet}', 'LikesController@destroy');

  Route::post('/comment/{tweet}', 'CommentsController@store');
  Route::delete('/comment/{tweet}/{commentId}', 'CommentsController@destroy');

  Route::post('/follow/{user}', 'FollowsController@store');
  Route::delete('/follow/{user}', 'FollowsController@destroy');
});
