<div class="pt-10"></div>
<div class="row plr-4">

    <?php foreach ($data['barang'] as $barang): ?>
        <?php 
    $tgl = explode('-', $barang['tanggal_masuk']);
    if ($tgl[1] == '01') {
     $bulan = 'Jan';
   }elseif ($tgl[1] == "02") {
     $bulan = 'Feb';
   }elseif ($tgl[1] == "03") {
     $bulan = 'Mar';
   }elseif ($tgl[1] == "04") {
     $bulan = 'Apr';
   }elseif ($tgl[1] == "05") {
     $bulan = 'Mei';
   }elseif ($tgl[1] == "06") {
     $bulan = 'Jun';
   }elseif ($tgl[1] == "07") {
     $bulan = 'Jul';
   }elseif ($tgl[1] == "08") {
     $bulan = 'Aug';
   }elseif ($tgl[1] == "09") {
     $bulan = 'Sep';
   }elseif ($tgl[1] == "10") {
     $bulan = 'Okto';
   }elseif ($tgl[1] == "11") {
     $bulan = 'Nov';
   }elseif ($tgl[1] == "12") {
     $bulan = 'Dec';
   }

   ?>
            <div class="col-lg-4">
                <div class="example-1 card">
                    <div class="wrapper" style="background: url('http://inventaris.com/Inventaris_skensa/public/img/daftar-barang/<?= $barang['gambar'] ?>')">
                        <div class="date">
                            <span class="day"><?= $tgl[2] ?></span>
                            <span class="month"><?=  $bulan?></span>
                            <span class="year"><?= $tgl[0] ?></span>
                        </div>
                        <div class="data">
                            <div class="content">
                                <span class="author"><?= $barang['nama']; ?></span>
                                <h1 class="title"><a href="#"><?= $barang['nama_brng'] ?></a></h1>
                                <p class="text">
                                    <?= $barang['deskripsi'] ?>
                                </p>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <div class=""></div>
                                    <div class="">
                                        <a href="" class="btn btn-primary detail_barang" data-id="<?= $barang['id_barang'] ?>" data-toggle="modal" data-target="#detail">Detail <i class="far fa-eye mt-1 ml-1"></i></a>
                                        <a href="" class="btn btn-success detail_barang" data-id="<?= $barang['id_barang'] ?>" data-toggle="modal" data-target="#pinjam">Pinjam <i class="fas fa-check mt-1 ml-1"></i></a>
                                    </div>
                                    <div class=""></div>
                                </div>
                                <label for="<?= $barang['id_barang'] ?>" class="menu-button"><span></span></label>
                            </div>
                            <input type="checkbox" id="<?= $barang['id_barang'] ?>" />
                            <ul class="menu-content">
                                <li>
                                    <a href="#" class="far fa-eye"></a>
                                </li>
                                <li><a href="#" class="far fa-heart"><span>47</span></a></li>
                                <li><a href="#" class="far fa-comment"><span>8</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach ?>

</div>

<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Barang <i class="ni ni-box"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img id="gambar_detail" src="" alt="" width="100%">
                    </div>
                    <div class="col-lg-7">
                        <table>
                            <tr>
                                <td width="50%">
                                    <h4>Nama Barang</h4></td>
                                <td> &nbsp;&nbsp;:&nbsp;&nbsp;<span id="nama_barang"></span></td>

                            </tr>
                            <tr>
                                <td>
                                    <h4>Jumlah</h4></td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;<span id="jumlah_barang"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Jenis Barang</h4></td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;<span id="jenis_barang"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <h4>Ruangan & Kode Ruang</h4></td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;<span id="ruang_barang"></span></td>

                            </tr>
                            <tr>
                                <td>
                                    <h4>Tanggal Masuk</h4></td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;<span id="tgl_msk"></span></td>

                            </tr>
                            <tr>
                                <td>
                                    <h4>Kondisi</h4></td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;<span id="kondisi_barang"></span></td>

                            </tr>
                            <tr>
                                <td>
                                    <h4>Petugas</h4></td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;<span id="petugas"></span></td>

                            </tr>
                            <tr>
                                <td>
                                    <h4>Keterangan</h4></td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp; <span id="keterangan_barang"></span></td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#pinjam">Pinjam <i class="fas fa-check"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pinjam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-width" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Peminjam <i class="ni ni-box"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/proses/barang" method="POST">
                    <div class="form-group">
                        <label for="nama_brng">Nama Barang</label>
                        <input type="hidden" id="id_barang" name="id_barang">
                        <input type="text" class="form-control" id="pinjam_barang" disabled="">
                    </div>
                    <div class="form-group">
                     <label for="#peminjam">Nama Peminjam</label>
                      <input type="hidden" name="id_auth" value="<?= $_SESSION['auth'] ?>">
                        <input type="text" class="form-control" name="peminjam" disabled="" value="<?= $_SESSION['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Barang</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah_barang">
                    </div>
                    <div class="form-group">
                      <label for="#pinjam">Lama Pinjam</label>
                      <select name="pinjam" id="pinjam" class="form-control">
                        <option value="">Pilih Berapa Hari</option>
                        <option value="1">1 Hari</option>
                        <option value="2">2 Hari</option>
                        <option value="3">3 Hari</option>
                        <option value="4">4 Hari</option>
                        <option value="5">5 Hari</option>
                        <option value="6">6 Hari</option>
                        <option value="7">7 Hari</option>
                        <option value="8">8 Hari</option>
                        <option value="9">9 Hari</option>
                        <option value="10">10 Hari</option>
                        <option value="11">11 Hari</option>
                        <option value="12">12 Hari</option>
                        <option value="13">13 Hari</option>
                        <option value="14">14 Hari</option>
                        <option value="15">15 Hari</option>
                        <option value="16">16 Hari</option>
                        <option value="17">17 Hari</option>
                        <option value="18">18 Hari</option>
                        <option value="19">19 Hari</option>
                        <option value="20">20 Hari</option>
                        <option value="21">21 Hari</option>
                        <option value="23">23 Hari</option>
                        <option value="24">24 Hari</option>
                        <option value="25">25 Hari</option>
                        <option value="26">26 Hari</option>
                        <option value="27">27 Hari</option>
                        <option value="28">28 Hari</option>
                        <option value="29">29 Hari</option>
                        <option value="30">30 Hari</option>
                      </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary w-100">Pinjam Barang &nbsp;<i class="fas fa-plus"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>