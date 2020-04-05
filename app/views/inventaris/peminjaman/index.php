<div class="container-fluid mt-5">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between Tpinjam">
      <h3 class="m-0 font-weight-bold text-primary "><i class="ni ni-delivery-fast "></i> &nbsp;Peminjaman Barang </h3>
      <div class=""></div>
      <div class="col-6 text-right">
        <button class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="modal" data-target="#pinjam">
          <span class="btn-inner--icon"><i class="fas fa-plus"></i> Tambah Pinjam</span>
        </button>
      </div>
    </div>
    <div class="card-body ">
      <div class="table-responsive">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-primary">
            <tr>
              <th>No</th>
              <th>Nama Pinjam</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Aksi</th>
              <th>Kembali</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php $i=1; ?>
            <?php foreach ($data['pinjam'] as $pinjam): ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $pinjam['nama'] ?></td>
                <td><?= date('d F Y', strtotime($pinjam['tanggal_pinjam'] ))?></td>
                <td><?= date('d F Y', strtotime($pinjam['tanggal_kembali'] )) ?></td>
                <td class="table-actions">
                  <a href="" class="table-action table-action-primary edit_pinjam" data-toggle="modal" data-target="#pinjam" data-id="<?= $pinjam['id_peminjam'] ?>" data-toggle="tooltip" data-original-title="Edit Barang">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a  href="" class="table-action table-action-delete hapus tombol-hapus" data-toggle="sweet-alert" data-sweet-alert="confirm" data-id="<?= $pinjam['id_peminjam'] ?>" data-ct="hapus_pinjam" data-href="<?= BASEURL ?>/peminjaman/" data-toggle="tooltip" data-original-title="Hapus Barang">
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="<?= BASEURL ?>/peminjaman/detail/<?= $pinjam['id_peminjam'] ?>" class="table-action table-action-success" data-toggle="tooltip" data-original-title="Detail Barang" >
                    <i class="fas fa-list"></i>
                  </a>
                </td>
                <td>
                 <a href="<?= BASEURL ?>/proses/kembali/<?= $pinjam['id_peminjam'] ?>" class="btn btn-sm btn-success btn-round btn-icon">
                  <span class="btn-inner--icon">Kembali <i class="ni ni-check-bold"></i> </span>
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="pinjam" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul">Tambah Pinjam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?= BASEURL ?>/proses/Tpinjam">
          <input type="hidden" id="id" name="id">
          <div class="form-group">
            <label for="#peminjam">Pilih Peminjam</label>
            <select name="peminjam" id="peminjam" class="form-control">
              <option value="" selected="" disabled="">Nama</option>
              <?php foreach ($data['peminjam'] as $peminjam): ?>
                <option value="<?= $peminjam['id_auth'] ?>"> <?= $peminjam['nama'] ?></option>
              <?php endforeach ?>
            </select>     
          </div>
          <div class="form-group">
            <label for="#barang">Pilih Barang</label>
            <select name="pilih_barang" id="barang" class="form-control">
              <option value="" selected="" disabled="">Pilih Barang</option>
              <?php foreach ($data['barang'] as $barang): ?>
                <option value="<?= $barang['id_barang'] ?>"> <?= $barang['nama_brng'] ?></option>
              <?php endforeach ?>
            </select>            
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
          <div class="form-group">
            <label for="#jumlah">Jumlah Pinjam</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah">
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-primary w-100">Tambah Pinjam &nbsp;<i class="fas fa-plus"></i></button>
        </div>
      </form>

    </div>
  </div>
</div>


