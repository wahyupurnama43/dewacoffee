<?php

class M_PageBlog
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM page_blog ";
        $this->db->query($sql);
        return $this->db->resultSet();        
    }

    public function getDataBy($id)
    {
        $sql = "SELECT * FROM page_blog WHERE page_blog.id=$id";
        $this->db->query($sql);
        return $this->db->single();        
    }

    public function getGambar()
    {
        $sql = "SELECT * FROM slider_blog";
        $this->db->query($sql);
        return $this->db->resultSet();        
    }

    public function getGambarById($id)
    {
        $sql = "SELECT * FROM slider_blog WHERE id_page_blog = $id";
        $this->db->query($sql);
        return $this->db->resultSet();        
    }
    
    public function getById($id)
    {
         $sql = "SELECT * FROM slider_blog WHERE id=$id";
        $this->db->query($sql);
        return $this->db->single();  
    }
    public function getData()
    {
        $sql = "SELECT id FROM page_blog ORDER BY created_at DESC LIMIT 1";
        $this->db->query($sql);
        return $this->db->single();
    }

    public function upload($data,$img)
    {
        $sql = "INSERT INTO `page_blog`(`judul`, `deskripsi`) VALUES (:judul,:deskripsi)";
        $judul = htmlspecialchars($data['judul'],ENT_QUOTES);
        $deskripsi = htmlspecialchars($data['deskripsi'],ENT_QUOTES);
        $this->db->query($sql);
        $this->db->bind('judul', $judul);
        $this->db->bind('deskripsi', $deskripsi);
        $this->db->execute();

        $blog = $this->getData();

        if(count($img) <= 5){
            foreach ($img as  $i) {
                $sql2 = "INSERT INTO `slider_blog` (`id_page_blog`, `slider`) VALUES (:id,:slider)";
                $this->db->query($sql2);
                $this->db->bind('id', $blog['id']);
                $this->db->bind('slider', $i);
                $this->db->execute();
            }
        }else{
            return false;
        }

    }
    public function delete($id)
    {
        $about = $this->getById($id);
        foreach ($about as $ab) {
            unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$ab['slider']);
        }

        $sql ="DELETE FROM `slider_blog` WHERE id_page_blog=$id";
        $this->db->query($sql);
        $this->db->execute();

        $sql2 ="DELETE FROM `page_blog` WHERE id=$id";
        $this->db->query($sql2);
        $this->db->execute();
        return true;
    }

    public function update($data,$id,$img)
    {
            $ID = Encripsi::encode('decrypt', $id);
            $judul = htmlspecialchars($data['judul'],ENT_QUOTES);
            $deskripsi = htmlspecialchars($data['deskripsi'],ENT_QUOTES);
            $sql = "UPDATE `page_blog` SET `judul`=:judul,`deskripsi`=:deskripsi WHERE id=$ID";
            $this->db->query($sql);
            $this->db->bind('judul', $judul);
            $this->db->bind('deskripsi', $deskripsi);
            $this->db->execute();
        if (isset($img) && $img !== null) {
            if(count($img) <= 5){
                $blog = $this->getData();
                foreach ($img as  $i) {
                    $sql2 = "INSERT INTO `slider_blog` (`id_page_blog`, `slider`) VALUES (:id,:slider)";
                    $this->db->query($sql2);
                    $this->db->bind('id', $blog['id']);
                    $this->db->bind('slider', $i);
                    $this->db->execute();
                }
            }else{
                return false;
            }
        }else{
            var_dump('gagal');die;
        }

    }
    
    public function delete_img_blog($id)
    {
        $blog = $this->getById($id);
        unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$blog['slider']);
        $sql ="DELETE FROM `slider_blog` WHERE id=$id";
        $this->db->query($sql);
        $this->db->execute();
        return true;
    }
}