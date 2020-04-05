<?php 




class Login_models
{

	private $tb = "auth",
	$db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAkun($bind, $value)
	{
		$query  = "SELECT * FROM $this->tb WHERE $bind = :$bind";

		$this->db->query($query);
		$this->db->bind($bind, $value);
		return $this->db->single();
	}

	public function login($data){

		$user = $_POST['username'];
		$pass = $_POST['password'];

		//cek username ada atau tidak
		if (isset($user) && $user !== '') {
			//ambil user dari database
			if (strlen($user) >= 7 || $user === "admin") {
				// ambil data dari database dngan username
				$data_username = $this->getAkun('username', $user);
				if ($data_username > 0) {
					$password = $data_username['password'];
					$role = $data_username['id_level'];
					$username = $data_username['username'];
					$id_auth = $data_username['id_auth'];
					// cek password 
					if (isset($pass) && $pass !== '') {
						// verify password hash
						if (password_verify($pass, $password)) {
							if ($role === '1' || $role === 1) {
								session_start();
								$_SESSION['username'] = $username;
								$_SESSION['status'] = "login";
								$_SESSION['role'] = "1";
								$_SESSION['auth'] = $id_auth;

								 Flasher::setFlash('Selamat Datang ', $username,'success');
                                header('Location: '.BASEURL.'/');
							}elseif ($role === '2' || $role === 2) {
								session_start();
								$_SESSION['username'] = $username;
								$_SESSION['status'] = "login";
								$_SESSION['role'] = "2";
								$_SESSION['auth'] = $id_auth;
								 Flasher::setFlash('Selamat Datang ', $username,'success');
                                header('Location: '.BASEURL.'/');
							}elseif ($role === '3' || $role === 3) {
								session_start();
								$_SESSION['username'] = $username;
								$_SESSION['status'] = "login";
								$_SESSION['role'] = "3";
								$_SESSION['auth'] = $id_auth;
								 Flasher::setFlash('Selamat Datang ', $username,'success');
                                header('Location: '.BASEURL.'/home_user');
							}
						}else{
							// jika tidak arahain ke login
							Flasher::setFlash("Password ","Anda Salah","error");
							header('Location: '.BASEURL.'/login/login');	
						}
					}else{
						// jika tidak arahain ke login
						Flasher::setFlash("Password ","Tidak boleh Kosong","error");
						header('Location: '.BASEURL.'/login/login');	
					}
				}else {
					// jika tidak ada username maka tampilkan pesan error
					Flasher::setFlash("Username or Nis ","Tidak Terdaftar","error");
					header('Location: '.BASEURL.'/login/login');	
				}
			}elseif (strlen($user) < 7 && is_numeric($user)) {
				// ambil data dari database dngan no induk
				$data_nis = $this->getAkun('no_induk', $user);
				if ($data_nis > 0) {

					$password = $data_nis['password'];
					$role = $data_nis['id_level'];
					$username = $data_nis['username'];
					$id_auth = $data_nis['id_auth'];
					// cek password
					if (isset($pass) && $pass !== '') {
						// verify password hash
						if (password_verify($pass, $password)) {
							if ($role === '1' || $role === 1) {
								session_start();
								$_SESSION['username'] = $username;
								$_SESSION['status'] = "login";
								$_SESSION['role'] = "1";
								$_SESSION['auth'] = $id_auth;
								 Flasher::setFlash('Selamat Datang ', $username,'success');
                                header('Location: '.BASEURL.'/');
							}elseif ($role === '2' || $role === 2) {
								session_start();
								$_SESSION['username'] = $username;
								$_SESSION['status'] = "login";
								$_SESSION['role'] = "2";
								$_SESSION['auth'] = $id_auth;
								 Flasher::setFlash('Selamat Datang ', $username,'success');
                                header('Location: '.BASEURL.'/');
							}elseif ($role === '3' || $role === 3) {
								session_start();
								$_SESSION['username'] = $username;
								$_SESSION['status'] = "login";
								$_SESSION['role'] = "3";
								$_SESSION['auth'] = $id_auth;
								 Flasher::setFlash('Selamat Datang ', $username,'success');
                                header('Location: '.BASEURL.'/');
							}
						}else{
							// jika tidak arahain ke login
							Flasher::setFlash("Password ","Anda Salah","error");
							header('Location: '.BASEURL.'/login/login');	
						}
					}else{
						// jika tidak arahain ke login
						Flasher::setFlash("Password ","Tidak boleh Kosong","error");
					header('Location: '.BASEURL.'/login/login');	
					}

				}else {
					// jika tidak ada username maka tampilkan pesan error
					Flasher::setFlash("Username or Nis ","Tidak Terdaftar","error");
					header('Location: '.BASEURL.'/login/login');
				}
			}elseif (strlen($user) < 7) {
				Flasher::setFlash("Username or Nis ","Tidak Terdaftar","error");
				header('Location: '.BASEURL.'/login/login');
			}
		}else{
			// jika tidak ada dimasukkan username maka tampilkan pesan error
			Flasher::setFlash("Username or Nis ","Harus Di isi","error");
			header('Location: '.BASEURL.'/login/login');
		}
	}

}
