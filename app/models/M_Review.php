<?php 

class M_Review
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    
    public function getAll()
    {
        $sql = "SELECT * FROM review";
        $this->db->query($sql);
        return $this->db->resultSet();        
    }
    
    public function getBySingleId($id)
    {
         $sql = "SELECT * FROM review WHERE id=$id";
        $this->db->query($sql);
        return $this->db->single();  
    }
    
    public function upload($img)
    {
        $nama = htmlspecialchars($_POST['nama'],ENT_QUOTES);
        $review = htmlspecialchars($_POST['review'],ENT_QUOTES);
        $sql = "INSERT INTO `review` (photo, nama, review) VALUES (:photo,:nama,:review)";
        $this->db->query($sql);
        $this->db->bind('photo', $img);
        $this->db->bind('nama', $nama);
        $this->db->bind('review', $review);
        $this->db->execute();
        return true;
    }

    public function delete_review($id)
    {
        $review = $this->getBySingleId($id);
        unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$review['photo']);
        $sql ="DELETE FROM `review` WHERE id=$id";
        $this->db->query($sql);
        $this->db->execute();
        return true;
    }

    public function update($id,$img)
    {
        if(!isset($img) && $img === null){
            $nama = htmlspecialchars($_POST['nama'],ENT_QUOTES);
            $review = htmlspecialchars($_POST['review'],ENT_QUOTES);
            $sql = "UPDATE `review` SET `review`=:review,`nama`=:nama WHERE id=$id";
            $this->db->query($sql);
            $this->db->bind('nama', $nama);
            $this->db->bind('review', $review);
            $this->db->execute();
            return true;
        }else{
            $review = $this->getBySingleId($id);
            unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$review['photo']);
            $nama = htmlspecialchars($_POST['nama'],ENT_QUOTES);
            $review = htmlspecialchars($_POST['review'],ENT_QUOTES);
            $sql = "UPDATE `review` SET  `photo`=:photo,`review`=:review,`nama`=:nama WHERE id=$id";
            $this->db->query($sql);
            $this->db->bind('nama', $nama);
            $this->db->bind('photo', $img);
            $this->db->bind('review', $review);
            $this->db->execute();
            return true;
        }
    }
}