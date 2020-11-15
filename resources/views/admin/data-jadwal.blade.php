<title> Data Jadwal </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Data Jadwal</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Data Jadwal</h5>
    <div class="card-body">
    <a href="/admin/data-kelas/tambah"> <button type="button" class="btn btn-secondary"> Tambah Data Jadwal</button> </a>

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
        <th>Nama Guru</th>
        <th>NIP</th>
        <th>Kelas</th>
        <th>Mata Pelajaran</th>
        <th>Hari</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th colspan="4">Aksi</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td class="text-center" width="5%">1</td>
        <td>yuni </td>
        <td>1243545</td>
        <td>XI-MIPA 3</td>
        <td>Biologi</td>
        <td>Senin</td>
        <td>07.00</td>
        <td>08.00</td>
        <td class="text-center" width="10%">
            <a href="">
            <button type="button" class="btn btn-outline-primary"> Ubah </button></a></td>
            <td class="text-center" width="10%">

            <form action="" method="post">
            @csrf
            <button type="submit"  onclick="jadwalFunction()" name="jadwal" class="btn btn-outline-danger" > Hapus</button></td>
        </form>

      </tr>


    </tbody>
  </table>




    </div>
     </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')

<script>
    function jadwalFunction() {
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
