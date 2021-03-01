<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Product</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <?php $id = Encripsi::encode('encrypt',$data['product']['id']);?>
            <form action="<?php echo BASE_URL ?>/dashboard/edit_product/<?= $id?>" id="frmTarget" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="product">Nama Produk</label>
                                <input type="text" class="form-control" id="product" name="judul"
                                    placeholder="Nama Product" value="<?= $data['product']['judul']?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="tipeCoffee">Tipe Kopi</label>
                                <input type="text" class="form-control" id="tipeCoffee" placeholder="Tipe Kopi"
                                    name="tipe_coffee" value="<?= $data['product']['tipe_coffee']?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="price">Price</label>
                                <input type="number" class="form-control" id="price" placeholder="Price" name="price"
                                    value="<?= $data['product']['price']?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="neto">Neto</label>
                                <input type="number" class="form-control" id="neto" placeholder="Neto" name="neto"
                                    value="<?= $data['product']['neto']?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" rows="3"
                                    name="deskripsi"><?= $data['product']['deskripsi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-control-label">Gambar</label>
                            <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple
                                data-dropzone-url="<?=base_url('dashboard/edit_product/'.$id)?>"
                                data-form-submit="#frmTarget" data-redirect-when-success="true">
                                <!-- ubah data-redirect-when-succes menjadi true jika ingin me-reload halaman jika data berhasil disimpan -->
                                <div class="fallback">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input"
                                            id="customFileUploadMultiple" multiple required="">
                                        <label class="custom-file-label" for="customFileUploadMultiple">Choose
                                            file</label>
                                    </div>
                                </div>

                                <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <img class="avatar-img rounded" src="" alt="..." data-dz-thumbnail>
                                                </div>
                                            </div>
                                            <div class="col ml--3">
                                                <h4 class="mb-1" data-dz-name>...</h4>
                                                <p class="small text-muted mb-0" data-dz-size>...</p>
                                            </div>
                                            <div class="col-auto">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-ellipses dropdown-toggle" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item" data-dz-remove>
                                                            Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="tambah" id="tambah" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>

            <?php foreach ($data['gallery'] as $gambar): ?>
            <?php  $id_img = Encripsi::encode('encrypt',$gambar['id']);?>
            <div class="d-flex justify-content-between px-5 ">
                <div class="d-flex">
                    <img src="<?= BASEURL ?>/upload/<?= $gambar['gambar']?>" alt="" width="100px" class="py-1">
                    <div class="text ml-4">

                        <h4 class="mb-1 " data-dz-name><?= $gambar['judul']?></h4>
                        <p class="small text-muted" data-dz-size><?= $gambar['gambar']?></p>
                    </div>
                </div>
                <div class=""></div>
                <div class="">
                    <?php if ($gambar['status'] !== 'active'): ?>
                        <a id="<?php echo $id_img; ?>" data-id-product="<?= $id?>" class="btn btn-success active-btn text-white" style="margin-top: 30px;"> Active </a>
                        <a id="<?php echo $id_img; ?>" data-id-product="<?= $id?>" class="btn btn-danger hps-btn text-white"
                            style="margin-top: 30px;">Delete</a>
                    <?php endif ?>
                </div>
            </div>
            <?php endforeach;?>
            <br><br>
        </div>


    </div>
</div>