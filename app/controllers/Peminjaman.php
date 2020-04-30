<?php 

class Peminjaman extends Controller
{

	public function index()
	{
		$data['judul'] = 'Daftar Peminjaman';
		$data['barang'] = $this->model('Get_models')->ambilDataAll('tb_barang');
		$data['peminjam'] = $this->model('Get_models')->ambilDataAll('auth');
		$data['pinjam'] = $this->model('Get_models')->ambilDatapinjamBy();
		$this->view('template/header',$data);
		$this->view('inventaris/peminjaman/index',$data);
		$this->view('template/footer');	
	}

}
