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


Route::view('/signin', 'signin');
Route::view('/signup', 'signup');
Route::view('/dashboard', 'dashboard.dashboard');
Route::view('/stats', 'stats');
Route::view('/covers/{id}', 'cover.letter');
Route::view('/cvs/{id}', 'cv.basic');
Route::view('/cvs/{id}/preview', 'cv.preview');
