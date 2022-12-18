<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
  <title>Web Sekolah</title>

  <style>
  .resp {
    min-width: 10%;
    max-width: 50%;
    height: auto;
  }
</style>

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

    <!-- Main content -->
    <div class="container pt-5" style="margin-right: auto;margin-left: auto;width: fit-content;">
      <center><h1>Home Website ETS</h1></center>
      <div class="row py-5">
        <div class="col">
        <a class="btn btn-warning" href="/barang">
          <div class="m-5 resp">
            <img src="image/product.png" width="100" height="100">
            <h4 class="text-white">List Barang</h4>
          </div>
        </a>
        </div>
      
      <div class="col">
        <a class="btn btn-info" href="/excel">
          <div class="m-5 resp">
            <img src="image/xls.png" width="100" height="100">
            <h4  class="text-white">Baca File Excel</h4>
          </div>
        </a>
        </div>
        
        <div class="col">
        <a class="btn btn-success" href="/berita">
          <div class="m-5 resp">
            <img src="image/newspaper.png" width="100" height="100">
            <h4  class="text-white">List Berita</h4>
          </div>
        </a>
      </div>
        
        <div class="col">
        <a class="btn btn-danger" href="/logout">
          <div class="m-5 resp">
            <img src="image/logout.png" width="100" height="100">
            <h4  class="text-white ">Logout</h4>
          </div>
        </a>
      </div>
    </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 by Muhammad Taufik, All rights reserved. 
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
