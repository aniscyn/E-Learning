@include('navbar')
<div class="col p-4" style="margin-top: 40px;">
<div class="card-header bg-light"><h3>{{(new \Carbon\Carbon(now()))->translatedFormat("l, d F Y")}} - {{auth()->user()->siswa->kelas->nm_kelas}}</h3></div> <br>
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
                <div class="card">
                <img class="card-img-top" src="https://www.talenta.co/wp-content/uploads/2020/07/Untitled-design-13.png" alt="Card image" style="width:100%">
                <a href="/siswa/absensi" class="btn btn-primary stretched-link" style="font-size: 20pt">Absen</a>
                </div>
            </div>

            <div class="col-sm-6">
            <div class="card">
            <img class="card-img-top" src="https://www.linovhr.com/wp-content/uploads/2020/09/shift-kerja.jpg" alt="Card image" style="width:100%">
            <a href="/siswa/jadwal" class="btn btn-Danger stretched-link" style="font-size: 20pt">Jadwal Ku</a>
            </div>
            </div>

          </div>
        </div>

</div>
</div>

@include('footer')
