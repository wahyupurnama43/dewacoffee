<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Message</h3>
                <div class=""></div>
                <div class="">
                    <!-- Button trigger modal -->

                </div>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush text-center" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=1 ?>
                        <?php foreach ($data['contact'] as $contact): ?>
                        <tr>
                            <td><?= $i++  ?></td>
                            <td><?= $contact['nama'] ?> </td>
                            <td><?= $contact['email'] ?></td>
                            <td><?= $contact['message'] ?></td>
                            <td><?= $contact['created_at'] ?></td>
                            <?php $id = Encripsi::encode('encrypt',$contact['id']); ?>
                            <td>
                                <a href="<?= BASE_URL?>/dashboard/delete_message/<?= $id ?>"
                                    class="btn btn-danger btn-sm ">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>