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

Auth::routes();

Route::get('/','Welcome@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/artikel', 'artikel@index')->name('artikel');
Route::get('/laguWajib', 'laguWajib@index')->name('laguWajib');
Route::get('/materi', 'materi@index')->name('materi');
Route::get('/permainan', 'permainan@index')->name('permainan');
Route::get('/berita', 'berita@index')->name('berita');



// Route::post('/kritik_saran','simpan@Kritik_Saran');
