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
    return view('v_index');
});
Route::get('dtFilm', function () {
    return view('v_dtFilm');
});
Route::get('cs', function () {
    return view('v_comingsoon');
});
Route::get('bayar', function () {
    return view('v_pembayaran');
});
Route::get('seats', function () {
    return view('studios.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('films', 'FilmController');

Route::get('/payment', 'PaymentController@index');

Route::get('/films/cari', 'FilmController@cari');

Route::resource('studios', 'StudioController');

Route::resource('cinemas', 'CinemaController');

Route::resource('payments', 'PaymentController');
