<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?= BASEURL ?>/vendor/select2/dist/css/select2.min.css" type="text/css">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/argon.min9f1e.css?v=1.1.0" type="text/css">
</head>
<body>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <a href="<?= BASE_URL ?>/"><h1 class="text-white pt-1">Home</h1></a>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">

          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= BASEURL ?>/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
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
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
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

    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(<?= BASEURL ?>/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Halo <?= $_SESSION['username'] ?></h1>
            <p class="text-white mt-0 mb-5">ini adalah halaman profil Anda. Anda dapat melihat jumlah peminjan anda, jumlah kembali , jumlah denda serta anda bisa merubah data diri anda </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="<?= BASEURL ?>/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?= BASEURL ?>/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Invetaris Skensa - Skensa Tim
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>SMK N 1 DENPASAR
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form class="needs-validation was-validated" action="" method="POST">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Username" value="<?= $data['profile']['username'] ?>" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                       <label class="form-control-label" for="input-username">Nama</label>
                       <input type="text" id="input-username" class="form-control" placeholder="Username" value="<?= $data['profile']['nama'] ?>" requerid>

                     </div>
                   </div>
                 </div>
                 <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="example-password-input" class="form-control-label">Password Lama</label>
                      <input class="form-control" type="password" id="example-password-input" placeholder="Password Lama">
                    </div> 
                  </div>                 
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="example-password-input" class="form-control-label">Password Baru</label>
                      <input class="form-control" type="password" id="example-password-input" placeholder="Password Baru">
                    </div>     
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label class="form-control-label" for="validationCustomUsername">No Induk</label>
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="" value="<?= $data['profile']['no_induk'] ?>" disabled>
                    <div class="invalid-feedback">
                      Tolong isi No Induk Anda
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                   <div class="form-group">
                    <label class="form-control-label" for="validationCustomUsername">Tanggal Daftar</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                      <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2019" disabled>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label class="form-control-label" for="validationCustomUsername">Status</label>
                  <input type="text" class="form-control" id="validationCustomUsername" disabled placeholder="Username" value="<?php if($data['profile']['id_level'] === '1'){echo 'Admin';}elseif($data['profile']['id_level'] === '2'){echo 'Petugas';}else{echo'Siswa';} ?>">
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Contact information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-control-label" for="input-address">Alamat</label>
                    <input id="input-address" class="form-control" placeholder="Home Address" value="" type="text" aria-describedby="inputGroupPrepend" required="">
                    <div class="invalid-feedback">
                      Tolong isi Alamat 
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-provinsi">Provinsi</label>
                    <select class="form-control" data-toggle="select" id="input-provinsi" aria-describedby="inputGroupPrepend" required="">
                      <option disabled="" selected="">Pilih Provinsi</option>
                      <?php foreach ($data['provinsi'] as $pr): ?>
                        <option value="<?= $pr['id'] ?>" required><?= $pr['name'] ?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-kota">Kabupaten / Kota</label>
                    <select class="form-control" data-toggle="select" id="input-kota" aria-describedby="inputGroupPrepend" required="">
                      <option>Pilih Kabupaten / Kota</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-kecamatan">Kecamatan</label>
                    <select class="form-control" data-toggle="select" id="input-kecamatan" aria-describedby="inputGroupPrepend" required="">
                      <option>Pilih Kecamatan</option>
                    </select>
                </div>
                </div>
              </div>
            </div>
            <hr class="my-4" />
            <div class="d-flex justify-content-center">
              <button class="btn btn-primary" type="submit" name="button">Simpan Data <i class="fas fa-save"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<script src="<?= BASEURL ?>/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= BASEURL ?>/vendor/select2/dist/js/select2.min.js"></script>
<script src="<?= BASEURL ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL ?>/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= BASEURL ?>/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= BASEURL ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= BASEURL ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<script src="<?= BASEURL ?>/js/argon.min9f1e.js?v=1.1.0"></script>
<script src="<?= BASEURL ?>/js/script.js"></script>

<script>
  
  $(function(){
    $('#input-provinsi').change(function() {
      var id_prov = $(this).val();
      $.ajax({
        method: 'POST',
        url : "http://localhost/Inventaris_skensa/profile/ambil_data",
        data:{modul:"provinsi",id:id_prov},
        success:function(respond){
          $('#input-kota').html(respond);
        }
      });
    });

    $('#input-kota').change(function() {
      var id_kota = $(this).val();
      $.ajax({
        method: 'POST',
        url : "http://localhost/Inventaris_skensa/profile/ambil_data",
        data:{modul:"kota", id:id_kota},
        success:function(respond){
          $('#input-kecamatan').html(respond);
        }
      });
    });
  });

</script>

</body>
</html>