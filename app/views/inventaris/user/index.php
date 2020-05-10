<div class="container-fluid mt-5">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex justify-content-between">
			<h3 class="m-0 font-weight-bold text-primary "><i class="fas fa-users "></i> &nbsp;Daftar User </h3>
			<div class=""></div>
			<div class="col-6 text-right">
				<button class="btn btn-sm btn-primary btn-round btn-icon" data-toggle="modal" data-target="#ruang">
					<span class="btn-inner--icon"><i class="fas fa-plus"></i> Tambah User</span>
				</button>
			</div>
		</div>
		<div class="card-body ">
			<div class="table-responsive">
				<table class="table table-flush" id="datatable-basic">
					<thead class="thead-primary">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>NIP / NIS</th>
							<th>level</th>
							<th>Tanggal Daftar</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<?php $i=1; ?>
						<?php foreach ($data['user'] as $user):
							$id_auth = Encripsi::encode('encrypt', $user['id_auth']);
						?>
							<tr>
								<td><?= $i++ ?></td>
								<td><?= $user['nama'] ?></td>
								<td><?= $user['no_induk'] ?></td>
								<td><?= $user['nama_level'] ?></td>
								<td><?= $user['tgl_daftar'] ?></td>
								<td class="table-actions">
									<a href="" class="table-action table-action-primary edit_user" data-toggle="modal" data-target="#ruang" data-id="<?= $id_auth ?>" data-toggle="tooltip" data-original-title="Edit Barang">
										<i class="fas fa-user-edit"></i>
									</a>
									<a  href="" class="table-action table-action-delete tombol-hapus" data-toggle="sweet-alert" data-sweet-alert="confirm" data-id="<?= $id_auth ?>" data-ct="hapus_user" data-href="<?= BASE_URL ?>/user/" data-toggle="tooltip" data-original-title="Hapus Barang">
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
				<h5 class="modal-title" id="judul">Tambah User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= BASE_URL ?>/proses/Tuser" method="POST" >
					<input type="hidden" id="id" name="id">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label for="no_induk">NIP / NIS</label>
						<input type="number" class="form-control" id="no_induk" name="no_induk">
					</div>
					<div class="form-group username">
							<label for="username">Username</label>
							<input type="text" id="username" name="username" class="form-control"/>
					</div>
					<div class="form-group">
							<label for="password" class="password">Password</label>
							<input type="password" id="password" name="password" class="form-control"/>
					</div>
					<div class="form-group">
							<label for="con_pass" class="password_baru">Confirm Password</label>
							<input type="password" id="con_pass" name="con_pass" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<select name="level" id="level" class="form-control">
							<option value="" selected="" disabled="">Pilih</option>
							<?php foreach ($data['level'] as $level): ?>
								<option value="<?= $level['id_level'] ?>">
									<?= $level['nama_level'] ?>
								</option>
							<?php endforeach ?>	
						</select>
				</div>
				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-primary w-100">Tambah Jenis &nbsp;<i class="fas fa-plus"></i></button>
				</div>
			</form>

		</div>
	</div>
</div>


