<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Edit Banner Blog</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <?php  $ID = Encripsi::encode('encrypt',$data['blog']['id']);?>

            <form action="<?php echo BASE_URL ?>/dashboard/edit_banner_blog/<?= $ID ?>" id="frmTarget" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Nama Banner Blog</label>
                                <input type="text" class="form-control" name="judul" placeholder="Nama Banner Blog"
                                    value="<?= $data['blog']['judul'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control"
                                    placeholder="Deskripsi"><?= $data['blog']['deskripsi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-control-label">Gambar Slider </label>
                            <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple
                                data-dropzone-url="<?=base_url('dashboard/edit_banner_blog/'.$ID)?>"
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
                    <button type="submit" name="tambah" id="tambah" class="btn btn-primary">Simpan Data </button>
                </div>
            </form>
            <?php foreach ($data['gambar'] as $g): ?>
            <?php  $id = Encripsi::encode('encrypt',$g['id']);?>
            <div class="d-flex justify-content-between px-5 py-2">
                <div class="d-flex">
                    <?php if ($g['id_page_blog'] == $data['blog']['id']): ?>
                    <img src="<?= BASEURL ?>/upload/<?= $g['slider'] ?>" alt="" width="100px" class="">
                    <?php endif ?>
                </div>
                <div class=""></div>
                <div class="">
                    <a id="<?= $id ?>" data-url-page="<?= BASE_URL?>/dashboard/delete_img_blog/"
                        data-page-return="<?= BASE_URL?>/dashboard/edit_banner_blog/<?= $ID ?>"
                        class="btn btn-danger hps-data text-white" style="margin-top: 30px;">Delete</a>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</div>