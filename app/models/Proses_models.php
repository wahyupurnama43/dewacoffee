<?php  
class Proses_models extends Controller
{	
	private $db;
	public function __construct()
	{
		$this->db = new Database;
	}

/*
|----------------------------------------------------------------------------------------------------------------------------------------
|                                                        TAMBAH DATA
|----------------------------------------------------------------------------------------------------------------------------------------
*/

public function Tjenis($data)
{
             /*
             |--------------------------------------------------------------------------
             | Tambah Jenis 
             |--------------------------------------------------------------------------
             |
             | mengamankan form dari xss
             | 
             |--------------------------------------------------------------------------
             */
             $nama = htmlspecialchars($data['nama'],  ENT_QUOTES);
             $kode_jenis = htmlspecialchars($data['kode_jenis'],  ENT_QUOTES);
             $keterangan = htmlspecialchars($data['keterangan'],  ENT_QUOTES);
             $query = "INSERT INTO tb_jenis VALUES ('', :nama_jenis, :kode_jenis, :keterangan)";
             try {
                /*
                |--------------------------------------------------------------------------
                | Tambah jenis 
                |--------------------------------------------------------------------------
                |
                | Memasukkan data kedalam database
                | 
                |--------------------------------------------------------------------------
                */
                $this->db->query($query);
                $this->db->bind('nama_jenis',$nama);
                $this->db->bind('kode_jenis',$kode_jenis);
                $this->db->bind('keterangan',$keterangan);
                $this->db->execute();
                return ['status' => true];
            } catch (Exception $e) {
                return['status' => false, 'msg' => $e->getMessage()];
            }
        }

