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
Route::get('/', function () {
    return view('single-page/single-pg');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', "App\Http\Controllers\LoginController@processLogin");
Route::get('/logout', "App\Http\Controllers\LoginController@processLogout");


//siswa
Route::get('/siswa', function () {
    return view('beranda');
});
Route::get('/siswa/jadwal', function(){
    return view('siswa/jadwal-siswa');
});
Route::get('/siswa/jadwal/belajar', function(){
    return view('siswa/belajar-siswa');
});
Route::get('/siswa/profile', function(){
    return view('siswa/profile-siswa');
});
Route::get('/siswa/profile/ubah', function(){
    return view('siswa/ubahprofile-siswa');
});





// Halaman Untuk Generate Data
Route::get('/generator/siswa', "App\Http\Controllers\Generators\SiswaController@viewAdd");
Route::post('/generator/siswa', "App\Http\Controllers\Generators\SiswaController@processAdd");

// TODO: Guru belum berfungsi
Route::get('/generator/guru', "App\Http\Controllers\Generators\GuruController@viewAdd");
Route::post('/generator/guru', "App\Http\Controllers\Generators\GuruController@processAdd");
