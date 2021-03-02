<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">About Us</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <?php $id = Encripsi::encode('encrypt',$data['about']['id']) ?>
            <form action="<?php echo BASE_URL ?>/dashboard/edit_about/<?= $id ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Nama Usaha</label>
                                <input type="text" class="form-control" id="nama_logo" name="nama_logo"
                                    placeholder="Nama Usaha" value="<?= $data['about']['company'] ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="Deskripsi">Deskripsi Usaha</label>
                                <textarea name="Deskripsi" class="form-control" rows="5" required=""><?= $data['about']['deskripsi'] ?></textarea>
                            </div>
                        </div>
                       
                    </div>

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
                            <img src=" <?= BASEURL ?>/upload/<?= $data['about']['banner'] ?>  " width="100px"alt="">
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