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
FB-ID 748644666070485
FB-PS da319e20765cf3f633d7bb0beb30cd45
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/strap', function (){
    return view('bootstraps');
})->name('strap');

Route::get('/student', function (){
    return view('student');
})->name('student');

Route::get('/redirect/{service}', 'SocialiteController@redirect');

Route::get('/callback/{service}', 'SocialiteController@callback');
