<title>Profile - Guru</title>

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
             <input type="file" class="btn-upload">
      </div>

      <div class="col-sm-6">
      <form action="/guru/profile/ubah/{{$user->id}}/process" method="post" class="form-profile">
      @csrf

      <div class="form-group">
         <label for="nip" class="lb-profile">NIP</label>
         <input type="text" class="form-control" readonly id="nip" value={{$user->guru->nip}}>
        </div>

        <div class="form-group">
         <label for="Nama" class="lb-profile">Nama Lengkap</label>
         <input type="text" class="form-control"  id="nm_guru" name="nm_guru" value={{$user->guru->nm_lengkap}}>
        </div>

        <div class="form-group">
         <label for="tgl-lahir"class="lb-profile">Tanggal Lahir</label>
         <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value={{$user->guru->tgl_lahir}}>
        </div>

        <div class="form-group">
         <label for="email" class="lb-profile">Email</label>
         <input type="email" class="form-control" id="email" name="email_guru" value={{$user->guru->email}}>
        </div>

        <div class="form-group">
         <label for="alamat" class="lb-profile">Alamat</label><br>
         <textarea cols="50" rows="5"  class="form-control" name="alamat_guru" id="alamat_guru"> {{$user->guru->alamat_guru}} </textarea>
        </div>

        <div class="form-group">
         <label for="tlp" class="lb-profile">Telepone/ HP</label>
         <input type="text" class="form-control" id="no_tlp" name="tlp_guru" value={{$user->guru->tlp}}>
        </div>

         <button type="submit" class="btn btn-primary btn-ubah-profile"> Simpan</button>
        </form><br>

      </div>
      </div>

 </div></div>
</div></div></div>


@include('footer')
