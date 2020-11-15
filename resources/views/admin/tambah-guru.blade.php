<title> Tambah Data Guru </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-guru"> Data Guru </a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Data Guru </li>
     </ol>
    </nav>
    <form action="/admin/data-guru/tambah" method="post">
    @csrf
    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Data Guru </h5>
    <div class="card-body">

    <form>
    <div class="form-group row">
    <label class="col-2 col-form-label"> NIP</label>
     <div class="col-10">
    <input class="form-control" type="text" name="nip" id="nip"
    placeholder="Masukkan NIP" onkeypress="return hanyaAngka(event)">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Nama Lengkap</label>
     <div class="col-10">
    <input class="form-control" type="text" name="nm_lengkap" id="nm-lengkap"
    placeholder="Masukkan Nama Lengkap" onkeypress='return harusHuruf(event)'>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Tanggal Lahir</label>
    <div class="col-10">
    <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Jenis Kelamin</label>
    <div class="col-10">
    <input class="form-control" type="text" name="jk" id="jk" placeholder="Masukkan Jenis Kelamin">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Alamat</label>
    <div class="col-10">
    <textarea class="form-control" placeholder="Masukkan Alamat" name="alamat_guru"> </textarea>
    </div>
    </div>


    <div class="form-group row">
    <label class="col-2 col-form-label">Email</label>
    <div class="col-10">
    <input class="form-control" type="email" name="email" id="email" placeholder="Masukkan Email">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label">Kata Sandi</label>
    <div class="col-10">
    <input class="form-control" type="password" name="password" id="pass" placeholder="Masukkan Kata Sandi">
    <input type="checkbox" onclick="myFunction()"> Lihat Kata Sandi
    </div>
    </div>

    <div class="form-group row">
        <label class="col-2 col-form-label"> Telepon</label>
        <div class="col-10">
        <input class="form-control" type="text" name="tlp" id="tlp" placeholder="Masukkan Telepon" maxlength="13"
        onkeypress="return hanyaAngka(event)">

        </div>
        </div>

    <button type="submit" class="btn btn-info" style="margin-left: 17%"> Simpan Data</button>


    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')

<script>
function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  </script>

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
