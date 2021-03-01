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
}
