<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/lg.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/lg.css') }}" rel="stylesheet" type="text/css">

<div class="login-reg-panel">
<form class="login-form" action="/login" method="post">
        @csrf
		<div class="login-info-box"><br>
            <span class="text-lg"> SMA HUTAMA</span><br><br>
            <label id="label-register" for="log-reg-show">Login Sebagai Siswa</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>

		<div class="register-info-box"><br>
        <span class="text-lg"> SMA HUTAMA</span><br><br>
			<label id="label-login" for="log-login-show">Login Sebagai Guru</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
    </div>
</form>

    <form class="login-form" action="/login" method="post">
        @csrf
		<div class="white-panel">
			<div class="login-show">
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times; {{$errors->first()}}</button>
             </div>
                <h1>Login Siswa</h1>
                <img class="logo" src="{{ asset ('img/logo.png') }} " alt="logo">
				<input type="text" placeholder="Masukkan NIS">
                <input type="password" placeholder="Masukkan Kata Sandi" id="myInput">
                <input type="checkbox" onclick="myFunction()"> Lihat Kata Sandi
                <button type="submit" class="btn btn-primary float-right"> Login </button>
                <input type="hidden" name="role" value="siswa">
            </div>
    </form>
    <form class="login-form" action="/login" method="post">
        @csrf
			<div class="register-show">
            <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times; {{$errors->first()}}</button>
             </div>
                <h1>Login Guru</h1>
                <img class="logo" src="{{ asset ('img/logo.png') }} " alt="logo">
				<input type="text" placeholder="Masukkan NIP">
                <input type="password" placeholder="Masukkan Kata Sandi" id="myIn">
                <input type="checkbox" onclick="myFun()"> Lihat Kata Sandi
                <button type="submit" class="btn btn-primary float-right"> Login </button>
                <input type="hidden" name="role" value="guru">
			</div>
        </div>
    </div>
    </form>

    <script>

    $(document).ready(function(){
        $('.login-info-box').fadeOut();
        $('.login-show').addClass('show-log-panel');
    });


    $('.login-reg-panel input[type="radio"]').on('change', function() {
        if($('#log-login-show').is(':checked')) {
            $('.register-info-box').fadeOut();
            $('.login-info-box').fadeIn();

            $('.white-panel').addClass('right-log');
            $('.register-show').addClass('show-log-panel');
            $('.login-show').removeClass('show-log-panel');

        }
        else if($('#log-reg-show').is(':checked')) {
            $('.register-info-box').fadeIn();
            $('.login-info-box').fadeOut();

            $('.white-panel').removeClass('right-log');

            $('.login-show').addClass('show-log-panel');
            $('.register-show').removeClass('show-log-panel');
        }
    });


    </script>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
function myFun() {
  var x = document.getElementById("myIn");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
