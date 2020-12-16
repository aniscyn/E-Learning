<title> Ubah Data Siswa </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-siswa"> Data Siswa </a></li>
    <li class="breadcrumb-item active" aria-current="page"> Ubah Data Siswa </li>
     </ol>
    </nav>
    <form method="POST" action="/admin/data-siswa/{{$data->nis}}/ubah">
        @csrf
    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Ubah Data Siswa </h5>
    <div class="card-body">

    <form>
    <div class="form-group row">
    <label class="col-2 col-form-label"> NIS</label>
     <div class="col-10">
    <input class="form-control" type="text" name="nis" id="nis" value="{{$data->nis}}"
    onkeypress="return hanyaAngka(event)">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Nama Lengkap</label>
     <div class="col-10">
    <input class="form-control" type="text" name="nm_lengkap" id="nm-lengkap" value="{{$data->nm_lengkap}}"
    onkeypress='return harusHuruf(event)' required>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Tanggal Lahir</label>
    <div class="col-10">
    <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="{{$data->tgl_lahir}}">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Jenis Kelamin</label>
    <div class="col-10">
    <input class="form-control" type="text" name="jk" id="jk" value="{{$data->jk}}">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Alamat</label>
    <div class="col-10">
    <textarea class="form-control" name="alamat_siswa">{{$data->alamat_siswa}}</textarea>
    </div>
    </div>


    <div class="form-group row">
    <label class="col-2 col-form-label">Email</label>
    <div class="col-10">
    <input class="form-control" type="email" name="email" id="email" value="{{$data->email}}">
    </div>
    </div>


    <div class="form-group row">
        <label class="col-2 col-form-label"> Telepon</label>
        <div class="col-10">
        <input class="form-control" type="text" name="tlp" id="tlp" value="{{$data->tlp}}" maxlength="13"
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
