<?php 


class About extends Controller
{
    public function index()
    {
        $data['about'] = $this->model('M_About')->getAll();
        $this->view('template/homepage/header');
        $this->view('about/index',$data);
        $this->view('template/homepage/footer');
    }
}
