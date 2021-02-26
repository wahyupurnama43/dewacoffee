<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Login Dewa Coffee</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= BASEURL?>/assets/img/logo.png" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Icons -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= BASEURL?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= BASEURL?>/assets/css/argon.css?v=1.1.0" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
    </style>
    </head>

    <body>
    <div class="row">
        <div class="flash-data" data-flashdata="<?= Flasher::flash(true); ?>"></div>
    </div>
    <!-- Main content -->
    <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 ">
        <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                <h1 class="text-white" data-aos="fade-down" data-aos-delay="300">Welcome!</h1>
                <p class="text-lead text-white" data-aos="fade-down" data-aos-delay="400">Welcome to Dashboard Dewa Coffee.</p>
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
            <div class="card bg-white border-0 mb-0" data-aos="fade-down" data-aos-delay="500">
            <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                <h1>Sign in</h1>
                </div>
                <form action="" method="POST">
                <div class="form-group mb-3" data-aos="fade-down" data-aos-delay="600">
                    <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email">
                    </div>
                </div>
                <div class="form-group" data-aos="fade-down" data-aos-delay="700">
                    <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                    </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox" data-aos="fade-down" data-aos-delay="800">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                    </label>
                </div>
                <div class="text-center" data-aos="fade-down" data-aos-delay="900">
                    <button type="submit" name="login" class="btn btn-primary my-4">Sign in</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Core -->
    <script src="<?= BASEURL?>/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= BASEURL?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL?>/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= BASEURL?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= BASEURL?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
    <script src="<?= BASEURL?>/assets/js/argon.js?v=1.1.0"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        AOS.init();
        
        const  flashData = $('.flash-data').data('flashdata');
        if (flashData) {
            Swal.fire({
                title: 'Dewa Coffee',
                text: flashData.pesan,
                icon: flashData.tipe,
                type: flashData.tipe
            })
        }; 
    </script>
</body>
</html>