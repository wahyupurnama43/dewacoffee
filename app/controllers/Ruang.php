<?php 

class Ruang extends Controller
{
 
	public function index()
	{
		$data['judul'] = "Tambah Jenis Barang";
		$data['ruang'] = $this->model('Get_models')->ambilDataAll('tb_ruang');
		$this->view('template/header',$data);
		$this->view('inventaris/add_data/ruang',$data);
		$this->view('template/footer');
	}

}
