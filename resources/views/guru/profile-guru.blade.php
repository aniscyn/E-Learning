<title>Profile - Guru</title>

<link href="{{ asset('css/guru/profile-guru.css') }}" rel="stylesheet" type="text/css"> 

<!-- Navbar -->
@include('guru.nav-guru')

<div class="col p-4" style="margin-top: 40px;">
<div class="card border-dark card-profile">
<div class="container-fluid">
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/guru">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profile</li>
  </ol>
</nav> 
<a href="/guru/profile/ubah"><button type="button" class="btn btn-success float-right"><i class="fa fa-pencil-square-o" aria-hidden="true"> 
    Ubah </i></button></a>
<br><br>

<div class="container-fluid card-fluid">
    <div class="card card-profile-isi">
    <!-- Control the column width, and how they should appear on different devices -->
    <div class="row">
      <div class="col-sm-6">
          <div><img src="https://mpng.subpng.com/20180404/sqe/kisspng-computer-icons-user-profile-clip-art-big-5ac5283827d286.2570974715228703281631.jpg" 
             class="img-rounded foto-profile" alt="profile"></div><br>
            <button type="button" class="btn btn-outline-primary btn-upload"> Upload Foto</button>
      </div>

      <div class="col-sm-6">
      <div>
      <table class="table table-profile">
  <tbody>

  <tr>
      <td>NIP</td>
      <td>123456789</td>
    </tr>

    <tr>
      <td>Nama Lengkap</td>
      <td>Anisa</td>
    </tr>

    <tr>
      <td>Tanggal Lahir</td>
      <td>06-Juni-1996</td>

    </tr>
    <tr>
      <td>Email</td>
      <td>anisa@gmail.com</td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td>Wahana Kota Bekasi</td>
    </tr>
    <tr>
      <td>Telepone/ HP</td>
      <td>02183443435</td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
    </div>
    </div> <br>

</div></div></div></div>

@include('footer')