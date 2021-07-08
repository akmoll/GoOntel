<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Form Peminjaman Sepeda</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">

  <style>
    div.tengah {
        text-align: center;
    }
    </style>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">

            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="{{ config('http://localhost')}}/form">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Form Peminjaman Sepeda</span>
                </a>
              </li>


            <li class="nav-item">
                <a class="nav-link" href="{{ config('http://localhost')}}/panduan">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Panduan</span>
                </a>
              </li>

        </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->

          <!-- Navigation -->

        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ config('http://localhost')}}/"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Isi Formulir Peminjaman</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row justify-content-center">
          <div class=" col ">
            <div class="card">
              <div class="card-header bg-transparent">
                <h2 class="mb-0 text-center">Formulir Peminjaman Sepeda</h2>
              </div>
    <!-- Header -->
    <div class="card">
        <form class= "needs-validation "method="POST" action="{{ config('http://localhost')}}/form">
                @csrf

          <div class="card-body">   
            <div class="row">
              <div class="col-lg-8">
                <h3 class="mb-1">       
                Silahkan isi form dengan lengkap!
                </h3>
              </div>  
            </div>

      <div class="form-row">
        <div class="col-md-6">          
    <div class="form-group">
        <label for="nama lengkap" class="form-control-label">Nama Lengkap</label>
        <input class="form-control" type="text" placeholder="Ahmad Taqi" name="nama_peminjam" required>
    </div>
      </div> 
      <div class="col-md-6">  
    <div class="form-group">
        <label for="nrp" class="form-control-label">NRP</label>
        <input class="form-control" type="text" placeholder="05211940000123 " name="nrp" required>
    </div>
      </div>
      </div>

    <div class="form-row">
      <div class="col-md-6">
    <div class="form-group">
    <label for="fakultas">Fakultas</label>
    <select class="form-control" name="fakultas" id="fakultas" required>
      <option value=''>-- Pilih Fakultas --</option>

       <!-- Read fakultas -->
       @foreach($faculties['data'] as $faculty)
        <option value='{{ $faculty->id }}'>{{ $faculty->name }}</option>
      @endforeach

    </select>
    </div>
      </div>
      <div class="col-md-6">
  <div class="form-group">
    <label for="departemen">Departemen</label>
    <select class="form-control" name="departemen" id="departemen" required>
      <option value=''>-- Pilih Departemen --</option>
    </select>

    <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type='text/javascript'>
   $(document).ready(function(){

      // fakultas Change
      $('#fakultas').change(function(){

         // fakultas id
         var id = $(this).val();

         // Empty the dropdown
         $('#departemen').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'getDepartments/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
                len = response['data'].length;
             }

             if(len > 0){
                // Read data and create <option >
                for(var i=0; i<len; i++){

                   var id = response['data'][i].id;
                   var name = response['data'][i].name;

                   var option = "<option value='"+id+"'>"+name+"</option>";

                   $("#departemen").append(option); 
                }
             }

           }
         });
      });
   });
   </script>
  </div>
    </div>
    </div>

  <div class="form-row">
    <div class="col-md-6">
  <div class="form-group">
        <label for="alamat rumah" class="form-control-label">Alamat Rumah</label>
        <input class="form-control" type="text" name="alamat_rumah" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
        <label for="alamat rumah" class="form-control-label">Alamat Surabaya</label>
        <input class="form-control" type="text" name="alamat_sby"required>
    </div>
  </div>
  </div>

    <div class="form-row">
      <div class="col-md-6">
    <div class="form-group">
        <label for="no hp" class="form-control-label">No HP</label>
        <input class="form-control" type="tel" placeholder="081234567890" name="nohp" required>
    </div>
      </div>
      <div class="col-md-6">
    <div class="form-group">
        <label for="email" class="form-control-label">Email</label>
        <input class="form-control" type="email" placeholder="example@mail.com" name="email" required>
    </div>
    </div>
          </div>

    <div class="form-row">
      <div class="col-md-6">
    <div class="form-group">
        <label for="tanggal pinjam" class="form-control-label">Tanggal Pinjam</label>
        <input class="form-control" type="datetime-local" name="tanggal_pinjam" required>
    </div>
      </div>
      <div class="col-md-6">
    <div class="form-group">
        <label for="tanggal kembali" class="form-control-label">Tanggal Kembali</label>
        <input class="form-control" type="datetime-local" name="tanggal_kembali" required>
    </div>
    </div>
    </div>
    <div>
    <button class="btn btn-primary" type="submit" required>Submit form</button>
          </div>
</form>
        </div>
    </div>

    <!-- Footer -->

    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
