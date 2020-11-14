<title> Tambah Materi </title>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

@include('guru.nav-guru')

    <!-- MAIN -->
    <div class="col p-4" style="margin-top: 40px;">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href=""> Jadwal</a></li>
    <li class="breadcrumb-item"><a href="/guru/jadwal/materi"> Materi</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Materi</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Materi</h5>
    <div class="card-body">

    <form>
    <div class="form-group row">
    <label class="col-2 col-form-label"> Nama Materi</label>
     <div class="col-10">
    <input class="form-control" type="text" value="" id="nm_materi" placeholder="Masukkan Nama Materi">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Jenis Materi</label>
     <div class="col-10">
    <input class="form-control" type="text" value="" id="js_materi" placeholder="Masukkan Jenis Materi">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Ringkasan Materi</label>
     <div class="col-10">
     <textarea id="konten" class="form-control" name="konten" rows="10" cols="50"></textarea>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Keterangan</label>
    <div class="col-10">
    <textarea class="form-control" name="ket"></textarea>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Upload Materi</label>
     <div class="col-10">
    <input type="file" value="" id="file-materi">
    </div>
    </div>

    <button type="button" class="btn btn-primary" style="margin-left: 17%"> Simpan Data</button>


    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('footer')
<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
