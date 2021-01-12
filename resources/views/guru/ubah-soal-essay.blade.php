<title> Tambah Soal Essai </title>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

@include('guru.nav-guru')

    <!-- MAIN -->
    <div class="col p-4" style="margin-top: 40px;">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/guru/jadwal"> Jadwal</a></li>
    <li class="breadcrumb-item"><a href="/guru/jadwal/soal"> Soal</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Soal Essai</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Soal Pilihan Essai</h5>
    <div class="card-body">

    <form action="/guru/jadwal/{{$jadwal->id_jadwal}}/soal/{{$soal->id_soal}}/detail/{{$detail->id_detail_soal}}/ubah?tipe_soal=essay" method="POST">
    @csrf
    <div class="form-group row">
    <label class="col-2 col-form-label"> Pertanyaan</label>
    <div class="col-10">
    <textarea id="ktn" class="form-control" name="pertanyaan" rows="10" cols="50" required>{{$detail->pertanyaan}}</textarea>
    </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 17%"> Simpan Data</button>


    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
    </div><!-- body-row END -->

@include('footer')

<script>
    var konten = document.getElementById("ktn");
      CKEDITOR.replace(ktn,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
  </script>
