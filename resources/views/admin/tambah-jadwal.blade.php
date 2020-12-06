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
                <select name="guru" id="guru" class="form-control">
                    @foreach ($dataGuru as $guru)
                    <option value="{{$guru->user->id}}">{{$guru->nm_lengkap}}</option>
                    @endforeach
                    </select>
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
            <label class="col-2 col-form-label"> Hari</label>
            <div class="col-10">
                <select name="hari" id="hari" class="form-control">
                    @foreach ($dataHari as $hari)
                    <option value="{{$hari['urutan']}}">{{$hari['nama']}}</option>
                    @endforeach
                    </select>
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

            <button type="submit" class="btn btn-info" style="margin-left: 17%"> Simpan Data</button>
    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')
