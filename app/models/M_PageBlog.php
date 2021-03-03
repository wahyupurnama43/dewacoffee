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
        $sql = "SELECT * FROM page_blog";
        $this->db->query($sql);
        return $this->db->resultSet();        
    }

    public function upload($data,$img)
    {

        $id = $_SESSION['id'];
        $sql = "INSERT INTO `page_blog`(`judul`, `deskripsi`) VALUES (:judul,:deskripsi)";
        $judul = htmlspecialchars($data['judul'],ENT_QUOTES);
        $tipe_coffee = htmlspecialchars($data['deskripsi'],ENT_QUOTES);

        $this->db->query($sql);
        $this->db->bind('judul', $judul);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->execute();

    }
}