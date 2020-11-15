      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/admin/menu-adm.css') }}" rel="stylesheet" type="text/css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Bootstrap NavBar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
    <img src="{{ asset ('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        <span class="menu-collapsed"> SMA HUTAMA</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <label class="fa fa-calendar nav-link">
                <?php echo date  ('l, d F Y'); ?></label>
            </li>
            <li class="nav-item">
                <label class="nav-link fa fa-clock-o" >
                <?php echo date('H:i:s'); ?></label>
            </li>
            <li class="nav-item">
                <label class="nav-link fa fa-user-circle-o" > Nama Admin</label>
            </li>
            <li class="nav-item">
                <a class="nav-link fa fa-sign-out" href="#top">Keluar</a>
            </li>

        </ul>
    </div>
</nav><!-- NavBar END -->

<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">

            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed"> Beranda</span>
                </div>
            </a>

            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed"> Data </span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="/admin/data-admin" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Admin</span>
                </a>
                <a href="/admin/data-kelas" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Kelas</span>
                </a>
                <a href="/admin/data-mapel" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Mata Pelajaran</span>
                </a>
                <a href="/admin/data-siswa" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Siswa</span>
                </a>
                <a href="/admin/data-guru" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Guru</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Jadwal</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Absen</span>
                </a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Materi</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Soal</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Data Nilai</span>
                </a>
            </div>

            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-file-text-o fa-fw mr-3"></span>
                    <span class="menu-collapsed"> Laporan </span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Laporan Data Siswa</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Laporan Data Guru</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Laporan Data Nilai</span>
                </a>

            </div>

            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-sign-out fa-fw mr-3"></span>
                    <span class="menu-collapsed"> Keluar</span>
                </div>
            </a>

        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->
