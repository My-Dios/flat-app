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

// Route Without Data
Route::get('/', 'newsController@indexhome');

Route::get('/about', function () {
    return view('layouts.aboutfox');
});

Route::get('/course', function () {
    return view('layouts.coursefox');
});

// // Route News
//direct ke createnews
Route::get('/admin/createnews', 'newsController@create');
//simpan data di databasenya
Route::post('/admin/createnews', 'newsController@store');
//mengambil data dari database untuk di buka di halaman homeadmin
Route::get('/admin', 'newsController@index');
//mengambil data dari database untuk di buka di halaman news
Route::get('/news', 'newsController@indexnews');
//mengambil data dari database untuk di buka di halaman footer
// Route::get('/', 'newsController@indexnewsfooter');
//direct ke halaman detailnews dengan data sesuai idnya
Route::get('/news/{id}', 'newsController@show');
//direct ke halaman editnews sesuai idnya
Route::get('/admin/{id}/edit', 'newsController@edit');
//mengupdate dari databasenya sesuai idnya
Route::put('/admin/{id}', 'newsController@update');
//menghapus datanya sesuai idnya
Route::delete('/admin/{id}', 'newsController@destroy');
