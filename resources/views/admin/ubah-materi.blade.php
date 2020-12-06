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
    <form action="/admin/data-jadwal/{{$jadwal->id_jadwal}}/data-materi/{{$materi->id_materi}}/ubah" method="post">
        @csrf
        <div class="card">
            <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Data Materi</h5>
            <div class="card-body">

            <div class="form-group row">
            <label class="col-2 col-form-label"> Nama Materi</label>
            <div class="col-10">
            <input class="form-control" type="text" name="nm_materi" id="nm_materi" value="{{$materi->nm_materi}}">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Jenis Materi</label>
            <div class="col-10">
            <input class="form-control" type="text" name="js_materi" id="js_materi" value="{{$materi->js_materi}}">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label">Ringkasan Materi</label>
            <div class="col-10">
            <textarea class="form-control" name="rs_materi">  {{$materi->rs_materi}} </textarea>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Keterangan</label>
            <div class="col-10">
            <input class="form-control" type="text" name="keterangan" id="keterangan" value="{{$materi->keterangan}}">
            </div>
            </div>

            <button type="submit" class="btn btn-info" style="margin-left: 17%"> Simpan Data</button>
    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')
