<?php 

class M_Product 
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    //ambil data berdasrkan data terbaru
    public function getData()
    {
        $sql = "SELECT id FROM product ORDER BY created_at DESC LIMIT 1";
        $this->db->query($sql);
        return $this->db->single();
    }

     // ambil data semuad di product
    public function getAll()
    {
        $sql = "SELECT p.*, a.username FROM product p
                INNER JOIN auth a ON a.id = p.id_auth";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    // ambil data berdasarkan id di product
    public function getBySingleId($table,$id){
        $sql = "SELECT * FROM $table WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    // ambil data berdasarkan id 
    public function getByAllId($table,$id,$by){
        $sql = "SELECT * FROM $table WHERE $by=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        return $this->db->resultSet();
    }

    

    // ambil data berdasarkan id 
    public function getGalleryById($id){
        $sql = "SELECT g.*, p.judul FROM gallery g 
                INNER JOIN product p ON g.id_product = p.id WHERE g.id_product=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        return $this->db->resultSet();
    }
    // untuk upload ke database
    public function upload($data, $img)
    {
        $id = $_SESSION['id'];
        $sql = "INSERT INTO product (`judul`, `deskripsi`, `neto`, `tipe_coffee`, `price`, `id_auth`) VALUES (:judul,:deskripsi,:neto,:tipe_coffee,:price,:id)";

        $this->db->query($sql);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('neto', $data['neto']);
        $this->db->bind('tipe_coffee', $data['tipe_coffee']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('id', $id);
        $this->db->execute();

        $product = $this->getData();

        foreach ($img as $i) {
            $sql2 = "INSERT INTO gallery (`gambar`,`id_product`) VALUES (:gambar,:id_product)";

            $this->db->query($sql2);
            $this->db->bind('gambar',$i);
            $this->db->bind('id_product',$product['id']);
            $this->db->execute();
        }
        
    }

    public function update($data,$ID,$img)
    {
        $id = Encripsi::encode('decrypt',$ID);
        if(empty($img) || $img === null){
            $sql = "UPDATE product SET judul=:judul,deskripsi=:deskripsi,neto=:neto,tipe_coffee=:tipe_coffee,price=:price WHERE id=:id";
            $this->db->query($sql);
            $this->db->bind('judul', $data['judul']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('neto', $data['neto']);
            $this->db->bind('tipe_coffee', $data['tipe_coffee']);
            $this->db->bind('price', $data['price']);
            $this->db->bind('id', $id);
            $this->db->execute();
        }else{
            $sql = "UPDATE product SET judul=:judul,deskripsi=:deskripsi,neto=:neto,tipe_coffee=:tipe_coffee,price=:price WHERE id=:id";
            $this->db->query($sql);
            $this->db->bind('judul', $data['judul']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('neto', $data['neto']);
            $this->db->bind('tipe_coffee', $data['tipe_coffee']);
            $this->db->bind('price', $data['price']);
            $this->db->bind('id', $id);
            $this->db->execute();
            
            $product = $this->getBySingleId('product',$id);
            
            foreach ($img as $i) {
                $sql2 = "INSERT INTO gallery (`gambar`, `id_product`) VALUES (:gambar, :id_product)";
                $this->db->query($sql2);
                $this->db->bind('gambar',$i);
                $this->db->bind('id_product',$product['id']);
                $this->db->execute();
            }
        }
        
    }

    public function delete_img($id)
    {
        $gallery = $this->getBySingleId('gallery', $id);
        unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$gallery['gambar']);
        
        $sql = "DELETE FROM gallery WHERE id=:id";
		$this->db->query($sql);
		$this->db->bind('id',$id);
		$this->db->execute();

        echo json_encode(['success' => 'Sukses']);

    }
}