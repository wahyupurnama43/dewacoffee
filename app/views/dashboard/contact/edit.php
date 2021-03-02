<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Contact Us</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <?php $id = Encripsi::encode('encrypt',$data['contact']['id']) ?>
            <form action="<?php echo BASE_URL ?>/dashboard/edit_contact/<?= $id ?>" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Address" value="<?= $data['contact']['address'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $data['contact']['email'] ?> ">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                value="<?= $data['contact']['phone'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="maps">Maps</label>
                                <textarea name="maps" class="form-control" rows="5"><?= $data['contact']['maps'] ?></textarea>
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