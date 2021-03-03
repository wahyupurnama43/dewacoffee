<?php 

class M_Home
{
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getProductData()
    {
        $sql = "SELECT p.*, g.* FROM product p INNER JOIN gallery g ON g.id_product = p.id WHERE g.status = 'active'";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function getById($id)
    {
         $sql = "SELECT * FROM page_home WHERE id=$id";
        $this->db->query($sql);
        return $this->db->single();  
    }
    public function getBlogData()
    {
        $sql = "SELECT * FROM blog";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM page_home";
        $this->db->query($sql);
        return $this->db->resultSet();        
    }
    public function getBySingleId($table,$id){
        $sql = "SELECT * FROM $table WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    public function getReview()
    {
        $sql = "SELECT * FROM review";
        $this->db->query($sql);
        return $this->db->resultSet();        
    }
    
    public function upload($img)
    {
        $judul =$_POST['judul'];
        $deskripsi =$_POST['deskripsi'];
        $sql = "INSERT INTO `page_home`(`judul`, `deskripsi`, `banner`) VALUES (:judul,:deskripsi,:banner)";
        $this->db->query($sql);
        $this->db->bind('judul', $judul);
        $this->db->bind('deskripsi', $deskripsi);
        $this->db->bind('banner', $img);
        $this->db->execute();
        return true;
    }

    public function update($id,$img)
    {   
        $judul = htmlspecialchars($_POST['judul'],ENT_QUOTES);
        $deskripsi = $_POST['deskripsi'];
        if ($img !== null) {
            $home = $this->getBySingleId('page_home', $id);
            unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$home['banner']);
            $sql = "UPDATE `page_home` SET `judul`=:judul,`deskripsi`=:deskripsi,`banner`=:banner WHERE id=$id";
            $this->db->query($sql);
            $this->db->bind('judul',$judul);
            $this->db->bind('deskripsi',$deskripsi);
            $this->db->bind('banner',$img);
            $this->db->execute();
        }else{
            $sql = "UPDATE `page_home` SET `judul`=:judul,`deskripsi`=:deskripsi WHERE id=$id";
            $this->db->query($sql);
            $this->db->bind('judul',$judul);
            $this->db->bind('deskripsi',$deskripsi);
            $this->db->execute();
        }
        return true;
    }

    public function delete_home($id)
    {
        $home = $this->getBySingleId('page_home', $id);
        unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$home['banner']);
        $sql ="DELETE FROM `page_home` WHERE id=$id";
        $this->db->query($sql);
        $this->db->execute();
        return true;
    }
}