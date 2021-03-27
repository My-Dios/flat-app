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

// // Route Home
Route::get('/', 'newsController@indexhome');
Route::get('/news', 'newsController@indexnews');
Route::get('/course', 'newsController@indexcourse');

// // Route News
//mengambil data dari database untuk di buka di halaman homeadmin
Route::get('/flatnews', 'newsController@index');
//direct ke createnews
Route::get('/flatnews/create', 'newsController@create');
//simpan data di databasenya
Route::post('/flatnews', 'newsController@store');
//direct ke halaman detailnews dengan data sesuai idnya
Route::get('/flatnews/{id}', 'newsController@show');
//direct ke halaman editnews sesuai idnya
Route::get('/flatnews/{id}/edit', 'newsController@edit');
//mengupdate dari databasenya sesuai idnya
Route::put('/flatnews/{id}', 'newsController@update');
//menghapus datanya sesuai idnya
Route::delete('/flatnews/{id}', 'newsController@destroy');
// Route::resource('flatnews', 'newsController');

// // Route Jumbotron
Route::get('/flatjumbotrons', 'newsController@index');
Route::get('/flatjumbotrons/create', 'jumbotronController@create');
Route::post('/flatjumbotrons', 'jumbotronController@store');
Route::get('/flatjumbotrons/{id}', 'jumbotronController@show');
Route::get('/flatjumbotrons/{id}/edit', 'jumbotronController@edit');
Route::put('/flatjumbotrons/{id}', 'jumbotronController@update');
Route::delete('/flatjumbotrons/{id}', 'jumbotronController@destroy');

// // Route Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
