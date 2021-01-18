<title> Laporan Admin </title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="lap">
<div class="container">
    <section class="sheet padding-10mm">
        <img src="{{ asset ('img/logo.png') }}" width="120" height="120" style="margin-top: 20px">
        <h1 style="margin-top: -120px;text-align:center">SMA HUTAMA</h1>
        <h5 style="text-align: center">Jl. Raya Hankam No.68, RT.003/RW.006, </h5>
        <h5 style="text-align: center">Jatirahayu Kec. Pd. Melati, Kota Bks, Jawa Barat 17414</h5>
        <table class="table table-bordered table-striped" style="margin-top: 20px">
            <thead class="text-center">
              <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>NIP</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Mata Pelajaran</th>
                <th>Hari</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>

              </tr>
            </thead>
            <tbody>
            @foreach ($dataJadwal as $jadwal)
                <tr>
                    <td class="text-center" width="5%">{{$loop->iteration}}</td>
                    <td>{{$jadwal->userGuru->guru->nm_lengkap}}</td>
                    <td>{{$jadwal->userGuru->guru->nip}}</td>
                    <td>{{$jadwal->kelas->nm_kelas}}</td>
                    <td>{{$jadwal->kelas->jurusan}}</td>
                    <td>{{$jadwal->mataPelajaran->nm_mapel}}</td>
                    <td>{{$jadwal->nama_hari}}</td>
                    <td>{{$jadwal->jm_mulai}}</td>
                    <td>{{$jadwal->jm_selesai}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</div>

</div>
