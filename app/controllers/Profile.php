<?php 


class Profile extends Controller
{
    public function index($id)
    {
        $id_auth =  Encripsi::encode('decrypt',$id);
        $data['profile'] = $this->model('Get_models')->ambilDataByNoEncryp('id_auth',$id_auth, 'auth');
        $data['provinsi'] = $this->model('Get_models')->ambilDataAll('provinces');
        $data['kota'] = $this->model('Get_models')->ambilDataAll('regencies');
        $data['kecamatan'] = $this->model('Get_models')->ambilDataAll('districts');
        $data['identitas'] = $this->model('Get_models')->ambilDataByNoEncryp('id_auth', $id_auth, 'tb_identitas');
        if ($id_auth === $_SESSION['auth']) {
            $this->view('template/profile/header',$data);
            $this->view('inventaris/profile/index',$data);
            $this->view('template/profile/footer');
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
