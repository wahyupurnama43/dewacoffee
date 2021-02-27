<?php 

class M_Auth 
{
    private $db;
    
    public function __construct()
    {
        session_start();
        $this->db = new Database;
    }

    public function getUser($value)
    {
        $sql = "SELECT * FROM auth WHERE email=:us";
        $this->db->query($sql);
        $this->db->bind('us', $value);
        return $this->db->single();
    }

    public function login()
    {
        $us = $_POST['email'];
        $pass = $_POST['password'];

        if(isset($us) && $us !== ''){
            $data = $this->getUser($us);
            if(isset($data) && $data !== false){
                // cek password
                if(isset($pass) && $pass !== '')
                {
                    if(password_verify($pass, $data['password'])){
                        //cek level
                        if($data['level'] === 'admin'){
                            $_SESSION['login'] = 'true';
                            $_SESSION['admin'] = 'true';
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['id'] = $data['id'];

                            Flasher::setFlash('Selamat Datang '.$data['username'],'success');
                            header('Location: '.BASE_URL.'/dashboard');
                        }else{
                            Flasher::setFlash('Username dan Password Anda Salah','error');
                            header('Location: '. BASE_URL .'/auth');
                        }//end cek level
                    }else{
                        Flasher::setFlash('Username dan Password Anda Salah','error');
                        header('Location: '. BASE_URL .'/auth');
                    }// end cek pass verify
                }else{
                    Flasher::setFlash('Username dan Password Anda Salah','error');
                    header('Location: '. BASE_URL .'/auth');
                } //end cek pass kosong or no
            }else{
                Flasher::setFlash('Username dan Password Anda Salah','error');
                header('Location: '. BASE_URL .'/auth');
            } //end cek us di database
        }else{
            Flasher::setFlash('Username dan Password Anda Salah','error');
            header('Location: '. BASE_URL .'/auth');
        } // cek us kosong or no
    }
}