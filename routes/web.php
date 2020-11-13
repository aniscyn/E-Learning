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

//Absensi Siswa 
Route::get('/siswa/absensi', "App\Http\Controllers\Siswa\AbsenController@viewAbsen");
Route::post('/siswa/absensi/{absen}/masuk', "App\Http\Controllers\Siswa\AbsenController@postAbsenMasuk");
Route::post('/siswa/absensi/{absen}/keluar', "App\Http\Controllers\Siswa\AbsenController@postAbsenKeluar");
Route::get('/siswa/profile', function(){
    return view('siswa/profile-siswa');
});

//Profile Siswa
Route::get('/siswa/profile', "App\Http\Controllers\Siswa\ProfileController@viewProfile");
Route::get('/siswa/profile/ubah', "App\Http\Controllers\Siswa\ProfileController@viewEdit");
Route::post('/siswa/profile/ubah/{user}/process', "App\Http\Controllers\Siswa\ProfileController@postEdit");


// Guru
Route::get('/guru', function() {
    return view('guru/beranda-guru');
});
Route::get('/guru/jadwal', function() {
    return view('guru/jadwal-guru');
});
Route::get('/guru/jadwal/materi', function() {
    return view('guru/materi');
});
Route::get('/guru/jadwal/materi/tambah', function() {
    return view('guru/tambah-materi');
});
Route::get('/guru/jadwal/materi/ubah', function() {
    return view('guru/ubah-materi');
});

//Profile Guru
Route::get('/guru/profile', "App\Http\Controllers\Guru\ProfileGuruController@viewProfile");
Route::get('/guru/profile/ubah', "App\Http\Controllers\Guru\ProfileGuruController@viewEdit");
Route::post('/guru/profile/ubah/{user}/process', "App\Http\Controllers\Guru\ProfileGuruController@postEdit");

// Admin
Route::get('/admin/data-admin', function(){
    return view('admin/data-admin');
});
Route::get('/admin/data-admin/tambah', function(){
    return view('admin/tambah-admin');
});
Route::get('/admin/data-admin/ubah', function(){
    return view('admin/ubah-admin');
});

Route::get('/admin/data-kelas', function(){
    return view('admin/data-kelas');
});
Route::get('/admin/data-kelas/tambah', function(){
    return view('admin/tambah-kelas');
});
Route::get('/admin/data-kelas/ubah', function(){
    return view('admin/ubah-kelas');
});

// Halaman Untuk Generate Data
Route::get('/generator/siswa', "App\Http\Controllers\Generators\SiswaController@viewAdd");
Route::post('/generator/siswa', "App\Http\Controllers\Generators\SiswaController@processAdd");

// TODO: Guru belum berfungsi
Route::get('/generator/guru', "App\Http\Controllers\Generators\GuruController@viewAdd");
Route::post('/generator/guru', "App\Http\Controllers\Generators\GuruController@processAdd");
