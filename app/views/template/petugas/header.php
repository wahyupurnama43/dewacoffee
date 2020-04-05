<?php 
  $login =$_SESSION['status'];
  $role = $_SESSION['role'];
  if ($login != 'ada' && $role !== '1') {
    header('Location: '.BASEURL.'/home/page');
  }elseif ($login != 'ada' && $role !== '2') {
    header('Location: '.BASEURL.'/home/page');
  }
?>
<!DOCTYPE html>
<html lang="en">
 
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $data['judul'] ?> | SMK N 1 Denpasar</title>
    <link href='<?= BASEURL ?>/img/asset/title.png' rel='shortcut icon'>
    <!-- Custom fonts for this template -->
    <link href="<?= BASEURL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= BASEURL ?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= BASEURL ?>/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
   <div class="row">
        <div class="flash-data" data-flashdata="<?= Flasher::flash(true); ?>"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASEURL ?>">
        <div class="sidebar-brand-icon">
         <i class="fas fa-book-reader"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pepustakaan</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= BASEURL ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
  
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Feature
      </div>
      
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL?>/buku/index">
          <i class="fas fa-book"></i>
          <span> Daftar Buku</span>
        </a>
      </li>
      
      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL?>/peminjaman/index">
          <i class="rotate fas fa-outdent"></i>
          <span>Peminjaman</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
       <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL?>/kembali/index">
           <i class="fas fa-check"></i>
          <span>Pengembalian</span>
        </a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= BASEURL?>/laporan/">
          <i class="fas fa-download"></i>
          <span>Generate Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                     <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama'] ?></span>
                                <img class="img-profile rounded-circle" src="<?= BASEURL ?>/img/wahyu.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>


                </nav>
                <!-- End of Topbar -->
                 <div class="row">
                    <div class="flash-data" data-flashdata="<?= Flasher::flash(); ?>"></div>
                </div>