<?php 

if  ($_SESSION['role'] !== '1' || $_SESSION['status'] !== 'login') {
  header('Location: '.BASE_URL.'/login/login');
}
   // $data['countPinjamt'] =  $this->model('Get_models')->countPinjam('tb_pinjam');
   // $data['proses_pinjam'] = $this->model('Get_models')->ambilDatapinjam('tb_pinjam','0');
  
?>
 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Creative Tim">
  <title><?= $data['judul'] ?></title>
  

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= BASEURL ?>/css/argon.min9f1e.css?v=1.1.0" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css" type="text/css">
  <!-- Data Tables -->
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/sweetalert2/dist/sweetalert2.min.css">
  
  <style>
    body{
      overflow-x: hidden;
    }
  </style>

</head>
<body class="g-sidenav-hidden">
 <div class="row">
  <div class="flash-data" data-flashdata="<?= Flasher::flash(true); ?>"></div>
</div>
<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="dashboard.html">
        <img src="<?= BASEURL ?>/img/brand/blue.png" class="navbar-brand-img" alt="..." >
      </a>
      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?= BASE_URL ?>/barang/">
              <i class="ni ni-archive-2 text-primary"></i>
              <span class="nav-link-text">Inventaris</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
              <i class="ni ni-bullet-list-67 text-success"></i>
              <span class="nav-link-text">Tambah Data</span>
            </a>
            <div class="collapse" id="navbar-tables">
             <ul class="nav nav-sm flex-column">
              <li class="nav-item">
                <a href="<?= BASE_URL ?>/jenis/" class="nav-link">Jenis Barang</a>
              </li>
              <li class="nav-item">
                <a href="<?= BASE_URL ?>/ruang/" class="nav-link">Ruangan </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>/user/">
            <i class="fas fa-users text-red"></i>
            <span class="nav-link-text">Daftar User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>/peminjaman/">
            <i class="ni ni-delivery-fast text-info"></i>
            <span class="nav-link-text">Peminjaman</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>/pengembalian/">
            <i class="ni ni-check-bold text-success"></i>
            <span class="nav-link-text">Pengembalian</span>
          </a>
        </li>
      </ul>
      <!-- Divider -->
      <hr class="my-3">
      <!-- Heading -->
      <h6 class="navbar-heading p-0 text-muted">Documentation</h6>
      <!-- Navigation -->
      <ul class="navbar-nav mb-md-3">
        <li class="nav-item">
          <a class="nav-link" href="../../docs/getting-started/overview.html" target="_blank">
            <i class="ni ni-spaceship"></i>
            <span class="nav-link-text">Getting started</span>
          </a>
        </li>
      </ul>
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
        <!-- Search form -->
        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
          <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </form>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center ml-md-auto">

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
          <li class="nav-item d-sm-none">
            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
              <i class="ni ni-zoom-split-in"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav align-items-center ml-auto ml-md-0">
        <li class="nav-item dropdown">
              <a class="nav-link bel" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i><span><?= $data['countPinjamt'] ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary"><?= $data['countPinjamt'] ?></strong> notifications.</h6>
                </div>
                <!-- List group -->

                <?php foreach ($data['proses_pinjam'] as $ps_pinjam): ?>
                  <div class="list-group list-group-flush">
                    <a href="#!" class="list-group-item list-group-item-action">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <!-- Avatar -->
                          <img alt="Image placeholder" src="<?= BASEURL ?>/img/daftar-barang/<?= $ps_pinjam['gambar'] ?>" class="avatar rounded-circle">
                        </div>
                        <div class="col ml--2">
                          <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="mb-0 text-sm"><?= $ps_pinjam['nama'] ?></h4>
                            </div>
                            <div class="text-right text-muted">
                              <small><?= date("d F Y", strtotime($ps_pinjam['tanggal_pinjam'])) ?></small>
                            </div>
                          </div>
                          <p class="text-sm mb-0">Bapak / Ibu saya ingin meminjam barang <strong><em><?= $ps_pinjam['nama_brng'] ?></em></strong></p>
                          <button class="btn btn-success btn-sm mt-1">View <i class="far fa-eye"></i></button>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach ?>

                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?= BASEURL ?>/img/theme/team-4.jpg">
              </span>
              <div class="media-body ml-2 d-none d-lg-block mr-2">
                <span class="mb-0 text-sm  font-weight-bold"><?= $_SESSION['username'] ?></span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?= BASE_URL ?>/login/logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Header -->

