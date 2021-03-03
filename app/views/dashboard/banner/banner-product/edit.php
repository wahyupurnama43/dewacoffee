<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Banner Product</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <?php $id = Encripsi::encode('encrypt',$data['banner']['id']) ?>
            <form action="<?php echo BASE_URL ?>/dashboard/edit_banner_product/<?= $id ?>" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="Deskripsi">Banner</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gambar">
                                    <label class="custom-file-label">Select file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <img src="<?= BASEURL ?>/upload/<?= $data['banner']['banner'] ?>  " width="300px" alt="">
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