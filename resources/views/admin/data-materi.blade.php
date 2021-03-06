<title> Materi </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="{{ asset('js/tombol.js') }}"></script>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/beranda">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Data Materi</li>
             </ol>
            </nav>

        <div class="card">
            <h5 class="card-header font-weight bg-info" style="color: white;">Data Materi</h5>
            <div class="card-body">
            <a href="/admin/data-jadwal/{{$jadwal->id_jadwal}}/data-materi/tambah"> <button type="button" class="btn btn-secondary"> Tambah Data Materi</button> </a><br><br>
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

    <div>
        Kelas : {{$jadwal->kelas->nm_kelas}}<br />
        Guru : {{$jadwal->userGuru->guru->nm_lengkap}}<br />
        Mata Pelajaran : {{$jadwal->mataPelajaran->nm_mapel}}<br />
    </div>
    <br />
    <table class="table table-bordered table-striped table-responsive">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Nama Materi</th>
        <th>Jenis Materi</th>
        <th>Ringkasan Materi</th>
        <th>Keterangan</th>
        <th colspan="4">Aksi</th>
      </tr>
    </thead>
    <tbody>

@foreach ($data as $materi)

        <tr>
            <td class="text-center" width="5%">{{$loop->iteration + (($data->currentPage() - 1) * $data->perPage())}}</td>
            <td>{{$materi->nm_materi}}</td>
            <td>{{$materi->js_materi}}</td>
            <td>{!!$materi->rs_materi!!}</td>
            <td>{{$materi->keterangan}}</td>
            <td class="text-center" width="10%">
                <a href="/admin/data-jadwal/{{$jadwal->id_jadwal}}/data-materi/{{$materi->id_materi}}/ubah">
                    <button type="button" class="btn btn-outline-primary"> Ubah </button></a></td>
                    <td class="text-center" width="10%">

                    <form action="/admin/data-jadwal/{{$jadwal->id_jadwal}}/data-materi/{{$materi->id_materi}}/hapus" method="post">
                     @csrf
                    <button type="submit"  onclick="jadwalFunction()" name="jadwal" class="btn btn-outline-danger" > Hapus</button></td>
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

