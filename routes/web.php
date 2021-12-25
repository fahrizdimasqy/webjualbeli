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
Route::get('/login', 'AdminController@login')->name('login');
Route::post('/actionlogin', 'AdminController@actionlogin');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/tambah', 'BarangController@create')->name('tambah');
Route::post('/admin/actiontambah', 'BarangController@store');

Route::get('/', 'PembelianController@index')->name('user');
Route::get('/pembelian/{id}', 'PembelianController@pembelian')->name('pembelian');
Route::post('/aksipembelian', 'PembelianController@aksipembelian');