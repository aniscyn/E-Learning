<title>Ubah Kata Sandi - Siswa</title>

<!-- Navbar -->
@include('navbar')

<div class="col p-4" style="margin-top: 40px;">
<div class="card border-dark card-profile">
<div class="container-fluid">
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/siswa">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Ubah kata Sandi</li>
  </ol>
</nav>

<div class="container-fluid">
    <div class="card">
        <h5 class="card-header font-weight bg-secondary" style="color: white;">Ubah Kata Sandi</h5>
    <!-- Control the column width, and how they should appear on different devices -->

      <form action="/siswa/ubah-sandi" method="post" class="form-sandi">
      @csrf
        <div class="form-group"> <br>
         <label for="sandi" class="col-2 col-form-label">Kata Sandi Baru</label>
         <div class="col-10">
         <input type="password" class="form-control" placeholder="Masukkan Kata Sandi Baru" name="password"id="myInput" required>
        </div>
        </div>

        <div class="form-group">
            <span class="btn-show-pass">
            <div class="col-10">
            <input type="checkbox" onclick="myFunction()"> Lihat Kata Sandi
            </div>
        </span>
        </div>

        <div class="col-10">
         <button type="submit" class="btn btn-primary"> Simpan</button>
        </div>
    </form>

      </div>
      </div>
      <br>
 </div></div>
</div></div>

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

@include('footer')
