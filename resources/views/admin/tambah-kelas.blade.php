<title> Tambah Data Kelas </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-kelas"> Data Kelas</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Data Kelas</li>
     </ol>
    </nav>
    <form action="/admin/data-kelas/tambah" method="post">
    @csrf
    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Data Kelas</h5>
    <div class="card-body">

    <form>
    <div class="form-group row">
    <label class="col-2 col-form-label"> Nama Kelas</label>
     <div class="col-10">
    <input class="form-control" type="text" name="nm_kelas" id="nm_kelas" placeholder="Masukkan Nama Kelas" required>
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Jurusan</label>
     <div class="col-10">
    <input class="form-control" type="text" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan" required>
    </div>
    </div>

    <button type="submit" class="btn btn-info" style="margin-left: 17%"> Simpan Data</button>


    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')
