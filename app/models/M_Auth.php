<?php 

class M_Auth 
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($value)
    {
        $sql = "SELECT * FROM auth WHERE email=:us";
        $this->db->query($sql);
        $this->db->bind('us', $value);
        return $this->db->single();
    }

    public function getUserById($value)
    {
        $sql = "SELECT * FROM auth WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id', $value);
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

    public function update($id)
    {
        // var_dump($_POST);die;
        $username =  htmlspecialchars($_POST['username'],ENT_QUOTES);
        $email = htmlspecialchars($_POST['email'],ENT_QUOTES);
        $password_lama = $_POST['password_lama'];
        $password_baru =  password_hash($_POST['password_baru'], PASSWORD_DEFAULT);

        $data = $this->getUserById($id);

        if(isset($password_lama) && $password_lama === null || isset($password_baru) && $password_baru === null )
        {
            $sql = "UPDATE `auth` SET `username`=:username,`email`=:email WHERE id=$id";
            $this->db->query($sql);
            $this->db->bind('username',$username);
            $this->db->bind('email',$email);
            $this->db->execute();
            return true;
        }else{
            if(password_verify($password_lama,$data['password'])){
                $sql = "UPDATE `auth` SET `username`=:username,`email`=:email,`password`=:pass WHERE id=$id";
                $this->db->query($sql);
                $this->db->bind('username',$username);
                $this->db->bind('email',$email);
                $this->db->bind('pass',$password_baru);
                $this->db->execute();
                return true;
            }else{
                return false;
            }
        }

        
    }
}