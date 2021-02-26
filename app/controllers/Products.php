<?php 


class Products extends Controller
{
    public function index()
    {
        $this->view('template/homepage/header');
        $this->view('products/index');
        $this->view('template/homepage/footer');
    }
    
    public function detail()
    {
        $this->view('template/homepage/product/header');
        $this->view('products/detail');
        $this->view('template/homepage/product/footer');
    }
}