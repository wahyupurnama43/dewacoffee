<?php

class Dashboard extends Controller {
	public function index() {
		if(isset($_SESSION) && $_SESSION['login'] == true){
			if(isset($_SESSION) && $_SESSION['admin'] == true){
				$data['header'] = 'Dashboard';
				$data['link_header'] = 'dashboard';
				$data['page'] = 'Home';
				$this->view('template/header',$data);
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
		// $data['header'] = 'Dashboard';
		// $data['link_header'] = 'dashboard';
		// $data['page'] = 'Home';
		// $this->view('template/header',$data);
		// $this->view('dashboard/index');
		// $this->view('template/footer');
	}

	public function product()
	{
		if(	$_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$responsecode = 200;
			try {
				$images = [];
				if(isset($_FILES['file'])) {
					$files = $this->serialize_files($_FILES['file']);
					foreach ($files as $file) {
						$images[] = $this->handle_upload_image($file);
						// do upload
					}
					$this->model('M_Product')->upload($_POST, $images);
				}

				// kalo ga mau pake trycatch gapapa, tapi kalo ada gagal, langsung aja $responsecode = 400
			} catch (Exception $e) {
				$responsecode = 400;
			}

			http_response_code($responsecode);
			// kalo mau var_dump juga bisa, langsung aja var_dump()
			// var_dump('test');
			
			// ini kalo submit tapi ada gambar nya, nnti bisa kirim pesan ke javacript lewat sini, tinggal echo aja,
			// ini buat handle AJAX-nya Dropzone
			if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
				header('Content-Type: application/json');
				if($responsecode == 200) {
					// jika berhasil
					echo json_encode([
						'status' => true,
						'message' => 'Berhasil',
					]);

				}else {
					// jika gagal
					echo json_encode([
						'status' => false,
						'message' => 'Gagal'
					]);
				}
				exit;
			}
		}

		$data['header'] = 'Product';
		$data['link_header'] = 'dashboard/product';
		$data['page'] = 'Home';
		$data['product'] = $this->model('M_Product')->getAll(); 
		$this->view('template/header',$data);
		$this->view('dashboard/product/index',$data);
		$this->view('template/footer');
		
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

	public function handle_upload_image($file)
	{
		$error = $file['error'];
		$size = $file['size'];
		$name = $file['name'];
		$type = $file['type'];
		$tmp_name = $file['tmp_name']; 
		$ext = pathinfo($name, PATHINFO_EXTENSION);

		$newfilename = uniqid(rand()) . '.' . $ext;
		move_uploaded_file($tmp_name,  'public/upload/'.$newfilename);

		return $newfilename;
	}

	public function edit_product($id){

		if(	$_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$responsecode = 200;
			try {
				$images = [];
				$ID = Encripsi::encode('decrypt',$id);
				if(isset($_FILES['file'])) {
					$files = $this->serialize_files($_FILES['file']);
					foreach ($files as $file) {
						$images[] = $this->handle_upload_image($file);
					}
					$this->model('M_Product')->update($_POST,$id,$images);
				}elseif(!isset($_FILES['file'])){
					$this->model('M_Product')->update($_POST,$id,$images);
					Flasher::setFlash('Data Berhasil Di Perbaharui','success');
					header('Location: '.BASE_URL.'/edit_product/'.$ID);
				}

				// kalo ga mau pake trycatch gapapa, tapi kalo ada gagal, langsung aja $responsecode = 400
			} catch (Exception $e) {
				$responsecode = 400;
			}


			http_response_code($responsecode);
			// kalo mau var_dump juga bisa, langsung aja var_dump()
			// var_dump('test');
			
			// ini kalo submit tapi ada gambar nya, nnti bisa kirim pesan ke javacript lewat sini, tinggal echo aja,
			// ini buat handle AJAX-nya Dropzone
			if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
				header('Content-Type: application/json');
				if($responsecode == 200) {
					// jika berhasil
					echo json_encode([
						'status' => true,
						'message' => 'Berhasil',
					]);

				}else {
					// jika gagal
					echo json_encode([
						'status' => false,
						'message' => 'Gagal'
					]);
				}
				exit;
			}
		}

		$ID = Encripsi::encode('decrypt',$id);
		$data['header'] = 'Product';
		$data['link_header'] = 'dashboard/product';
		$data['page'] = 'Edit';
		$data['product'] = $this->model('M_Product')->getBySingleId('product',$ID);
		$data['gallery'] = $this->model('M_Product')->getGalleryById($ID);
		$this->view('template/header',$data);
		$this->view('dashboard/product/edit',$data);
		$this->view('template/footer');
	}

	// fungsin untuk delete img product
	public function delete_img(){
		$id = $_POST['id'];
		$ID = Encripsi::encode('decrypt',$id);
		$this->model('M_Product')->delete_img($ID);
	}

	// fungsi untuk delete product
	
	public function delete_product($id){
		$ID = Encripsi::encode('decrypt',$id);
		$return = $this->model('M_Product')->delete_product($ID);

		if($return == true){
			Flasher::setFlash('Data Berhasil Di Delete','success');
			header('Location: '.BASE_URL.'/dashboard/product');
		}else{
			Flasher::setFlash('Data Gagal Di Delete','error');
			header('Location: '.BASE_URL.'/dashboard/product');
		}

	}
	
}