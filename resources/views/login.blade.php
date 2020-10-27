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
        <h2 class="text-center"> SMA HUTAMA</h2>
        <img class="logo" src="{{ asset ('img/logo.png') }} " alt="logo">
		    <form class="login-form">
        <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" >
    
       </div>
        <div class="form-group">
       <label>Kata Sandi</label>
      <span class="btn-show-pass">
      <input type="password" class="form-control" name="password" id="pass" placeholder="Masukkan Kata Sandi">	
      <i class="fa fa-eye"></i></span>
      </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Ingat Username</small>
    </label><br><br>
    <button type="submit" class="btn btn-primary btn-masuk">Login</button>
  </div>
</form>

		</div>
</div>
    </div>
</section>

</body>
</html>