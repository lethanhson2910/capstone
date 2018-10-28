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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('Home', 'HomeController@Sondeptrai');
// Route::get('getForm', function () {
//     return view('postForm');
// });
// Route::post('postForm', ['as'=>'postForm','uses'=> 'HomeController@postForm']);
//
//
// Route::get('Upload', function () {
//     return view('postFile');
// });
// Route::post('postFile', ['as'=>'postFile','uses'=>'HomeController@postFile']);
//
// Route::get('getJson', 'HomeController@Json');
//
//
// Route::get('myView', 'HomeController@MYVIEW');
//
//
// Route::get('blade', function () {
//     return view('pages.laravel');
// });
//
//
// Route::get('Blade/{str}', 'HomeController@Blade');
//
//
// //database
//
// Route::get('database', function () {
//     Schema::create('nhanvien1', function ($table) {
//         $table->increments('id');
//         $table->string('email');
//         $table->string('name');
//         $table->string('gender');
//
//     });
//
//
// });
//     echo "Da thuc hien";
//
// Route::get('lienketbang', function()
// {
//   Schema::create('sanpham', function($table)){
//
//   });
// });

// Route::get('ThemNhanVien', function () {
//     return view('Add');
// });
// Route::post('Them', ['as'=>'','uses'=> 'HomeController@Add']);

Route::get('Index','HomeController@index');

Route::get('user/create','HomeController@create');

Route::post('user/create','HomeController@store');

Route::get('user/{id}/edit','HomeController@edit');

Route::post('user/update','HomeController@update');


Route::get('user/{id}/delete','HomeController@delete');
