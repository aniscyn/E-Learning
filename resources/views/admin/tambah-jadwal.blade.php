<title> Tambah Data Jadwal </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-jadwal"> Data Jadwal</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Data Jadwal</li>
     </ol>
    </nav>
    <form action="/admin/data-jadwal/tambah" method="post">
        @csrf
        <div class="card">
            <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Data Jadwal</h5>
            <div class="card-body">

            <div class="form-group row">
            <label class="col-2 col-form-label"> Nama Guru</label>
             <div class="col-10">
            <input class="form-control" type="text" id="nm_lengkap" name="nm_lengkap"
            placeholder="Masukkan Nama Guru" onkeypress='return harusHuruf(event)'>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> NIP</label>
             <div class="col-10">
            <input class="form-control" type="text" name="nip" id="nip"
            placeholder="Masukkan NIP" onkeypress="return hanyaAngka(event)">
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
                <label class="col-2 col-form-label">Jurusan</label>
                <div class="col-10">
                <select name="jurusan" id="jurusan" class="form-control">
                @foreach ($dataKelas as $kelas)
                <option value="{{$kelas->id_kelas}}">{{$kelas->jurusan}}</option>
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
            <label class="col-2 col-form-label"> Hari</label>
            <div class="col-10">
            <input class="form-control" type="text" name="nama_hari" id="nama_hari" placeholder="Masukkan Hari">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Jam Mulai</label>
            <div class="col-10">
            <input class="form-control" type="time" name="jm_mulai" id="jm_mulai" placeholder="Masukkan Jam Mulai">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Jam Selesai</label>
            <div class="col-10">
            <input class="form-control" type="time" name="jm_selesai" id="jm_selesai"  placeholder="Masukkan Jam Selesai">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Jam Masuk</label>
            <div class="col-10">
            <input class="form-control" type="text" name="hari" id="hari" placeholder="Masukkan Hari">
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
