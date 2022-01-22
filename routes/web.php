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
Route::get('/bukus','BukuController@index');
Route::get('/bukus/tambah','BukuController@tambah');
Route::get('/bukus/edit/{id}','BukuController@edit');
Route::get('/bukus/hapus/{id}','BukuController@hapus');
Route::post('/bukus/store','BukuController@store');
Route::post('/bukus/update','BukuController@update');





Route::get('/1', function () {
    return view('welcome');
});
