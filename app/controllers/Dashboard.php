<?php

class Dashboard extends Controller {
	private $post;
	public function index() {
		// if(isset($_SESSION) && $_SESSION['login'] == true){
		// 	if(isset($_SESSION) && $_SESSION['admin'] == true){
		// 		$this->view('template/header');
		// 		$this->view('dashboard/index');
		// 		$this->view('template/footer');
		// 	}else{
		// 		Flasher::setFlash('login terlebih dahulu','error');
		// 		header('Location: '.BASE_URL.'/auth');
		// 	}
			
		// }else{
		// 	Flasher::setFlash('login terlebih dahulu','error');
		// 	header('Location: '.BASE_URL.'/auth');
		// }
		$this->view('template/header');
		$this->view('dashboard/index');
		$this->view('template/footer');
	}

	public function product()
	{

		if(	$_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$responsecode = 200;
			try {
				// proses masukkin ke DB
				$deskripsi = $_POST['deskripsi'] ?? '';
				$judul = $_POST['judul'] ?? '';
				$neto = $_POST['neto'] ?? '';
				$price = $_POST['price'] ?? '';
				$tipe_coffee = $_POST['tipe_coffee'] ?? '';
				$images = [];
				// var_dump($this->post);die;
				if(isset($_FILES['file'])) {

					$files = $this->serialize_files($_FILES['file']);
					var_dump($files);die;
					foreach ($files as $file) {
						$images[] = $this->handle_upload_image($file);
						// do upload
					}
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

		$this->view('template/header');
		$this->view('dashboard/product/index');
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

		// https://www.malasngoding.com/membuat-upload-file-dengan-php-dan-mysql/
		$newfilename = uniqid(rand()) . '.' . $ext;
		move_uploaded_file($tmp_name, $newfilename);

		return $newfilename;
	}
	
}