<?php 

 

class User extends Controller
{
    
	public function index(){

		$data['judul'] ="Tambah User";
		$data['user'] = $this->model('Get_models')->ambilDatauser('auth');
		$data['level'] = $this->model('Get_models')->ambilDataAll('tb_level');
		$this->view('template/header',$data);
		$this->view('inventaris/user/index',$data);
		$this->view('template/footer');
	}


}
