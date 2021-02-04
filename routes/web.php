<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//penyedia jasa
Route::get('/penyediajasa/dashboard', 'PenyediaJasaController@dashboard');
Route::get('/penyediajasa/profil_usaha', 'PenyediaJasaController@profil_usaha');
Route::get('/penyediajasa/kelola_jasa', 'PenyediaJasaController@kelola_jasa');
Route::get('/penyediajasa/tambahjasa', 'PenyediaJasaController@tambah_jasa');