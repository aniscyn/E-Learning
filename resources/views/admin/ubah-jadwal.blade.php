<title> Ubah Data Jadwal </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-jadwal"> Data Ubah</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Data Ubah</li>
     </ol>
    </nav>
    <form action="/admin/data-jadwal/{{$jadwal->id_jadwal}}/ubah" method="post">
        @csrf
        <div class="card">
            <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Data Ubah</h5>
            <div class="card-body">

            <div class="form-group row">
            <label class="col-2 col-form-label"> Nama Guru</label>
             <div class="col-10">
                <select name="guru" id="guru" class="form-control">
                    @foreach ($dataGuru as $guru)
                    <option value="{{$guru->user->id}}" {{($guru->user->id == $jadwal->id_guru) ? 'selected' : ''}}>{{$guru->nm_lengkap}}</option>
                    @endforeach
                    </select>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label">Kelas</label>
            <div class="col-10">
                <select name="kelas" id="kelas" value="{{$jadwal->id_kelas}}" class="form-control">
                    @foreach ($dataKelas as $kelas)
                    <option value="{{$kelas->id_kelas}}" {{($kelas->id_kelas == $jadwal->id_kelas) ? 'selected' : ''}}>{{$kelas->nm_kelas}}</option>
                    @endforeach
                    </select>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label">Mata Pelajaran</label>
            <div class="col-10">
                <select name="mapel" id="mapel" class="form-control">
                    @foreach ($dataMapel as $mapel)
                    <option value="{{$mapel->id_mapel}}" {{($mapel->id_mapel == $jadwal->id_mapel) ? 'selected' : ''}}>{{$mapel->nm_mapel}}</option>
                    @endforeach
                    </select>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Hari</label>
            <div class="col-10">
                <select name="hari" id="hari" class="form-control">
                    @foreach ($dataHari as $hari)
                    <option value="{{$hari['urutan']}}" {{($hari['urutan'] == $jadwal->urutan_hari) ? 'selected' : ''}}>{{$hari['nama']}}</option>
                    @endforeach
                    </select>
                 </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Jam Masuk</label>
            <div class="col-10">
            <input class="form-control" type="time" value="{{$jadwal->jm_mulai}}" name="jm_mulai" id="jm_masuk" placeholder="Masukkan Jam Masuk">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Jam Keluar</label>
            <div class="col-10">
            <input class="form-control" type="time"  value="{{$jadwal->jm_selesai}}" name="jm_selesai" id="jm_keluar"  placeholder="Masukkan Jam Keluar">
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
