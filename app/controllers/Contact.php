<?php 

class Contact extends Controller
{
    public function index()
    {
        if(isset($_POST['submit'])){
            // var_dump($_POST);die;
            $data = $this->model('M_Contact')->sendMessage();
            if ($data == true)
            {
                Flasher::setFlash('Pesan Berhasil Terkirim', 'success');
                header('Location: ' . BASE_URL . '/contact');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/contact');
            }
        }else{
            $data['contact'] =  $this->model('M_Contact')->getAllData('page_contact');
            $this->view('template/homepage/header');
            $this->view('contact-us/index',$data);
            $this->view('template/homepage/footer');
        }
    }
}