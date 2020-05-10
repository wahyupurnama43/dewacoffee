<div class="container-fluid mt-5">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
      <h3 class="m-0 font-weight-bold text-primary"><i class="ni ni-archive-2 "></i> &nbsp;Daftar Barang </h3>
      <div class=""></div>
      <div class="col-6 text-right">
        <button class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="modal" data-target="#barang">
          <span class="btn-inner--icon"><i class="fas fa-plus"></i> Tambah Barang</span>
        </button>
      </div>
    </div>
    <div class="card-body ">
      <div class="table-responsive ">
        <table class="table table-flush" id="datatable-basic">
          <thead class="thead-primary">
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Nama Barang</th>
              <th>Jumlah</th>
              <th>Kondisi</th>
              <th>Tanggal Masuk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php $i=1;  ?>
            <?php foreach ($data['barang'] as $brg):
              $id_barang = Encripsi::encode('encrypt', $brg['id_barang']);
             ?>
              <tr>
                <td><?= $i++ ?></td>
                <td  width="10%"><img src="<?= BASEURL  ?>/img/daftar-barang/<?= $brg['gambar']  ?>" alt="" width="100px"></td>
                <td  width="20%"><?= $brg['nama_brng']; ?></td>
                <td  width="10%"><?= $brg['jumlah']; ?></td>
                <td  ><?= $brg['kondisi'] == '1' ? "<p class='text-success font-weight-bold'>Baik</p>" : "<p class='text-danger font-weight-bold'>Rusak</p>" ?></td>
                <td width="15%"><?= date('d F Y h:i A',strtotime($brg['tanggal_masuk'])) ?></td>
                <td class="table-actions">
                  <a href="" class="table-action table-action-primary editBarang" data-toggle="modal" data-target="#barang"  data-id="<?= $id_barang ?>">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a  href="" class="table-action table-action-delete  tombol-hapus" data-toggle="sweet-alert" data-sweet-alert="confirm" data-id="<?= $id_barang ?>" data-ct="hapus_barang" data-href="<?= BASE_URL ?>/barang/" data-toggle="tooltip" data-original-title="Hapus Barang">
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="" class="table-action table-action-success detail_barang" data-id="<?= $id_barang ?>"  data-toggle="modal" data-target="#detail-modal" data-toggle="tooltip" data-original-title="Detail Barang" >
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

<!-- Modal -->
<div class="modal fade" id="barang" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judul">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL ?>/proses/Tbarang" method="POST" enctype="multipart/form-data">
          <input type="hidden" id="id" name="id">
          <div class="form-group">
            <label for="nama_brng">Nama Barang</label>
            <input type="text" class="form-control Barang-input" id="nama_brng" name="nama">
            <p class="error-message"></p>
          </div>
          <div class="form-group">
           <label for="jumlah">Jumlah Barang</label>
           <input type="number" class="form-control" id="jumlah" name="jumlah_barang">
         </div>
         <div class="form-group">
           <label for="#jenis">Jenis Barang</label>
           <select name="jenis" id="jenis" class="form-control">
            <option value="">Pilih</option>
            <?php foreach ($data['jenis'] as $jenis): ?>
              <option  value="<?= $jenis['id_jenis'] ?>">
                <?= $jenis['nama_jenis'] ?> ==> <?= $jenis['kode_jenis'] ?>
              </option>
            <?php endforeach ?> 
          </select>
        </div>

        <div class="form-group">
         <label for="#ruang">Ruangan Barang</label>
         <select name="ruangan" id="ruang" class="form-control">
          <option value="">Pilih</option>
          <?php foreach ($data['ruangan'] as $ruang): ?>
            <option value="<?= $ruang['id_ruang'] ?>">
              <?= $ruang['nama_ruang'] ?> ==> <?= $ruang['kode_ruang'] ?>
            </option>
          <?php endforeach ?> 
        </select>
      </div>

      <div class="form-group">
       <label for="kondisi">Kondisi Barang</label>
       <select name="kondisi" id="kondisi"  class="form-control">
         <option value="">Pilih Kondisi Ruangan</option>
         <option value="1">Baik</option>
         <option value="2">Rusak</option>
       </select>
     </div>

     <div class="form-group">
       <label for="keterangan">Keterangan</label>
       <textarea class="form-control keterangan" id="keterangan" name="keterangan" cols="30" rows="5"></textarea>
       <p class="error-messageket"></p>
     </div>

    
    <div class="d-flex justify-content-center mb-4">
      <img id="preview" src="" alt="" width="150px" id="img" style="display:flex;margin: 1rem auto" />
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="img" name="gambar">
      <label class="custom-file-label" for="gambar" name="gambar" id="gambar">Pilih</label>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" name="submit" class="btn btn-primary w-100">Tambah Buku &nbsp;<i class="fas fa-plus"></i></button>
  </div>
</form>

</div>
</div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true" >
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
                    <td width="50%"><h4>Nama Barang</h4></td>
                    <td > &nbsp;&nbsp;:&nbsp;&nbsp;<span id="nama_barang"></span></td>
                    
                  </tr>
                  <tr>
                    <td><h4>Jumlah</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="jumlah_barang"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Jenis Barang</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="jenis_barang"></span></td>
                  </tr>
                  <tr>
                    <td><h4>Ruangan & Kode Ruang</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="ruang_barang"></span></td>
                    
                  </tr>
                  <tr>
                    <td><h4>Tanggal Masuk</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="tgl_msk"></span></td>

                  </tr>
                  <tr>
                    <td><h4>Kondisi</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="kondisi_barang"></span></td>

                  </tr>
                  <tr>
                    <td><h4>Petugas</h4></td>
                    <td >&nbsp;&nbsp;:&nbsp;&nbsp;<span id="petugas"></span></td>

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