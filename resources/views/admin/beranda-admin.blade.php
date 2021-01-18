<title> Beranda Admin </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@include('admin.menu-adm')

  <!-- MAIN -->
  <div class="col p-4">
  <div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-4" style="margin-bottom:20px">
            <div class="card" style="width:325px">
                <img class="card-img-top" src="https://cektkp.id/wp-content/uploads/2019/05/downloadfile-10.jpg" alt="Card image" style="width:100%">
                  <a href="/admin/data-siswa" class="btn btn-primary stretched-link" style="font-size: 18pt"> Data Siswa</a>
              </div>

        </div>

        <div class="col-4">
            <div class="card" style="width:300px">
                <img class="card-img-top" src="https://medialampung.co.id/wp-content/uploads/2020/07/guru-penggerak.jpg" alt="Card image" style="width:100%">
                <a href="/admin/data-guru" class="btn btn-primary stretched-link" style="font-size: 18pt"> Data Guru</a>
            </div>

        </div>
        <div class="col-4">
            <div class="card" style="width:300px">
                <img class="card-img-top" src="https://st.depositphotos.com/1007879/1995/v/950/depositphotos_19959439-stock-illustration-vector-illustration-of-an-empty.jpg" alt="Card image" style="width:100%">
                    <a href="/admin/data-kelas" class="btn btn-primary stretched-link" style="font-size: 18pt"> Data Kelas</a>
              </div>
        </div>

        <div class="col-4">
            <div class="card" style="widh:300px">
                <img class="card-img-top" src="https://assets-a1.kompasiana.com/items/album/2018/08/03/images-4-5b63b41fbde57538c15df813.jpeg" alt="Card image" style="width:100%">
                    <a href="/admin/data-mapel" class="btn btn-primary stretched-link" style="font-size: 18pt"> Data Mapel</a>
              </div>
        </div>


        <div class="col-4">
            <div class="card" style="width:300px">
                <img class="card-img-top" src="https://sirclo.com/inc/uploads/2019/01/Atur-Jadwal-Sale-Lebih-Mudah-Dengan-Fitur-Periode-Sale3.png" alt="Card image" style="width:100%">
                <a href="/admin/data-jadwal" class="btn btn-primary stretched-link" style="font-size: 18pt"> Data Jadwal</a>
              </div>
        </div>


        <div class="col-4">
            <div class="card" style="width:300px">
                <img class="card-img-top" src="https://bridge24.com/wp-content/uploads/2019/07/checklists-workplace-image.png" alt="Card image" style="width:100%">
                <a href="/admin/data-absen" class="btn btn-primary stretched-link" style="font-size: 18pt"> Data Absen</a>
              </div>
        </div>

    </div>


  </div>
   </div>
  </div>
  <!-- Main Col END -->
</div><!-- body-row END -->


@include('admin.footer-adm')
