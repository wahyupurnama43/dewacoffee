<?php

class Dashboard extends Controller {

	public function index() {
		$data['Tbarang'] = $this->model('Get_models')->count('tb_barang');
		$data['Tuser'] = $this->model('Get_models')->count('auth');
		$data['Tpinjam'] = $this->model('Get_models')->count('tb_pinjam');
		$data['Tkembali'] = $this->model('Get_models')->count('tb_kembali');
		$data['judul'] = "Dashboard | Inventaris";
		$this->view('template/header', $data);
		$this->view('inventaris/index', $data);
		$this->view('template/footer');

	}

}
