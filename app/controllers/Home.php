<?php 


class Home extends Controller
{
    public function index()
    {
        $this->view('template/homepage/header');
        $this->view('hompage/home');
        $this->view('template/homepage/footer');
    }
    
}
