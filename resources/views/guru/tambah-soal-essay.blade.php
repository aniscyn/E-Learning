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

    <form action="">
    @csrf
    <div class="form-group row">
    <label class="col-2 col-form-label"> Pertanyaan No. 1</label>
    <div class="col-10">
    <textarea class="form-control" name="" rows="5"></textarea>
    </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 17%"> Simpan Data</button>


    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
    </div><!-- body-row END -->

@include('footer')
