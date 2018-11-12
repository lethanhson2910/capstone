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

Route::get('index',['as'=> 'trangchu','uses'=> 'PageController@index'] );

Route::get('details','PageController@getDetails')->name('f.page.details');

Route::get('details','AdminController@getListNews')->name('f.page.listnews');

Auth::routes();

Route::get('login', 'Auth.LoginController@getLogin')->name('f.home.login');

Route::get('details','HomeController@getDetails')->name('f.home.details');
