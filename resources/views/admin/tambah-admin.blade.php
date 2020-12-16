<title> Tambah Data Admin </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-admin"> Data Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Tambah Data Admin</li>
     </ol>
    </nav>
    <form action="/admin/data-admin/tambah" method="post">
        @csrf
        <div class="card">
            <h5 class="card-header font-weight bg-info" style="color: white;">Tambah Data Admin</h5>
            <div class="card-body">

            <div class="form-group row">
            <label class="col-2 col-form-label"> Username</label>
             <div class="col-10">
            <input class="form-control" type="text" value="" id="user_admin" name="username" placeholder="Masukkan Username" required>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-2 col-form-label"> Kata Sandi</label>
             <div class="col-10">
            <input class="form-control" type="password" value="" name="password" id="pas_admin" placeholder="Masukkan Kata Sandi" required>
            </div>
            </div>
            <button type="submit" class="btn btn-info" style="margin-left: 17%"> Simpan Data</button>
    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')
