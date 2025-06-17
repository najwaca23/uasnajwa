<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Najwa's Hospital</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css');?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/jqvmap/jqvmap.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/overlayScrollbars/css/overlayScrollbars.min.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.css');?>">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/summernote/summernote-bs4.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/dist/css/adminlte.min.css');?>">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300;400;400i;700">
  <link rel="stylesheet" href="<?=base_url('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/custom-theme.css'); ?>">
<!-- Tambahkan font lucu -->
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Comic+Neue:wght@700&display=swap" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="brand-link">
    <img src="<?= base_url('assets/img/logo-pink.png') ?>" alt="Logo" class="brand-image img-circle">
    <span class="brand-text font-weight-light">Najwa's Hospital</span>
</a>

        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <?php $level = $this->session->userdata('role');?>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if ($this->session->userdata('role') == 'user'): ?>
    <li class="nav-item">
        <a href="<?= site_url('pendaftaran_user'); ?>" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>Pendaftaran</p>
        </a>
    </li>
<?php endif; ?>

<?php if ($this->session->userdata('role') == 'admin'): ?>
    <li class="nav-item">
        <a href="<?= site_url('pendaftaran'); ?>" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>Pendaftaran</p>
        </a>
    </li>
<?php endif; ?>

              <?php if ($level == 'admin'):?>
              <li class="nav-item">
                <a href="<?= base_url('dokter'); ?>"  class="nav-link">
                  <i class="far fa-newspaper nav-icon"></i>
                  <p>Dokter</p>
                </a>
              </li>
              <?php endif;?>

              <?php if ($level == 'admin'|| $level == 'user'):?>
              <li class="nav-item">
                <a href="<?= base_url('pasien'); ?>"  class="nav-link">
                  <i class="far fa-newspaper nav-icon"></i>
                  <p>Daftar & Jadwal Pasien</p>
                </a>
              </li>
              <?php endif;?>

              <?php if ($level == 'admin'):?>
              <li class="nav-item">
                <a href="<?= base_url('laporan'); ?>"  class="nav-link">
                  <i class="far fa-newspaper nav-icon"></i>
                  <p>Laporan & Statistik</p>
                </a>
              </li>
              <?php endif; ?>
          <li class="nav-item">
            <a href="<?= site_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
              </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>