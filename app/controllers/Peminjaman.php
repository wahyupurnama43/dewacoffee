<?php 

class Peminjaman extends Controller
{

	public function index()
	{
		$data['judul'] = 'Daftar Peminjaman';
		$data['barang'] = $this->model('Get_models')->ambilDataAll('tb_barang');
		$data['peminjam'] = $this->model('Get_models')->ambilDataAll('auth');
		$data['pinjam'] = $this->model('Get_models')->ambilDatapinjam('tb_pinjam','1');
		$this->view('template/header',$data);
		$this->view('inventaris/peminjaman/index',$data);
		$this->view('template/footer');	
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Peminjaman';
		$data['pinjam'] = $this->model('Get_models')->ambildetailPinjam($id);
		$this->view('template/header',$data);
		$this->view('inventaris/peminjaman/detail',$data);
		$this->view('template/footer');	
	}

}
