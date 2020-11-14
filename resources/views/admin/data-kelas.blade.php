<title> Data Kelas </title>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Data Kelas</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Data Kelas</h5>
    <div class="card-body">
    <a href="/admin/data-kelas/tambah"> <button type="button" class="btn btn-secondary"> Tambah Data Kelas</button> </a> <br><br>
    <table class="table table-bordered table-striped">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Jurusan</th>
        <th colspan="4">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $kls)
      <tr>
        <td class="text-center" width="5%">{{$loop->iteration}}</td>
        <td>{{$kls->nm_kelas}}</td>
        <td>{{$kls->jurusan}}</td>
        <td class="text-center" width="10%">
            <a href="/admin/data-kelas/{{$kls->id}}/ubah">
            <button type="button" class="btn btn-outline-primary"> Ubah </button></a></td>
            <td class="text-center" width="10%">
            <form action="/admin/data-kelas/{{$kls->id}}/hapus" method="post">
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
