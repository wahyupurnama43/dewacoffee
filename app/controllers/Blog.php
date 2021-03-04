<?php  

class Blog extends Controller
{
    public function index()
    {
        $data['blog'] = $this->model('M_Home')->getBlogData();
        $data['slider'] = $this->model('M_Home')->slider();
        $data['page'] = $this->model('M_Home')->page_blog();
        $this->view('template/homepage/header');
        $this->view('blog/index',$data);
        $this->view('template/homepage/footer');
    }

    public function details($id)
    {
        $ID = Encripsi::encode('decrypt',$id);
        $data['blog'] = $this->model('M_Home')->getBlogData();
        $data['details'] = $this->model('M_Home')->getDetailsBlog($ID);
        $data['tags'] = $this->model('M_Home')->getTags($ID);
        $this->view('template/homepage/blog/header');
        $this->view('blog/details',$data);
        $this->view('template/homepage/blog/footer');
    }
}