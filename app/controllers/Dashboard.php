<?php

class Dashboard extends Controller {

	public function index() {
		if(isset($_SESSION) && $_SESSION['login'] == true){
			if(isset($_SESSION) && $_SESSION['admin'] == true){
				$this->view('template/header');
				$this->view('dashboard/index');
				$this->view('template/footer');
			}else{
				Flasher::setFlash('login terlebih dahulu','error');
				header('Location: '.BASE_URL.'/auth');
			}
			
		}else{
			Flasher::setFlash('login terlebih dahulu','error');
			header('Location: '.BASE_URL.'/auth');
		}
	}

	public function product()
	{
		if(	$_SERVER['REQUEST_METHOD'] == 'POST')
		{
			var_dump($this->serialize_files($_FILES['gambar']));die;
		}else{
			$this->view('template/header');
			$this->view('dashboard/product/index');
			$this->view('template/footer');
		}

	
	}

	public function serialize_files(array $files)
	{
		$serialized = [];
		foreach($files as $key => $values)
		{
			foreach($values as $index => $value){
				$serialized[$index][$key] = $value;
			}
		}

		return $serialized;
	}
	
}