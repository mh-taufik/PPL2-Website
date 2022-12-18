<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Sekolah</title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('style.css')?>">
</head>
<body class="hold-transition dark-mode layout-fixed sidebar-collapse layout-navbar-fixed layout-footer-fixed">
<div class="wrapper pb-5">

  <!-- Navbar -->
  <!-- <nav class="main-header navbar navbar-expand navbar-dark"> -->
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmasdenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav> -->
  <!-- /.navbar -->


    <!-- Header -->
    <header style="max-width:1500px;" id="home">
      <img src="image/mclean.jpg" alt="Architecture" width="100%" height="400" style="opacity: 40%;">
      <div style="position: absolute;top: 20%;left: 50%;transform: translate(-50%, -50%);">
      </div>
    </header>

    <!-- Main content -->
    <div class="container pt-5" style="margin-right: auto;margin-left: auto;width: fit-content;">
      <center><h1>Home Website Sekolah</h1></center>
      <div class="row py-5">
        <div class="col">
        <a class="btn btn-warning rounded-circle" href="/welcome">
          <div class="m-5">
            <img src="image/welcome.png" class="btn-circle" style="width: 100px;height: 100px;">
            <h3 class="text-white">Selamat Datang</h3>
          </div>
        </a>
        </div>
        
        <div class="col">
        <a class="btn btn-success rounded-circle" href="/mahasiswa">
          <div class="m-5">
            <img src="image/graduated.png" class="btn-circle" style="width: 100px;height: 100px;">
            <h3  class="text-white">List Mahasiswa</h3>
          </div>
        </a>
      </div>
      
      <div class="col">
        <a class="btn btn-info rounded-circle" href="/excel">
          <div class="m-5">
            <img src="image/xls.png" class="btn-circle" style="width: 100px;height: 100px;">
            <h3  class="text-white">Baca File Excel</h3>
          </div>
        </a>
        </div>
        
        <div class="col">
        <a class="btn btn-danger rounded-circle" href="/logout">
          <div class="m-5">
            <img src="image/logout.png" class="btn-circle" style="width: 100px;height: 100px;">
            <h3  class="text-white pt-4 pr-4 pl-4">Logout</h3>
          </div>
        </a>
      </div>
    </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022, All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.js')?>"></script>
</body>
</html>
