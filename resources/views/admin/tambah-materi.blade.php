<title> Tambah Data Materi </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-materi"> Data Materi</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Data Materi</li>
     </ol>
    </nav>
    <form action="/admin/data-materi/tambah" method="post">
        @csrf
        <div class="card">
            <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Data Materi</h5>
            <div class="card-body">

            <div class="form-group row">
            <label class="col-2 col-form-label"> Nama Guru</label>
             <div class="col-10">
            <input class="form-control" type="text" id="nm_lengkap" name="nm_lengkap"
            placeholder="Masukkan Nama Guru" onkeypress='return harusHuruf(event)'>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label">Kelas</label>
            <div class="col-10">
            <select name="kelas" id="kelas" class="form-control">
            @foreach ($dataKelas as $kelas)
            <option value="{{$kelas->id_kelas}}">{{$kelas->nm_kelas}}</option>
            @endforeach
            </select>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label">Mata Pelajaran</label>
            <div class="col-10">
            <select name="mapel" id="mapel" class="form-control">
            @foreach ($dataMapel as $mapel)
            <option value="{{$mapel->id_mapel}}">{{$mapel->nm_mapel}}</option>
            @endforeach
            </select>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Nama Materi</label>
            <div class="col-10">
            <input class="form-control" type="text" name="nm_materi" id="nm_materi" placeholder="Masukkan Nama Materi">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Jenis Materi</label>
            <div class="col-10">
            <input class="form-control" type="text" name="js_materi" id="js_materi" placeholder="Masukkan Jenis Materi">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label">Ringkasan Materi</label>
            <div class="col-10">
            <textarea class="form-control"></textarea>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Keterangan</label>
            <div class="col-10">
            <input class="form-control" type="text" name="keterangan" id="keterangan" placeholder="Masukkan Keterangan">
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
