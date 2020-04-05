<div class="container-fluid mt-5">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex justify-content-between">
			<h3 class="m-0 font-weight-bold text-primary "><i class="ni ni-app "></i> &nbsp;Ruangan Barang </h3>
			<div class=""></div>
			<div class="col-6 text-right">
				<button class="btn btn-sm btn-primary btn-round btn-icon Truang" data-toggle="modal" data-target="#ruang">
					<span class="btn-inner--icon"><i class="fas fa-plus"></i> Tambah Ruang</span>
				</button>
			</div>
		</div>
		<div class="card-body ">
			<div class="table-responsive">
				<table class="table table-flush" id="datatable-basic">
					<thead class="thead-primary">
						<tr>
							<th>No</th>
							<th>Nama Ruang</th>
							<th>Kode Ruang</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $i=1; ?>
						<?php foreach ($data['ruang'] as $ruang): ?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $ruang['nama_ruang'] ?></td>
								<td><?= $ruang['kode_ruang'] ?></td>
								<td><?= $ruang['keterangan'] ?></td>
								<td class="table-actions">
									<a href="" class="table-action table-action-primary edit_ruang" data-toggle="modal" data-target="#ruang" data-id="<?= $ruang['id_ruang'] ?>" data-toggle="tooltip" data-original-title="Edit Barang">
										<i class="fas fa-user-edit"></i>
									</a>
									<a  href="" class="table-action table-action-delete hapus  tombol-hapus" data-toggle="sweet-alert" data-sweet-alert="confirm" data-id="<?= $ruang['id_ruang'] ?>" data-ct="hapus_ruang" data-href="<?= BASEURL ?>/ruang/" data-toggle="tooltip" data-original-title="Hapus Barang">
										<i class="fas fa-trash"></i>
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

<!-- Modal -->
<div class="modal fade" id="ruang" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judul">Tambah Ruang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST">
					<input type="hidden" id="id" name="id">
					<div class="form-group">
						<label for="nama_brng">Nama Ruang</label>
						<input type="text" class="form-control" id="nama_brng" name="nama">
					</div>
					<div class="form-group">
						<label for="kode">Kode Ruang</label>
						<input type="number" class="form-control" id="kode" name="kode_ruang">
					</div>
					<div class="form-group">
						<label for="keterangan">Keterangan</label>
						<textarea class="form-control" id="keterangan" name="keterangan" cols="30" rows="5"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-primary w-100">Tambah Jenis &nbsp;<i class="fas fa-plus"></i></button>
				</div>
			</form>

		</div>
	</div>
</div>


