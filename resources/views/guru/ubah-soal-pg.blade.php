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
    <li class="breadcrumb-item active" aria-current="page"> Tambah Soal Pilihan Ganda</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Soal Pilihan Ganda</h5>
    <div class="card-body">

    <form action="/guru/jadwal/{{$jadwal->id_jadwal}}/soal/{{$soal->id_soal}}/detail/{{$detail->id_detail_soal}}/ubah?tipe_soal=pg" method="POST">
    @csrf
    <div class="form-group row">
    <label class="col-2 col-form-label"> Pertanyaan</label>
     <div class="col-10">
    <textarea id="ktn" class="form-control" name="pertanyaan" rows="10" cols="50" required>{{$detail->pertanyaan}}</textarea>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Pilihan A</label>
     <div class="col-10">
    <input class="form-control" type="text" value="{{$detail->pilihan_a}}" name="pilihan-a" placeholder="Masukkan Pilihan">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Pilihan B</label>
    <div class="col-10">
    <input class="form-control" type="text" value="{{$detail->pilihan_a}}" name="pilihan-b" placeholder="Masukkan Pilihan">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Pilihan C</label>
    <div class="col-10">
    <input class="form-control" type="text" value="{{$detail->pilihan_a}}" name="pilihan-c" placeholder="Masukkan Pilihan">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Pilihan D</label>
    <div class="col-10">
    <input class="form-control" type="text" value="{{$detail->pilihan_a}}" name="pilihan-d" placeholder="Masukkan Pilihan">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Jawaban Benar</label>
    <div class="col-10">
    <select name="jawaban_benar" id="">
        <option {{($detail->jawaban_pilihan == "A") ? "selected" : ""}} value="A">Pilihan A</option>
        <option {{($detail->jawaban_pilihan == "B") ? "selected" : ""}} value="B">Pilihan B</option>
        <option {{($detail->jawaban_pilihan == "C") ? "selected" : ""}} value="C">Pilihan C</option>
        <option {{($detail->jawaban_pilihan == "D") ? "selected" : ""}} value="D">Pilihan D</option>
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
  var konten = document.getElementById("ktn");
    CKEDITOR.replace(ktn,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
