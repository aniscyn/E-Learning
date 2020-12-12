<title>Jadwal - Siswa</title>
<link href="{{ asset('css/siswa/jadwal-siswa.css') }}" rel="stylesheet" type="text/css">

<!-- Navbar -->
@include('navbar')

<!-- konten -- jadwalku -->

<!-- Senin -->
<div class="col p-4" style="margin-top: 40px;">
<div class="card border-dark card-container">
<div class="container-fluid">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Jadwalku</li>
  </ol>
</nav>

<div class="container-fluid">
<div class="row">

    @foreach ($jadwal as $key => $item)
    <div class="col-sm-6">
        <div class="card card-course" style="width: 30rem; margin-top:20px">
        <div class="card-header bg-light"><h2>{{ $key }}</h2></div>
          <div class="card-body">
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Jam Ke </th>
              <th scope="col">keterangan </th>
              <th scope="col">Mata Pelajaran</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($item as $mapel)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$mapel->jm_mulai}} - {{$mapel->jm_selesai}}</td>
                <td><a href="/siswa/jadwal/belajar"> <button type="button" class="btn btn-primary" >{{$mapel->mataPelajaran->nm_mapel}}</button></a></td>
              </tr>
              @endforeach
          </tbody>
        </table><hr>
          </div>
        </div>
        </div>
    @endforeach


<div class="col-sm-6" style="margin-top: 20px">
<div class="card card-course" style="width: 30rem;">
<div class="card-header bg-light"><h2> Juma't </h2></div>
<div class="card-body">
 <a href="#"> <button type="button" class="btn btn-primary" >Absen</button></a>
  </div>
</div>
</div>

<div class="col-sm-6" style="margin-top: 20px">
<div class="card card-course" style="width: 30rem;">
<div class="card-header bg-light" > <h2> Sabtu </h2></div>
<div class="card-body">
 <a href="#"> <button type="button" class="btn btn-primary" >Absen </button></a>

  </div>
</div>
    </div>
  </div>
</div>
<br>


</div><br>
</div></div>
<br>
@include('footer')
