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
    public function getAllDataDesc($table)
    {
        $sql = "SELECT * FROM $table ORDER BY created_at DESC";
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
        $sql = "INSERT INTO `page_contact`(`address`, `email`, `phone`, `maps`) VALUES (:alamat, :email, :phone, :maps)";
        $this->db->query($sql);
        $this->db->bind('alamat', $address);
        $this->db->bind('email', $email);
        $this->db->bind('phone', $phone);
        $this->db->bind('maps', $maps);
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

   

    public function update($id)
    {
        $address = htmlspecialchars($_POST['address'],ENT_QUOTES);
        $email = htmlspecialchars($_POST['email'],ENT_QUOTES);
        $phone = htmlspecialchars($_POST['phone'],ENT_QUOTES);
        $maps = $_POST['maps'];

        $sql ="UPDATE `page_contact` SET `address`=:alamat,`email`=:email,`phone`=:phone,`maps`=:maps WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('alamat',$address);
        $this->db->bind('email',$email);
        $this->db->bind('phone',$phone);
        $this->db->bind('maps',$maps);
        $this->db->bind('id',$id);
        $this->db->execute();
        return true;
    }

    public function sendMessage()
    {
        $nama = htmlspecialchars($_POST['nama'],ENT_QUOTES);
        $email = htmlspecialchars($_POST['email'],ENT_QUOTES);
        $message = htmlspecialchars($_POST['message'],ENT_QUOTES);

        $sql = "INSERT INTO `contact`(`nama`, `email`, `message`) VALUES (:nama,:email,:message)";
        $this->db->query($sql);
        $this->db->bind('nama', $nama);
        $this->db->bind('email', $email);
        $this->db->bind('message', $message);
        $this->db->execute();
        return true;
        
    }

    public function delete_message($id)
    {
        $sql ="DELETE FROM `contact` WHERE id=$id";
        $this->db->query($sql);
        $this->db->execute();
        return true;
    }
}