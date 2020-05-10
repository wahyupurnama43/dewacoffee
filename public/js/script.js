$(function(){
	$('.mydatatable').DataTable({
		order: [
		[0, 'asc']
		],
		pagingType: 'full_numbers'
	});

	const  flashData = $('.flash-data').data('flashdata');
	if (flashData) {
		Swal.fire({
			title: 'Inventaris Skensa',
			text: flashData.pesan + flashData.aksi,
			icon: flashData.tipe,
			type: flashData.tipe
		})
	} 

	$('.tombol-hapus').on('click', function(e){

		e.preventDefault();
		const href = $(this).data('href');
		const id = $(this).data('id');
		const ct = $(this).data('ct');
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
		})

		swalWithBootstrapButtons.fire({
			title: 'Yakin di Hapus?',
			text: "Data Akan Hilang Permanen",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Hapus',
			cancelButtonText: 'Batal',
			reverseButtons: true
		}).then((result) => {
			if (result.value) {
				
				$.ajax({
					url: 'http://localhost/Inventaris_skensa/proses/'+ ct,
					data: {id : id},
					method:'post',
					dataType: 'json',
					success: function(data){
					}
				})
				document.location.href = href;
			} else if (
				result.dismiss === Swal.DismissReason.cancel
				) {
				swalWithBootstrapButtons.fire(
					'BATAL',
					'Data Anda Aman ',
					'error'
					)
			}
		})


	});

	$('.tambahBarang').on('click', function(){
		$('#judul').html('Tambah Data Barang');
		$('.modal-footer button[type=submit').html('Tambah Barang');
		$('#id').val();
		$('#nama_brng').val();
		$('#jumlah').val();
		$('#jenis').val();
		$('#ruang').val();
		$('#kondisi').val();
		$('#keterangan').val();
		$('#img').attr();
	})

	$('.editBarang').on('click', function(){
		$('#judul').html('Ubah Data Barang');
		$('.modal-footer button[type=submit').html('Ubah Barang');
		$('.modal-body form').attr('action','http://localhost/Inventaris_skensa/proses/Ubarang');
		const id = $(this).data('id');

		$.ajax({
			url : 'http://localhost/Inventaris_skensa/proses/getubah',
			data: {id : id},
			method:'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id_barang);
				$('#nama_brng').val(data.nama_brng);
				$('#jumlah').val(data.jumlah);
				$('#jenis').val(data.id_jenis);
				$('#ruang').val(data.id_ruang);
				$('#kondisi').val(data.kondisi);
				$('#keterangan').val(data.deskripsi);
				$('#img').attr('src','http://localhost/Inventaris_skensa/public/img/daftar-barang/'+data.gambar);
			}
		}).done(function(sd) {
			
		});
	})

	// $('.hapus').on('click', function(){
	// 	const id = $(this).data('id');
	// 	const ct = $(this).data('ct')
		
	// 	$.ajax({
	// 		url: 'http://localhost/Inventaris_skensa/proses/'+ ct,
	// 		data: {id : id},
	// 		method:'post',
	// 		dataType: 'json',
	// 		success: function(data){
	// 		}
	// 	})
	// })

	$('.likes').on('click', function(){
		const id = $(this).data('id');
		
		$.ajax({
			url: 'http://localhost/Inventaris_skensa/proses/Ulike',
			data: {id : id},
			method:'post',
			dataType: 'json',
			success: function(data){
				
			}
		})
	})


	$('.detail_barang').on('click', function(){
		const id = $(this).data('id');

		$.ajax({
			url : 'http://localhost/Inventaris_skensa/proses/getdetail',
			data: {id : id},
			method:'post',
			dataType: 'json',
			success: function(data){
				$('#nama_barang').html(data.nama_brng);
				$('#pinjam_barang').val(data.nama_brng);
				$('#id_barang').val(data.id_barang);
				$('#jumlah_barang').html(data.jumlah);
				$('#jenis_barang').html(data.nama_jenis);
				$('#ruang_barang').html(data.nama_ruang);
				$('#tgl_msk').html(data.tanggal_masuk);
				if (data.kondisi >= '2'){
					$('#kondisi_barang').html("<span class='text-danger font-weight-bold'>Rusak</span>");
				}else{
					$('#kondisi_barang').html("<span class='text-success font-weight-bold'>Baik</span>");
				}
				$('#petugas').html(data.nama);
				$('#keterangan_barang').html(data.deskripsi);
				$('#gambar_detail').attr('src','http://localhost/Inventaris_skensa/public/img/daftar-barang/' + data.gambar);
				
			}
		}).done(function(sd) {
			
		});
	})

	$('.jenisBarang').on('click', function(){
		$('#judul').html('Tambah Jenis Barang');
		$('.modal-footer button[type=submit').html('Tambah Jenis Barang <i class="fas fa-plus"></i>');
		$('.modal-body form').attr('action','http://localhost/Inventaris_skensa/proses/Tjenis');
		$('#id').val();
		$('#nama_brng').val();
		$('#kode').val();
		$('#keterangan').val();
	});

	$('.edit_jenis').on('click', function(){
		$('#judul').html('Ubah Jenis Barang');
		$('.modal-footer button[type=submit').html('Ubah Jenis Barang <i class="fas fa-edit"></i>');
		$('.modal-body form').attr('action','http://localhost/Inventaris_skensa/proses/Ujenis');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/Inventaris_skensa/proses/getubahjenis',
			type: 'POST',
			dataType: 'json',
			data: {id : id},
			success:function(data){
				$('#id').val(data.id_jenis);
				$('#nama_brng').val(data.nama_jenis);
				$('#kode').val(data.kode_jenis);
				$('#keterangan').val(data.keterangan);
			}
		})
		
	});

	$('.Truang').on('click', function(){
		$('#judul').html('Tambah Ruang');
		$('.modal-footer button[type=submit').html('Tambah Ruang <i class="fas fa-plus"></i>');
		$('.modal-body form').attr('action','http://localhost/Inventaris_skensa/proses/Truang');
		$('#id').val();
		$('#nama_brng').val();
		$('#kode_ruang').val();
		$('#keterangan').val();
	});


	$('.edit_ruang').on('click', function(){
		$('#judul').html('Ubah Ruang');
		$('.modal-footer button[type=submit').html('Ubah Ruang <i class="fas fa-edit"></i>');
		$('.modal-body form').attr('action','http://localhost/Inventaris_skensa/proses/Uruang');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/Inventaris_skensa/proses/getubahruang',
			type: 'POST',
			dataType: 'json',
			data: {id : id},
			success:function(data){
				$('#id').val(data.id_ruang);
				$('#nama_brng').val(data.nama_ruang);
				$('#kode').val(data.kode_ruang);
				$('#keterangan').val(data.keterangan);
			}
		})
		
	});

	$('.edit_user').on('click', function(){
		$('#judul').html('Ubah User');
		$('.modal-footer button[type=submit').html('Ubah User <i class="fas fa-edit"></i>');
		$('.form-group .password').html('Password Lama');
		$('.form-group .password_baru').html('Password Baru');
		$('.modal-body form').attr('action','http://localhost/Inventaris_skensa/proses/Uuser');

		const id = $(this).data('id');

		$.ajax({
			url: 'http://localhost/Inventaris_skensa/proses/getubahuser',
			type: 'POST',
			dataType: 'json',
			data: {id : id},
			success:function(data){
				$('#id').val(data.id_auth);
				$('#nama').val(data.nama);
				$('#no_induk').val(data.no_induk);
				$('#username').val(data.username);
				$('#level').val(data.id_level);
			}
		})
		
	});
	$('.Tpinjam').on('click', function(){
		$('#judul').html('Tambah Pinjam');
		$('.modal-footer button[type=submit').html('Tambah Pinjam <i class="fas fa-plus"></i>');
		$('.modal-body form').attr('action','http://localhost/Inventaris_skensa/proses/Tpinjam');
		$('#id').val();
		$('#nama_brng').val();
		$('#kode_ruang').val();
		$('#keterangan').val();
	});

	$('.edit_pinjam').on('click', function(){
		$('#judul').html('Ubah Data Pinjam');
		$('.modal-footer button[type=submit').html('Ubah Pinjam');
		$('.modal-body form').attr('action','http://localhost/Inventaris_skensa/proses/Upinjam');
		const id = $(this).data('id');	
		console.log(id);

		$.ajax({
			url : 'http://localhost/Inventaris_skensa/proses/getpinjam',
			data: {id : id},
			method:'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id_peminjam);
				$('#peminjam').val(data.id_auth);
				$('#barang').val(data.id_barang);
				$('#jumlah').val(data.jumlah_pinjam);
				$('#nama_pinjam').html(data.nama);
				$('#nis_pinjam').html(data.no_induk);
				$('#nama_barang').html(data.nama_brng);
				$('#tanggal_pinjam').html(data.tanggal_pinjam);
				$('#tanggal_kembali').html(data.tanggal_kembali);
				$('#jumlah_pinjam').html(data.jumlah_pinjam);
				$('#keterangan_barang').html(data.deskripsi);
				if (data.kondisi >= '2'){
					$('#kondisi_barang').html("<span class='text-danger font-weight-bold'>Rusak</span>");
				}else{
					$('#kondisi_barang').html("<span class='text-success font-weight-bold'>Baik</span>");
				}

				$('#gambar_detail').attr('src','http://localhost/Inventaris_skensa/public/img/daftar-barang/' + data.gambar);
			}
		}).done(function(sd) {
			
		});
	})

	$('.detail_kembali').on('click', function(){
		const id = $(this).data('id');
		$.ajax({
			url : 'http://localhost/Inventaris_skensa/proses/getkembali',
			data: {id : id},
			method:'post',
			dataType: 'json',
			success: function(data){
				$('#nama_pinjam').html(data.nama);
				$('#nis_pinjam').html(data.no_induk);
				$('#nama_barang').html(data.nama_brng);
				$('#tanggal_pinjam').html(data.tanggal_pinjam);
				$('#tanggal_kembali').html(data.jatuh_tempo);
				$('#denda').html(data.denda);
				$('#jumlah_pinjam').html(data.jumlah_pinjam);
				$('#keterangan_barang').html(data.deskripsi);
				if (data.kondisi >= '2'){
					$('#kondisi_barang').html("<span class='text-danger font-weight-bold'>Rusak</span>");
				}else{
					$('#kondisi_barang').html("<span class='text-success font-weight-bold'>Baik</span>");
				}

				$('#gambar_detail').attr('src','http://localhost/Inventaris_skensa/public/img/daftar-barang/' + data.gambar);
			}
		}).done(function(sd) {
			
		});
	})

	const input = document.querySelector('.Barang-input');
	const keterangan = document.querySelector('.keterangan');
	const error = document.querySelector('.error-message');
	const errorket = document.querySelector('.error-messageket');

	const timeout = null;

	const showError = message => {
		error.style.color = '#C91E1E';
		error.style.display = 'block';
		error.innerHTML = message;
	};

	const showErrorket = message => {
		errorket.style.color = '#C91E1E';
		errorket.style.display = 'block';
		errorket.innerHTML = message;
	};

	const showInput = message => {
		error.style.color = '#119822';
		error.innerHTML = message;
	};

	const validasiBarang = barang => {
		const upperCaseRegex = new RegExp('^(?=.*[A-Z])');

		if (barang.length > 50 ) {
			showError('Nama Barang Terlalu Panjang max 50 kata');
		}else if (!upperCaseRegex.test(barang)) {
			showError('Nama Barang Harus Memiliki huruf kapital di awal');
		}else{
			showInput('');
		}
	};

	const validasiketerangan = keterangan => {

		if (keterangan.length > 65 ) {
			showErrorket('Keterangan max 10 kata');
		}else if(keterangan.length <= 65){
			showErrorket('');
		}
	};

	input.addEventListener('keyup', e => {
		const barang3 = e.target.value;

		clearTimeout(timeout);
		timeout = setTimeout(() => validasiBarang(barang3), 10);
	});

	keterangan.addEventListener('keyup', e => {
		const keterangan3 = e.target.value;

		clearTimeout(timeout);
		timeout = setTimeout(() => validasiketerangan(keterangan3), 10);
	});





})