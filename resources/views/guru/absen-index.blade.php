@include('guru.nav-guru')
<div class="col p-4" style="margin-top: 40px;">
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
        <table class="table">
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
