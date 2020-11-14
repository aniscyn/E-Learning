<title> Data Kelas </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

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
    <a href="/admin/data-kelas/tambah"> <button type="button" class="btn btn-secondary"> Tambah Data Kelas</button> </a>

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
        <th>Nama Kelas</th>
        <th>Jurusan</th>
        <th colspan="4">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $kls)
      <tr>
        <td class="text-center" width="5%">{{$loop->iteration + (($data->currentPage() - 1) * $data->perPage())}}</td>
        <td>{{$kls->nm_kelas}}</td>
        <td>{{$kls->jurusan}}</td>
        <td class="text-center" width="10%">
            <a href="/admin/data-kelas/{{$kls->id_kelas}}/ubah">
            <button type="button" class="btn btn-outline-primary"> Ubah </button></a></td>
            <td class="text-center" width="10%">

            <form action="/admin/data-kelas/{{$kls->id_kelas}}/hapus" method="post">
            @csrf
            <button type="submit"  onclick="klsFunction()" name="kls" class="btn btn-outline-danger" > Hapus</button></td>
        </form>

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

<script>
    function klsFunction() {
    event.preventDefault(); // prevent form submit
    var form = event.target.form; // storing the form
            swal({
      title: "Anda yakin ingin hapus?",
      text: "Data anda akan dihapus secara permanen.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Iya",
      cancelButtonText: "Tidak",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        form.submit();          // submitting the form when user press yes
      } else {
        swal("Batal", "Data anda aman", "error");
      }
    });
    }
    </script>
