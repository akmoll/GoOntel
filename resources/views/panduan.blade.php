@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
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


<div class="header bg-gradient-primary py-1 py-lg-1">
    <div class="container">
      <div class="header-body text-center mt-7 mb-7">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-md-6">
              <h6 class="h2 text-white d-inline-block mb-0">Panduan</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ config('http://localhost')}}/"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ config('http://localhost')}}/form">Isi Form Sekarang</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Peminjaman</li>
                </ol>
              </nav>
            </div>
  <div class="header bg-gradient-primary py-1 py-lg-1">
    <div class="container">
    <div class="header-body text-center mt-7 mb-7">
  <div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class=" col-lg-11 col-md-6">
          <div class="card">
            <div class="card-header bg-transparent">
              <h2 class="mb-12">Panduan Pengisian Form</h2>
            </div>
            <div class="card-body">
              <div class="row icon-examples">
                <div class="col-lg-9 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-bold-right"></i>
                      <span>1. isi nama lengkap dengan benar</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-9 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="air-baloon" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-bold-right"></i>
                      <span>2. isi nrp dengan benar</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-9 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="album-2" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-bold-right"></i>
                      <span>3. pilih fakultas dan departemen anda</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-9 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="align-center" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-bold-right"></i>
                      <span>4. isi kan alamat rumah asli</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-9 col-md-6">
                  <button type="button" class="btn-icon-clipboard" data-clipboard-text="align-left-2" title="Copy to clipboard">
                    <div>
                      <i class="ni ni-bold-right"></i>
                      <span>5. isi kan alamat yang anda tempati saat di surabaya (alamat kos/apart/rumah saudara/dll)</span>
                    </div>
                  </button>
                </div>
                <div class="col-lg-9 col-md-6">
                    <button type="button" class="btn-icon-clipboard" data-clipboard-text="align-left-2" title="Copy to clipboard">
                      <div>
                        <i class="ni ni-bold-right"></i>
                        <span>6. isi nomer handphone dan email anda dengan valid (yang bisa dihubungi)</span>
                      </div>
                    </button>
                  </div>
                  <div class="col-lg-9 col-md-6">
                    <button type="button" class="btn-icon-clipboard" data-clipboard-text="align-left-2" title="Copy to clipboard">
                      <div>
                        <i class="ni ni-bold-right"></i>
                        <span>7. isi tanggal pinjam dengan memilih hari awal anda inginkan untuk meminjam sepeda</span>
                      </div>
                    </button>
                  </div>
                  <div class="col-lg-9 col-md-6">
                    <button type="button" class="btn-icon-clipboard" data-clipboard-text="align-left-2" title="Copy to clipboard">
                      <div>
                        <i class="ni ni-bold-right"></i>
                        <span>8. isi tanggal kembali dengan hari akhir anda pinjam (hari pengembalian sepeda)</span>
                      </div>
                    </button>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br><br>

      <div class="header bg-gradient-primary py-1 py-lg-1">
        <div class="container">
        <div class="header-body text-center mt-7 mb-7">
      <div class="container-fluid mt--6">
          <div class="row justify-content-center">
            <div class=" col ">
              <div class="card">
                <div class="card-header bg-transparent">
                  <h2 class="mb-12">Aturan Umum</h2>
                </div>
                <div class="card-body">
                  <div class="row icon-examples">
                    <div class="col-lg-9 col-md-6">
                      <button type="button" class="btn-icon-clipboard" data-clipboard-text="active-40" title="Copy to clipboard">
                        <div>
                          <i class="ni ni-check-bold"></i>
                          <span>  Jagalah sepeda yang anda pinjam layaknya sepeda anda sendiri</span>
                        </div>
                      </button>
                    </div>
                    <div class="col-lg-9 col-md-6">
                      <button type="button" class="btn-icon-clipboard" data-clipboard-text="air-baloon" title="Copy to clipboard">
                        <div>
                          <i class="ni ni-check-bold"></i>
                          <span> Pengembalian sepeda melebihi waktu yang telah disepakat akan dikenakan sanksi    </span>
                        </div>
                      </button>
                    </div>
            </div>
        </div>
      </div>
    </div>


<!--
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>

<div class="header bg-gradient-primary py-1 py-lg-1">
    <div class="container">
        <div class="header-body text-center mt-7 mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h3 class="text-white">{{ __('Berikut panduan untuk pengisian form dengan benar') }}</h3>
                    <h4 class="text-black">{{ __('1. isi nama lengkap dengan benar') }}</h4>
                    <h4 class="text-black">{{ __('2. isi nrp dengan benar') }}</h4>
                    <h4 class="text-black">{{ __('3. pilih fakultas dan departemen anda') }}</h4>
                    <h4 class="text-black">{{ __('4. isi kan alamat rumah asli') }}</h4>
                    <h4 class="text-black">{{ __('5. isi kan alamat yang anda tempati saat di surabaya (alamat kos/apart/rumah saudara/dll)') }}</h4>
                    <h4 class="text-black">{{ __('6. isi nomer handphone dan email anda dengan valid (yang bisa dihubungi)') }}</h4>
                    <h4 class="text-black">{{ __('7. isi tanggal pinjam dengan memilih hari awal anda inginkan untuk meminjam sepeda') }}</h4>
                    <h4 class="text-black">{{ __('8. isi tanggal kembali dengan hari akhir anda pinjam (hari pengembalian sepeda)') }}</h4>
                    <br>
                    <h3 class="text-white">{{ __('Aturan Umum :') }}</h3>
                    <h4 class="text-black">{{ __('1. Jagalah sepeda yang anda pinjam layaknya sepeda anda sendiri') }}</h4>
                    <h4 class="text-black">{{ __('2. Pengembalian sepeda melebihi waktu yang telah disepakat akan dikenakan sanksi') }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt--10 pb-5"></div>
-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
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
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td, th {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
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
                <a class="nav-link" href="{{ config('http://localhost')}}/form">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Form Peminjaman</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ config('http://localhost')}}/panduan">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Panduan</span>
                </a>
            </li>
    <html>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br>
@endsection
