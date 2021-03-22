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
Route::get('/course', function () {
    return view('layouts.coursefox');
});

// // Route News
//mengambil data dari database untuk di buka di halaman homeadmin
Route::get('/adminnews', 'newsController@index');
//direct ke createnews
Route::get('/adminnews/create', 'newsController@create');
//simpan data di databasenya
Route::post('/adminnews', 'newsController@store');
//direct ke halaman detailnews dengan data sesuai idnya
Route::get('/adminnews/{id}', 'newsController@show');
//direct ke halaman editnews sesuai idnya
Route::get('/adminnews/{id}/edit', 'newsController@edit');
//mengupdate dari databasenya sesuai idnya
Route::put('/adminnews/{id}', 'newsController@update');
//menghapus datanya sesuai idnya
Route::delete('/adminnews/{id}', 'newsController@destroy');

// Route::resource('admin', 'newsController');




