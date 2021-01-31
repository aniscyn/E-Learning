@include('guru.nav-guru')
<div class="col p-4" style="margin-top: 10px;">
    <nav aria-label="breadcrumb"> <br>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/guru">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Daftar Absen</li>
        </ol>
      </nav>

    <div class="card" style="padding: 20px">
    <form action="" method="get">
        @csrf
        <label for="">Kelas</label>
        <select name="kelas" id="kelas">
            <option>-</option>
            @foreach ($dataKelas as $kelas)
                <option value="{{$kelas->id_kelas}}">{{$kelas->nm_kelas}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Pilih</button>
    </form>


    <br><br><br>

    @if (!empty($dataSiswa))

        <table class="table table-bordered">
            <tr>
                <th style="text-align: center">NIS</th>
                <th style="text-align: center">Nama</th>
                <th style="text-align: center">Jam Masuk</th>
                <th style="text-align: center">Jam Keluar</th>
            </tr>
            @foreach ($dataSiswa as $siswa)
                <tr>
                    <td>{{$siswa->nis}}</td>
                    <td>{{$siswa->nm_lengkap}}</td>
                    <td style="text-align: center">{{($siswa->absenHariIni) ? $siswa->absenHariIni->jm_masuk : "-"}}</td>
                    <td style="text-align: center">{{($siswa->absenHariIni) ? $siswa->absenHariIni->jm_keluar : "-"}}</td>
                </tr>
            @endforeach
        </table>
    @endif
    </div>
</div>
