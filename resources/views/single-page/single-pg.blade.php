
  <title>E-Learning - SMA Hutama</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="{{ asset('css/single_page/sg-pg.css') }}" rel="stylesheet" type="text/css"> 


<body data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-expand-sm bg-info navbar-dark fixed-top">  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#section1">Section 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section2">Section 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section3">Section 3</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Section 4
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
      </div>
    </li>
  </ul>
</nav>

<div id="section1">
  <img src="https://essentialsiteskills.co.uk/storage/app/uploads/public/5e7/df4/b83/thumb_1512_960_480_0_0_crop.jpg" 
  class="img-fluid">
  <div class="text-block">
<h2>Yayasan Pendidikan Delapan Delapan (YP'88)</h2>
<h3>SMA Hutama</h3>
<br>
<h4> Jl. Raya Hankam No.68, Kota Bekasi</h4>
  </div>
</div>

<div id="section2" class="container-fluid">

  <div class="jadwal-container section-container">
    <div class="container">
        <div class="row">
        <div class="col-md-6 jadwal-box">
        <h2 style="text-align: center;">Jadwal</h2>
            <img src="{{ asset ('img/img1.jpg') }} " class="jdwl">
            </div>
            <div class="col-md-6 jadwal-box wow fadeInLeft">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
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

<div id="section3" class="container-fluid bg-secondary" style="padding-top:70px;padding-bottom:70px">
  <h1>Section 3</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section41" class="container-fluid bg-danger" style="padding-top:70px;padding-bottom:70px">
  <h1>Section 4 Submenu 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section42" class="container-fluid bg-info" style="padding-top:70px;padding-bottom:70px">
  <h1>Section 4 Submenu 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

</body>
