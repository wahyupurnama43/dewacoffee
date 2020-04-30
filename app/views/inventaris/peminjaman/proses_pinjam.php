
<div class="container-fluid mt-5">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between Tpinjam">
      <h3 class="m-0 font-weight-bold text-primary "><i class="ni ni-delivery-fast "></i> &nbsp;Proses Peminjaman Barang </h3>
      <div class=""></div>
      <div class="col-6 text-right">
     
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
              <?php $id = Encripsi::encode('encrypt',$pinjam['id_peminjam']);?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $pinjam['nama'] ?></td>
                <td><?= date('d F Y', strtotime($pinjam['tanggal_pinjam'] ))?></td>
                <td>00-00-0000</td>
                <td class="table-actions">
                  <a  href="" class="table-action table-action-delete tombol-hapus" data-toggle="sweet-alert" data-sweet-alert="confirm" data-id="<?= $pinjam['id_peminjam'] ?>" data-ct="hapus_proses_pinjam" data-href="<?= BASE_URL ?>/proses_pinjam/" data-toggle="tooltip" data-original-title="Hapus Barang">
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="" class="table-action table-action-success edit_pinjam" data-id="<?= $pinjam['id_peminjam'] ?>"  data-toggle="modal" data-target="#detail-modal" data-toggle="tooltip" data-original-title="Detail Barang" >
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
                <td>
                 <a href="<?= BASE_URL ?>/proses/confirm/<?= $id ?>" class="btn btn-sm btn-success btn-round btn-icon">
                  <span class="btn-inner--icon">Confirm <i class="ni ni-check-bold"></i> </span>
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


<!-- detail modal -->
<div class="row">
  <div class="col-md-4">
    <div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
      <div class="modal-dialog modal-dialog-detail modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content ">

          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-default">Detail Barang</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body d-flex">
            <div class="row">
              <div class="col-lg-4">
                <img src="" id="gambar_detail" alt="" width="100%" style="box-shadow: 5px 10px 10px rgba(0,0,0,.3); border-radius: 20px;">
              </div>
              <div class="col-lg-8">
                <table>
                  <tr>
                    <td width="50%"><h4>Nama Peminjam</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="nama_pinjam"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Nis Peminjam</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="nis_pinjam"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Nama Barang</h4></td>
                    <td > &nbsp;&nbsp;:&nbsp;&nbsp;<span id="nama_barang"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Tanggal Pinjam</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="tanggal_pinjam"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Tanggal kembali</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="tanggal_kembali"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Jumlah Pinjam</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="jumlah_pinjam"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Kondisi</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="kondisi_barang"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Keterangan</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="keterangan_barang"></span></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>