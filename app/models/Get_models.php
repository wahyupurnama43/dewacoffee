<?php 

class Get_models
{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $db_name = DB_NAME;
  private $db;

	public function __construct(){

		$this->db = new Database;
	}

	/*---------------------------> ambil data by <-----------------------------------*/
	
    public function ambilDataBy($verificator, $value, $tb)
    {
        $value2 = Encripsi::encode('decrypt',$value);
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM $tb WHERE $verificator = :$verificator";
            $this->db->query($q);
            $this->db->bind($verificator, $value2);
            return $this->db->single();
        }
    }

    

    public function ambilDataByNoEncryp($verificator, $value, $tb)
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
    public function ambilOneData($verificator, $value, $tb)
    {
        $query = "SELECT foto FROM $tb WHERE $verificator = $value";
        $this->db->query($query);
        return $this->db->single();
    }
    public function ambilDataBy2($verificator, $value,$verificator2, $value2, $tb)
    {
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM $tb WHERE $verificator = :$verificator AND $verificator2 = :$verificator2";
            $this->db->query($q);
            $this->db->bind($verificator, $value);
            $this->db->bind($verificator2, $value2);
            return $this->db->single();
        }
    }

    public function ambilDataInBy($verificator, $value, $tb)
    {
        $value2 = Encripsi::encode('decrypt',$value);
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM $tb 
            INNER JOIN tb_jenis ON tb_barang.id_jenis = tb_jenis.id_jenis
            INNER JOIN tb_ruang ON tb_barang.id_ruang = tb_ruang.id_ruang
            INNER JOIN auth ON tb_barang.id_auth = auth.id_auth 
            WHERE $verificator = :$verificator";
            $this->db->query($q);
            $this->db->bind($verificator, $value2);
            return $this->db->single();
        }
    }

    public function ambilDatabarang($tb)
    {
            $q = "SELECT * FROM $tb 
            INNER JOIN tb_jenis ON tb_barang.id_jenis = tb_jenis.id_jenis
            INNER JOIN tb_ruang ON tb_barang.id_ruang = tb_ruang.id_ruang
            INNER JOIN auth ON tb_barang.id_auth = auth.id_auth
            ";
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
        INNER JOIN auth ON tb_pinjam.id_auth = auth.id_auth WHERE status = '1' ";
        $this->db->query($q);
        return $this->db->resultSet();
    }
    public function ambilProsesPinjam(){
       $q = "SELECT * FROM detail_pinjam
        INNER JOIN tb_pinjam ON detail_pinjam.id_peminjam = tb_pinjam.id_peminjam
        INNER JOIN tb_barang ON detail_pinjam.id_barang = tb_barang.id_barang
        INNER JOIN auth ON tb_pinjam.id_auth = auth.id_auth WHERE status = '0'";
        $this->db->query($q);
        return $this->db->resultSet();
    }

    public function notif(){
        if (isset($_POST['view'])) {
        $q = "SELECT * FROM detail_pinjam
        INNER JOIN tb_pinjam ON detail_pinjam.id_peminjam = tb_pinjam.id_peminjam
        INNER JOIN tb_barang ON detail_pinjam.id_barang = tb_barang.id_barang
        INNER JOIN auth ON tb_pinjam.id_auth = auth.id_auth  WHERE status = '0' LIMIT 3 ";

        $connect = mysqli_connect($this->host, $this->user, $this->pass , $this->db_name);
        $result = mysqli_query($connect, $q);
        $output = '';
        
        if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)){
                $output .= '
                    <div class="list-group list-group-flush">
                        <a href="#!" class="list-group-item list-group-item-action">
                          <div class="row align-items-center">
                            <div class="col-auto">
                              <!-- Avatar -->
                              <img alt="Image placeholder" src="http://localhost/Inventaris_skensa/public/img/daftar-barang/'.$row["gambar"].'" class="avatar rounded-circle">
                            </div>
                            <div class="col ml--2">
                              <div class="d-flex justify-content-between align-items-center">
                                <div>
                                  <h4 class="mb-0 text-sm">'.$row["nama"].'</h4>
                                </div>
                                <div class="text-right text-muted">
                                  <small></small>
                                </div>
                              </div>
                              <p class="text-sm mb-0">Bapak / Ibu saya ingin meminjam <strong><em>'.$row["nama_brng"].'</em></strong></p>
                            </div>
                          </div>
                        </a>
                      </div>
                ';
        }
    }
        $json = array('notification' => $output);
        return $json;
        }

    }

    public function ambilDatapinjamOne($tb, $id, $verificator){
        $id_peminjam = Encripsi::encode('decrypt',$id);
        $q = "SELECT * FROM $tb
        INNER JOIN tb_pinjam ON $tb.id_peminjam = tb_pinjam.id_peminjam
        INNER JOIN tb_barang ON $tb.id_barang = tb_barang.id_barang
        INNER JOIN auth ON tb_pinjam.id_auth = auth.id_auth WHERE $tb.$verificator = :$verificator";
        $this->db->query($q);
        $this->db->bind($verificator, $id_peminjam);
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

    /*
    |---------------------------------------------------------------------------------------------------------------------------------------|
    |                                                            COUNT                                                                      |
    |---------------------------------------------------------------------------------------------------------------------------------------|
    */
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

    /*
    |---------------------------------------------------------------------------------------------------------------------------------------|
    |                                                           DROPDOWN PROV                                                               |
    |---------------------------------------------------------------------------------------------------------------------------------------|
    */

    public function kabupaten($id)
    {
        $kabupaten ="<option value=''> Pilih Kabupaten </option>";
        $q = "SELECT * FROM regencies WHERE province_id = :province_id";
            $this->db->query($q);
            $this->db->bind("province_id", $id);
            $kab = $this->db->resultSet();
        foreach ($kab as $kab) {
            $kabupaten .= '<option value="'.$kab['id'].'">'.$kab['name'].'</option>';
        }
        return $kabupaten;
    }

    public function kota($id)
    {
        $kota ="<option value=''> Pilih Kota </option>";
        $q = "SELECT * FROM districts WHERE regency_id = :regency_id";
        $this->db->query($q);
        $this->db->bind("regency_id", $id);
        $kota = $this->db->resultSet();
        foreach ($kota as $kot) {
            $kota .= '<option value="'.$kot['id'].'">'.$kot['name'].'</option>';
        }
        return $kota;
    }


}
