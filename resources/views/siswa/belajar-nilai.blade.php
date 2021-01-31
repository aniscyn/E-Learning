<title> BELAJAR - Siswa</title>

<link href="{{ asset('css/siswa/belajar.css') }}" rel="stylesheet" type="text/css">

@include('siswa.nav-soal')

<div class="col p-4" style="margin-top: 40px;">
<div class="card">

<nav aria-label="breadcrumb"><br>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/siswa">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/siswa/jadwal">Jadwal</a></li>
  </ol>
</nav>

<div class="container">
    <a href="/siswa/jadwal/{{$jadwal->id_jadwal}}/belajar">
        <button type="button" class="btn btn-primary">Kembali</button>
    </a>
    <h5  style="text-align: center">Nilai Anda</h5>
    <h3 style="text-align: center">{{$pengerjaanSoal->jumlah_benar}} dari {{$pengerjaanSoal->soal->detailSoal->count()}} Soal</h3>
    <h1 style="text-align: center;font-size: 64pt;font-weight: bolder">{{$pengerjaanSoal->nilai}}</h1>
</div>
