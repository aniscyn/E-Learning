<title> BELAJAR - Siswa</title>

<link href="{{ asset('css/siswa/belajar.css') }}" rel="stylesheet" type="text/css">

@include('siswa.nav-siswa')

<div class="col p-4" style="margin-top: 40px;">
<div class="card">

<nav aria-label="breadcrumb"><br>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href="#">Jadwal</a></li>
    <li class="breadcrumb-item active"> nm mapel</li>
  </ol>
</nav>

<div class="container">
<div class="card text-center">
    <a href=""> <label class="txt"> Jadwal - Kelas - Nama Guru</label></a>
</div>
</div>

@foreach ($dataMateri as $materi)
<div class="container"><br>
    <div class="card-bljr">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title" id="pertemuan1">{{$materi->nm_materi}}</h3><br>
        <h5><i class="fa fa-file-text" aria-hidden="true"> Rangkuman Materi </i></h5>
        {!!$materi->rs_materi!!}
        <br />
        <a href="#" class="btn btn-primary"> Unduh Materi</a>
        <br /><br />
        @if ($materi->soal != null)
            <div class="lth-bljr">
            <h4><a href="/siswa/jadwal/{{$jadwal->id_jadwal}}/belajar/{{$materi->id_materi}}/soal"><i class="fa fa-pencil-square" aria-hidden="true"> Latihan Soal</i></a></h4>
            <p>Klik untuk melakukan latihan soal</p>
            </div>
        @endif

      </div>
    </div>
    </div>
    </div>
@endforeach


</div>
</div>

@include('footer')
