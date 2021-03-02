<?php 

class Contact extends Controller
{
    public function index()
    {
        $data['contact'] =  $this->model('M_Contact')->getAllData('page_contact');
        $this->view('template/homepage/header');
        $this->view('contact-us/index',$data);
        $this->view('template/homepage/footer');
    }
}
