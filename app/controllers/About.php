<?php 


class About extends Controller
{
    public function index()
    {
        $this->view('template/homepage/header');
        $this->view('about/index');
        $this->view('template/homepage/footer');
    }
}
