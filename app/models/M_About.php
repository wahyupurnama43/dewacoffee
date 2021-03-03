<?php 

class M_About 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM page_about";
        $this->db->query($sql);
        return $this->db->resultSet();        
    }

    public function getById($id)
    {
         $sql = "SELECT * FROM page_about WHERE id=$id";
        $this->db->query($sql);
        return $this->db->single();  
    }

    public function upload($img)
    {
        $nama_logo = htmlspecialchars($_POST['nama_logo'],ENT_QUOTES);
        $deskripsi = $_POST['Deskripsi'];
        $sql = "INSERT INTO `page_about` (company, deskripsi, banner) VALUES (:company,:deskripsi,:banner)";
        $this->db->query($sql);
        $this->db->bind('company', $nama_logo);
        $this->db->bind('deskripsi', $deskripsi);
        $this->db->bind('banner', $img);
        $this->db->execute();
        return true;
        
    }
    
    public function getBySingleId($table,$id){
        $sql = "SELECT * FROM $table WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    
    public function update($id,$img)
    {   
        $company = htmlspecialchars($_POST['nama_logo'],ENT_QUOTES);
        $deskripsi = $_POST['Deskripsi'];
        if ($img !== null) {
            $about = $this->getBySingleId('page_about', $id);
            unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$about['banner']);
            $sql = "UPDATE `page_about` SET `company`=:company,`deskripsi`=:deskripsi,`banner`=:banner WHERE id=$id";
            $this->db->query($sql);
            $this->db->bind('company',$company);
            $this->db->bind('deskripsi',$deskripsi);
            $this->db->bind('banner',$img);
            $this->db->execute();
        }else{
            $sql = "UPDATE `page_about` SET `company`=:company,`deskripsi`=:deskripsi WHERE id=$id";
            $this->db->query($sql);
            $this->db->bind('company',$company);
            $this->db->bind('deskripsi',$deskripsi);
            $this->db->execute();
        }
        return true;
    }

    public function delete_about($id)
    {
        $about = $this->getBySingleId('page_about', $id);
        unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$about['banner']);
        $sql ="DELETE FROM `page_about` WHERE id=$id";
        $this->db->query($sql);
        $this->db->execute();
        return true;
    }
}