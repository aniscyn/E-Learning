<title> Materi </title>

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
    <h5 class="card-header font-weight bg-primary" style="color: white;"> Kelas - Mata Pelajaran - 
    {{auth()->user()->guru->nm_lengkap}} {{auth()->user()->guru->nip}} </h5>
    <div class="card-body">

    <a href="/guru/jadwal/materi/tambah"> <button type="button" class="btn btn-secondary"> Tambah Materi</button> </a> <br><br>
    <table class="table table-bordered table-striped table-responsive">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Nama Materi</th>
        <th>Jenis Materi</th>
        <th>Ringkasan Materi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center" width="5%">1</td>
        <td>Bahasa Indonesia</td>
        <td>Pertemuan 1</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </td>
        <td class="text-center"><a href="/guru/jadwal/materi/ubah"><button type="button" class="btn btn-outline-primary"> Ubah </button></a> <br><br>
        <button type="button" class="btn btn-outline-danger" > Hapus</button></td>
      </tr>
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

@include('footer')