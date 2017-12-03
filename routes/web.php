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
Route::post('/', 'EmailController@sendMail');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::post('/profile', 'UserController@updateAvatar');
Route::get('/profile', 'UserController@profile');
Route::get('/preguntas', function() {
    return view('faq');
});
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'ApiController@newsapi');
Route::post('/source_id', 'ApiController@newsapi');