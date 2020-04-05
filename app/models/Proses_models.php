<?php  

class Proses_models extends Controller
{	
	private $db;
	public function __construct()
	{
		$this->db = new Database;
	}

	/* ------------------------------> Tambah <--------------------------------- */
    public function Tjenis($data)
    {
        $query = "INSERT INTO tb_jenis VALUES ('',:nama_jenis,:kode_jenis,:keterangan)";
        try {
            $this->db->query($query);
            $this->db->bind('nama_jenis',$data['nama']);
            $this->db->bind('kode_jenis',$data['kode_jenis']);
            $this->db->bind('keterangan',$data['keterangan']);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function Tpinjam($data)
    {
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date('Y-m-d');
        $waktu = $data['pinjam'];
        $sampai = mktime(0,0,0,date("n"),date("j")+$waktu, date("Y"));
        $kembali = date("Y-m-d", $sampai);
        $query = "INSERT INTO tb_pinjam VALUES ('', :tanggal_pinjam, :tanggal_kembali, :jumlah_pinjam, :status, :id_auth, :id_barang)";
        try {
            $this->db->query($query);
            $this->db->bind('tanggal_pinjam',$date);
            $this->db->bind('tanggal_kembali', $kembali);
            $this->db->bind('jumlah_pinjam',$data['jumlah']);
            $this->db->bind('id_auth',$data['peminjam']);
            $this->db->bind('id_barang',$data['pilih_barang']);
            $this->db->bind('status', 1);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function Truang($data)
    {
        $query = "INSERT INTO tb_ruang VALUES ('',:nama_ruang, :kode_ruang, :keterangan)";
        try {
            $this->db->query($query);
            $this->db->bind('nama_ruang',$data['nama']);
            $this->db->bind('kode_ruang',$data['kode_ruang']);
            $this->db->bind('keterangan',$data['keterangan']);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function Tuser($data)
    {
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $date = date('Y-m-d');
            $username = strtolower(stripcslashes($data['username']));
            $nama = stripcslashes($data['nama']);
            $password = $data['password'];
            $con_password = $data['con_pass'];

            $cek_username = $this->model('Get_models')->ambilDataBy('username',$username,'auth');

            if ($cek_username > 0) {
                Flasher::setFlash('Username Anda ','Sudah Terdaftar','error');
                header('Location: '. BASEURL . '/user/');
                exit();
            }
            if ($password !== $con_password) {
               Flasher::setFlash('Password Anda ','Harus Sama','error');
               header('Location: '. BASEURL . '/user/');
               exit();
           }

           $password_hash = password_hash($password, PASSWORD_DEFAULT);
           $query = "INSERT INTO auth VALUES ('',:username, :password, :nama, :no_induk, :tgl_daftar, :id_level)";
           try {
            $this->db->query($query);
            $this->db->bind('username',$data['username']);
            $this->db->bind('password',$password_hash);
            $this->db->bind('nama',$data['nama']);
            $this->db->bind('no_induk',$data['no_induk']);
            $this->db->bind('tgl_daftar',$date);
            $this->db->bind('id_level',$data['level']);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function Tbarang($data)
    {
        $nama_barang = strlen($data['nama']);
        $awal_barang = substr($data['nama'], 0,1);

        if ($nama_barang < 50) {

            if (ctype_upper($awal_barang)) {

                    $file_max_weight = 1000000; //limmit gambar

                    $ok_ext = array('jpg','png','gif','jpeg'); // gambar yang diterima

                    $destination = "img/daftar-barang/"; // simpen dmana nantik

                    $file = $_FILES['gambar'];
                    
                    $filename = explode(".", $file["name"]); 

                    $file_name = $file['name']; // nama asli gambar

                    $file_name_no_ext = isset($filename[0]) ? $filename[0] : null; 

                    $file_extension = $filename[count($filename)-1];

                    $file_weight = $file['size'];

                    $file_type = $file['type'];

                    if ($file['error'] == 0 ) {

                        if (in_array($file_extension, $ok_ext)) {
                            if( $file_weight <= $file_max_weight ){
                                $fileNewName =  $file_name_no_ext[0].microtime().'.'.$file_extension ;

                                date_default_timezone_set('Asia/Kuala_Lumpur');
                                $date = date('Y-m-d');
                                $id_auth = $_SESSION['auth'];
                                if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ){

                                    $query = "INSERT INTO tb_barang VALUES ('',:nama_brng ,:jumlah ,:tanggal_masuk ,:kondisi ,:gambar ,:deskripsi ,:id_jenis ,:id_ruang, :id_auth)";
                                    try {
                                        $this->db->query($query);
                                        $this->db->bind('nama_brng', $data['nama']);
                                        $this->db->bind('jumlah', $data['jumlah_barang']);
                                        $this->db->bind('tanggal_masuk', $date);
                                        $this->db->bind('kondisi', $data['kondisi']);
                                        $this->db->bind('deskripsi', $data['keterangan']);
                                        $this->db->bind('id_jenis', $data['jenis']);
                                        $this->db->bind('id_ruang', $data['ruangan']);
                                        $this->db->bind('id_auth', $id_auth);
                                        $this->db->bind('gambar', $fileNewName);
                                        $this->db->execute();
                                        return ['status' => true]; 
                                    } catch (Exception $e) {
                                        return ['status' => false, 'msg' => $e->getMessage()];
                                    }
                                }
                            }else{
                               Flasher::setFlash('Gambar Terlalu Besar', ' !!','error');
                               header('Location: '.BASEURL.'/barang');
                               exit();
                           }
                       }else{
                          Flasher::setFlash('Extensi Gambar jpeg, jpg, png, gif', ' !!','error');
                          header('Location: '.BASEURL.'/barang');
                          exit();
                      }
                  }else {
                      Flasher::setFlash('Barang Harus Memiliki Gambar', ' !!','error');
                      header('Location: '.BASEURL.'/barang');
                      exit();
                  }
              }else {
                  Flasher::setFlash('Nama Barang Harus Memiliki Awalan Kapital', ' !!','error');
                  header('Location: '.BASEURL.'/barang');
                  exit();
              }

          }else{
              Flasher::setFlash('Nama Barang Terlalu', ' Panjang !!','error');
              header('Location: '.BASEURL.'/barang');
              exit();
          }

      }



      /* ------------------------------> Hapus <--------------------------------- */

      public function hapus($id, $tb,$pk_baru)
      {

         $query = "DELETE FROM $tb WHERE $pk_baru = $id";
         try {
          $this->db->query($query);
          $this->db->execute();
          return ['status' => true];
      } catch (Exception $e) {
          return ['status' => false, 'msg' => $e->getMessage()];
      }
    }

    public function hapus_barang($id)
    {
        $data = $this->model('Get_models')->ambilDataBy('id_barang',$id,'tb_barang');
        try {
            $destination = "img/daftar-barang/";
            unlink($destination.$data['gambar']);

            $query = "DELETE FROM tb_barang WHERE id_barang = $id";
            $this->db->query($query);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function hapus_ruang($id)
    {
        $query = "DELETE FROM tb_ruang WHERE id_ruang = $id";
        try {
            $this->db->query($query);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function hapus_jenis($id)
    {
        $query = "DELETE FROM tb_jenis WHERE id_jenis = $id";
        try{
            $this->db->query($query);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function hapus_user($id)
    {
        $query = "DELETE FROM auth WHERE id_auth = $id";
        try{
            $this->db->query($query);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function hapus_pinjam($id)
    {
        $query = "DELETE FROM tb_pinjam WHERE id_peminjam = $id";
        try{
            $this->db->query($query);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function hapus_kembali($id)
    {
        $query = "DELETE FROM tb_kembali WHERE id_kembali = $id";
        try{
            $this->db->query($query);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }
    /* ------------------------------> Edit <--------------------------------- */
    public function Ubarang($data)
    {
        $isigambar = $_FILES['gambar'];
        if ($isigambar['error'] == 0) {
                 // var_dump($data);die;
            $query = "SELECT * FROM tb_barang WHERE id_barang = :id";
            $this->db->query($query);
            $this->db->bind('id', $data['id']);
            $dataambil = $this->db->single();

                $file_max_weight = 1000000; //limmit gambar

                $ok_ext = array('jpg','png','gif','jpeg'); // gambar yang diterima

                $destination = "img/daftar-barang/"; // simpen dmana nantik

                $file = $_FILES['gambar'];


                $filename = explode(".", $file['name']); 


                $file_name = $file['name']; // nama asli gambar


                $file_name_no_ext = isset($filename[0]) ? $filename[0] : null; 

                $file_extension = $filename[count($filename)-1];

                $file_weight = $file['size'];

                $file_type = $file['type'];


                unlink($destination.$dataambil['gambar']); //data gambar database
                if ($file['error'] == 0 ) {

                    if (in_array($file_extension, $ok_ext)) {

                     if( $file_weight <= $file_max_weight ){

                         $fileNewName =  $file_name_no_ext[0].microtime().'.'.$file_extension ;
                                            // pindahin ke folder baru
                         if( move_uploaded_file($file['tmp_name'], $destination.$fileNewName) ){
                                            // masukkan data ke database 
                            $query = "UPDATE tb_barang SET nama_brng =:nama_brng, jumlah =:jumlah, kondisi =:kondisi, gambar =:gambar , deskripsi = :deskripsi, id_jenis = :id_jenis, id_ruang = :id_ruang WHERE id_barang =:id_barang";
                            try{
                                $this->db->query($query);
                                $this->db->bind('nama_brng', $data["nama"]);
                                $this->db->bind('jumlah', $data["jumlah_barang"]);
                                $this->db->bind('kondisi', $data["kondisi"]);
                                $this->db->bind('deskripsi', $data["keterangan"]);
                                $this->db->bind('id_jenis', $data["jenis"]);
                                $this->db->bind('id_ruang', $data["ruangan"]);
                                $this->db->bind('gambar', $fileNewName);
                                $this->db->bind('id_barang', $data["id"] );
                                $this->db->execute();
                                                // return $this->db->rowCount();
                                return ['status' => true];
                            } catch (PDOException $e) {
                              return ['status' => false, 'msg' => $e->getMessage()];
                          }
                      }else{
                        $error = "File melebihi Kapasitas"; 
                        var_dump($error);die;
                    }
                }else{
                    $error = "File melebihi Kapasitas"; 
                    var_dump($error);die;
                }
            }else {
                $error = "Extensi Gambar salah"; 
                var_dump($error);die;
            }
        }
    }else{
        $query = "UPDATE tb_barang SET nama_brng =:nama_brng, jumlah =:jumlah, kondisi =:kondisi, deskripsi = :deskripsi, id_jenis = :id_jenis, id_ruang = :id_ruang WHERE id_barang =:id_barang";
        try{
            $this->db->query($query);
            $this->db->bind('nama_brng', $data["nama"]);
            $this->db->bind('jumlah', $data["jumlah_barang"]);
            $this->db->bind('kondisi', $data["kondisi"]);
            $this->db->bind('deskripsi', $data["keterangan"]);
            $this->db->bind('id_jenis', $data["jenis"]);
            $this->db->bind('id_ruang', $data["ruangan"]);
            $this->db->bind('id_barang', $data["id"] );
            $this->db->execute();
            return ['status' => true];
        } catch (PDOException $e) {
          return ['status' => false, 'msg' => $e->getMessage()];
      }
    }
    }



    /*-------------------------------------------- UPDATE -------------------------------------------------*/
    public function Ujenis($data)
    {
        $query = "UPDATE tb_jenis SET nama_jenis =:nama, kode_jenis =:kode, keterangan =:keterangan WHERE id_jenis =:id";
        try {
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('kode', $data['kode_jenis']);
            $this->db->bind('keterangan', $data['keterangan']);
            $this->db->bind('id', $data['id']);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
         return ['status' => false, 'msg' =>$e->getMessage()];
     }
    }

    public function Uruang($data)
    {
            // var_dump($data);die;
        $query = "UPDATE tb_ruang SET nama_ruang =:nama, kode_ruang =:kode, keterangan =:keterangan WHERE id_ruang =:id";
        try {
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('kode', $data['kode_ruang']);
            $this->db->bind('keterangan', $data['keterangan']);
            $this->db->bind('id', $data['id']);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
           return ['status' => false, 'msg' =>$e->getMessage()];
       }
    }

    public function Uuser($data){

        $password_baru = $data['password'];
        $Upw = $this->model('Get_models')->ambilDataBy('id_auth',$data['id'],'auth');
        $password_lama = $Upw['password'];

        if (empty($password_baru)) {
            $query = "UPDATE auth SET username = :username, nama = :nama, no_induk = :no_induk, id_level = :id_level WHERE id_auth = :id_auth";
            try {
                    $this->db->query($query);
                    $this->db->bind('username', $data['username']);
                    $this->db->bind('nama', $data['nama']);
                    $this->db->bind('no_induk', $data['no_induk']);
                    $this->db->bind('id_level', $data['level']);
                    $this->db->bind('id_auth', $data['id']);
                    $this->db->execute();
                    return ['status' => true];
                } catch (Exception $e) {
                 return ['status' => false, 'msg' =>$e->getMessage()];
             }
         }else {
            if (password_verify($password_baru ,$password_lama)) {

                $password_baruV2 = password_hash($data['con_pass'], PASSWORD_DEFAULT);
             $query = "UPDATE auth SET username = :username, password = :password, nama = :nama, no_induk = :no_induk, id_level = :id_level WHERE id_auth = :id_auth";
             try {
                    $this->db->query($query);
                    $this->db->bind('username', $data['username']);
                    $this->db->bind('password', $password_baruV2);
                    $this->db->bind('nama', $data['nama']);
                    $this->db->bind('no_induk', $data['no_induk']);
                    $this->db->bind('id_level', $data['level']);
                    $this->db->bind('id_auth', $data['id']);
                    $this->db->execute();
                    return ['status' => true];
                } catch (Exception $e) {
                 return ['status' => false, 'msg' =>$e->getMessage()];
             }
            }else{
                Flasher::setFlash('Password Lama Anda ','Salah !!','error');
                header('Location: '. BASEURL . '/user/');
                exit();
            }
        }
    }


    public function Upinjam($data)
    {
        $ad = $this->model('Get_models')->ambilDataBy('id_peminjam',$data['id'],'tb_pinjam');
        $waktuLm = explode("-", $ad['tanggal_kembali']);
        $waktu = $data['pinjam'];
        $sampai = mktime(0,0,0,$waktuLm[1],$waktuLm[2]+$waktu, $waktuLm[0]);
        $kembali = date("Y-m-d", $sampai);

        $query = "UPDATE tb_pinjam SET tanggal_kembali = :tanggal_kembali, jumlah_pinjam =:jumlah_pinjam, id_auth = :id_auth, id_barang = :id_barang";
        try {
            $this->db->query($query);
            $this->db->bind('tanggal_kembali', $kembali);
            $this->db->bind('jumlah_pinjam',$data['jumlah']);
            $this->db->bind('id_auth',$data['peminjam']);
            $this->db->bind('id_barang',$data['pilih_barang']);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return['status' => false, 'msg' => $e->getMessage()];
        }
    }


    /*-------------------------------------------- kembali -------------------------------------------------*/

    public function kembali($id)
    {
        

        $data =  $this->model('Get_models')->ambilDataBy('id_peminjam',$id,'tb_pinjam');
        $tgl_pinjam = $data['tanggal_pinjam'];

        $tanggal_pinjam = strtotime($tgl_pinjam);
        $tanggal_kembali = strtotime($data['tanggal_kembali']);
        $harus_kembali = strtotime($date);
        $selisih = $harus_kembali -  $tanggal_kembali ;
        $hitung_hari = floor($selisih/(60*60*24)); 
        // $selisih2 = (abs($tanggal_pinjam - $tanggal_kembali));
        // $sampai = floor($selisih2/(60*60*24)); //12
        // var_dump($hitung_hari);die;
        if($hitung_hari > 0){
            $denda = 1000 * $hitung_hari * $data['jumlah_pinjam'];
        }else{
            $denda = 0;
        }
        // var_dump($data);die;
        try {
                $query = "INSERT INTO tb_kembali VALUES ('', :tanggal_pinjam, :jatuh_tempo, :jumlah_pinjam, :denda, :id_auth, :id_barang)";
                $this->db->query($query);
                $this->db->bind('tanggal_pinjam', $tgl_pinjam);
                $this->db->bind('jatuh_tempo', $data['tanggal_kembali']);
                $this->db->bind('jumlah_pinjam', $data['jumlah_pinjam']);
                $this->db->bind('id_auth', $data['id_auth']);
                $this->db->bind('id_barang',$data['id_barang']);
                $this->db->bind('denda',$denda);
                $this->db->execute();

                $queryD = "DELETE FROM tb_pinjam WHERE id_peminjam = $id";
                $this->db->query($queryD);
                $this->db->execute();

                return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function proses_pinjam($data){
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date('Y-m-d');
        $waktu = $data['pinjam'];
        $sampai = mktime(0,0,0,date("n"),date("j")+$waktu, date("Y"));
        $kembali = date("Y-m-d", $sampai);
        $query = "INSERT INTO tb_pinjam VALUES ('', :tanggal_pinjam, :tanggal_kembali, :jumlah_pinjam, :status, :id_auth, :id_barang)";
        try {
            $this->db->query($query);
            $this->db->bind('tanggal_pinjam',$date);
            $this->db->bind('tanggal_kembali', $kembali);
            $this->db->bind('jumlah_pinjam',$data['jumlah_barang']);
            $this->db->bind('id_auth',$data['id_auth']);
            $this->db->bind('id_barang',$data['id_barang']);
            $this->db->bind('status', 0);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return['status' => false, 'msg' => $e->getMessage()];
        }      
    }

}


