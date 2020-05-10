<div class="container-fluid mt-5">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex justify-content-between">
			<h3 class="m-0 font-weight-bold text-primary "><i class="ni ni-books"></i> &nbsp;Jenis Barang</h3>
			<div class=""></div>
			<div class="col-6 text-right">
				<button class="btn btn-sm btn-primary btn-round btn-icon jenisBarang" data-toggle="modal" data-target="#jenis">
					<span class="btn-inner--icon"><i class="fas fa-plus"></i> Tambah Jenis</span>
				</button>
			</div>
		</div>
		<div class="card-body ">
			<div class="table-responsive">
				<table class="table table-flush" id="datatable-basic">
					<thead class="thead-primary">
						<tr>
							<th>No</th>
							<th>Nama Jenis</th>
							<th>Kode Jenis</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $i=1;  ?>
						<?php foreach ($data['jenis'] as $jenis):
						 	$id_jenis = Encripsi::encode('encrypt', $jenis['id_jenis']);
						?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $jenis['nama_jenis'] ?></td>
								<td><?= $jenis['kode_jenis'] ?></td>
								<td><?= $jenis['keterangan'] ?></td>
								<td class="table-actions">
									<a href="" class="table-action table-action-primary edit_jenis" data-toggle="modal" data-target="#jenis" data-id="<?= $id_jenis ?>" data-toggle="tooltip" data-original-title="Edit Barang">
										<i class="fas fa-user-edit"></i>
									</a>
									<a  href="" class="table-action table-action-delete tombol-hapus" data-toggle="sweet-alert" data-sweet-alert="confirm" data-id="<?= $id_jenis ?>" data-ct="hapus_jenis" data-href="<?= BASE_URL ?>/jenis/" data-toggle="tooltip" data-original-title="Hapus Barang">
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
<div class="modal fade" id="jenis" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="judul">Tambah Barang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="">
					<input type="hidden" id="id" name="id">
					<div class="form-group">
						<label for="nama_brng">Nama Jenis Barang</label>
						<input type="text" class="form-control" id="nama_brng" name="nama">
					</div>
					<div class="form-group">
						<label for="kode">Kode Jenis</label>
						<input type="number" class="form-control" id="kode" name="kode_jenis">
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


