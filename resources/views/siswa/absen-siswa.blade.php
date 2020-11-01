<title>Absensi Siswa</title>

@include('navbar')

<div class="col p-4" style="margin-top: 40px;">
<div class="card border-dark">
<div class="container-fluid">
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/siswa">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Absensi Siswa</li>
  </ol>
</nav> 

<div class="container-fluid">    
<div class="row">
<div class="card card-absen" style="width: 100%;">
<div class="card-header bg-light"><h3>hari - Tanggal - Kelas</h3></div>
  <div class="card-body">
  <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">No </th>
      <th scope="col">Jam </th>
      <th scope="col">Absensi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>07.30 - 08.30</td>
      <td><a href="#"> <button type="button" class="btn btn-outline-primary">Absen Masuk</button></a></td>
    </tr>
 
  </tbody>
</table><hr>
  </div>
</div>
</div>
</div><br>


</div></div></div>

</div>
</div>

@include('footer')