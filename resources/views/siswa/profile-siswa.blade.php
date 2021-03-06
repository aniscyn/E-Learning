<title>Profile - Siswa</title>

<link href="{{ asset('css/siswa/profile-siswa.css') }}" rel="stylesheet" type="text/css">

<!-- Navbar -->
@include('navbar')

<div class="col p-4" style="margin-top: 40px;">
<div class="card border-dark card-profile">
<div class="container-fluid">
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/siswa">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav>
<a href="/siswa/profile/ubah"><button type="button" class="btn btn-success float-right"><i class="fa fa-pencil-square-o" aria-hidden="true">
    Ubah </i></button></a>
<br><br>

<div class="container-fluid card-fluid">
    <div class="card card-profile-isi">
    <!-- Control the column width, and how they should appear on different devices -->
    <div class="row">
      <div class="col-sm-6">
          <div><img src="{{$user->siswa->getPhotoProfilePath()}}"
             class="img-rounded foto-profile" alt="profile"></div><br>
      </div>

      <div class="col-sm-6">
      <div>
      <table class="table table-profile">
  <tbody>

  <tr>
      <td>NIS</td>
      <td>{{$user->siswa->nis}}</td>
    </tr>

    <tr>
      <td>Nama Lengkap</td>
      <td>{{$user->siswa->nm_lengkap}}</td>
    </tr>

    <tr>
      <td>Tanggal Lahir</td>
      <td>{{$user->siswa->tgl_lahir}}</td>

    </tr>
    <tr>
      <td>Email</td>
      <td>{{$user->siswa->email}}</td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td>{{$user->siswa->alamat_siswa}}</td>
    </tr>
    <tr>
      <td>Telepone/ HP</td>
      <td>{{$user->siswa->tlp}}</td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
    </div>
    </div> <br>

</div></div></div></div>

@include('footer')
