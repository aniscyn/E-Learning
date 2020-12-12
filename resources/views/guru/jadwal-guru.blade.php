<title>Jadwal - Guru</title>
<link href="{{ asset('css/guru/jadwal-guru.css') }}" rel="stylesheet" type="text/css">

<!-- Navbar -->
@include('guru.nav-guru')

<!-- konten -- jadwalku -->

<!-- Senin -->
<div class="col p-4" style="margin-top: 30px;">
<div class="card border-dark card-container">
<div class="container-fluid">

<nav aria-label="breadcrumb"> <br>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
  </ol>
</nav>

<div class="container-fluid">
<div class="row">

    @foreach ($jadwal as $key => $item)
    <div class="col-sm-6">
        <div class="card card-course" style="width: 30rem;margin-top:15px">
        <div class="card-header bg-light"><h2>{{ $key }}</h2></div>
          <div class="card-body">
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Jam Ke </th>
              <th scope="col">Kelas </th>
              <th scope="col">keterangan </th>
              <th scope="col">Mata Pelajaran</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($item as $mapel)
              <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $mapel->kelas->nm_kelas }}</td>
                <td>{{$mapel->jm_mulai}} - {{$mapel->jm_selesai}}</td>
                <td><a href="/guru/jadwal/{{$mapel->id_jadwal}}/materi"> <button type="button" class="btn btn-primary" >{{$mapel->mataPelajaran->nm_mapel}}</button></a></td>
              </tr>
              @endforeach
          </tbody>
        </table><hr>
          </div>
        </div>
        </div>
    @endforeach


</div></div> <br>
</div></div></div>

@include('footer')
