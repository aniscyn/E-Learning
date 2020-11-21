<title> Data Absen </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Data Absen</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-info" style="color: white;">Data Absen</h5>
    <div class="card-body">

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
        <th>Nama Siswa</th>
        <th>NIS</th>
        <th>Kelas</th>
        <th>Mata Pelajaran</th>
        <th>Hari</th>
        <th>Tanggal</th>
        <th>Absen Masuk</th>
        <th>Absen Keluar</th>
        <th colspan="4">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $absen)
      <tr>
        <td class="text-center" width="5%">{{$loop->iteration + (($data->currentPage() - 1) * $data->perPage())}}</td>
        <td>{{$absen->nm_lengkap}} </td>
        <td>{{$absen->nis}}</td>
        <td>{{$absen->nm_kelas}}</td>
        <td>{{$absen->nm_mapel}}</td>
        <td>{{$absen->hari}}</td>
        <td>20 Juni 2020</td>
        <td>{{$absen->jm_masuk}}</td>
        <td>{{$absen->jm_keluar}}</td>

      </tr>
      @endforeach
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
