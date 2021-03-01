<?php 


class Home extends Controller
{
    public function index()
    {
        $data['product'] = $this->model('M_Home')->getProductData();
        $this->view('template/homepage/header');
        $this->view('hompage/home',$data);
        $this->view('template/homepage/footer');
    }
    
}
