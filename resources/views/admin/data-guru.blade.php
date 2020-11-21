<title> Data Guru </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@include('admin.menu-adm')
<div class="container"style="margin-top: -49%;margin-left:15%">
  <!-- MAIN -->
  <div class="col p-4">

  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
  <li class="breadcrumb-item active" aria-current="page"> Data Guru</li>
   </ol>
  </nav>

  <div class="card">
  <h5 class="card-header font-weight bg-info" style="color: white;">Data Guru</h5>
  <div class="card-body">
  <a href="/admin/data-guru/tambah"> <button type="button" class="btn btn-secondary"> Tambah Data Guru</button> </a>

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

  <table class="table table-bordered table-striped table-responsive" style="margin-top: 20px">
  <thead class="text-center">
    <tr>
      <th>No</th>
      <th>NIP</th>
      <th>Nama Lengkap</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Email</th>
      <th>Telepon</th>
      <th colspan="4">Aksi</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($data as $guru)
    <tr>
      <td class="text-center" width="5%">{{$loop->iteration}}</td>
      <td>{{$guru->nip}}</td>
      <td>{{$guru->nm_lengkap}}</td>
      <td>{{$guru->tgl_lahir}}</td>
      <td>{{$guru->jk}}</td>
      <td>{{$guru->alamat_guru}}</td>
      <td>{{$guru->email}}</td>
      <td>{{$guru->tlp}}</td>
      <td class="text-center" width="10%">
          <a href="/admin/data-guru/{{$guru->nip}}/ubah">
          <button type="button" class="btn btn-outline-primary"> Ubah </button></a></td>
          <td class="text-center" width="10%">
          <form action="/admin/data-guru/{{$guru->nip}}/hapus" method="post">
          @csrf

          <button type="submit"  onclick="guruFunction()" name="guru" class="btn btn-outline-danger" > Hapus</button></td>

    </tr>
    @endforeach

  </tbody>
</table>

{{$data->links()}}

  </div>
   </div>
  </div><!-- Main Col END -->
</div><!-- body-row END -->
</div>
@include('admin.footer-adm')

<script>
function guruFunction() {
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
