<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Contact Us</h3>
                <div class=""></div>
                <div class="">
                    <!-- Button trigger modal -->
                   <!--  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addProduct">
                        <span class="btn-inner--text ">Tambah Contact us </span>
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    </button> -->

                </div>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush text-center" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>id</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($data['contact'] as $contact): ?>
                        <tr>
                            <td><?= $i++  ?></td>
                            <td><?= $contact['address'] ?> </td>
                            <td><?= $contact['email'] ?></td>
                            <td><?= $contact['phone'] ?></td>
                            <?php $id = Encripsi::encode('encrypt',$contact['id']); ?>
                            <td>

                                <a href="<?= BASE_URL?>/dashboard/edit_contact/<?= $id?>"
                                    class="btn btn-success btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                             <!--    <a href="http://localhost/dewacoffee/dashboard/delete_contact/<?= $id ?>"
                                    class="btn btn-danger btn-sm ">
                                    <i class="far fa-trash-alt"></i>
                                </a> -->
                            </td>
                        </tr>
                        <?php endforeach ?>

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
                <h1 class="modal-title" id="exampleModalLabel">Tambah Contact Us</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?php echo BASE_URL ?>/dashboard/contact" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="address">Address</label>
                                <input required type="text" class="form-control" id="address" name="address"
                                    placeholder="Address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input required type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="phone">Phone</label>
                                <input required type="number" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                         <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="maps">Maps</label>
                                <input required type="text" class="form-control" id="maps" name="maps" placeholder="Maps">
                            </div>
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