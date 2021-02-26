<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Product</h3>
                <div class=""></div>
                <div class="">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addProduct">
                        <span class="btn-inner--text ">Tambah Produk</span>
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    </button>

                </div>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush text-center" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>id</th>
                            <th>Produk</th>
                            <th>Tipe Kopi</th>
                            <th>Harga</th>
                            <th>Petugas</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Coffee Arabika </td>
                            <td>Arabika Coffee</td>
                            <td>Rp 5.000</td>
                            <td>Admin</td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>

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
                <h1 class="modal-title" id="exampleModalLabel">Tambah Produk</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo BASE_URL ?>/dashboard/product" id="frmTarget" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="product">Nama Produk</label>
                                <input type="text" class="form-control" id="product" name="judul"
                                    placeholder="Nama Product">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="tipeCoffee">Tipe Kopi</label>
                                <input type="text" class="form-control" id="tipeCoffee" placeholder="Tipe Kopi"
                                    name="tipe_coffee">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="price">Price</label>
                                <input type="number" class="form-control" id="price" placeholder="Price" name="price">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="neto">Neto</label>
                                <input type="number" class="form-control" id="neto" placeholder="Neto" name="neto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="form-control-label">Gambar</label>
                            <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multiple
                                data-dropzone-url="<?=base_url('dashboard/product')?>" data-form-submit="#frmTarget" data-redirect-when-success="false">
                                <div class="fallback">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input"
                                            id="customFileUploadMultiple" multiple>
                                        <label class="custom-file-label" for="customFileUploadMultiple">Choose
                                            file</label>
                                    </div>
                                </div>
                                <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <img class="avatar-img rounded" src="" alt="..."
                                                        data-dz-thumbnail>
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
                    <button type="submit" name="tambah" id="tambah" class="btn btn-primary" >Simpan Data </button>
                </div>
            </form>
        </div>
    </div>
</div>

