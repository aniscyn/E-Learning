<title> Tambah Soal Pilihan Ganda </title>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>

@include('guru.nav-guru')

    <!-- MAIN -->
    <div class="col p-4" style="margin-top: 40px;">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/guru/jadwal"> Jadwal</a></li>
    <li class="breadcrumb-item"><a href="/guru/jadwal/soal"> Soal</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Soal</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Soal</h5>
    <div class="card-body">

    <form action="/guru/jadwal/{{$jadwal->id_jadwal}}/soal/tambah" method="POST">
    @csrf
    <div class="form-group row">
    <label class="col-2 col-form-label"> Nama Soal</label>
     <div class="col-10">
    <input class="form-control" type="text" value="" name="nama_soal" id="nama_soal" placeholder="Masukkan Nama Soal">
    </div>
    </div>

    <div class="form-group row">
        <label class="col-2 col-form-label"> Materi</label>
         <div class="col-10">
        <select name="id_materi" id="">
            <option value="">-</option>
            @foreach ($dataMateri as $materi)
                <option value="{{$materi->id_materi}}">{{$materi->nm_materi}}</option>
            @endforeach
        </select>
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
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
