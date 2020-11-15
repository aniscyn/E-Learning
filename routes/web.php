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
Route::get('/guru/jadwal', "App\Http\Controllers\Guru\JadwalController@viewJadwal");
Route::get('/guru/jadwal/{jadwal}/materi', "App\Http\Controllers\Guru\JadwalController@viewMateri");
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
Route::get('/admin', function(){
    return view('admin/login-adm');
});
Route::get('/admin/data-jadwal', function(){
    return view('admin/data-jadwal');
});
// Data Admin
Route::get('/admin/data-admin', 'App\Http\Controllers\Admin\DataAdminController@viewDataAdmin');
Route::get('/admin/data-admin/tambah', 'App\Http\Controllers\Admin\DataAdminController@viewTambah');
Route::post('/admin/data-admin/tambah', 'App\Http\Controllers\Admin\DataAdminController@postTambah');
Route::get('/admin/data-admin/{user}/ubah', 'App\Http\Controllers\Admin\DataAdminController@viewEdit');
Route::post('/admin/data-admin/{user}/ubah', 'App\Http\Controllers\Admin\DataAdminController@postEdit');
Route::post('/admin/data-admin/{user}/hapus', 'App\Http\Controllers\Admin\DataAdminController@postDelete');
// Admin Kelas
Route::get('/admin/data-kelas', 'App\Http\Controllers\Admin\DataKelasController@viewDataKelas');
Route::get('/admin/data-kelas/tambah', 'App\Http\Controllers\Admin\DataKelasController@viewTambah');
Route::post('/admin/data-kelas/tambah', 'App\Http\Controllers\Admin\DataKelasController@postTambah');
Route::get('/admin/data-kelas/{kelas}/ubah', 'App\Http\Controllers\Admin\DataKelasController@viewEdit');
Route::post('/admin/data-kelas/{kelas}/ubah', 'App\Http\Controllers\Admin\DataKelasController@postEdit');
Route::post('/admin/data-kelas/{kelas}/hapus', 'App\Http\Controllers\Admin\DataKelasController@postDelete');
//Admin Mapel
Route::get('/admin/data-mapel', 'App\Http\Controllers\Admin\DataMapelController@viewDataMapel');
Route::get('/admin/data-mapel/tambah', 'App\Http\Controllers\Admin\DataMapelController@viewTambah');
Route::post('/admin/data-mapel/tambah', 'App\Http\Controllers\Admin\DataMapelController@postTambah');
Route::get('/admin/data-mapel/{mapel}/ubah', 'App\Http\Controllers\Admin\DataMapelController@viewEdit');
Route::post('/admin/data-mapel/{mapel}/ubah', 'App\Http\Controllers\Admin\DataMapelController@postEdit');
Route::post('/admin/data-mapel/{mapel}/hapus', 'App\Http\Controllers\Admin\DataMapelController@postDelete');
//Admin Siswa
Route::get('/admin/data-siswa', 'App\Http\Controllers\Admin\DataSiswaController@viewDataSiswa');
Route::get('/admin/data-siswa/tambah', 'App\Http\Controllers\Admin\DataSiswaController@viewTambah');
Route::post('/admin/data-siswa/tambah', 'App\Http\Controllers\Admin\DataSiswaController@postTambah');
Route::get('/admin/data-siswa/{siswa}/ubah', 'App\Http\Controllers\Admin\DataSiswaController@viewEdit');
Route::post('/admin/data-siswa/{siswa}/ubah', 'App\Http\Controllers\Admin\DataSiswaController@postEdit');
Route::post('/admin/data-siswa/{siswa}/hapus', 'App\Http\Controllers\Admin\DataSiswaController@postDelete');
//Admin Guru
Route::get('/admin/data-guru', 'App\Http\Controllers\Admin\DataGuruController@viewDataGuru');
Route::get('/admin/data-guru/tambah', 'App\Http\Controllers\Admin\DataGuruController@viewTambah');
Route::post('/admin/data-guru/tambah', 'App\Http\Controllers\Admin\DataGuruController@postTambah');
Route::get('/admin/data-guru/{guru}/ubah', 'App\Http\Controllers\Admin\DataGuruController@viewEdit');
Route::post('/admin/data-guru/{guru}/ubah', 'App\Http\Controllers\Admin\DataGuruController@postEdit');
Route::post('/admin/data-guru/{guru}/hapus', 'App\Http\Controllers\Admin\DataGuruController@postDelete');
// Halaman Untuk Generate Data
Route::get('/generator/siswa', "App\Http\Controllers\Generators\SiswaController@viewAdd");
Route::post('/generator/siswa', "App\Http\Controllers\Generators\SiswaController@processAdd");

// TODO: Guru belum berfungsi
Route::get('/generator/guru', "App\Http\Controllers\Generators\GuruController@viewAdd");
Route::post('/generator/guru', "App\Http\Controllers\Generators\GuruController@processAdd");
