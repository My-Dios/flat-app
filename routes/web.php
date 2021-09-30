<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you ca6n register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Series;
// // Route Index
Route::get('/', 'indexController@indexhome');
Route::get('/news', 'indexController@indexnews');
// Route::get('/course', 'indexController@indexcourse')->middleware('auth');
Route::get('/profile', 'indexController@indexprofilecheck')->middleware('auth');

// // Route Index Admin
Route::get('/admin', 'indexAdminController@indexhomeadmin')->middleware('is_admin');
Route::get('/adminnews', 'indexAdminController@indexnewsadmin')->middleware('is_admin');

// // Route News
//mengambil data dari database untuk di buka di halaman homeadmin
// Route::get('/flatnews', 'newsController@index');
//direct ke createnews
Route::get('/flatnews/create', 'newsController@create');
//simpan data di databasenya
Route::post('/flatnews', 'newsController@store');
//direct ke halaman detailnews dengan data sesuai idnya
Route::get('/flatnews/{id}', 'newsController@show')->name('detailpost');
//direct ke halaman editnews sesuai idnya
Route::get('/flatnews/{id}/edit', 'newsController@edit');
//mengupdate dari databasenya sesuai idnya
Route::put('/flatnews/{id}', 'newsController@update');
//menghapus datanya sesuai idnya
Route::delete('/flatnews/{id}', 'newsController@destroy');
// Route::resource('flatnews', 'newsController');

// // Route Jumbotron
Route::get('/flatjumbotrons/create', 'jumbotronController@create');
Route::post('/flatjumbotrons', 'jumbotronController@store');
Route::get('/flatjumbotrons/{id}', 'jumbotronController@show');
Route::get('/flatjumbotrons/{id}/edit', 'jumbotronController@edit');
Route::put('/flatjumbotrons/{id}', 'jumbotronController@update');
Route::delete('/flatjumbotrons/{id}', 'jumbotronController@destroy');

// // Route Testimony
Route::get('/flattestimonies/create', 'TestimonyController@create');
Route::post('/flattestimonies', 'TestimonyController@store');
Route::get('/flattestimonies/{id}', 'TestimonyController@show');
Route::get('/flattestimonies/{id}/edit', 'TestimonyController@edit');
Route::put('/flattestimonies/{id}', 'TestimonyController@update');
Route::delete('/flattestimonies/{id}', 'TestimonyController@destroy');

// // Route Profile
Route::post('/profile', 'ProfileController@store');
Route::put('/profile/{id}', 'ProfileController@update');

// // Route Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

// // Route Comments
Route::resource('comment', 'CommentController')->middleware('auth');

// // Route Course
Route::get('/course', function () {
    $featuredSeries = Series::take(3)->latest()->get();
    return view('layouts.course.coursefox', compact('featuredSeries'));
});

Route::resource('/series', 'SeriesController');

