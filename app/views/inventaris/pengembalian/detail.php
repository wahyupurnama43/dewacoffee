<div class="container-fluid mt-5">
	<div class="card card-detail">
		<!-- Card image -->
			<img class="card-img-top" src="<?= BASEURL ?>/img/daftar-barang/<?= $data['pinjam']['gambar'] ?>" alt="Image placeholder">
			<!-- List group -->
			<ul class="list-group list-group-flush">
				<li class="list-group-item"><h1><?= $data['pinjam']['nama_brng'] ?></h1></li>
				<li class="list-group-item"><h4>Jumlah Pinjam : <?= $data['pinjam']['jumlah_pinjam'] ?></h4></li>
				<li class="list-group-item"><h4>Nama Peminjam : <?= $data['pinjam']['nama'] ?></h4></li>
				<li class="list-group-item"><h4>Tanggal Peminjam : <?= date('d F Y', strtotime($data['pinjam']['tanggal_pinjam']))?></h4></li>
				<li class="list-group-item"><h4>Jenis Alat : <?= $data['pinjam']['nama_jenis']?> ==> <?= $data['pinjam']['kode_jenis']?></h4></li>
				<li class="list-group-item"><h4>Nama Ruang : <?= $data['pinjam']['nama_ruang']?> ==> <?= $data['pinjam']['kode_ruang']?></h4></li>
				<li class="list-group-item d-flex"><h4>Kondisi : </h4> &nbsp;<?= $data['pinjam']['kondisi'] == '1' ? "<div class='text-success font-weight-bold'>Baik</div>" : "<div class='text-danger font-weight-bold'>Rusak</div>"?></li>
			</ul>
			<!-- Card body -->
			<div class="card-body">
				<h3 class="card-title mb-3">Deskripsi</h3>
				<p class="card-text mb-4"><?= $data['pinjam']['deskripsi'] ?></p>
				<a href="<?= BASEURL ?>/pengembalian/" class="btn btn-primary">Kembali</a>
			</div>

	</div>
</div>