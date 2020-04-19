<div class="container-fluid mt-5">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between Tpinjam">
      <h3 class="m-0 font-weight-bold text-primary "><i class="ni ni-delivery-fast "></i> &nbsp;Pengembalian Barang </h3>
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
              <th>Jatuh Tempo</th>
              <th>Denda</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php $i=1; ?>
            <?php foreach ($data['kembali'] as $kembali): ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $kembali['nama'] ?></td>
                <td><?= date('d F Y', strtotime($kembali['tanggal_pinjam'] ))?></td>
                <td><?= date('d F Y', strtotime($kembali['jatuh_tempo'] )) ?></td>
                <td>Rp. <?= number_format($kembali['denda'],2)?></td>
                <td class="table-actions">
                  <a  href="" class="table-action table-action-delete hapus tombol-hapus" data-toggle="tooltip" data-original-title="Hapus Barang" data-toggle="sweet-alert" data-sweet-alert="confirm" data-id="<?= $kembali['id_kembali'] ?>" data-ct="hapus_kembali" data-href="<?= BASE_URL ?>/pengembalian/" >
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="Inventaris_skensa" class="table-action table-action-success detail_kembali" data-id="<?= $kembali['id_peminjam'] ?>"  data-toggle="modal" data-target="#detail-modal" data-toggle="tooltip" data-original-title="Detail Barang">
                    <i class="fas fa-eye"></i>
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
                    <td><h4>Denda</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="denda"></span></td>
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