<?php

class M_Contact
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getAllDataById($table,$id)
    {
        $sql = "SELECT * FROM $table WHERE id=$id";
        $this->db->query($sql);
        return $this->db->single();
    }

    public function upload()
    {
        $address = htmlspecialchars($_POST['address'],ENT_QUOTES);
        $email = htmlspecialchars($_POST['email'],ENT_QUOTES);
        $phone = htmlspecialchars($_POST['phone'],ENT_QUOTES);
        $maps = $_POST['maps'];

        $sql = "INSERT INTO `page_contact`(`address`, `email`, `phone`, `maps`, `status`) VALUES (:alamat, :email, :phone, :maps, :stt)";

        $this->db->query($sql);
        $this->db->bind('alamat', $address);
        $this->db->bind('email', $email);
        $this->db->bind('phone', $phone);
        $this->db->bind('maps', $maps);
        $this->db->bind('stt', 'disable');
        $this->db->execute();
        return true;
        
    }

    public function delete_contact($id)
    {
        $sql ="DELETE FROM `page_contact` WHERE id=$id";
        $this->db->query($sql);
        $this->db->execute();
        return true;
    }

    public function active_contact($id)
    {
        $address = htmlspecialchars($_POST['address'],ENT_QUOTES);
        $email = htmlspecialchars($_POST['email'],ENT_QUOTES);
        $phone = htmlspecialchars($_POST['phone'],ENT_QUOTES);
        $maps = $_POST['maps'];

        $sql ="UPDATE `page_contact` SET `address`=:alamat,`email`=:email,`phone`=:phone,`maps`=:maps WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('address',$address);
        $this->db->bind('email',$email);
        $this->db->bind('phone',$phone);
        $this->db->bind('maps',$maps);
        $this->db->bind('id',$id);
        $this->db->execute();
        return true;
    }
}