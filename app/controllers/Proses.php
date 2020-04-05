<?php 




class Proses extends Controller
{
	
	
    
	/*------------------------------------------Tambah Barang-------------------------------------------*/
	public function Tbarang()
	{
		$add = $this->model('Proses_models')->Tbarang($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Tambahkan","success");
			header('Location: '.BASEURL.'/barang');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Tambahkan","error");
			header('Location: '.BASEURL.'/barang');
			exit();
		}
	}

	public function Tjenis()
	{
		$add = $this->model('Proses_models')->Tjenis($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Tambahkan","success");
			header('Location: '.BASEURL.'/jenis');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Tambahkan","error");
			header('Location: '.BASEURL.'/jenis');
			exit();
		}
	}

	public function Truang()
	{
		$add = $this->model('Proses_models')->Truang($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Tambahkan","success");
			header('Location: '.BASEURL.'/ruang');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Tambahkan","error");
			header('Location: '.BASEURL.'/ruang');
			exit();
		}
	}

	public function Tuser()
	{
		$add = $this->model('Proses_models')->Tuser($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Tambahkan","success");
			header('Location: '.BASEURL.'/user');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Tambahkan","error");
			header('Location: '.BASEURL.'/user');
			exit();
		}
	}

	public function Tpinjam()
	{
		$add = $this->model('Proses_models')->Tpinjam($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Pinjam","success");
			header('Location: '.BASEURL.'/peminjaman');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Pinjam","error");
			header('Location: '.BASEURL.'/peminjaman');
			exit();
		}
	}



	/*------------------------------------------ hapus -------------------------------------------*/

	public function hapus($id)
	{
		$add = $this->model('Proses_models')->hapus($id);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASEURL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASEURL.'/barang');
			exit();
		}
	}
	public function hapus_barang()
	{
		$add = $this->model('Proses_models')->hapus_barang($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASEURL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASEURL.'/barang');
			exit();
		}
	}

	public function hapus_jenis()
	{
		$add = $this->model('Proses_models')->hapus_jenis($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASEURL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASEURL.'/barang');
			exit();
		}
	}

	public function hapus_ruang()
	{
		$add = $this->model('Proses_models')->hapus_ruang($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASEURL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASEURL.'/barang');
			exit();
		}
	}

	public function hapus_user()
	{

		$add = $this->model('Proses_models')->hapus_user($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASEURL.'/user');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASEURL.'/user');
			exit();
		}
	}

	public function hapus_pinjam()
	{

		$add = $this->model('Proses_models')->hapus_pinjam($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASEURL.'/user');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASEURL.'/user');
			exit();
		}
	}

	public function hapus_kembali()
	{

		$add = $this->model('Proses_models')->hapus_kembali($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASEURL.'/user');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASEURL.'/user');
			exit();
		}
	}

	
	/*------------------------------------------ Edit -------------------------------------------*/

	public function Ubarang()
	{
		$add = $this->model('Proses_models')->Ubarang($_POST);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Update","success");
			header('Location: '.BASEURL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Update","error");
			header('Location: '.BASEURL.'/barang');
			exit();
		}
	}

	public function Ujenis()
	{
		$add = $this->model('Proses_models')->Ujenis($_POST);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Update","success");
			header('Location: '.BASEURL.'/jenis');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Update","error");
			header('Location: '.BASEURL.'/jenis');
			exit();
		}
	}

	public function Uruang()
	{
		$add = $this->model('Proses_models')->Uruang($_POST);
		if ($add['status']) {
			Flasher::setFlash("Ruang Berhasil ","Di Update","success");
			header('Location: '.BASEURL.'/ruang');
			exit();
		}else{
			Flasher::setFlash("Ruang Gagal ","Di Update","error");
			header('Location: '.BASEURL.'/ruang');
			exit();
		}
	}

	public function Uuser()
	{
		$add = $this->model('Proses_models')->Uuser($_POST);
		if ($add['status']) {
			Flasher::setFlash("User Berhasil ","Di Update","success");
			header('Location: '.BASEURL.'/user');
			exit();
		}else{
			Flasher::setFlash("User Gagal ","Di Update","error");
			header('Location: '.BASEURL.'/user');
			exit();
		}
	}

	public function Upinjam()
	{
		$add = $this->model('Proses_models')->Upinjam($_POST);
		if ($add['status']) {
			Flasher::setFlash("User Berhasil ","Di Update","success");
			header('Location: '.BASEURL.'/peminjaman/');
			exit();
		}else{
			Flasher::setFlash("User Gagal ","Di Update","error");
			header('Location: '.BASEURL.'/peminjaman/');
			exit();
		}
	}

	/*------------------------------------------Ambil data ajax------------------------------------------*/

	public function getubah()
	{
		echo json_encode($this->model('Get_models')->ambilDataBy('id_barang',$_POST['id'],'tb_barang'));
	}

	public function getdetail()
	{
		echo json_encode($this->model('Get_models')->ambilDataInBy('id_barang',$_POST['id'],'tb_barang'));
	}

	public function getubahjenis()
	{
		echo json_encode($this->model('Get_models')->ambilDataBy('id_jenis',$_POST['id'],'tb_jenis'));
	}

	public function getubahruang()
	{
		echo json_encode($this->model('Get_models')->ambilDataBy('id_ruang',$_POST['id'],'tb_ruang'));
	}

	public function getubahuser()
	{
		echo json_encode($this->model('Get_models')->ambilDataBy('id_auth',$_POST['id'],'auth'));
	}

	public function getpinjam()
	{
		echo json_encode($this->model('Get_models')->ambilDataBy('id_peminjam',$_POST['id'],'tb_pinjam'));
	}

	
	/*------------------------------------------ kembali ------------------------------------------*/

	public function kembali($id)
	{
		$add = $this->model('Proses_models')->kembali($id);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Dikembalikan","success");
			header('Location: '.BASEURL.'/pengembalian/');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Dikembalikan","error");
			header('Location: '.BASEURL.'/pengembalian/');
			exit();
		}
	}

	/*------------------------------------------ peminjaman ------------------------------------------*/

	public function barang()
	{
		$add = $this->model('Proses_models')->proses_pinjam($_POST);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Pinjam","success");
			header('Location: '.BASEURL.'/home_user');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Pinjam","error");
			header('Location: '.BASEURL.'/home_user');
			exit();
		}
	}


}
