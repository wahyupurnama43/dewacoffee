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
    public function getProductData()
    {
        $sql = "SELECT p.*, g.* FROM product p INNER JOIN gallery g ON g.id_product = p.id WHERE g.status = 'active'";
        $this->db->query($sql);
        return $this->db->resultSet();
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

    // ambil data  berdasarkan id 
    public function getByAllId($table,$id,$by){
        $sql = "SELECT * FROM $table WHERE $by=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        return $this->db->resultSet();
    }

    public function getProductIJ($id)
    {
        $sql = "SELECT * FROM product  WHERE product.id=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        return $this->db->single();
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
        $judul = htmlspecialchars($data['judul'],ENT_QUOTES);
        $tipe_coffee = htmlspecialchars($data['tipe_coffee'],ENT_QUOTES);

        $this->db->query($sql);
        $this->db->bind('judul', $judul);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('neto', $data['neto']);
        $this->db->bind('tipe_coffee', $tipe_coffee);
        $this->db->bind('price', $data['price']);
        $this->db->bind('id', $id);
        $this->db->execute();

        $product = $this->getData();
        if(count($img) <= 5){
            foreach ($img as $key => $i) {
                if ($key == 0) {
                    $sql2 = "INSERT INTO gallery (`gambar`,`id_product`,`status`) VALUES (:gambar,:id_product,:status)";
                    $this->db->query($sql2);
                    $this->db->bind('gambar',$i);
                    $this->db->bind('id_product',$product['id']);
                    $this->db->bind('status','active');
                    $this->db->execute();
                }else{
                    $sql2 = "INSERT INTO gallery (`gambar`,`id_product`) VALUES (:gambar,:id_product)";
                    $this->db->query($sql2);
                    $this->db->bind('gambar',$i);
                    $this->db->bind('id_product',$product['id']);
                    $this->db->execute();
                }
            }
        }else{
            return false;
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
    public function delete_product($id)
    {
        $gallery = $this->getByAllId('gallery', $id,'id_product');
        foreach ($gallery as $gll) {
            unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$gll['gambar']);
        }
        $sql = "DELETE FROM product WHERE id=:id";
		$this->db->query($sql);
		$this->db->bind('id',$id);
		$this->db->execute();

        $sql = "DELETE FROM gallery WHERE id_product=:id";
		$this->db->query($sql);
		$this->db->bind('id',$id);
		$this->db->execute();
        
        return true;
    }

    public function active_img($id,$ID)
    {
        $gallery = $this->getByAllId('gallery', $id ,'id_product');
        foreach ($gallery as $gll) {
            if ($gll['status'] == 'active') {
                $sql = "UPDATE gallery SET status=:status WHERE id=:id";
                $this->db->query($sql);
                $this->db->bind('id',$gll['id']);
                $this->db->bind('status','disable');
                $this->db->execute();
            }
        }
        $sql = "UPDATE gallery SET status=:status WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id',$ID);
        $this->db->bind('status','active');
        $this->db->execute();
        echo json_encode(['status' => 'sukses']);
    }
    

    // banner product
    public function getBanner()
    {
        $sql = "SELECT * FROM page_product";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function uploadBanner($img)
    {
        $sql = "INSERT INTO `page_product` (`banner`) VALUES (:banner)";
        $this->db->query($sql);
        $this->db->bind('banner', $img);
        $this->db->execute();
        return true;
    }

    public function delete_banner($id)
    {
        $product = $this->getBySingleId('page_product', $id);
        unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$product['banner']);
        $sql ="DELETE FROM `page_product` WHERE id=$id";
        $this->db->query($sql);
        $this->db->execute();
        return true;
    }

    public function updateBanner($id,$img)
    {
        $product = $this->getBySingleId('page_product', $id);
        unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$product['banner']);
        $sql = "UPDATE `page_product` SET `banner`=:banner WHERE id=$id";
        $this->db->query($sql);
        $this->db->bind('banner', $img);
        $this->db->execute();
        return true;
    }


}