        public function Tpinjam($data)
        {   
        /*
        |--------------------------------------------------------------------------
        | Tambah Pinjam 
        |--------------------------------------------------------------------------
        |
        | mengamankan dari serangan xss
        | 
        |--------------------------------------------------------------------------
        */
        $peminjam = htmlspecialchars($data['peminjam'],  ENT_QUOTES);
        $pinjam = htmlspecialchars($data['pinjam'],  ENT_QUOTES);
        $pilih_barang = htmlspecialchars($data['pilih_barang'],  ENT_QUOTES);
        $jumlah = htmlspecialchars($data['jumlah'],  ENT_QUOTES);
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date('Y-m-d');
        $waktu = $pinjam;
        $sampai = mktime(0,0,0,date("n"),date("j")+$waktu, date("Y"));
        $kembali = date("Y-m-d", $sampai);
        $query = "INSERT INTO tb_pinjam VALUES ('', :tanggal_pinjam, :tanggal_kembali, :status, :lama_pinjam, :id_auth)";
        try {
            /*
            |--------------------------------------------------------------------------
            | Tambah Pinjam 
            |--------------------------------------------------------------------------
            |
            | Menambahkan data ke dalam table tb_pinjam
            | 
            |--------------------------------------------------------------------------
            */
            $this->db->query($query);
            $this->db->bind('tanggal_pinjam',$date);
            $this->db->bind('tanggal_kembali', $kembali);
            $this->db->bind('id_auth',$data['peminjam']);
            $this->db->bind('lama_pinjam', $data['pinjam']);
            $this->db->bind('status','1');
            $this->db->execute();

            /*
            |--------------------------------------------------------------------------
            | Tambah jenis 
            |--------------------------------------------------------------------------
            |
            | Mengambil data dari tb pinjam dengan id peminjam dan memasukkan de variab
            | - le pinjam
            |--------------------------------------------------------------------------
            */
            $pinjam = $this->model('Get_models')->ambilDataBy('id_auth',$peminjam,'tb_pinjam');

            /*
            |--------------------------------------------------------------------------
            | Tambah Pinjam 
            |--------------------------------------------------------------------------
            |
            | Memasukkan data ke dalam table detail_pinjma
            | 
            |--------------------------------------------------------------------------
            */
            $query1 = "INSERT INTO detail_pinjam VALUES ('', :id_barang, :id_peminjam, :jumlah_pinjam)";
            $this->db->query($query1);
            $this->db->bind('id_barang', $pilih_barang);
            $this->db->bind('id_peminjam',$pinjam['id_peminjam']);
            $this->db->bind('jumlah_pinjam',$jumlah);
            $this->db->execute();

            return ['status' => true];
        } catch (Exception $e) {
            return['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function Truang($data)
    {
        /*
        |--------------------------------------------------------------------------
        | Tambah Ruang 
        |--------------------------------------------------------------------------
        |
        | mengamankan data form dari serangan xss 
        | 
        |--------------------------------------------------------------------------
        */
        $nama = htmlspecialchars($data['nama'],  ENT_QUOTES);
        $kode_ruang = htmlspecialchars($data['kode_ruang'],  ENT_QUOTES);
        $keterangan = htmlspecialchars($data['keterangan'],  ENT_QUOTES);
        $query = "INSERT INTO tb_ruang VALUES ('',:nama_ruang, :kode_ruang, :keterangan)";
        try {
            /*
            |--------------------------------------------------------------------------
            | Tambah Ruang 
            |--------------------------------------------------------------------------
            |
            | memasukkan data ke dalam table tb_ruang
            | 
            |--------------------------------------------------------------------------
            */
            $this->db->query($query);
            $this->db->bind('nama_ruang',$nama);
            $this->db->bind('kode_ruang',$kode_ruang);
            $this->db->bind('keterangan',$keterangan);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function Tuser($data)
    {

        /*
        |--------------------------------------------------------------------------
        | Tambah User 
        |--------------------------------------------------------------------------
        |
        | Mengamankan data form dari serangan xss
        | 
        |--------------------------------------------------------------------------
        */
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date('Y-m-d');
        $username = strtolower(stripcslashes($data['username']));
        $nama = htmlspecialchars(stripcslashes($data['nama']),  ENT_QUOTES);
        $password = htmlspecialchars($data['password'],  ENT_QUOTES);
        $con_password = htmlspecialchars($data['con_pass'],  ENT_QUOTES);
        $username_asli = htmlspecialchars(stripcslashes($data['username']),  ENT_QUOTES);
        $no_induk = htmlspecialchars($data['no_induk'],  ENT_QUOTES);
        $level = htmlspecialchars($data['level'],  ENT_QUOTES);

        /*
        |--------------------------------------------------------------------------
        | Tambah User 
        |--------------------------------------------------------------------------
        |
        | Mengambil data dari tb auth dengan username dan di simpan di variable
        | cek_username yang nantik digunakan untuk apakah ada akun yg sama
        |--------------------------------------------------------------------------
        */

        $cek_username = $this->model('Get_models')->ambilDataBy('username',$username,'auth');
        
        /*
        |--------------------------------------------------------------------------
        | Tambah user 
        |--------------------------------------------------------------------------
        |
        | CEK USERNAME ADA ATAU TIDAK DI DATABASE 
        | 
        |--------------------------------------------------------------------------
        */
        if ($cek_username > 0) {
            Flasher::setFlash('Username Anda ','Sudah Terdaftar','error');
            header('Location: '. BASE_URL . '/user/');
            exit();
        }
        /*
        |--------------------------------------------------------------------------
        | TAMBAH USER  
        |--------------------------------------------------------------------------
        |
        | CEK APAKAH PASSWORD YANG DIMASUKKIN ITU SAMA ATAU TIDAK SAMA MAKA ULANG
        | 
        |--------------------------------------------------------------------------
        */
        if ($password !== $con_password) {
           Flasher::setFlash('Password Anda ','Harus Sama','error');
           header('Location: '. BASE_URL . '/user/');
           exit();
       }

     /*
     |--------------------------------------------------------------------------
     | TAMBAH USER 
     |--------------------------------------------------------------------------
     |
     | PASSWORD YANG DIMASUKKAN DI ENCRIPSI HASH AKAN LEBIH AMAN
     | 
     |--------------------------------------------------------------------------
     */
     $password_hash = password_hash($password, PASSWORD_DEFAULT);
     $query = "INSERT INTO auth VALUES ('',:username, :password, :nama, :no_induk, :tgl_daftar, :id_level)";
     try {
        /*
        |--------------------------------------------------------------------------
        | TAMBAH USER  
        |--------------------------------------------------------------------------
        |
        | MEMASUKKAN DATA FORM KE TABLE AUTH
        | 
        |--------------------------------------------------------------------------
        */
        $this->db->query($query);
        $this->db->bind('username',$username_asli);
        $this->db->bind('password',$password_hash);
        $this->db->bind('nama',$nama);
        $this->db->bind('no_induk',$no_induk);
        $this->db->bind('tgl_daftar',$date);
        $this->db->bind('id_level',$level);
        $this->db->execute();
        return ['status' => true];
    } catch (Exception $e) {
        return ['status' => false, 'msg' => $e->getMessage()];
    }
}

public function Tbarang($data)
{
        /*
        |--------------------------------------------------------------------------
        | TAMBAH BARANG 
        |--------------------------------------------------------------------------
        |
        | MENGAMANKAN DATA FORM DARI SERANGAN XSS
        | 
        |--------------------------------------------------------------------------
        */
        $nama = htmlspecialchars($data['nama'],  ENT_QUOTES);
        $jumlah_barang = htmlspecialchars($data['jumlah_barang'],  ENT_QUOTES);
        $kondisi = htmlspecialchars($data['kondisi'],  ENT_QUOTES);
        $keterangan = htmlspecialchars($data['keterangan'],  ENT_QUOTES);
        $jenis = htmlspecialchars($data['jenis'],  ENT_QUOTES);
        $ruangan = htmlspecialchars($data['ruangan'],  ENT_QUOTES);
        
        /*
        |--------------------------------------------------------------------------
        | TAMBAH BARANG 
        |--------------------------------------------------------------------------
        |
        | KITA CEK NAMA BARANG ITU HARIS DI AWALI HURUF KAPITAL DAN PANJANG NAMA
        | BARANG TIDAK LEBIH DARI 50 CHARAKTER
        |--------------------------------------------------------------------------
        */
        $nama_barang = strlen($data['nama']);
        $awal_barang = substr($data['nama'], 0,1);

        if ($nama_barang < 50) {

            if (ctype_upper($awal_barang)) {

                        $file_max_weight = 1000000; //limmit gambar

                        $ok_ext = array('jpg','png','gif','jpeg'); // gambar yang diterima

                        $destination = "C:/xampp/htdocs/Inventaris_skensa/public/img/daftar-barang/"; // simpen dmana nantik

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
                                            /*
                                            |--------------------------------------------------------------------------
                                            | TAMBAH BARANG 
                                            |--------------------------------------------------------------------------
                                            |
                                            | MEMASUKKAN DATA KE TABLE TB_BARANG 
                                            | 
                                            |--------------------------------------------------------------------------
                                            */
                                            $this->db->query($query);
                                            $this->db->bind('nama_brng', $nama);
                                            $this->db->bind('jumlah', $jumlah_barang);
                                            $this->db->bind('tanggal_masuk', $date);
                                            $this->db->bind('kondisi', $kondisi);
                                            $this->db->bind('deskripsi', $keterangan);
                                            $this->db->bind('id_jenis', $jenis);
                                            $this->db->bind('id_ruang', $ruangan);
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
                                   header('Location: '.BASE_URL.'/barang');
                                   exit();
                               }
                           }else{
                              Flasher::setFlash('Extensi Gambar jpeg, jpg, png, gif', ' !!','error');
                              header('Location: '.BASE_URL.'/barang');
                              exit();
                          }
                      }else {
                          Flasher::setFlash('Barang Harus Memiliki Gambar', ' !!','error');
                          header('Location: '.BASE_URL.'/barang');
                          exit();
                      }
                  }else {
                      Flasher::setFlash('Nama Barang Harus Memiliki Awalan Kapital', ' !!','error');
                      header('Location: '.BASE_URL.'/barang');
                      exit();
                  }

              }else{
                  Flasher::setFlash('Nama Barang Terlalu', ' Panjang !!','error');
                  header('Location: '.BASE_URL.'/barang');
                  exit();
              }

          }




    /*
    |----------------------------------------------------------------------------------------------------------------------------------------
    |                                                            FUNCTION HAPUS
    |----------------------------------------------------------------------------------------------------------------------------------------
    */



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
        $destination = "C:/xampp/htdocs/Inventaris_skensa/public/img/daftar-barang/";
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

        $query = "DELETE FROM detail_pinjam WHERE id_peminjam = $id";
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



    /*
    |----------------------------------------------------------------------------------------------------------------------------------------
    |                                                            Function UPDATE
    |----------------------------------------------------------------------------------------------------------------------------------------
    */



    public function Ubarang($data)
    {

           /*
           |--------------------------------------------------------------------------
           | update barang 
           |--------------------------------------------------------------------------
           |
           | mengamankan form dari serangan xss 
           | 
           */

           $nama = htmlspecialchars($data['nama'],  ENT_QUOTES);
           $jumlah_barang = htmlspecialchars($data['jumlah_barang'],  ENT_QUOTES);
           $kondisi = htmlspecialchars($data['kondisi'],  ENT_QUOTES);
           $keterangan = htmlspecialchars($data['keterangan'],  ENT_QUOTES);
           $jenis = htmlspecialchars($data['jenis'],  ENT_QUOTES);
           $ruangan = htmlspecialchars($data['ruangan'],  ENT_QUOTES);
           $id = htmlspecialchars($data['id'],  ENT_QUOTES);
           $isigambar = $_FILES['gambar'];

            /*
            |--------------------------------------------------------------------------
            | update barang 
            |--------------------------------------------------------------------------
            |
            | menegecek ada gambar atau tidak
            | 
            | 
            |
            */
            if ($isigambar['error'] == 0) {
                     // var_dump($data);die;
                $query = "SELECT * FROM tb_barang WHERE id_barang = :id";
                $this->db->query($query);
                $this->db->bind('id', $data['id']);
                $dataambil = $this->db->single();

                    $file_max_weight = 1000000; //limmit gambar

                    $ok_ext = array('jpg','png','gif','jpeg'); // gambar yang diterima

                    $destination = "C:/xampp/htdocs/Inventaris_skensa/public/img/daftar-barang/";  // simpen dmana nantik

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

                                    /*
                                    |--------------------------------------------------------------------------
                                    | update barang 
                                    |--------------------------------------------------------------------------
                                    |
                                    | memasukkan data yang dia update jika data yang di update isi gambar 
                                    |
                                    */
                                    $this->db->query($query);
                                    $this->db->bind('nama_brng', $nama);
                                    $this->db->bind('jumlah', $jumlah_barang);
                                    $this->db->bind('kondisi', $kondisi);
                                    $this->db->bind('deskripsi', $keterangan);
                                    $this->db->bind('id_jenis', $jenis);
                                    $this->db->bind('id_ruang', $ruangan);
                                    $this->db->bind('gambar', $fileNewName);
                                    $this->db->bind('id_barang', $id);
                                    $this->db->execute();
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
            /*
            |--------------------------------------------------------------------------
            | Update barang 
            |--------------------------------------------------------------------------
            |
            | jika yang di update tidak isi gambar 
            |
            */
            $query = "UPDATE tb_barang SET nama_brng =:nama_brng, jumlah =:jumlah, kondisi =:kondisi, deskripsi = :deskripsi, id_jenis = :id_jenis, id_ruang = :id_ruang WHERE id_barang =:id_barang";
            try{
                $this->db->query($query);
                $this->db->bind('nama_brng', $nama);
                $this->db->bind('jumlah', $jumlah_barang);
                $this->db->bind('kondisi', $kondisi);
                $this->db->bind('deskripsi', $keterangan);
                $this->db->bind('id_jenis', $jenis);
                $this->db->bind('id_ruang', $ruangan);
                $this->db->bind('id_barang', $id );
                $this->db->execute();
                return ['status' => true];
            } catch (PDOException $e) {
              return ['status' => false, 'msg' => $e->getMessage()];
          }
      }
  }

  public function Ujenis($data)
  {
        /*
        |--------------------------------------------------------------------------
        | UPDATE JENIS 
        |--------------------------------------------------------------------------
        |
        | Mengamankan form dari serangan xss
        |
        */
        $nama = htmlspecialchars($data['nama'],  ENT_QUOTES);
        $kode_jenis = htmlspecialchars($data['kode_jenis'],  ENT_QUOTES);
        $keterangan = htmlspecialchars($data['keterangan'],  ENT_QUOTES);
        $id = htmlspecialchars($data['id'],  ENT_QUOTES);
        $query = "UPDATE tb_jenis SET nama_jenis =:nama, kode_jenis =:kode, keterangan =:keterangan WHERE id_jenis =:id";
        try {
            /*
            |--------------------------------------------------------------------------
            | Memasukkan data ke data base 
            |--------------------------------------------------------------------------
            */
            $this->db->query($query);
            $this->db->bind('nama', $nama);
            $this->db->bind('kode', $kode_jenis);
            $this->db->bind('keterangan', $keterangan);
            $this->db->bind('id', $id);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
         return ['status' => false, 'msg' =>$e->getMessage()];
     }
 }

 public function Uruang($data)
 {
        /*
        |--------------------------------------------------------------------------
        | UPDATE RUANG 
        |--------------------------------------------------------------------------
        |
        | Mengamankan form dari serangan xss 
        |
        */
        $nama = htmlspecialchars($data['nama'],  ENT_QUOTES);
        $kode_ruang = htmlspecialchars($data['kode_ruang'],  ENT_QUOTES);
        $keterangan = htmlspecialchars($data['keterangan'],  ENT_QUOTES);
        $id = htmlspecialchars($data['id'],  ENT_QUOTES);
        $query = "UPDATE tb_ruang SET nama_ruang =:nama, kode_ruang =:kode, keterangan =:keterangan WHERE id_ruang =:id";
        try {
            /*
            |--------------------------------------------------------------------------
            | Update Ruang 
            |--------------------------------------------------------------------------
            |
            | update data form ke database
            |
            |--------------------------------------------------------------------------
            */
            $this->db->query($query);
            $this->db->bind('nama', $nama);
            $this->db->bind('kode', $kode_ruang);
            $this->db->bind('keterangan', $keterangan);
            $this->db->bind('id', $id);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
           return ['status' => false, 'msg' =>$e->getMessage()];
       }
   }

   public function Uuser($data){
        /*
        |--------------------------------------------------------------------------
        | Update User 
        |--------------------------------------------------------------------------
        |
        | Mengamankan dari serangan xss
        | 
        |--------------------------------------------------------------------------
        */
        $nama = htmlspecialchars($data['nama'],  ENT_QUOTES);
        $username = htmlspecialchars($data['username'],  ENT_QUOTES);
        $no_induk = htmlspecialchars($data['no_induk'],  ENT_QUOTES);
        $level = htmlspecialchars($data['level'],  ENT_QUOTES);
        $id = htmlspecialchars($data['id'],  ENT_QUOTES);
        $password_baru = htmlspecialchars($data['password']);
        $Upw = $this->model('Get_models')->ambilDataBy('id_auth',$data['id'],'auth');
        $password_lama = $Upw['password'];


        /*
        |--------------------------------------------------------------------------
        | Update User 
        |--------------------------------------------------------------------------
        |
        | Klok ada passwornya tidak di update alias kosong maska jalanin if ini
        | 
        |--------------------------------------------------------------------------
        */
        if (empty($password_baru)) {
            $query = "UPDATE auth SET username = :username, nama = :nama, no_induk = :no_induk, id_level = :id_level WHERE id_auth = :id_auth";
            try {
                $this->db->query($query);
                $this->db->bind('username', $username);
                $this->db->bind('nama', $nama);
                $this->db->bind('no_induk', $no_induk);
                $this->db->bind('id_level', $level);
                $this->db->bind('id_auth', $id);
                $this->db->execute();
                return ['status' => true];
            } catch (Exception $e) {
             return ['status' => false, 'msg' =>$e->getMessage()];
         }
     }else {
            /*
            |--------------------------------------------------------------------------
            | Update user 
            |--------------------------------------------------------------------------
            |
            | Klok user ingin menganti password maka lakukan function ini
            |
            |--------------------------------------------------------------------------
            */
            if (password_verify($password_baru ,$password_lama)) {
                $password_baruV2 = password_hash($data['con_pass'], PASSWORD_DEFAULT);
                $query = "UPDATE auth SET username = :username, password = :password, nama = :nama, no_induk = :no_induk, id_level = :id_level WHERE id_auth = :id_auth";
                try {
                    $this->db->query($query);
                    $this->db->bind('username', $username);
                    $this->db->bind('password', $password_baruV2);
                    $this->db->bind('nama', $nama);
                    $this->db->bind('no_induk', $no_induk);
                    $this->db->bind('id_level', $level);
                    $this->db->bind('id_auth', $id);
                    $this->db->execute();
                    return ['status' => true];
                } catch (Exception $e) {
                 return ['status' => false, 'msg' =>$e->getMessage()];
             }
         }else{
            Flasher::setFlash('Password Lama Anda ','Salah !!','error');
            header('Location: '. BASE_URL . '/user/');
            exit();
        }
    }
}


public function Upinjam($data)
{
        /*
        |--------------------------------------------------------------------------
        | Update Pinjam 
        |--------------------------------------------------------------------------
        |
        | Mengamankan form dari serangan xss
        | 
        |--------------------------------------------------------------------------
        */
        $id = htmlspecialchars($data['id'],  ENT_QUOTES);
        $pinjam = htmlspecialchars($data['pinjam'],  ENT_QUOTES);
        $peminjam = htmlspecialchars($data['peminjam'],  ENT_QUOTES);
        $jumlah = htmlspecialchars($data['jumlah'],  ENT_QUOTES);
        $pilih_barang = htmlspecialchars($data['pilih_barang'],  ENT_QUOTES);

        $ad = $this->model('Get_models')->ambilDataBy('id_peminjam',$id,'tb_pinjam');
        $waktuLm = explode("-", $ad['tanggal_kembali']);
        $waktu = $pinjam;
        $sampai = mktime(0,0,0, $waktuLm[1],$waktuLm[2]+$waktu, $waktuLm[0]);
        $kembali = date("Y-m-d", $sampai);

        $query = "UPDATE tb_pinjam SET tanggal_kembali = :tanggal_kembali, id_auth = :id_auth WHERE id_peminjam = :id_peminjam";
        try {
            /*
            |--------------------------------------------------------------------------
            | Update Pinjam 
            |--------------------------------------------------------------------------
            |
            | Update pada tb_pinjam
            | 
            |--------------------------------------------------------------------------
            */
            $this->db->query($query);
            $this->db->bind('tanggal_kembali', $kembali);
            $this->db->bind('id_auth',$peminjam);
            $this->db->bind('id_peminjam',$id);
            $this->db->execute();

            /*
            |--------------------------------------------------------------------------
            | Update Pinjam 
            |--------------------------------------------------------------------------
            |
            | Update pada tb detail_pinjam
            | 
            |--------------------------------------------------------------------------
            */
            $query = "UPDATE detail_pinjam SET jumlah_pinjam = :jumlah_pinjam, id_barang = :id_barang WHERE id_peminjam = :id_peminjam";
            $this->db->query($query);
            $this->db->bind('jumlah_pinjam',$jumlah);
            $this->db->bind('id_barang',$pilih_barang);
            $this->db->bind('id_peminjam',$id);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return['status' => false, 'msg' => $e->getMessage()];
        }
    }

    public function Ulike($id)
    {
        $id_decode = Encripsi::encode('decrypt', $id);
        $id_auth = $_SESSION['auth'];
        $cek = $this->model('Get_models')->ambilDataBy2('id_barang', $id_decode, 'id_auth' ,$id_auth,'tb_like');
        $barang = $this->model('Get_models')->ambilDataBy('id_barang', $id_decode, 'tb_barang');

        if ($cek > 0) {
            $query = "DELETE FROM tb_like WHERE id_auth = $id_auth AND id_barang = $id_decode";
            $this->db->query($query);
            $this->db->execute();
            $query = "UPDATE tb_barang SET like_count = :like_count WHERE id_barang = $id_decode";
            $this->db->query($query);
            $this->db->bind('like_count', $barang['like_count']-'1');
            $this->db->execute();

            $query ="SELECT like_count FROM tb_barang GROUP BY id_barang";
            $this->db->query($query);
            return $this->db->resultSet();
                   
        }else{
            $query = "INSERT INTO tb_like VALUES ('', :id_barang, :id_auth)";
            $this->db->query($query);
            $this->db->bind('id_barang', $id_decode);
            $this->db->bind('id_auth', $id_auth);
            $this->db->execute();
            $query = "UPDATE tb_barang SET like_count = :like_count WHERE id_barang = $id_decode";

            $this->db->query($query);
            $this->db->bind('like_count', $barang['like_count']+'1');
            $this->db->execute();

            $query ="SELECT like_count FROM tb_barang GROUP BY id_barang";
            $this->db->query($query);
            return $this->db->resultSet();
        }


    }

    /*
    |----------------------------------------------------------------------------------------------------------------------------------------
    |                                                           KEMBALI BARANG
    |----------------------------------------------------------------------------------------------------------------------------------------
    */

    public function kembali($id)
    {
        /*
        |--------------------------------------------------------------------------
        | Pengembalian Barang 
        |--------------------------------------------------------------------------
        |
        | mengembalikan barang
        | 
        |--------------------------------------------------------------------------
        */
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date('Y-m-d');

        $data =  $this->model('Get_models')->ambilDatapinjamOne('detail_pinjam',$id,'id_peminjam');
        $tgl_pinjam = $data['tanggal_pinjam'];

        $tanggal_kembali = strtotime($data['tanggal_kembali']);
        $harus_kembali = strtotime($date);
        $selisih = $harus_kembali -  $tanggal_kembali;
        $hitung_hari = floor($selisih/(60*60*24)); 
        if($hitung_hari > 0){
            $denda = 1000 * $hitung_hari * $data['jumlah_pinjam'];
        }else{
            $denda = 0;
        }
        $query = "INSERT INTO tb_kembali VALUES ('', :tanggal_pinjam, :denda, :jatuh_tempo, :id_auth, :id_detail_pinjam)";
        try {
            $this->db->query($query);
            $this->db->bind('tanggal_pinjam', $data['tanggal_pinjam']);
            $this->db->bind('jatuh_tempo', $data['tanggal_kembali']);
            $this->db->bind('id_auth', $data['id_auth']);
            $this->db->bind('denda', $denda);
            $this->db->bind('id_detail_pinjam', $data['id_detail_pinjam']);
            $this->db->execute();

            $query1 = "DELETE FROM tb_pinjam WHERE id_peminjam = $id";
            $this->db->query($query1);
            $this->db->execute();
            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }
    /*
    |----------------------------------------------------------------------------------------------------------------------------------------
    |                                                      PROSES PINJAM DARI MENU USER
    |----------------------------------------------------------------------------------------------------------------------------------------
    */
    public function proses_pinjam($data){
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date('Y-m-d');

        $query = "INSERT INTO tb_pinjam VALUES ('', :tanggal_pinjam, :tanggal_kembali, :status, :lama_pinjam, :id_auth)";
        try {
            /*
            |--------------------------------------------------------------------------
            | Tambah Pinjam 
            |--------------------------------------------------------------------------
            |
            | Menambahkan data ke dalam table tb_pinjam
            | 
            |--------------------------------------------------------------------------
            */
            $this->db->query($query);
            $this->db->bind('tanggal_pinjam',$date);
            $this->db->bind('tanggal_kembali', '0000-00-00');
            $this->db->bind('id_auth',$data['id_auth']);
            $this->db->bind('lama_pinjam', $data['pinjam']);
            $this->db->bind('status', '0');
            $this->db->execute();

            /*
            |--------------------------------------------------------------------------
            | Tambah jenis 
            |--------------------------------------------------------------------------
            |
            | Mengambil data dari tb pinjam dengan id peminjam dan memasukkan de variab
            | - le pinjam
            |--------------------------------------------------------------------------
            */
            $pinjam = $this->model('Get_models')->ambilDataBy('id_auth',$data['id_auth'],'tb_pinjam');

            /*
            |--------------------------------------------------------------------------
            | Tambah Pinjam 
            |--------------------------------------------------------------------------
            |
            | Memasukkan data ke dalam table detail_pinjma
            | 
            |--------------------------------------------------------------------------
            */

            $query1 = "INSERT INTO detail_pinjam VALUES ('', :id_barang, :id_peminjam, :jumlah_pinjam)";
            $this->db->query($query1);
            $this->db->bind('id_barang', $data['id_barang']);
            $this->db->bind('id_peminjam', $pinjam['id_peminjam']);
            $this->db->bind('jumlah_pinjam', $data['jumlah_barang']);
            $this->db->execute();

            return ['status' => true];
        } catch (Exception $e) {
            return['status' => false, 'msg' => $e->getMessage()];
        }
    }


    public function confirm($id){
        $id = Encripsi::encode('decrypt',$id);
        /*
        |--------------------------------------------------------------------------
        | CONFIRM PEMINJAMAN OLEH ADMIN
        |--------------------------------------------------------------------------
        |
        | MENGAMBIL DATA DI TB PINJAM DENGAN ID YANG DI PILIH
        | 
        |--------------------------------------------------------------------------
        */

        $pinjam = $this->model('Get_models')->ambilDataBy('id_peminjam',$id, 'tb_pinjam');
        /*
        |--------------------------------------------------------------------------
        | CONFIRM PEMINJAMAN OLEH ADMIN
        |--------------------------------------------------------------------------
        |
        | MENSETTING DATA TANGGAL PINJAM DAN TANGGAL KEMBALI AGAR PEMINJAMAN 
        | TGL KEMBALI SESUAI DENGAN TANGGAL CONFIRM PADA ADMIN / PETUGAS
        |
        |--------------------------------------------------------------------------
        */
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date = date('Y-m-d');
        $waktu = $pinjam['lama_pinjam'];
        $sampai = mktime(0,0,0,date("n"),date("j")+$waktu, date("Y"));
        $kembali = date("Y-m-d", $sampai);

        /*
        |--------------------------------------------------------------------------
        | CONFIRM PEMINJAMAN OLEH ADMIN 
        |--------------------------------------------------------------------------
        |
        | MENGUPDATE DATA KE TB_PINJAM 
        | 
        |--------------------------------------------------------------------------
        */
        try {
            $query = "UPDATE tb_pinjam SET tanggal_pinjam = :tanggal_pinjam, tanggal_kembali = :tanggal_kembali , status = :status WHERE id_peminjam = $id";
            $this->db->query($query);
            $this->db->bind('tanggal_pinjam', $date);
            $this->db->bind('tanggal_kembali', $kembali);
            $this->db->bind('status', '1');
            $this->db->execute();

            return ['status' => true];
        } catch (Exception $e) {
            return ['status' => false, 'msg' => $e->getMessage()];
        }
    }

}


