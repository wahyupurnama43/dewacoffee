<?php

 
class Jenis extends Controller
{
    
	public function index()
	{
		$data['judul'] = "Tambah Jenis Barang";
		$data['jenis'] = $this->model('Get_models')->ambilDataAll('tb_jenis');
		$this->view('template/header',$data);
		$this->view('inventaris/add_data/jenis_barang',$data);
		$this->view('template/footer');
	}

}
