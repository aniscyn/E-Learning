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


// Siswa
Route::get('/siswa', function () {
    return view('beranda');
});
Route::get('/siswa/jadwal', "App\Http\Controllers\Siswa\JadwalController@viewJadwal");
Route::get('/siswa/jadwal/belajar', function(){
    return view('siswa/belajar-siswa');
});
Route::get('/siswa/absensi', function(){
    return view('siswa/absen-siswa');
});
Route::get('/siswa/profile', function(){
    return view('siswa/profile-siswa');
});
Route::get('/siswa/profile', "App\Http\Controllers\Siswa\ProfileController@viewProfile");
Route::get('/siswa/profile/ubah', "App\Http\Controllers\Siswa\ProfileController@viewEdit");


// Guru
Route::get('/guru', function() {
    return view('guru/beranda-guru');
});
Route::get('/guru/jadwal', function() {
    return view('guru/jadwal-guru');
});
Route::get('/guru/profile', function(){
    return view('guru/profile-guru');
});
Route::get('/guru/profile/ubah', function(){
    return view('guru/ubahprofile-guru');
});



// Halaman Untuk Generate Data
Route::get('/generator/siswa', "App\Http\Controllers\Generators\SiswaController@viewAdd");
Route::post('/generator/siswa', "App\Http\Controllers\Generators\SiswaController@processAdd");

// TODO: Guru belum berfungsi
Route::get('/generator/guru', "App\Http\Controllers\Generators\GuruController@viewAdd");
Route::post('/generator/guru', "App\Http\Controllers\Generators\GuruController@processAdd");
