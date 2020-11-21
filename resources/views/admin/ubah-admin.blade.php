<title> Ubah Data Admin </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/admin/data-admin">Data Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Ubah Data Admin</li>
     </ol>
    </nav>
<form method="POST" action="/admin/data-admin/{{$data->id}}/ubah">
    @csrf
    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Ubah Data Admin</h5>
    <div class="card-body">

    <form>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Username</label>
     <div class="col-10">
    <input class="form-control" type="text" name="username" value="{{$data->username}}" id="user_admin">
    </div>
    </div>

    <div class="form-group row">
    <label class="col-2 col-form-label"> Kata Sandi</label>
     <div class="col-10">
    <input class="form-control" type="password" name="password" value="" id="pas_admin">
    </div>
    </div>

    <button type="submit" class="btn btn-info" style="margin-left: 17%"> Simpan Data</button>

    </form>
    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')
