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
    <div class="mn-tgl">
    <label>{{(new \Carbon\Carbon(now()))->translatedFormat("l, d F Y")}}</label>
    </div>
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
    <a class="dropdown-item" href="/logout">Keluar</a>
  </div>
</div>

</nav><!-- NavBar END -->

