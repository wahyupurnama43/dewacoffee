<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Dashboard | Dewa Coffee</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= BASEURL?>/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= BASEURL?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= BASEURL?>/assets/css/argon.css?v=1.1.0" type="text/css">
    <!-- data tables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />

    <style>
    .m-w-d {
        max-width: 1000px;
    }

    .modal-header {
        padding: 10px 1.25rem;
        padding-top: 20px;
    }

    .modal-title {
        font-size: 1.3em;
    }

    .modal-body {
        padding: 0 1.25rem;
    }
    </style>
</head>

<body>

    <div class="row">
        <div class="flash-data" data-flashdata="<?= Flasher::flash(true); ?>"></div>
    </div>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand d-flex" href="#">
                    <img src="<?= BASEURL?>/assets/img/logo.png" class="navbar-brand-img" alt="Dewa Coffee" />
                    <h3 class="ml-3 text-logo" style="margin-top:6px">Dewa Coffee</h3>
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
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
                            <a class="nav-link <?= (Url::checkAll() == 'dashboard') ? 'active' : '' ?>" href="<?= BASE_URL ?>/dashboard">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Dashboards</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (Url::checkAll() == 'dashboard/product') ? 'active' : '' ?>" href="<?= BASE_URL ?>/dashboard/product">
                                <i class="ni ni-archive-2 text-red"></i>
                                <span class="nav-link-text">Product</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (Url::checkAll() == 'dashboard/blog') ? 'active' : '' ?>" href="<?= BASE_URL ?>/dashboard/blog">
                                <i class="ni ni-books text-orange"></i>
                                <span class="nav-link-text">Blog</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (Url::checkAll() == 'dashboard/contact') ? 'active' : '' ?>" href="<?= BASE_URL ?>/dashboard/contact">
                                <i class="ni ni-circle-08 text-info"></i>
                                <span class="nav-link-text">Contact Us</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= (Url::checkAll() == 'dashboard/about') ? 'active' : '' ?>" href="<?= BASE_URL ?>/dashboard/about">
                                <i class="ni ni-badge text-primary"></i>
                                <span class="nav-link-text">About us</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#navbar-dashboards" data-toggle="collapse" role="button"
                                aria-expanded="true" aria-controls="navbar-dashboards">
                                <i class="ni ni-album-2 text-green"></i>
                                <span class="nav-link-text">Banner</span>
                            </a>
                            <div class="collapse" id="navbar-dashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?= BASE_URL ?>/dashboard/banner-home" class="nav-link  <?= (Url::checkAll() == 'dashboard/banner-home') ? 'active' : '' ?>">Banner Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= BASE_URL ?>/dashboard/banner-product" class="nav-link class="nav-link  <?= (Url::checkAll() == 'dashboard/banner-product') ? 'active' : '' ?>">Banner
                                            Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= BASE_URL ?>/dashboard/banner-blog" class="nav-link class="nav-link  <?= (Url::checkAll() == 'dashboard/banner-blog') ? 'active' : '' ?>">Banner
                                            Product</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3" />
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
                    <ul class="navbar-nav align-items-center ml-md-auto">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="<?= BASEURL?>/assets/img/theme/team-4.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Wahyu Purnama</span>
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
                                <div class="dropdown-divider"></div>
                                <a href="<?= BASE_URL?>/auth/logout" class="dropdown-item">
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
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"><?= $data['header'] ?></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="<?= BASE_URL?>/<?= $data['header'] ?>"><i
                                                class="fas fa-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a
                                            href="<?= BASE_URL?>/<?= $data['link_header'] ?>"><?= $data['header'] ?></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $data['page'] ?></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt--6">