<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Review</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <?php $id = Encripsi::encode('encrypt',$data['review']['id']) ?>
            <form action="<?php echo BASE_URL ?>/dashboard/edit_review/<?= $id ?>" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Nama</label>
                                <input type="text" class="form-control" id="nama_logo" name="nama" placeholder="Nama"
                                    required value="<?= $data['review']['nama'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="Deskripsi">Review</label>
                                <textarea name="review" class="form-control" rows="5"
                                    required=""><?= $data['review']['review'] ?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="Deskripsi">Photo</label>
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <img src="<?= BASEURL ?>/upload/<?= $data['review']['photo'] ?>" alt="" width="200"
                                class="rounded-circle">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" id="tambah" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>