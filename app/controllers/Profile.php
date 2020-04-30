<?php 


class Profile extends Controller
{
    public function index($id)
    {
        $id_auth =  Encripsi::encode('decrypt',$id);
        $data['profile'] = $this->model('Get_models')->ambilDataBy('id_auth',$id_auth, 'auth');
        $data['provinsi'] = $this->model('Get_models')->ambilDataAll('provinces');
        if ($id_auth === $_SESSION['auth']) {
            $this->view('inventaris/profile/index',$data);
        }else{
            $this->view('template/404');
        }
    }

    public function ambil_data()
    {
        $id =  $_POST['id'];
        $modul = $_POST['modul'];

        if ($modul === "provinsi") {
            echo $this->model('Get_models')->kabupaten($id);
        }else{
             echo $this->model('Get_models')->kota($id);
        }
    }
}
