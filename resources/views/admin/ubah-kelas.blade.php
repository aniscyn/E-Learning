<title> Ubah Data Kelas </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-kelas"> Data Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Ubah Data Kelas</li>
     </ol>
    </nav>
    <form method="POST" action="/admin/data-kelas/{{$data->id}}/ubah">
     @csrf
    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Ubah Data Kelas</h5>
    <div class="card-body">

    <form>
    <div class="form-group row">
    <label class="col-2 col-form-label"> Nama Kelas</label>
     <div class="col-10">
    <input class="form-control" type="text" name="nm_kelas" value="{{$data->nm_kelas}}" id="nm_kelas">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Jurusan</label>
     <div class="col-10">
    <input class="form-control" type="text" name="jurusan" value="{{$data->jurusan}}" id="jurusan">
    </div>
    </div>

    <button type="submit" class="btn btn-info" style="margin-left: 17%"> Simpan Data</button>


    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')
