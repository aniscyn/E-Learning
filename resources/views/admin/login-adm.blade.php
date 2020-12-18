<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - E-learning</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

<section class="login-block "><br><br>
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
        <img
        src="https://st2.depositphotos.com/1688079/5662/i/600/depositphotos_56620495-stock-photo-member-icon-purple-button.jpg"
        style="width: 40%;height:30%;margin-left:30%">

        <form class="login-form" action="/admin/login" method="post">
        @csrf
        <div class="form-group"><br>
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
       </div>

    <div class="form-group">
      <span class="btn-show-pass">
      <input type="password" class="form-control" name="password" id="myInput" placeholder="Masukkan Kata Sandi"><br>
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
