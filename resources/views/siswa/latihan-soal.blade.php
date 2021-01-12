<title> Latihan Soal</title>

<link href="{{ asset('css/siswa/belajar-sl.css') }}" rel="stylesheet" type="text/css">

@include('siswa.nav-soal')

<div class="col p-4 mn-awal">
<!--- Latihan soal--->
<div class="card">
<div class="card-header bg-dark" style="color: white">
<div class="row">
<div class="col-sm"><label>Mata Pelajaran </label> </div>
<div class="col-sm" style="margin-left: 10%"><label>Pertanyaan 1 dari 10</label> </div>
<div class="col-sm"><label>Sisa Waktu : </label></div>
</div>
</div>

  <div class="card-body">
    <form action="/siswa/jadwal/{{$jadwal->id_jadwal}}/belajar/{{$materi->id_materi}}/soal" method="POST">
        @csrf

        @if ($detailPengerjaanSoal->detailSoal->type == 'PG')
            <div class="form-group row-sl">
                <label> 1.
                <label>{!!$detailPengerjaanSoal->detailSoal->pertanyaan!!}</label> </label> </div>

                <div class="form-check isl">
                <input type="radio" class="form-check-input" name="pilihan_jawaban" value="A">{{$detailPengerjaanSoal->detailSoal->pilihan_a}}<br>
                <input type="radio" class="form-check-input" name="pilihan_jawaban" value="B">{{$detailPengerjaanSoal->detailSoal->pilihan_b}}<br>
                <input type="radio" class="form-check-input" name="pilihan_jawaban" value="C">{{$detailPengerjaanSoal->detailSoal->pilihan_c}}<br>
                <input type="radio" class="form-check-input" name="pilihan_jawaban" value="D">{{$detailPengerjaanSoal->detailSoal->pilihan_d}}<br>
            </div>

            <br>
        @endif

        @if ($detailPengerjaanSoal->detailSoal->type == 'ESSAY')
            <div class ="form-group row-sl">
                <label> 1.
                <label>{!!$detailPengerjaanSoal->detailSoal->pertanyaan!!}</label> </label> </div>

                <div class="form group isl">
                <textarea name="isi_essay" id="isl" cols="50" rows="5" class="form-control"> </textarea>
                </div>
                <br>
                <div class="form-group row-sl">
            </div>
        @endif
        <button type="submit" class="btn btn-primary" >Lanjut</button></a>
        </div>
  </div><br>

</div>
</div>

@include('footer')
