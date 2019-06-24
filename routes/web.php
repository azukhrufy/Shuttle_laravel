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

Route::get('halo', function () {
    return 'Selamat datang di parkiran kami';
});

Route::get('home', function () {
    return view('home');
});

// Route::get('first_home', function () {
//     return view('first_home');
// });

//Route Home
Route::get('/home', 'HomeController@first_home');
//Route Shuttle
Route::get('/Shuttle/cari_tiket', 'ShuttleController@cari_tiket');
Route::get('/Shuttle/cari', 'ShuttleController@cari');
Route::get('/Shuttle/tampil_data', 'ShuttleController@tampil_data');
Route::get('/Shuttle/pesan/{id_jadwal_keberangkatan}', 'ShuttleController@pesan');
Route::get('/Shuttle/pesankursi', 'ShuttleController@pesankursi');
Route::get('/Shuttle/lihat_pesanan', 'ShuttleController@lihat_pesanan');

//Route Travel
Route::get('/Travel/cari_tiket', 'TravelController@cari_tiket');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Route Login
Route::get('/Login/form', 'Login_Controller@login_form');
Route::get('/Login', 'Login_Controller@login');
Route::get('/Logout', 'Login_Controller@logout');