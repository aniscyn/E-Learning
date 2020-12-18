<title> Tambah Data Materi </title>

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

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
            <input class="form-control" type="text" name="nm_materi" id="nm_materi" value="{{$materi->nm_materi}}" required>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Jenis Materi</label>
            <div class="col-10">
            <input class="form-control" type="text" name="js_materi" id="js_materi" value="{{$materi->js_materi}}" required>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label">Ringkasan Materi</label>
            <div class="col-10">
            <textarea textarea id="konten" class="form-control" name="rs_materi" rows="10" cols="50" required>
                {{$materi->rs_materi}} </textarea>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Keterangan</label>
            <div class="col-10">
            <input class="form-control" type="text" name="keterangan" id="keterangan" value="{{$materi->keterangan}}" required>
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
    var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
    </script>
