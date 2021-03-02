<?php  

class Blog extends Controller
{
    public function index()
    {
        $data['blog'] = $this->model('M_Home')->getBlogData();
        $this->view('template/homepage/header');
        $this->view('blog/index',$data);
        $this->view('template/homepage/footer');
    }

    public function details()
    {
        $this->view('template/homepage/blog/header');
        $this->view('blog/details');
        $this->view('template/homepage/blog/footer');
    }
}
