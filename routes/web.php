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
Route::get('/buku', 'BukuController@index');
Route::get('/buku/create', 'BukuController@create');
Route::post('/buku','BukuController@store');
Route::get('/buku/{id_buku}/edit', 'BukuController@edit');
Route::post('/buku/{id_buku}/update', 'BukuController@update');
Route::get('/buku/{id_buku}/hapus', 'BukuController@destroy');

