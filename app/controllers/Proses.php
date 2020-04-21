<?php 

class Proses extends Controller
{
	private $db;
	public function __construct(){
		$this->db = new Database;
	}
    
/*
|---------------------------------------------------------------------------------------------------------------------------------------|
|                                                            TAMBAH BARANG                                                              |
|---------------------------------------------------------------------------------------------------------------------------------------|
*/
	public function Tbarang()
	{
		$add = $this->model('Proses_models')->Tbarang($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Tambahkan","success");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Tambahkan","error");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}
	}

	public function Tjenis()
	{
		$add = $this->model('Proses_models')->Tjenis($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Tambahkan","success");
			header('Location: '.BASE_URL.'/jenis');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Tambahkan","error");
			header('Location: '.BASE_URL.'/jenis');
			exit();
		}
	}

	public function Truang()
	{
		$add = $this->model('Proses_models')->Truang($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Tambahkan","success");
			header('Location: '.BASE_URL.'/ruang');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Tambahkan","error");
			header('Location: '.BASE_URL.'/ruang');
			exit();
		}
	}

	public function Tuser()
	{
		$add = $this->model('Proses_models')->Tuser($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Tambahkan","success");
			header('Location: '.BASE_URL.'/user');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Tambahkan","error");
			header('Location: '.BASE_URL.'/user');
			exit();
		}
	}

	public function Tpinjam()
	{
		$add = $this->model('Proses_models')->Tpinjam($_POST);
		if ($add['status']) {
			Flasher::setFlash("Berhasil ","Di Pinjam","success");
			header('Location: '.BASE_URL.'/peminjaman');
			exit();
		}else {
			Flasher::setFlash("Gagal ","Di Pinjam","error");
			header('Location: '.BASE_URL.'/peminjaman');
			exit();
		}
	}



/*
|---------------------------------------------------------------------------------------------------------------------------------------|
|                                                            HAPUS                                                                      |
|---------------------------------------------------------------------------------------------------------------------------------------|
*/
	public function hapus($id)
	{
		$add = $this->model('Proses_models')->hapus($id);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}
	}
	public function hapus_barang()
	{
		$add = $this->model('Proses_models')->hapus_barang($_POST['id']);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}
	}

	public function hapus_jenis()
	{
		$add = $this->model('Proses_models')->hapus_jenis($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}
	}

	public function hapus_ruang()
	{
		$add = $this->model('Proses_models')->hapus_ruang($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}
	}

	public function hapus_user()
	{

		$add = $this->model('Proses_models')->hapus_user($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASE_URL.'/user');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASE_URL.'/user');
			exit();
		}
	}

	public function hapus_pinjam()
	{

		$add = $this->model('Proses_models')->hapus_pinjam($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASE_URL.'/peminjaman');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASE_URL.'/peminjaman');
			exit();
		}
	}

	public function hapus_kembali()
	{

		$add = $this->model('Proses_models')->hapus_kembali($_POST['id']);
		if ($add['status']) {
			echo json_encode($add);
			Flasher::setFlash("Barang Berhasil ","Di Hapus","success");
			header('Location: '.BASE_URL.'/user');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Hapus","error");
			header('Location: '.BASE_URL.'/user');
			exit();
		}
	}

	
/*
|---------------------------------------------------------------------------------------------------------------------------------------|
|                                                            UPDATE                                                                     |
|---------------------------------------------------------------------------------------------------------------------------------------|
*/

	public function Ubarang()
	{
		$add = $this->model('Proses_models')->Ubarang($_POST);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Update","success");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Update","error");
			header('Location: '.BASE_URL.'/barang');
			exit();
		}
	}

	public function Ujenis()
	{
		$add = $this->model('Proses_models')->Ujenis($_POST);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Update","success");
			header('Location: '.BASE_URL.'/jenis');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Update","error");
			header('Location: '.BASE_URL.'/jenis');
			exit();
		}
	}

	public function Uruang()
	{
		$add = $this->model('Proses_models')->Uruang($_POST);
		if ($add['status']) {
			Flasher::setFlash("Ruang Berhasil ","Di Update","success");
			header('Location: '.BASE_URL.'/ruang');
			exit();
		}else{
			Flasher::setFlash("Ruang Gagal ","Di Update","error");
			header('Location: '.BASE_URL.'/ruang');
			exit();
		}
	}

	public function Uuser()
	{
		$add = $this->model('Proses_models')->Uuser($_POST);
		if ($add['status']) {
			Flasher::setFlash("User Berhasil ","Di Update","success");
			header('Location: '.BASE_URL.'/user');
			exit();
		}else{
			Flasher::setFlash("User Gagal ","Di Update","error");
			header('Location: '.BASE_URL.'/user');
			exit();
		}
	}

	public function Upinjam()
	{
		$add = $this->model('Proses_models')->Upinjam($_POST);
		if ($add['status']) {
			Flasher::setFlash("User Berhasil ","Di Update","success");
			header('Location: '.BASE_URL.'/peminjaman/');
			exit();
		}else{
			Flasher::setFlash("User Gagal ","Di Update","error");
			header('Location: '.BASE_URL.'/peminjaman/');
			exit();
		}
	}

/*
|---------------------------------------------------------------------------------------------------------------------------------------|
|                                                            DATA AJAX                                                                  |
|---------------------------------------------------------------------------------------------------------------------------------------|
*/

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
		echo json_encode($this->model('Get_models')->ambilDatapinjamOne('detail_pinjam',$_POST['id'],'id_peminjam'));
	}

	public function getkembali()
	{
		echo json_encode($this->model('Get_models')->ambilKembaliBy('tb_kembali',$_POST['id']));
	}

	public function notif()
	{
		echo json_encode($this->model('Get_models')->countPinjam('tb_pinjam'));
	}
	public function get_notif()
	{
		echo json_encode($this->model('Get_models')->notif());
	}

	

	
/*
|---------------------------------------------------------------------------------------------------------------------------------------|
|                                                            KEMBALI BARANG                                                             |
|---------------------------------------------------------------------------------------------------------------------------------------|
*/

	public function kembali($id)
	{
		$add = $this->model('Proses_models')->kembali($id);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Dikembalikan","success");
			header('Location: '.BASE_URL.'/pengembalian/');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Dikembalikan","error");
			header('Location: '.BASE_URL.'/peminjaman/');
			exit();
		}
	}

/*
|---------------------------------------------------------------------------------------------------------------------------------------|
|                                                     PROSES PEMINJAMAN USER                                                            |
|---------------------------------------------------------------------------------------------------------------------------------------|
*/

	public function barang()
	{
		$add = $this->model('Proses_models')->proses_pinjam($_POST);
		if ($add['status']) {
			Flasher::setFlash("Barang Berhasil ","Di Pinjam","success");
			header('Location: '.BASE_URL.'/home_user');
			exit();
		}else{
			Flasher::setFlash("Barang Gagal ","Di Pinjam","error");
			header('Location: '.BASE_URL.'/home_user');
			exit();
		}
	}


}
