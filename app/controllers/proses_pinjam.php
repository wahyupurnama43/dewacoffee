<?php 


class Proses_pinjam extends Controller
{
    public function index(){
        $data['judul'] = "Proses Peminjaman";
        $data['pinjam'] =  $this->model('Get_models')->ambilProsesPinjam();
        $this->view('template/header', $data);
        $this->view('inventaris/peminjaman/proses_pinjam', $data);
        $this->view('template/footer');
    }
    
}
