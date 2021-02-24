<?php

class Dashboard extends Controller {

	public function index() {
		$this->view('template/header');
		$this->view('template/footer');
	}

}
