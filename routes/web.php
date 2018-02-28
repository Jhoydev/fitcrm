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

Route::get('/rankings', function () {
    return view('/welcome');
});
Route::get('/members/show', function () {
    return view('members.show');
});

Auth::routes();

Route::resource('/','FrontController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notification', 'HomeController@sendNotification');
Route::resource('/contacts','ContactController');
Route::resource('/members','MemberController');

Route::get('/championships/{id}/members','ChampionshipController@members');
Route::resource('/championships','ChampionshipController');