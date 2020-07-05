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
    return view('/artikel/erd');
});

Route::get('/artikel', 'ArticlesController@index'); // menampilkan tabel berisi data artikel-artikel
Route::post('/artikel', 'ArticlesController@store'); // menyimpan artikel baru
Route::get('/artikel/create', 'ArticlesController@create'); // menampilkan form untuk membuat artikel baru
Route::get('/artikel/{id}', 'ArticlesController@show'); // menampilkan halaman detil (show) untuk artikel dengan id tertentu
Route::put('/artikel/{id}', 'ArticlesController@update'); // menyimpan data dari form edit
Route::get('/artikel/{id}/edit', 'ArticlesController@edit'); // menampilkan halaman form edit untuk artikel dengan id tertentu
Route::put('/artikel/{id}', 'ArticlesController@delete'); // menghapus data dengan id tertentu