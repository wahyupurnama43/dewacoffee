<div class="row">
    <div class="flash-data" data-flashdata="<?= Flasher::flash(true); ?>"></div>
</div>
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
                    <img alt="Image placeholder" src="<?php if (!empty($data['identitas']['foto'])): ?>
                                    <?= BASEURL.'/img/theme/'.$data['identitas']['foto']?>
                                    <?php else :?>
                                        <?= BASEURL.'/img/theme/team-4.jpg'?>
                                <?php endif ?>">
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

                          <?php $id_auth = Encripsi::encode('encrypt',$_SESSION['auth']); ?>
                          <a href="<?= BASE_URL ?>/profile/<?= $id_auth ?>" class="dropdown-item">
                              <i class="ni ni-single-02"></i>
                              <span>My profile</span>
                          </a>
                          <a href="" class="dropdown-item">
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
                        <a href="#" data-toggle="modal" data-target="#exampleModal">
                            <div class="hovereffect">
                                <img src="<?php if (!empty($data['identitas']['foto'])): ?>
                                    <?= BASEURL.'/img/theme/'.$data['identitas']['foto']?>
                                    <?php else :?>
                                        <?= BASEURL.'/img/theme/team-4.jpg'?>
                                <?php endif ?>" class="rounded-circle">
                                <div class="overlay">
                                    <i class="fas fa-camera"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">Peminjaman</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Denda</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Komen</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5 class="h3">
                  <?= $data['profile']['nama'] ?><span class="font-weight-light"></span>
                </h5>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>XI REKAYASA PERANGKAT LUNAK 1
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
                        <form class="needs-validation was-validated" action="<?= BASE_URL ?>/proses/Uprofile" method="POST">
                            <input type="hidden" name="id" value="<?= $_SESSION['auth'] ?>">
                            <h6 class="heading-small text-muted mb-4">User information</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" id="input-username" class="form-control" name="username" placeholder="Username" value="<?= $data['profile']['username'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Nama</label>
                                            <input type="text" id="input-username" class="form-control" name="nama" placeholder="Username" value="<?= $data['profile']['nama'] ?>" requerid>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="example-password-input" class="form-control-label">Password Lama</label>
                                            <input class="form-control" type="password" id="example-password-input" name="password_lama" placeholder="Password Lama">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="example-password-input" class="form-control-label">Password Baru</label>
                                            <input class="form-control" type="password" id="example-password-input" name="password_baru" placeholder="Password Baru">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-control-label" for="validationCustomUsername">No Induk</label>
                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" name="no_induk" aria-describedby="inputGroupPrepend" required="" value="<?= $data['profile']['no_induk'] ?>" disabled>
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
                                                <input class="form-control " placeholder="Select date" type="text" value="06/20/2019" disabled>
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
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="kelas">Kelas</label>
                                            <select class="form-control" name="kelas" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ..." required="">
                                              <?php if ($data['identitas']['kelas'] == 'X'): ?>
                                                <option value="X" selected>X</option>
                                                <option value="XI">XI</option>
                                                <option value="XII">XII</option>
                                                <?php elseif ($data['identitas']['kelas'] == 'XI') : ?>
                                                  <option value="X">X</option>
                                                  <option value="XI" selected>XI</option>
                                                  <option value="XII">XII</option>
                                                  <?php elseif ($data['identitas']['kelas'] == 'XI') : ?>
                                                    <option value="X">X</option>
                                                    <option value="XI">XI</option>
                                                    <option value="XII" selected>XII</option>
                                                    <?php else :?>
                                                      <option value="">Pilih Kelas</option>
                                                      <option value="X">X</option>
                                                      <option value="XI">XI</option>
                                                      <option value="XII">XII</option>
                                                    <?php endif ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="jurusan">Jurusan</label>
                                            <select class="form-control" data-toggle="select" title="Simple select" name="jurusan" id="jurusan" data-live-search="true" data-live-search-placeholder="Search ..." required="">
                                                <?php if (!empty($data['identitas']['jurusan'])): ?>
                                                    <option value="<?= $data['identitas']['jurusan']?>" selected>
                                                        <?= $data['identitas']['jurusan']?>
                                                    </option>
                                                    <?php endif ?>
                                                        <option value="">Pilih Jurusan</option>
                                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                                        <option value="Multimedia">Multimedia</option>
                                                        <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                                        <option value="Audio Video">Audio Video</option>
                                                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="index">Index</label>
                                            <select class="form-control" data-toggle="select" title="Simple select" name="index" id="index" data-live-search="true" data-live-search-placeholder="Search ..." required="">
                                                <?php if ($data['identitas']['index_kelas'] == '1'): ?>
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <?php elseif ($data['identitas']['index_kelas'] == '2'): ?>
                                                      <option value="1">1</option>
                                                      <option value="2" selected>2</option>
                                                      <option value="3">3</option>
                                                      <?php elseif ($data['identitas']['index_kelas'] == '3'): ?>
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                        <option value="3" selected>3</option>
                                                        <?php else : ?>
                                                          <option value="">Pilih Index</option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                        <?php endif ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-provinsi">Provinsi</label>
                                            <select class="form-control" data-toggle="select" id="input-provinsi" name="provinsi" aria-describedby="inputGroupPrepend" required="">
                                                <option  selected="" value="">Pilih Provinsi</option>
                                                <?php foreach ($data['provinsi'] as $pr): ?>
                                                    <option value="<?= $pr['id'] ?>" <?= $pr[ 'id']=== $data[ 'identitas'][ 'provinsi'] ? "selected" : ""; ?>>
                                                        <?= $pr['name'] ?>
                                                    </option>
                                                    <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-kota">Kabupaten / Kota</label>
                                            <select class="form-control" data-toggle="select" id="input-kota" name="kabupaten" aria-describedby="inputGroupPrepend" required="">
                                                <option value="" selected value="">Pilih Kabupaten / Kota</option>
                                                <?php if (!empty($data['identitas']['kota'])): ?>
                                                  <?php foreach ($data['kota'] as $kota): ?>
                                                    <option value="<?= $kota['id'] ?>" <?= $kota[ 'id']=== $data[ 'identitas'][ 'kota'] ? "selected" : "" ?>>
                                                      <?= $kota['name'] ?>
                                                    </option>
                                                  <?php endforeach ?>
                                                <?php endif ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-kecamatan">Kecamatan</label>
                                            <select class="form-control" data-toggle="select" id="input-kecamatan" name="kecamatan" aria-describedby="inputGroupPrepend" required="">
                                                <option selected value="">Pilih Kecamatan</option>
                                                <?php if (!empty($data['identitas']['kecamatan'])) : ?>
                                                  <?php foreach ($data['kecamatan'] as $kc): ?>
                                                    <option value="<?= $kc['id'] ?>" <?= $kc[ 'id']=== $data[ 'identitas'][ 'kecamatan'] ? "selected" : "" ?>>
                                                      <?= $kc['name'] ?>
                                                    </option>
                                                  <?php endforeach ?>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-address">Alamat</label>
                                            <input id="input-address" class="form-control" placeholder="Home Address" name="alamat" value="<?= $data['identitas']['alamat'] ?>" type="text" aria-describedby="inputGroupPrepend" required="">
                                            <div class="invalid-feedback">
                                                Tolong isi Alamat
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary" type="submit"  name="button" >Simpan Data <i class="fas fa-save"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Foto Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" action="<?= BASE_URL ?>/proses/Ufoto" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="<?= $_SESSION['auth'] ?>" name="id">
                    <div class="d-flex justify-content-center mb-4">
                        <img id="preview" src="<?= BASEURL ?>/img/theme/team-4.jpg" alt="your image" width="50%" />
                    </div>
                    <div class="custom-file">
                        <input type="file" name="gambar">
                        <input type="file" class="custom-file-input" id="img" name="gambar">
                        <label class="custom-file-label" name="gambar">Select file</label>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" name="submit" class="btn btn-primary">Save changes <i class="fas fa-save"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>