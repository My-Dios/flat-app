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

Route::get('/news', function () {
    return view('layouts.newsfox');
});
