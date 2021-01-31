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
<div class="col-sm"><label>Pengerjaan Sampai Jam : {{$pengerjaanSoal->timeout_at}} </label></div>
</div>
</div>

  <div class="card-body">
    <form action="">
        @csrf
        <div class="form-group row-sl">
        <label> 1.
        <label> Apa warna laut??</label> </label> </div>

        <div class="form-check isl">
        <input type="radio" class="form-check-input" name="">Putih<br>
        <input type="radio" class="form-check-input" name="">Biru<br>
        <input type="radio" class="form-check-input" name="">Hijau<br>
        <input type="radio" class="form-check-input" name="">Kuning<br>
        <input type="radio" class="form-check-input" name="">Merah<br>
        </div>

        <br>

        <div class ="form-group row-sl">
        <label> 2.
        <label> Jelaskan bentuk awan seperti apa??</label> </label> </div>

        <div class="form group isl">
        <textarea name="isi-essay" id="isl" cols="50" rows="5" class="form-control"> </textarea>
        </div>
        <br>
        <div class="form-group row-sl">
        <button type="submit" class="btn btn-primary" >Simpan</button></a>
        </div>

        </div>
  </div><br>

</div>
</div>

@include('footer')
