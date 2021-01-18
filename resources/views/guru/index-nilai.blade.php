<title> Nilai </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@include('guru.nav-guru')

    <!-- MAIN -->
    <div class="col p-4" style="margin-top: 40px;">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/guru">Beranda</a></li>
    <li class="breadcrumb-item"><a href="/guru/jadwal">Jadwal</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Soal</li>
     </ol>
    </nav>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jumlah Benar</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPengerjaan as $pengerjaan)
                <tr>
                    <td>{{$pengerjaan->user->siswa->nis}}</td>
                    <td>{{$pengerjaan->user->siswa->nm_lengkap}}</td>
                    <td>{{$pengerjaan->jumlah_benar}}</td>
                    <td>{{$pengerjaan->nilai}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
