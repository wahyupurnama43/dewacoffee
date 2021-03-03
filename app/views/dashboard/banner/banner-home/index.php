<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">About Us</h3>
                <div class=""></div>
                <div class="">
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addProduct">
                        <span class="btn-inner--text ">Tambah Banner Home </span>
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    </button> -->

                </div>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush text-center" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>id</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Banner</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($data['home'] as $h): ?>
                        <?php $id = Encripsi::encode('encrypt',$h['id']) ?>
                        <tr>
                            <td> <?= $i++ ?> </td>
                            <td> <?= $h['judul'] ?> </td>
                            <td> <?= substr($h['deskripsi'],0,90) ?> </td>
                            <td> <img src=" <?= BASEURL ?>/upload/<?= $h['banner'] ?>  " width="50px" alt=""></td>
                            <td>
                                <a href="<?= BASE_URL?>/dashboard/edit_home/<?= $id?>" class="btn btn-success btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <!-- <a href="<?= BASE_URL?>/dashboard/delete_home/<?= $id ?>" class="btn btn-danger btn-sm "
                                    data-url-page="">
                                    <i class="far fa-trash-alt"></i>
                                </a> -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog m-w-d modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Tambah Banner Home</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?php echo BASE_URL ?>/dashboard/banner_home" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Judul Home</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Home"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="Deskripsi">Deskripsi </label>
                                <textarea name="deskripsi" class="form-control" rows="5" required=""></textarea>
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>

        </div>
    </div>
</div>