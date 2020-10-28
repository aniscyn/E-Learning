
  <title>E-Learning - SMA Hutama</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="{{ asset('css/single_page/sg-pg.css') }}" rel="stylesheet" type="text/css"> 


<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top navbar-sg">  
  <ul class="navbar-nav nav-sg">
    <li class="nav-item">
      <a class="nav-link" href="#beranda">Beranda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#jadwal">Jadwal</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#kontak">Kontak Kami</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/login"> Login</a>
    </li>

  </ul>
</nav>

<div id="beranda">
  <img src="https://essentialsiteskills.co.uk/storage/app/uploads/public/5e7/df4/b83/thumb_1512_960_480_0_0_crop.jpg" 
  class="img-fluid">
  <div class="text-block">
<h2>Yayasan Pendidikan Delapan Delapan (YP'88)</h2>
<h3>SMA Hutama</h3>
<br>
<h4> Jl. Raya Hankam No.68, Kota Bekasi</h4>
  </div>
</div>

<!-- Jadwal -->
<div id="jadwal">
<div class=" card jadwal-container">
  <div class="card section-container">
    <div class="container "><br><br>
    <h2 class="txt-jdwl" >Jadwal</h2><hr>
        <div class="row">
        <div class="col-md-6 jadwal-box">
            <img src="{{ asset ('img/img1.jpg') }} " class="jdwl"><br><br>
            </div>
            
            <div class="col-md-6 jadwal-box">
            <div class="card border-primary mb-3 card1">
            <div class="card-header"> Keterangan</div>
            <div class="card-body text-primary">
            <p class="card-text">
            <i class="fa fa-list" aria-hidden="true"> <label> Absensi (07.00 - 07.30) </label></i><br><br>
            <i class="fa fa-clock-o" aria-hidden="true"> <label> Jam Ke - 1 (07.30 - 08.30)</label></i><br>
            <i class="fa fa-clock-o" aria-hidden="true"> <label>Jam ke - 2 (08.40 - 09.40)</label></i> <br>
            <i class="fa fa-clock-o" aria-hidden="true"> <label>Jam ke - 3 (09.50 - 10.50)</label></i> <br>
            <i class="fa fa-clock-o" aria-hidden="true"> <label>Jam ke - 4 (11.00 - 12.00)</label></i></p><hr>
            <p class="note">
            Note : <br>
            - Setiap hari Jum'at dan Sabtu tetap Absen <br>
            - Setiap hari Jum'at merupakan batas akhir pengumpulan tugas masing-masing guru mapel <br>
</p>
  </div>
            </div>
        </div>
        </div>

    </div>
</div>
</div>
</div><br>

 <!-- Kontak -->
<div id="kontak" class="container-fluid">
<br>
<div class=" card kontak-container">
<div class="card section-container">
    <div class="container">
        <div class="row">
            <div class="col kontak section-description"><br><br>
                <h2>Kontak Kami</h2>
                <hr><br>
            </div>
        </div>
        <div class="row" style="font-size: 25px;">
            <div class="col-md-4 kontak-box wow fadeInUp">
            <i class="fa fa-envelope" aria-hidden="true" style="font-size: 25px;"> <label> smahutama@gmail.com</label></i>            
        </div>
            <div class="col-md-4 kontak-box wow fadeInDown">
            <i class="fa fa-phone-square" aria-hidden="true"> <label>(021) 8475461 </label></i>
            </div>
            <div class="col-md-4 kontak-box wow fadeInUp">
            <i class="fa fa-clock-o" aria-hidden="true"> <label> Senin - Sabtu (07.00-17.00) </label></i>
            </div>
        </div>
        <div class="row">
            <div class="col section-bottom-button wow fadeInUp">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8066908889227!2d106.91345986413828!3d-6.289120763306353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d53a8a535e7%3A0xed5731a15f49b83c!2sHutama%20Senior%20High%20School!5e0!3m2!1sen!2sid!4v1603261003825!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           <br><br>
            </div>
        </div>
    </div><br>
</div></div><br>
</div><br>
</body>

@include('footer')