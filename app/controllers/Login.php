<?php

class Login extends Controller {

	public function index() {
		if (!isset($_POST['login'])) {
			$data['judul'] = "Login | Inventaris Skensa";
			$this->view('template/login/login', $data);
		} else {
			$this->model('Login_models')->login($_POST);
		}
	}

	public function logout() {
		$_SESSION = [];
		session_unset();
		session_destroy();
		header('Location: ' . BASE_URL . '/login/login');
	}
}
