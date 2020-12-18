<title> Data Soal </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="{{ asset('js/tombol.js') }}"></script>

@include('admin.menu-adm')

    <!-- MAIN -->
    <div class="col p-4">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href="">Jadwal</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Soal</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-primary" style="color: white;"> Data Soal</h5>
    <div class="card-body">
    <div class="col-sm-6" style="margin-left: -10px">
    <label> Jenis Soal : </label>
    <a href=""> <button type="button" class="btn btn-dark"> Buat Soal Pilihan Ganda </button> </a>
    <a href=""> <button type="button" class="btn btn-success"> Buat Soal Essai </button>  </a> </div>
    <hr>
     <br>

    <table class="table table-bordered table-striped ">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Jenis Soal</th>
        <th>Jumlah Soal</th>
        <th colspan="4">Aksi</th>
      </tr>
    </thead>
    <tbody>

        <tr>
            <td class="text-center" width="5%">1. </td>
            <td>Pilihan ganda</td>
            <td>20 Soal</td>

            <td class="text-center"  width="10%" colspan="2">
            <a href="">
                <button type="button" class="btn btn-outline-primary"> Ubah </button></a></td>
                <td class="text-center" width="10%">
                <form action="">
                @csrf

                <button type="submit"  onclick="archiveFunction()" name="archive" class="btn btn-outline-danger" > Hapus</button></td>

            </form>
          </tr>

    </tbody>
  </table>

    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('admin.footer-adm')

