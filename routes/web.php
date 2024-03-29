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
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});
Route::get('bayar', function () {
    return view('payments.v_pembayaran');
});
Route::get('test', function () {
    return view('layouts.app');
});
Route::get('metodePembayaran', function () {
    return view ('payments.metodePembayaran');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('films', 'FilmController');
Route::get('/films/cari', 'FilmController@cari');

Route::get('filmss', 'FilmController@indexs');
Route::get('/payment', 'PaymentController@index');

Route::post('/register', 'Auth\RegisterController@create');

Route::resource('studios', 'StudioController');

Route::resource('cinemas', 'CinemaController');

Route::resource('payments', 'PaymentController');
