<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Setting</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <?php $id = Encripsi::encode('encrypt',$data['auth']['id']) ?>
            <form action="<?php echo BASE_URL ?>/dashboard/setting/<?= $id ?>" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required
                                    value="<?= $data['auth']['username'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nama Usaha" required
                                    value="<?= $data['auth']['email'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Password Lama</label>
                                <input type="password" class="form-control" name="password_lama"
                                    placeholder="Password Lama">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Password Baru</label>
                                <input type="password" class="form-control" id="password_baru" name="password_baru"
                                    placeholder="Password Baru">
                            </div>
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