<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="shortcut icon" href="<?= BASEURL?>/homepage/img/logo.png" />
        <!-- link font  -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
        <!-- link css -->
        <link rel="stylesheet" href="<?= BASEURL?>/homepage/css/style.css" />
        <link rel="stylesheet" href="<?= BASEURL?>/homepage/css/style_blog.css" />
        <!-- aos css -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <title>Dewa Coffee</title>
        <style>
            body{
                overflow-x: hidden;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" >
            <!--  Show this only on mobile to medium screens  -->
            <a class="navbar-brand d-lg-none logo-img" href="#">
                <img src="<?= BASEURL ?>/assets/img/logo.png" alt="" />
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--  Use flexbox utility classes to change how the child elements are justified  -->
            <div class="collapse navbar-collapse justify-content-center mt-3" id="navbarToggle">
                <ul class="navbar-nav">
                    <li class="nav-item" data-aos="fade-down" data-aos-delay="500" >
                        <a class="nav-link nav-color <?= (Url::check() == '') ? 'active' : ''?>" href="<?= BASE_URL?>" >Home </a>
                    </li>
                    <li class="nav-item"  data-aos="fade-down" data-aos-delay="600">
                        <a class="nav-link nav-color <?= (Url::check() == 'products') ? 'active' : ''?> " href="<?= BASE_URL?>/products">Product</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down" data-aos-delay="700">
                        <a class="nav-link nav-color  <?= (Url::check() == 'contact') ? 'active' : ''?>" href="<?= BASE_URL?>/contact" > Contact Us</a>
                    </li>
                </ul>
                <a class="navbar-brand d-none d-lg-block logo-img ml-3" href="#" data-aos="fade-down" data-aos-delay="800">
                    <img src="<?= BASEURL ?>/assets/img/logo.png" alt="" />
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item " data-aos="fade-down" data-aos-delay="900">
                        <a class="nav-link nav-color" href="<?= BASE_URL?>#testim" >Review</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down" data-aos-delay="1000">
                        <a class="nav-link nav-color  <?= (Url::check() == 'blog') ? 'active' : ''?>" href="<?= BASE_URL?>/blog" >Blog</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down" data-aos-delay="1100">
                        <a class="nav-link nav-color  <?= (Url::check() == 'about') ? 'active' : ''?>" href="<?= BASE_URL?>/about" > About Us</a>
                    </li>
                </ul>
            </div>
        </nav>