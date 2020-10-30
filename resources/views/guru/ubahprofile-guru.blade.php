<title>Profile - Siswa</title>

<link href="{{ asset('css/siswa/ubahprofile-siswa.css') }}" rel="stylesheet" type="text/css"> 

<!-- Navbar -->
@include('guru.nav-guru')

<div class="col p-4" style="margin-top: 40px;">
<div class="card border-dark card-profile">
<div class="container-fluid">
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/guru">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/guru/profile">Profile</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah</li>
  </ol>
</nav> 

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
      <form action="" class="form-profile">

      <div class="form-group">
         <label for="nis" class="lb-profile">NIP</label>
         <input type="text" class="form-control" readonly id="nmn_lengkap">
        </div>

        <div class="form-group">
         <label for="Nama" class="lb-profile">Nama Lengkap</label>
         <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" id="nmn_lengkap">
        </div>
   
        <div class="form-group">
         <label for="tgl-lahir"class="lb-profile">Tanggal Lahir</label>
         <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" id="tgl_lahir">
        </div>

        <div class="form-group">
         <label for="email" class="lb-profile">Email</label>
         <input type="email" class="form-control" placeholder="Masukkan Email" id="email">
        </div>
   
        <div class="form-group">
         <label for="alamat" class="lb-profile">Alamat</label><br>
         <textarea name="alamat" id="alamat" cols="50" rows="5" placeholder="Masukkan Alamat" class="form-control"></textarea>
        </div>

        <div class="form-group">
         <label for="tlp" class="lb-profile">Telepone/ HP</label>
         <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon/ HP" id="no_telp">
        </div>

         <button type="submit" class="btn btn-primary btn-ubah-profile"> Simpan</button>
        </form>

      </div>
      </div>
    
 </div></div>
</div></div></div>


@include('footer')