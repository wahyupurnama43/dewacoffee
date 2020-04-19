<?php 

class Pengembalian extends Controller
{
	public function index(){

		$data['judul'] = "Pengambalian";
		$data['kembali'] =  $this->model('Get_models')->ambilkembali('tb_kembali');
		$this->view('template/header',$data);
		$this->view('inventaris/pengembalian/index',$data);
		$this->view('template/footer');
	}
}
