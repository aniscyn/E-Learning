<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">

</head>
<body>

<section class="login-block ">
<a href="/"> <i class="fa fa-chevron-circle-left fa-3x" aria-hidden="true"> </i> </a>
  <div class="card border-dark">
    <div class="container">
	<div class="row">
    <div class="login-sec">

    @if (!empty($errors->first()))
        <div class="alert alert-warning fade show" role="alert">
            <label>{{$errors->first()}}</label>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

        <h2 class="text-center"> SMA HUTAMA</h2>
        <img class="logo" src="{{ asset ('img/logo.png') }} " alt="logo">
        <form class="login-form" action="/login" method="post">
        @csrf
        <div class="form-group"><br>

        <input type="text" class="form-control" name="username" placeholder="Masukkan NIS/ NIP" required>

       </div>
        <div class="form-group">
      <span class="btn-show-pass">
      <input type="password" class="form-control" name="password" id="myInput" placeholder="Masukkan Kata Sandi" required><br>
      <input type="checkbox" onclick="myFunction()"> Lihat Kata Sandi
      </div>
    <button type="submit" class="btn btn-primary btn-masuk">Login</button>
</form>

		</div>
</div>
    </div>
</section>


</body>
</html>
