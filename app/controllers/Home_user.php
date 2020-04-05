<?php 



class Home_user extends Controller
{


	public function index()
	{	

		$data['judul'] =  "Home | SMKN 1 Denpasar";
		$data['barang'] = $this->model('Get_models')->ambilDatabarang('tb_barang');
		$this->view('template/user/header',$data);
		$this->view('inventaris/home_user/index',$data);
		$this->view('template/user/footer');

	}

}
