<?php 

class Contact extends Controller
{
    public function index()
    {
        $this->view('template/homepage/header');
        $this->view('contact-us/index');
        $this->view('template/homepage/footer');
    }
}
