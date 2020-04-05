<?php 




class Pengembalian extends Controller
{


	public function index(){

		$data['judul'] = "Pengambalian";
		$data['kembali'] =  $this->model('Get_models')->ambilDatakembali('tb_kembali');
		$this->view('template/header',$data);
		$this->view('inventaris/pengembalian/index',$data);
		$this->view('template/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Peminjaman';
		$data['pinjam'] = $this->model('Get_models')->ambildetailkembali($id);
		$this->view('template/header',$data);
		$this->view('inventaris/pengembalian/detail',$data);
		$this->view('template/footer');	
	}

}
