  <title> Data Admin </title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="{{ asset('js/tombol.js') }}"></script>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Data Admin</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Data Admin</h5>
    <div class="card-body">
    <a href="/admin/data-admin/tambah"> <button type="button" class="btn btn-secondary"> Tambah Data Admin</button> </a>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible" style="width: 30%;margin-left:70%;margin-top:-40px">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{session('success')}}</div>
    @endif

    @if (session('error'))
    <div class="alert alert-warning alert-dismissible" style="width: 30%;margin-left:70%;margin-top:-40px">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{session('error')}}</div>
    @endif

    <table class="table table-bordered table-striped" style="margin-top: 20px">
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

            <button type="submit"  onclick="archiveFunction()" name="archive" class="btn btn-outline-danger" > Hapus</button></td>

      </tr>
      @endforeach

    </tbody>
  </table>
  {{$data->links()}}

    </div>
     </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')

