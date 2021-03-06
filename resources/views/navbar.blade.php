      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet" type="text/css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="{{ asset ('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">

    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
        <div class="dropdown show">
  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{auth()->user()->siswa->kelas->nm_kelas}} - {{auth()->user()->siswa->nm_lengkap}}
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/siswa/profile">Profile</a>
    <a class="dropdown-item" href="/siswa/ubah-sandi">Ubah Kata Sandi</a>
    <a class="dropdown-item" href="#">Nilai</a>
    <a class="dropdown-item" href="/siswa/logout">Keluar</a>
  </div>
</div>

</nav><!-- NavBar END -->

<!-- Bootstrap row -->

<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block" style="background-color:white">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group bg-light" >
            <!-- Separator with title -->
            <li class="list-group-item bg-light" style="text-align: center;"> <h5 style="width:11rem"> {{auth()->user()->siswa->nm_lengkap}} </h5></li>
            <li class="list-group-item bg-light" style="text-align: center;">
            <img src="{{auth()->user()->siswa->getPhotoProfilePath()}}"
            width="100" height="100" class="rounded-circle" style="background-position:center center">
            </li>
            <!-- /END Separator -->

            <a href="/siswa" class="bg-light list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Beranda</span>
                </div>
            </a>

            <!-- /END Separator -->

            <a href="/siswa/absensi" class="bg-light list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Absen</span>
                </div>
            </a>


            <a href="/siswa/jadwal" class="bg-light list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-file-text-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Jadwal Ku </span>
                </div>
            </a>


        </ul><!-- List Group END--><br>
    </div><!-- sidebar-container END -->


