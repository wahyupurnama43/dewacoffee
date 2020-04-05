<div class="container-fluid mt-5">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between Tpinjam">
      <h3 class="m-0 font-weight-bold text-primary "><i class="ni ni-delivery-fast "></i> &nbsp;Peminjaman Barang </h3>
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
                  <a  href="" class="table-action table-action-delete hapus tombol-hapus" data-toggle="tooltip" data-original-title="Hapus Barang" data-toggle="sweet-alert" data-sweet-alert="confirm" data-id="<?= $kembali['id_kembali'] ?>" data-ct="hapus_kembali" data-href="<?= BASEURL ?>/pengembalian/" >
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="<?= BASEURL ?>/pengembalian/detail/<?= $kembali['id_kembali'] ?>" class="table-action table-action-success" data-toggle="tooltip" data-original-title="Detail Barang" >
                    <i class="fas fa-list"></i>
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
