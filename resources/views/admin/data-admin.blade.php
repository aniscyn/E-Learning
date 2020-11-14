  <title> Data Admin </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Data Admin</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Data Admin</h5>
    <div class="card-body">
    <a href="/admin/data-admin/tambah"> <button type="button" class="btn btn-secondary"> Tambah Data Admin</button> </a> <br><br>
    <table class="table table-bordered table-striped">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Username</th>
        <th colspan="4">Aksi</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($data as $item)
      <tr>
        <td class="text-center" width="5%">{{$loop->iteration}}</td>
        <td>{{$item->username}}</td>
        <td class="text-center" width="10%">
            <a href="/admin/data-admin/{{$item->id}}/ubah">
            <button type="button" class="btn btn-outline-primary"> Ubah </button></a></td>
            <td class="text-center" width="10%">
            <form action="/admin/data-admin/{{$item->id}}/hapus" method="post">
            @csrf

            <button type="submit" class="btn btn-outline-danger" > Hapus</button></td>
        </form>

      </tr>
      @endforeach

    </tbody>
  </table>
  <ul class="pagination ">
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
</ul>

    </div>
     </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')
