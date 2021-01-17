<title>Profile - Siswa</title>

<link href="{{ asset('css/siswa/ubahprofile-siswa.css') }}" rel="stylesheet" type="text/css">

<!-- Navbar -->
@include('navbar')

<div class="col p-4" style="margin-top: 40px;">
<div class="card border-dark card-profile">
<div class="container-fluid">
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/siswa">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/siswa/profile">Profile</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah</li>
  </ol>
</nav>

<div class="container-fluid card-fluid">
    <div class="card card-profile-isi">
    <!-- Control the column width, and how they should appear on different devices -->
    <form action="/siswa/profile/ubah/{{$user->id}}/process" method="post" class="form-profile" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-sm-6">
          <div><img src="{{$user->siswa->getPhotoProfilePath()}}"
             class="img-rounded foto-profile" alt="profile"></div><br>
             <input type="file" name="profile_photo" class="btn-upload">
      </div>

      <div class="col-sm-6">
      <div class="form-group">
         <label for="nis" class="lb-profile">NIS</label>
         <input type="text" class="form-control" readonly id="nis" value={{$user->siswa->nis}}>
        </div>

        <div class="form-group">
            <label for="nm" class="lb-profile">Nama Lengkap</label>
            <textarea name="nm_lengkap" cols="10" rows="1" class="form-control"  onkeypress='return harusHuruf(event)' required>{{$user->siswa->nm_lengkap}}</textarea>
           </div>

        <div class="form-group">
         <label for="tgl-lahir"class="lb-profile">Tanggal Lahir</label>
         <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" id="tgl_lahir" value={{$user->siswa->tgl_lahir}} required>
        </div>

        <div class="form-group">
         <label for="email" class="lb-profile">Email</label>
         <input type="email" class="form-control" placeholder="Masukkan Email" name="email" id="email" value={{$user->siswa->email}} required>
        </div>

        <div class="form-group">
         <label for="alamat" class="lb-profile">Alamat</label><br>
         <textarea name="alamat" id="alamat" cols="50" rows="5" placeholder="Masukkan Alamat" class="form-control" required>{{$user->siswa->alamat_siswa}}</textarea>
        </div>

        <div class="form-group">
         <label for="tlp" class="lb-profile">Telepone/ HP</label>
         <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon/ HP" name="no_telp" id="no_telp" value={{$user->siswa->tlp}} onkeypress="return hanyaAngka(event)" required>
        </div>

         <button type="submit" class="btn btn-primary btn-ubah-profile"> Simpan</button>
        </form><br>

      </div>
      </div>

 </div></div>
</div></div></div>


@include('footer')

<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
</script>

<script>
    function harusHuruf(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
                return false;
            return true;
    }
</script>
