<?php

class Barang extends Controller {

	public function index() {
		$data['judul'] = "Daftar Barang ";
		$data['barang'] = $this->model('Get_models')->ambilDataAll('tb_barang');
		$data['jenis'] =  $this->model('Get_models')->ambilDataAll('tb_jenis');
		$data['ruangan'] =  $this->model('Get_models')->ambilDataAll('tb_ruang');
		$this->view('template/header', $data);
		$this->view('inventaris/barang/index', $data);
		$this->view('template/footer');
	}
}
