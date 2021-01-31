@include('guru.nav-guru')
<div class="container">
<div class="col p-4" style="margin-top: 40px;">
    <div class="card-header bg-light"><h3>{{(new \Carbon\Carbon(now()))->translatedFormat("l, d F Y")}}
        -  {{auth()->user()->guru->nm_lengkap}}</h3></div> <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <img class="card-img-top" src="https://sirclo.com/inc/uploads/2019/01/Atur-Jadwal-Sale-Lebih-Mudah-Dengan-Fitur-Periode-Sale3.png" alt="Card image" style="width:100%">
            <a href="/guru/jadwal" class="btn btn-danger stretched-link" style="font-size: 20pt">Jadwal</a>
            </div>
        </div>

        <div class="col-sm-6">
        <div class="card">
        <img class="card-img-top"
        src="https://bridge24.com/wp-content/uploads/2019/07/checklists-workplace-image.png"
        alt="Card image" style="width:100%">
        <a href="/guru/absen" class="btn btn-primary stretched-link" style="font-size: 20pt">Daftar Absen</a>
        </div>
        </div>

      </div>
    </div>

</div>
</div>
</div>
@include('footer')
