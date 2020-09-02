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
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/belajar', function () {
    echo '<h1>Hello world</h1>';
    echo '<h1>sedang belajar laravel</h1>';
});
Route::get('/stok_barang/{jenis?}/{merek?}', function ($a = 'smartphone',$b = 'LG') {
    return "Cek sisa stok untuk $a $b";
});
Route::fallback(function(){
    return 'Maaf halaman yang anda tuju tidak ditemukan';
});

