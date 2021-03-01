<?php 

class M_Blog
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function ambilAllData($table)
    {
        $sql = "SELECT t.*, a.username FROM $table t
                INNER JOIN auth a ON a.id = t.id_user";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function getDataBlogId()
    {
        $sql = "SELECT id FROM blog ORDER BY created_at DESC LIMIT 1";
        $this->db->query($sql);
        return $this->db->single();   
    }
    public function ambilDataBy($id,$by,$table,$result)
    {
        $sql = "SELECT * FROM $table WHERE $by=$id";
        $this->db->query($sql);
        return $this->db->$result();
    }
    public function upload($gambar)
    {
        $judul =  htmlspecialchars($_POST['judul'],ENT_QUOTES);
        $deskripsi =  htmlspecialchars($_POST['deskripsi'],ENT_QUOTES);
        $tags =  $_POST['tags'][0];
        $id_user = $_SESSION['id'];
        $tag = explode(',',$tags);

        $sql = "INSERT INTO blog (`judul`,`deskripsi`,`banner`,`id_user`) VALUES (:judul,:deskripsi,:banner,:id_user)";
        $this->db->query($sql);
        $this->db->bind('judul',$judul);
        $this->db->bind('deskripsi',$deskripsi);
        $this->db->bind('id_user',$id_user);
        $this->db->bind('banner',$gambar);
        $this->db->execute();

        // masukkin data ke tags
        $id_blog = $this->getDataBlogId();
        foreach ($tag as $t) {
            $sql2 = "INSERT INTO tags (`tag`,`id_blog`) VALUES (:tag,:id_blog)";
            $this->db->query($sql2);
            $this->db->bind('tag',$t);
            $this->db->bind('id_blog',$id_blog['id']);
            $this->db->execute();
        }

        return true;
    }

    public function delete_blog($id)
    {
        $sql = "DELETE FROM blog WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        $this->db->execute();

        $sql2 = "DELETE FROM tags WHERE id_blog=:id";
        $this->db->query($sql2);
        $this->db->bind('id',$id);
        $this->db->execute();
        return true;
    }

    public function update($id,$gambar)
    {
        $ID = Encripsi::encode('decrypt',$id);
        $judul =  htmlspecialchars($_POST['judul'],ENT_QUOTES);
        $deskripsi =  htmlspecialchars($_POST['deskripsi'],ENT_QUOTES);
        $tags =  $_POST['tags'][0];
        $id_user = $_SESSION['id'];
        $tag = explode(',',$tags);

        if (isset($gambar) && $gambar !== null) {
            // hapus gambar di local
            $img = $this->ambilDataBy($ID,'id','blog','single');
            unlink('C:/xampp/htdocs/dewacoffee/public/upload/'.$img['banner']);
            $sql = "UPDATE blog SET judul=:judul,deskripsi=:deskripsi,id_user=:id_user,banner=:gambar WHERE id=$ID";
            $this->db->query($sql);
            $this->db->bind('judul',$judul);
            $this->db->bind('deskripsi',$deskripsi);
            $this->db->bind('id_user',$id_user);
            $this->db->bind('gambar',$gambar);
            $this->db->execute();
        }else{
            $sql = "UPDATE blog SET judul=:judul,deskripsi=:deskripsi,id_user=:id_user WHERE id=$ID";
            $this->db->query($sql);
            $this->db->bind('judul',$judul);
            $this->db->bind('deskripsi',$deskripsi);
            $this->db->bind('id_user',$id_user);
            $this->db->execute();
        }
      

        // masukkin data ke tags
        $allTag = $this->ambilDataBy($ID,'id_blog','tags','resultSet');
           
        foreach ($allTag as $altag) {
            var_dump($altag);die;
            // foreach ($tag as $t) {
            //     if($altag['tag'] === $t){
            //         var_dump('ada');die;
            //         $sql2 = "UPDATE tags SET tag=:tag WHERE id_blog=$ID && id=:id";
            //         $this->db->query($sql2);
            //         $this->db->bind('tag',$t);
            //         $this->db->bind('id',$altag['id']);
            //         $data = $this->db->execute();
            //         if ($data == null) {
            //             Flasher::setFlash('Tag yang anda masukkan sudah ada','error');
            //             header('Location: '. BASE_URL .'/dashboard/edit_blog/'.$id);
            //         }
            //     }else if($t === '' || $t === null)
            //     {
            //         var_dump('kosong');die;
            //         return true;
            //     }else{
            //         var_dump('ada');die;
            //         $sql3 = "INSERT INTO tags (`tag`,`id_blog`) VALUES (:tag,:id_blog)";
            //         $this->db->query($sql3);
            //         $this->db->bind('tag',$t);
            //         $this->db->bind('id_blog',$ID);
            //         $this->db->execute();
            //     }
            // }
         }

        return true;
    }

    public function delete_tags($id)
    {
        $sql = "DELETE FROM tags WHERE id=:id";
        $this->db->query($sql);
        $this->db->bind('id',$id);
        $this->db->execute();
    }
}
