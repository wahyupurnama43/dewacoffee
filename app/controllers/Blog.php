<?php  

class Blog extends Controller
{
    public function index()
    {
        $this->view('template/homepage/header');
        $this->view('blog/index');
        $this->view('template/homepage/footer');
    }

    public function details()
    {
        $this->view('template/homepage/blog/header');
        $this->view('blog/details');
        $this->view('template/homepage/blog/footer');
    }
}
