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

// Route untuk halaman yang tidak perlu login
Route::group([
    'middleware' => [
        'guest',
    ]
], function () {
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

    Route::get('/admin', function(){
        return view('admin/login-adm');
    });
    Route::post('/admin/login', "App\Http\Controllers\LoginAdminController@processLogin");
});


// Route untuk siswa yang telah login
Route::group([
    'middleware' => [
        'auth.siswa',
    ]
], function () {

    Route::get('siswa/logout', "App\Http\Controllers\LoginController@processLogout");

    // Siswa
    Route::get('/siswa', function () {
        return view('beranda');
    });
    Route::get('/siswa/jadwal', "App\Http\Controllers\Siswa\JadwalController@viewJadwal");

    // Belajar
    Route::get('/siswa/jadwal/{jadwal}/belajar', "App\Http\Controllers\Siswa\BelajarController@index")->name('siswa.home.belajar');
    Route::get('/siswa/jadwal/{jadwal}/belajar/{materi}/soal', "App\Http\Controllers\Siswa\BelajarController@latihanSoal");
    Route::post('/siswa/jadwal/{jadwal}/belajar/{materi}/soal', "App\Http\Controllers\Siswa\BelajarController@postLatihanSoal");

    // Review Latihan Soal
    Route::get('/siswa/jadwal/{jadwal}/belajar/{materi}/soal/review', "App\Http\Controllers\Siswa\BelajarController@viewReviewSoal")->name('siswa.review.view');
    Route::post('/siswa/jadwal/{jadwal}/belajar/{materi}/soal/review', "App\Http\Controllers\Siswa\BelajarController@postReviewSoal");
    Route::get('/siswa/jadwal/{jadwal}/belajar/{materi}/soal/review/{detail}/ubah', "App\Http\Controllers\Siswa\BelajarController@viewEditReviewSoal")->name('siswa.review.edit');
    Route::post('/siswa/jadwal/{jadwal}/belajar/{materi}/soal/review/{detail}/ubah', "App\Http\Controllers\Siswa\BelajarController@postEditReviewSoal")->name('siswa.review.edit.post');


    //Absensi Siswa
    Route::get('/siswa/absensi', "App\Http\Controllers\Siswa\AbsenController@viewAbsen");
    Route::post('/siswa/absensi/{absen}/masuk', "App\Http\Controllers\Siswa\AbsenController@postAbsenMasuk");
    Route::post('/siswa/absensi/{absen}/keluar', "App\Http\Controllers\Siswa\AbsenController@postAbsenKeluar");
    // Route::get('/siswa/profile', function(){
    //     return view('siswa/profile-siswa');
    // });]

    //Soal
    // Route::get('/siswa/latihan-soal', function(){
    //     return view('siswa/latihan-soal');
    // });
    // Route::get('/siswa/latihan-soal-lihat', function(){
    //     return view('siswa/review-soal');
    // });
    // Route::get('/siswa/latihan-soal-ubah', function(){
    //     return view('siswa/ubah-latihan');
    // });

    //Profile Siswa
    Route::get('/siswa/profile', "App\Http\Controllers\Siswa\ProfileController@viewProfile");
    Route::get('/siswa/profile/ubah', "App\Http\Controllers\Siswa\ProfileController@viewEdit");
    Route::post('/siswa/profile/ubah/{user}/process', "App\Http\Controllers\Siswa\ProfileController@postEdit");

    Route::get('/siswa/ubah-sandi', function () {
        return view('siswa/ubah-sandi');
    });
    Route::post('/siswa/ubah-sandi', "App\Http\Controllers\LoginController@processChangPassword");
});

