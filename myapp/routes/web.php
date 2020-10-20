<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------- ----
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/sass', function () {
    return view('sass');
});

Route::get('/user',  'UserController@index')
        ->middleware('auth');

Route::get('/studio',  'StudioController@index');

Route::get('studio/add', 'StudioController@add');
Route::post('/studio/add', 'StudioController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/room', 'RoomController@index');

Route::get('room/add', 'RoomController@add');
Route::post('/room/add', 'RoomController@create');

Route::get('/reserve', 'ReserveController@index');

Route::get('reserve/add', 'ReserveController@add');
Route::post('/reserve/add', 'ReserveController@create');


Route::get('studio/search', 'StudioController@search');


Route::get('studio/comment', 'CommentController@create');
Route::get('studio/comment', 'CommentController@comment');

Route::get('studio/review', 'CommentController@index');
Route::post('/studio/review', 'CommentController@create');

