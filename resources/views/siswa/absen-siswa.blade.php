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
<div class="card-header bg-light"><h3>{{(new \Carbon\Carbon(now()))->translatedFormat("l, d F Y")}} - {{auth()->user()->siswa->kelas->nm_kelas}}</h3></div>
  <div class="card-body">
  <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">Keterangan </th>
      <th scope="col">Jam </th>
      <th scope="col">Absensi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Jam Masuk</td>
      <td>
          {{$absen->jm_masuk}}
      </td>
      <td>
          @if ($absen->jm_masuk == null)
          <form action="/siswa/absensi/{{$absen->id_absen}}/masuk" method="post">
            @csrf
            <button type="submit" class="btn btn-outline-primary">Absen Masuk</button>
          </form>
          @endif
      </td>
    </tr>
    <tr>
      <td>Jam Keluar</td>
      <td>
        {{$absen->jm_keluar}}
    </td>
      <td>
          @if ($absen->jm_masuk != null && $absen->jm_keluar == null)
            <form action="/siswa/absensi/{{$absen->id_absen}}/keluar" method="post">
                @csrf
                <button type="submit" class="btn btn-outline-primary">Absen Keluar</button>
            </form>
          @endif
      </td>
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