// Route untuk guru yang telah login
Route::group([
    'middleware' => [
        'auth.guru',
    ]
], function () {
    Route::get('guru/logout', "App\Http\Controllers\LoginController@processLogout");

    // Guru
    Route::get('/guru', function() {
        return view('guru/beranda-guru');
    });
    Route::get('/guru/jadwal', "App\Http\Controllers\Guru\JadwalController@viewJadwal");

    // Soal
    Route::get('/guru/jadwal/{jadwal}/soal', "App\Http\Controllers\Guru\SoalController@viewSoal");
    Route::get('/guru/jadwal/{jadwal}/soal/tambah', "App\Http\Controllers\Guru\SoalController@viewTambahSoal");
    Route::post('/guru/jadwal/{jadwal}/soal/tambah', "App\Http\Controllers\Guru\SoalController@postTambahSoal");
    Route::get('/guru/jadwal/{jadwal}/soal/{soal}/ubah', "App\Http\Controllers\Guru\SoalController@viewEditSoal");
    Route::post('/guru/jadwal/{jadwal}/soal/{soal}/ubah', "App\Http\Controllers\Guru\SoalController@postEditSoal");
    Route::post('/guru/jadwal/{jadwal}/soal/{soal}/hapus', "App\Http\Controllers\Guru\SoalController@postHapusSoal");

    // Detail Soal
    Route::get('/guru/jadwal/{jadwal}/soal/{soal}/detail', "App\Http\Controllers\Guru\DetailSoalController@viewDetailSoal");
    Route::get('/guru/jadwal/{jadwal}/soal/{soal}/detail/tambah', "App\Http\Controllers\Guru\DetailSoalController@viewTambah");
    Route::post('/guru/jadwal/{jadwal}/soal/{soal}/detail/tambah', "App\Http\Controllers\Guru\DetailSoalController@postTambah");
    Route::get('/guru/jadwal/{jadwal}/soal/{soal}/detail/{detail}/ubah', "App\Http\Controllers\Guru\DetailSoalController@viewEdit");
    Route::post('/guru/jadwal/{jadwal}/soal/{soal}/detail/{detail}/ubah', "App\Http\Controllers\Guru\DetailSoalController@postEdit");
    Route::post('/guru/jadwal/{jadwal}/soal/{soal}/detail/{detail}/hapus', "App\Http\Controllers\Guru\DetailSoalController@postHapus");

    //Materi
    Route::get('/guru/jadwal/{jadwal}/materi', "App\Http\Controllers\Guru\JadwalController@viewMateri");
    Route::get('/guru/jadwal/{jadwal}/materi/tambah', "App\Http\Controllers\Guru\JadwalController@viewTambahMateri");
    Route::post('/guru/jadwal/{jadwal}/materi/tambah', "App\Http\Controllers\Guru\JadwalController@postTambahMateri");
    Route::get('/guru/jadwal/{jadwal}/materi/{materi}/ubah', "App\Http\Controllers\Guru\JadwalController@viewEditMateri");
    Route::post('/guru/jadwal/{jadwal}/materi/{materi}/ubah', "App\Http\Controllers\Guru\JadwalController@postEditMateri");
    Route::post('/guru/jadwal/{jadwal}/materi/{materi}/hapus', "App\Http\Controllers\Guru\JadwalController@postHapusMateri");

    //soal
    // Route::get('/guru/jadwal/tambah-soal-pg', function() {
    //     return view('guru/tambah-soal-pg');
    // });
    // Route::get('/guru/jadwal/tambah-soal-essai', function() {
    //     return view('guru/tambah-soal-essay');
    // });
    // Route::get('/guru/jadwal/ubah-soal-pg', function() {
    //     return view('guru/tambah-soal-pg');
    // });
    // Route::get('/guru/jadwal/ubah-soal-essai', function() {
    //     return view('guru/tambah-soal-essay');
    // });

    //Profile Guru
    Route::get('/guru/profile', "App\Http\Controllers\Guru\ProfileGuruController@viewProfile");
    Route::get('/guru/profile/ubah', "App\Http\Controllers\Guru\ProfileGuruController@viewEdit");
    Route::post('/guru/profile/ubah/{user}/process', "App\Http\Controllers\Guru\ProfileGuruController@postEdit");

    Route::get('/guru/ubah-sandi', function () {
        return view('guru/ubah-sandi');
    });
    Route::post('/guru/ubah-sandi', "App\Http\Controllers\LoginController@processChangPassword");
});


// Route untuk admin yang telah login
Route::group([
    'middleware' => [
        'auth.admin',
    ]
], function () {
    Route::get('/admin/logout', "App\Http\Controllers\LoginAdminController@processLogout");

    Route::get('/admin/data-absen', "App\Http\Controllers\Admin\DataAbsenController@viewAbsen");

    Route::get('/admin/beranda', function(){
        return view('admin/beranda-admin');
    });

    Route::get('/admin/data-materi', function(){
        return view('admin/data-materi');
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
    // Admin Jadwal
    Route::get('/admin/data-jadwal', 'App\Http\Controllers\Admin\DataJadwalController@viewDataJadwal');
    Route::get('/admin/data-jadwal/tambah', 'App\Http\Controllers\Admin\DataJadwalController@viewTambah');
    Route::post('/admin/data-jadwal/tambah', 'App\Http\Controllers\Admin\DataJadwalController@postTambah');
    Route::get('/admin/data-jadwal/{jadwal}/ubah', 'App\Http\Controllers\Admin\DataJadwalController@viewEdit');
    Route::post('/admin/data-jadwal/{jadwal}/ubah', 'App\Http\Controllers\Admin\DataJadwalController@postEdit');
    Route::post('/admin/data-jadwal/{jadwal}/hapus', 'App\Http\Controllers\Admin\DataJadwalController@postDelete');
    // Data Materi
    Route::get('/admin/data-jadwal/{jadwal}/data-materi', 'App\Http\Controllers\Admin\DataMateriController@viewDataMateri');
    Route::get('/admin/data-jadwal/{jadwal}/data-materi/tambah', 'App\Http\Controllers\Admin\DataMateriController@viewTambah');
    Route::post('/admin/data-jadwal/{jadwal}/data-materi/tambah', 'App\Http\Controllers\Admin\DataMateriController@postTambah');
    Route::get('/admin/data-jadwal/{jadwal}/data-materi/{materi}/ubah', 'App\Http\Controllers\Admin\DataMateriController@viewEdit');
    Route::post('/admin/data-jadwal/{jadwal}/data-materi/{materi}/ubah', 'App\Http\Controllers\Admin\DataMateriController@postEdit');
    Route::post('/admin/data-jadwal/{jadwal}/data-materi/{materi}/hapus', 'App\Http\Controllers\Admin\DataMateriController@postDelete');
});
// Data Soal
Route::get('/admin/data-soal', function(){
    return view('admin/data-soal');
});

//Laporan
Route::get('/admin/laporan', function(){
    return view('admin/laporan');
});
