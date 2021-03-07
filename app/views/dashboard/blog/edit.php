<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Edit Blog</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <?php $id = Encripsi::encode('encrypt',$data['blog']['id']);?>
            <form action="<?php echo BASE_URL ?>/dashboard/edit_blog/<?= $id ?>" method="POST"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="judul">Judul Blog</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Blog"
                                    value="<?= $data['blog']['judul'] ?> ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="des"><?= $data['blog']['deskripsi'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Pilih Banner</label>
                                <input type="file" class="form-control" name="gambar">
                                <img src="<?= BASEURL ?>/upload/<?= $data['blog']['banner'] ?>" alt="" class="mt-3"
                                    width="100px">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="tags_blog">Tags</label>
                                <br>
                                <input type="text" class="form-control" id="tags_blog" data-toggle="tags"
                                    name="tags[]" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php foreach ($data['tags'] as $tag): ?>
                            <a id="<?= $tag['id'] ?>" class="btn btn-default btn-sm text-white hps-data"
                                data-url-page="http://localhost/dewacoffee/dashboard/delete_tags"
                                data-page-return="http://localhost/dewacoffee/dashboard/edit_blog/<?= $id  ?>">
                                <div class="d-flex" style="margin-top: 2px">
                                    <div class="text"><?= $tag['tag'] ?></div>
                                    <div class="ic">
                                        <i class="ni ni-fat-remove" style="font-size: 1.5em"></i>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan Data </button>
                </div>
            </form>

        </div>


    </div>
</div>