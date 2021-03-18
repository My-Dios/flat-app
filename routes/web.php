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
Route::get('/', function () {
    return view('layouts.homefox');
});

Route::get('/about', function () {
    return view('layouts.aboutfox');
});

Route::get('/course', function () {
    return view('layouts.coursefox');
});


// Route::get('/admin', function () {
//     return view('layoutsadmin.homeadmin');
// });

// Route News
Route::get('/admin/createnews', 'newsController@create');
Route::post('/admin/createnews', 'newsController@store');
Route::get('/admin', 'newsController@index');
Route::get('/news', 'newsController@indexnews');
Route::delete('/admin/{id}', 'newsController@destroy');
