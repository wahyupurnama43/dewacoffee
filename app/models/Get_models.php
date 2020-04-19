<?php 

class Get_models
{

	private $db;

	public function __construct(){

		$this->db = new Database;
	}

	/*---------------------------> ambil data by <-----------------------------------*/
	
    public function ambilDataBy($verificator, $value, $tb)
    {
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM $tb WHERE $verificator = :$verificator";
            $this->db->query($q);
            $this->db->bind($verificator, $value);
            return $this->db->single();
        }
    }

    public function ambilDataAll($tb)
    {
        $q = "SELECT * FROM $tb";
        $this->db->query($q);
        return $this->db->resultSet();
    }

    public function ambilDataInBy($verificator, $value, $tb)
    {
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM $tb 
            INNER JOIN tb_jenis ON tb_barang.id_jenis = tb_jenis.id_jenis
            INNER JOIN tb_ruang ON tb_barang.id_ruang = tb_ruang.id_ruang
            INNER JOIN auth ON tb_barang.id_auth = auth.id_auth 
            WHERE $verificator = :$verificator";
            $this->db->query($q);
            $this->db->bind($verificator, $value);
            return $this->db->single();
        }
    }

    public function ambilDatabarang($tb)
    {
            $q = "SELECT * FROM $tb 
            INNER JOIN tb_jenis ON tb_barang.id_jenis = tb_jenis.id_jenis
            INNER JOIN tb_ruang ON tb_barang.id_ruang = tb_ruang.id_ruang
            INNER JOIN auth ON tb_barang.id_auth = auth.id_auth";
            $this->db->query($q);
            return $this->db->resultSet();
    }

    public function ambilDatauser($tb)
    {
        $q = "SELECT * FROM $tb
        INNER JOIN tb_level ON auth.id_level = tb_level.id_level";
        $this->db->query($q);
        return $this->db->resultSet();
    }

    public function ambilDatapinjamBy(){
        $q = "SELECT * FROM detail_pinjam
        INNER JOIN tb_pinjam ON detail_pinjam.id_peminjam = tb_pinjam.id_peminjam
        INNER JOIN tb_barang ON detail_pinjam.id_barang = tb_barang.id_barang
        INNER JOIN auth ON tb_pinjam.id_auth = auth.id_auth WHERE tb_pinjam.status = '1'";
        $this->db->query($q);
        return $this->db->resultSet();
    }
    public function ambilDatapinjamOne($tb, $id, $verificator){
        $q = "SELECT * FROM $tb
        INNER JOIN tb_pinjam ON $tb.id_peminjam = tb_pinjam.id_peminjam
        INNER JOIN tb_barang ON $tb.id_barang = tb_barang.id_barang
        INNER JOIN auth ON tb_pinjam.id_auth = auth.id_auth WHERE $tb.$verificator = :$verificator";
        $this->db->query($q);
        $this->db->bind($verificator, $id);
        return $this->db->single();
    }

    public function ambilkembali($tb){
        $q = "SELECT * FROM $tb
        INNER JOIN detail_pinjam ON $tb.id_detail_pinjam = detail_pinjam.id_detail_pinjam
        INNER JOIN auth ON $tb.id_auth = auth.id_auth";
        $this->db->query($q);
        return $this->db->resultSet();
    }

    public function ambilKembaliBy($tb, $id){
        $q = "SELECT * FROM $tb
        INNER JOIN detail_pinjam ON $tb.id_detail_pinjam = detail_pinjam.id_detail_pinjam
        INNER JOIN auth ON $tb.id_auth = auth.id_auth
        INNER JOIN tb_barang ON detail_pinjam.id_barang = tb_barang.id_barang WHERE detail_pinjam.id_peminjam = '$id'";
        $this->db->query($q);
        return $this->db->single();
    }
   

    /*---------------------------> ambil data barang <-----------------------------------*/
    public function ambilBarang()
    {
        $query = "SELECT * FROM tb_barang
        INNER JOIN tb_jenis ON tb_barang.id_jenis = tb_jenis.id_jenis
        INNER JOIN tb_ruang ON tb_barang.id_ruang = tb_ruang.id_ruang";
        $this->db->query($query);
        return $this->db->resultSet();
    } 

    public function ambilBarangbyId($id)
    {
        $query = "SELECT * FROM tb_barang
        INNER JOIN tb_jenis ON tb_barang.id_jenis = tb_jenis.id_jenis
        INNER JOIN tb_ruang ON tb_barang.id_ruang = tb_ruang.id_ruang WHERE id_barang =  '$id'";
        $this->db->query($query);
        return $this->db->single();
    }

   

    /*-------------------------------------> Count <---------------------------------------*/
    public function count($tb)
    {
        $query = "SELECT COUNT(*) FROM $tb";
        $this->db->query($query);
        return $this->db->resultarray();
    }

    public function countPinjam($tb)
    {
        $query = "SELECT COUNT(*) FROM $tb WHERE status = '0'";
        $this->db->query($query);
        return $this->db->resultarray();
    }

}
