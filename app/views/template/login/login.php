<?php  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?= $data['judul'] ?></title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= BASEURL ?>/css/argon.min9f1e.css?v=1.1.0" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/sweetalert2/dist/sweetalert2.min.css">
  <style>
    .bg-default{
      background: #fff !important;
    }
    .card-body{
      box-shadow: 5px 5px 15px rgba(0,0,0,.3);
    }
    .fill-default{
      fill:#fff;
    }
  </style>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
      '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="bg-default">
  <div class="row">
    <div class="flash-data" data-flashdata="<?= Flasher::flash(true); ?>"></div>
  </div>
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary  py-lg-5 ">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Welcome to SKENSA Inventory <br> Providing a variety of school supplies</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <h1>Sign In</h1>
              </div>
              <form role="form" action="" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username or Nis  " type="text" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="sumbit" name="login" class="btn btn-primary my-4">Sign in</button>
                </div>
                <div class=" text-center">
                  <a href="#" class="text-light"><small>Forgot password?</small></a>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-2" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">Swah Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">Swah Tim</a>
            </li>
            <li class="nav-item">
              <a href="#presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com/" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#license" class="nav-link" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?= BASEURL ?>/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= BASEURL ?>/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= BASEURL ?>/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="<?= BASEURL ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= BASEURL ?>/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= BASEURL ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= BASEURL ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="<?= BASEURL ?>/js/argon.min9f1e.js?v=1.1.0"></script>
  <script src="<?= BASEURL ?>/js/script.js"></script>
 
</body>

</html>
