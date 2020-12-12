<title> Materi </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@include('guru.nav-guru')

    <!-- MAIN -->
    <div class="col p-4" style="margin-top: 40px;">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href="">Jadwal</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Materi</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-primary" style="color: white;"> {{$jadwal->kelas->nm_kelas}} - {{$jadwal->mataPelajaran->nm_mapel}} -
    {{auth()->user()->guru->nm_lengkap}} {{auth()->user()->guru->nip}} </h5>
    <div class="card-body">

    <a href="/guru/jadwal/{{$jadwal->id_jadwal}}/materi/tambah"> <button type="button" class="btn btn-secondary"> Tambah Materi</button> </a> <br><br>
    <a href=""> <button type="button" class="btn btn-primary"> Buat Soal</button> </a> <br><br>


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

    <table class="table table-bordered table-striped table-responsive">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Nama Materi</th>
        <th>Jenis Materi</th>
        <th>Ringkasan Materi</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataMateri as $materi)
        <tr>
            <td class="text-center" width="5%">{{$loop->iteration + (($dataMateri->currentPage() - 1) * $dataMateri->perPage())}}</td>
            <td>{{$materi->nm_materi}}</td>
            <td>{{$materi->js_materi}}</td>
            <td>{!!$materi->rs_materi!!}</td>
            <td>{{$materi->keterangan}}</td>
            </td>
            <td class="text-center"><a href="/guru/jadwal/{{$jadwal->id_jadwal}}/materi/{{$materi->id_materi}}/ubah"><button type="button" class="btn btn-outline-primary"> Ubah </button></a> <br><br>
            <form action="/guru/jadwal/{{$jadwal->id_jadwal}}/materi/{{$materi->id_materi}}/hapus" method="post">
                @csrf
                <button type="submit"  onclick="archiveFunction()" name="archive" class="btn btn-outline-danger" > Hapus</button></td>
            </form>
          </tr>
        @endforeach
    </tbody>
  </table>

    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('footer')
<script>
    function archiveFunction() {
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
