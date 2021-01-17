<title> Latihan Soal</title>

<link href="{{ asset('css/siswa/belajar-sl.css') }}" rel="stylesheet" type="text/css">

@include('siswa.nav-soal')

<div class="col p-4 mn-awal">
<!--- Latihan soal--->
<div class="card">
<div class="card-header bg-dark" style="color: white">
<div class="row">
<div class="col-sm"><label>Mata Pelajaran </label> </div>
<div class="col-sm" style="margin-left: 35%"><label>Sisa Waktu : </label></div>
</div>
</div>

  <div class="card-body">
    <form action="" method="POST">
        @csrf
        <div style="margin-left:40%">
            <button class="btn btn-primary" type="Submit">Selesai</button>
        </div>
        @foreach ($detailPengerjaanSoal as $detail)
        <div class="form-group row-sl">
            <label> {{$loop->iteration}}. </label>
            <label> {!!$detail->detailSoal->pertanyaan!!} </label>
            <a href="/siswa/jadwal/{{$jadwal->id_jadwal}}/belajar/{{$materi->id_materi}}/soal/review/{{$detail->id_detail_pengerjaan_soal}}/ubah">
                <button type="button" class="btn btn-success" style="margin-left: 80%">Ubah</button>
            </a>
        </div>

            <div class="form-group isl">
                @if ($detail->detailSoal->type == 'PG')
                    @if ($detail->pilihan_jawaban == 'A')
                        {{$detail->detailSoal->pilihan_a}}
                    @elseif($detail->pilihan_jawaban == 'B')
                        {{$detail->detailSoal->pilihan_b}}
                    @elseif($detail->pilihan_jawaban == 'C')
                        {{$detail->detailSoal->pilihan_c}}
                    @elseif($detail->pilihan_jawaban == 'D')
                        {{$detail->detailSoal->pilihan_c}}
                    @endif
                @else
                    {!!$detail->jawaban_essay!!}
                @endif
            <hr>
            </div>
        @endforeach
        <div style="margin-left:40%">
            <button class="btn btn-primary" type="Submit">Selesai</button>
        </div>

<!-- No 2 --->
        {{-- <div class ="form-group row-sl">
        <label> 2.</label>
        <label> Jelaskan bentuk awan seperti apa??</label>
        <button type="submit" class="btn btn-success" style="margin-left: 91.5%; margin-top:-3%">Ubah</button>
        </div>
        <br>
        <div class="form group isl">
        <label> Awan Cirrus (Ci), Awan Cirrocumulus (Ci Cu), Awan Cirrostratus (Ci St)
            Awan Alto Cumulus (A Cu), Awan Alto Stratus (A St), Awan Stratocumulus (St Cu)
            Awan Stratus (St), Awan Nimbo Stratus (Ni St)</label>
            <hr>
        </div>

        <br>
        <div class="form-group row-sl">
        <button type="submit" class="btn btn-primary" >Selesai</button></a>
        </div> --}}

        </div>
  </div><br>

</div>
</div>

@include('footer')
