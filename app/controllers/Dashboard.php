<?php
class Dashboard extends Controller
{

    // fungsi untutk home dashboard
    public function index()
    {
        if (isset($_SESSION) && $_SESSION['login'] == true)
        {
            if (isset($_SESSION) && $_SESSION['admin'] == true)
            {
                $data['header'] = 'Dashboard';
                $data['link_header'] = 'dashboard';
                $data['page'] = 'Home';
                $data['count_blog'] = $this->model('M_Home')->count('blog');
                $data['count_product'] = $this->model('M_Home')->count('product');
                $data['count_contact'] = $this->model('M_Home')->count('contact');
                $this->view('template/header', $data);
                $this->view('dashboard/index',$data);
                $this->view('template/footer');
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }
        else
        {
            Flasher::setFlash('login terlebih dahulu', 'error');
            header('Location: ' . BASE_URL . '/auth');
        }

    }

    //fungsi untuk dashboaard product
    public function product()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $responsecode = 200;
            try
            {
                $images = [];
                if (isset($_FILES['file']) && count($_FILES['file']['name']) <= 5)
                {
                        $files = $this->serialize_files($_FILES['file']);
                        foreach ($files as $file)
                        {
                            $images[] = $this->handle_upload_image($file);
                            // do upload
                        }
                        $this->model('M_Product')
                        ->upload($_POST, $images);
                }else{
                    $responsecode = 400;
                }

                // kalo ga mau pake trycatch gapapa, tapi kalo ada gagal, langsung aja $responsecode = 400
                
            }
            catch(Exception $e)
            {
                $responsecode = 400;
            }

            http_response_code($responsecode);
            // kalo mau var_dump juga bisa, langsung aja var_dump()
            // var_dump('test');
            // ini kalo submit tapi ada gambar nya, nnti bisa kirim pesan ke javacript lewat sini, tinggal echo aja,
            // ini buat handle AJAX-nya Dropzone
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
            {
                header('Content-Type: application/json');
                if ($responsecode == 200)
                {
                    // jika berhasil
                    echo json_encode(['status' => true, 'message' => 'Berhasil', ]);

                }
                else
                {
                    // jika gagal
                    echo json_encode(['status' => false, 'message' => 'Gagal']);
                }
                exit;
            }
        }

        if (isset($_SESSION) && $_SESSION['login'] == true)
        {
            if (isset($_SESSION) && $_SESSION['admin'] == true)
            {
                $data['header'] = 'Product';
                $data['link_header'] = 'dashboard/product';
                $data['page'] = 'Home';
                $data['product'] = $this->model('M_Product')
                    ->getAll();
                $this->view('template/header', $data);
                $this->view('dashboard/product/index', $data);
                $this->view('template/footer');
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }
        else
        {
            Flasher::setFlash('login terlebih dahulu', 'error');
            header('Location: ' . BASE_URL . '/auth');
        }

    }

    // fungsi untuk memecah gambar
    public function serialize_files(array $files)
    {
        $serialized = [];
        foreach ($files as $key => $values)
        {
            foreach ($values as $index => $value)
            {
                $serialized[$index][$key] = $value;
            }
        }
        return $serialized;
    }

    // fungsi untuk upload gambar
    public function handle_upload_image($file)
    {
        $error = $file['error'];
        $size = $file['size'];
        $name = $file['name'];
        $type = $file['type'];
        $tmp_name = $file['tmp_name'];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $newfilename = uniqid(rand()) . '.' . $ext;
        move_uploaded_file($tmp_name, 'public/upload/' . $newfilename);
        return $newfilename;
    }

    // fungsi untuk page edit product
    public function edit_product($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $responsecode = 200;
            try
            {
                $images = [];
                $ID = Encripsi::encode('decrypt', $id);
                if (isset($_FILES['file']) && count($_FILES['file']['name']) <= 5)
                {
                    $files = $this->serialize_files($_FILES['file']);
                    foreach ($files as $file)
                    {
                        $images[] = $this->handle_upload_image($file);
                    }
                    $this->model('M_Product')
                        ->update($_POST, $id, $images);
                }
                elseif (!isset($_FILES['file']))
                {
                    $this->model('M_Product')
                        ->update($_POST, $id, $images);
                    Flasher::setFlash('Data Berhasil Di Perbaharui', 'success');
                    header('Location: ' . BASE_URL . '/edit_product/' . $ID);
                }else{
                    $responsecode = 400;
                }

                // kalo ga mau pake trycatch gapapa, tapi kalo ada gagal, langsung aja $responsecode = 400
                
            }
            catch(Exception $e)
            {
                $responsecode = 400;
            }

            http_response_code($responsecode);
            // kalo mau var_dump juga bisa, langsung aja var_dump()
            // var_dump('test');
            // ini kalo submit tapi ada gambar nya, nnti bisa kirim pesan ke javacript lewat sini, tinggal echo aja,
            // ini buat handle AJAX-nya Dropzone
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
            {
                header('Content-Type: application/json');
                if ($responsecode == 200)
                {
                    // jika berhasil
                    echo json_encode(['status' => true, 'message' => 'Berhasil', ]);

                }
                else
                {
                    // jika gagal
                    echo json_encode(['status' => false, 'message' => 'Gagal']);
                }
                exit;
            }
        }

        if (isset($_SESSION) && $_SESSION['login'] == true)
        {
            if (isset($_SESSION) && $_SESSION['admin'] == true)
            {
                $ID = Encripsi::encode('decrypt', $id);
                $data['header'] = 'Product';
                $data['link_header'] = 'dashboard/product';
                $data['page'] = 'Edit';
                $data['product'] = $this->model('M_Product')
                    ->getBySingleId('product', $ID);
                $data['gallery'] = $this->model('M_Product')
                    ->getGalleryById($ID);
                $this->view('template/header', $data);
                $this->view('dashboard/product/edit', $data);
                $this->view('template/footer');
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }
        else
        {
            Flasher::setFlash('login terlebih dahulu', 'error');
            header('Location: ' . BASE_URL . '/auth');
        }

    }

    // fungsin untuk delete img product
    public function delete_img()
    {
        $id = $_POST['id'];
        $ID = Encripsi::encode('decrypt', $id);
        $this->model('M_Product')
            ->delete_img($ID);
    }

    // fungsi untuk delete product
    public function delete_product($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $return = $this->model('M_Product')
            ->delete_product($ID);

        if ($return == true)
        {
            Flasher::setFlash('Data Berhasil Di Delete', 'success');
            header('Location: ' . BASE_URL . '/dashboard/product');
        }
    }

    //function untuk active img
    public function active_img()
    {
        $id = $_POST['ID'];
        $id_img = $_POST['id'];
        $ID = Encripsi::encode('decrypt', $id);
        $img = Encripsi::encode('decrypt', $id_img);
        $this->model('M_Product')
            ->active_img($ID, $img);
    }

    /*
    |--------------------------------------------------------------------------
    | PAGE BLOG
    |--------------------------------------------------------------------------
    |
    | UNTUK LOAD PAGE BLOG DI DASHBOARD ADMIN
    |
    |--------------------------------------------------------------------------
    */

    // fungsi untuk Blog dashboard
    public function blog()
    {
        if (isset($_POST['submit']))
        {
            $gambar = $this->handle_upload_image($_FILES['gambar']);
            $result = $this->model('M_Blog')
                ->upload($gambar);
            if ($result == true)
            {
                Flasher::setFlash('Data Blog Behasil Di Tambah', 'success');
                header('Location: ' . BASE_URL . '/dashboard/blog');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'Blog';
                    $data['link_header'] = 'dashboard/blog';
                    $data['page'] = 'Home';
                    $data['blog'] = $this->model('M_Blog')
                        ->ambilAllData('Blog');
                    $this->view('template/header', $data);
                    $this->view('dashboard/blog/index', $data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }

            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }
    }
    public function delete_blog($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $return = $this->model('M_Blog')
            ->delete_blog($ID);

        if ($return == true)
        {
            Flasher::setFlash('Data Berhasil Di Delete', 'success');
            header('Location: ' . BASE_URL . '/dashboard/blog');
        }
    }

    public function edit_blog($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        if (isset($_POST['submit']))
        {
            if (isset($_FILES) && $_FILES['gambar']['error'] == 0)
            {
                $gambar = $this->handle_upload_image($_FILES['gambar']);
                if ($this->model('M_Blog')
                    ->update($id, $gambar) == true)
                {
                    Flasher::setFlash('Data Berhasil Di Update', 'success');
                    header('Location: ' . BASE_URL . '/dashboard/blog/' . $id);
                }
            }
            if ($this->model('M_Blog')
                ->update($id, null) == true)
            {
                Flasher::setFlash('Data Berhasil Di Update', 'success');
                header('Location: ' . BASE_URL . '/dashboard/blog/' . $id);
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'Blog';
                    $data['link_header'] = 'dashboard/blog';
                    $data['page'] = 'Edit';
                    $data['blog'] = $this->model('M_Blog')
                        ->ambilDataBy($ID, 'id', 'blog', 'single');
                    $data['tags'] = $this->model('M_Blog')
                        ->ambilDataBy($ID, 'id_blog', 'tags', 'resultSet');
                    $this->view('template/header', $data);
                    $this->view('dashboard/blog/edit', $data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }

            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }
    }

    public function delete_tags()
    {
        $id = $_POST['id'];
        $this->model('M_Blog')
            ->delete_tags($id);
    }

    /*
    |--------------------------------------------------------------------------
    | PAGE CONTACT US
    |--------------------------------------------------------------------------
    |
    | UNTUK LOAD PAGE CONTACT US DI DASHBOARD ADMIN
    |
    |--------------------------------------------------------------------------
    */

    public function contact()
    {
        if (isset($_POST['submit']))
        {
            $data = $this->model('M_Contact')
                ->upload();
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Tambah', 'success');
                header('Location: ' . BASE_URL . '/dashboard/contact/');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/contact/');
            }
        }
        if (isset($_SESSION) && $_SESSION['login'] == true)
        {
            if (isset($_SESSION) && $_SESSION['admin'] == true)
            {
                $data['header'] = 'Contact';
                $data['link_header'] = 'dashboard/contact';
                $data['page'] = 'home';
                $data['contact'] = $this->model('M_Contact')
                    ->getAllData('page_contact');
                $this->view('template/header', $data);
                $this->view('dashboard/contact/index', $data);
                $this->view('template/footer');
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }
        else
        {
            Flasher::setFlash('login terlebih dahulu', 'error');
            header('Location: ' . BASE_URL . '/auth');
        }

    }
    public function delete_contact($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $data = $this->model('M_Contact')
            ->delete_contact($ID);
        if ($data == true)
        {
            Flasher::setFlash('Data Berhasil Di Hapus', 'success');
            header('Location: ' . BASE_URL . '/dashboard/contact/');
        }
        else
        {
            Flasher::setFlash('Data Gagal Di Hapus', 'error');
            header('Location: ' . BASE_URL . '/dashboard/contact/');
        }
    }

    public function edit_contact($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        if (isset($_POST['submit']))
        {
            $data = $this->model('M_Contact')
                ->update($ID);
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Tambah', 'success');
                header('Location: ' . BASE_URL . '/dashboard/contact/');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/contact/');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'Contact';
                    $data['link_header'] = 'dashboard/contact';
                    $data['page'] = 'edit';
                    $data['contact'] = $this->model('M_Contact')
                        ->getAllDataById('page_contact', $ID);
                    $this->view('template/header', $data);
                    $this->view('dashboard/contact/edit', $data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }

            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }
    }

    /*
    |--------------------------------------------------------------------------
    | PAGE ABOUT
    |--------------------------------------------------------------------------
    |
    | UNTUK LOAD PAGE ABOUT DI DASHBOARD ADMIN
    |
    |--------------------------------------------------------------------------
    */

    public function about()
    {
        if (isset($_POST['submit']))
        {
            $gambar = $this->handle_upload_image($_FILES['gambar']);
            $data = $this->model('M_About')
                ->upload($gambar);
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Tambah', 'success');
                header('Location: ' . BASE_URL . '/dashboard/about/');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/about/');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'About';
                    $data['link_header'] = 'dashboard/about';
                    $data['page'] = 'home';
                    $data['about'] = $this->model('M_About')
                        ->getAll();
                    $this->view('template/header', $data);
                    $this->view('dashboard/about/index', $data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }

            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }

    }

    public function edit_about($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        if (isset($_POST['submit']))
        {
            if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] > 0)
            {
                $data = $this->model('M_About')
                    ->update($ID, null);
            }
            else
            {
                $gambar = $this->handle_upload_image($_FILES['gambar']);
                $data = $this->model('M_About')
                    ->update($ID, $gambar);
            }
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Update', 'success');
                header('Location: ' . BASE_URL . '/dashboard/about/');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/about/');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'About';
                    $data['link_header'] = 'dashboard/about';
                    $data['page'] = 'Edit';
                    $data['about'] = $this->model('M_About')
                        ->getById($ID);
                    $this->view('template/header', $data);
                    $this->view('dashboard/about/edit', $data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }

            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }

    }
    public function delete_about($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $data = $this->model('M_About')
            ->delete_about($ID);
        if ($data == true)
        {
            Flasher::setFlash('Data Berhasil Di Hapus', 'success');
            header('Location: ' . BASE_URL . '/dashboard/about/');
        }
        else
        {
            Flasher::setFlash('Data Gagal Di Hapus', 'error');
            header('Location: ' . BASE_URL . '/dashboard/about/');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | PAGE BANNER
    |--------------------------------------------------------------------------
    |
    | UNTUK LOAD PAGE BANNER DI DASHBOARD ADMIN
    |
    |--------------------------------------------------------------------------
    */
    public function banner_home()
    {
        if (isset($_POST['submit']))
        {
            $gambar = $this->handle_upload_image($_FILES['gambar']);
            $data = $this->model('M_Home')
                ->upload($gambar);
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Tambah', 'success');
                header('Location: ' . BASE_URL . '/dashboard/banner_home/');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/banner_home/');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'Banner';
                    $data['link_header'] = 'dashboard/Banner';
                    $data['page'] = 'Banner Home';
                    $data['home'] = $this->model('M_Home')->getAll();
                    $this->view('template/header', $data);
                    $this->view('dashboard/banner/banner-home/index',$data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }

            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }
    }

    public function edit_home($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        if (isset($_POST['submit']))
        {
            if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] > 0)
            {
                $data = $this->model('M_Home')
                    ->update($ID, null);
            }
            else
            {
                $gambar = $this->handle_upload_image($_FILES['gambar']);
                $data = $this->model('M_Home')
                    ->update($ID, $gambar);
            }
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Update', 'success');
                header('Location: ' . BASE_URL . '/dashboard/banner_home');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/banner_home');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'About';
                    $data['link_header'] = 'banner-home/index';
                    $data['page'] = 'Edit';
                    $data['home'] = $this->model('M_Home')
                        ->getById($ID);
                    $this->view('template/header', $data);
                    $this->view('dashboard/banner/banner-home/edit', $data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }

            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }

        }

    }

    public function delete_home($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $data = $this->model('M_Home')
            ->delete_home($ID);
        if ($data == true)
        {
            Flasher::setFlash('Data Berhasil Di Hapus', 'success');
            header('Location: ' . BASE_URL . '/dashboard/banner_home/');
        }
        else
        {
            Flasher::setFlash('Data Gagal Di Hapus', 'error');
            header('Location: ' . BASE_URL . '/dashboard/banner_home/');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | PAGE BANNER
    |--------------------------------------------------------------------------
    |
    | UNTUK LOAD PAGE BANNER PRODUCT DI DASHBOARD ADMIN
    |
    |--------------------------------------------------------------------------
    */
    
    public function banner_product()
    {
        if (isset($_POST['submit']))
        {
            $gambar = $this->handle_upload_image($_FILES['gambar']);
            $data = $this->model('M_Product')->uploadBanner($gambar);
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Tambah', 'success');
                header('Location: ' . BASE_URL . '/dashboard/banner_product/');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/banner_product/');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'Banner';
                    $data['link_header'] = 'dashboard/Banner';
                    $data['page'] = 'Banner Product';
                    $data['banner'] = $this->model('M_Product')->getBanner();
                    $this->view('template/header', $data);
                    $this->view('dashboard/banner/banner-product/index',$data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }
    }

    public function delete_banner($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $data = $this->model('M_Product')
            ->delete_banner($ID);
        if ($data == true)
        {
            Flasher::setFlash('Data Berhasil Di Hapus', 'success');
            header('Location: ' . BASE_URL . '/dashboard/banner_product/');
        }
        else
        {
            Flasher::setFlash('Data Gagal Di Hapus', 'error');
            header('Location: ' . BASE_URL . '/dashboard/banner_product/');
        }
    }

    
    public function edit_banner_product($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        if (isset($_POST['submit']))
        {
            $gambar = $this->handle_upload_image($_FILES['gambar']);
            $data = $this->model('M_Product')->updateBanner($ID,$gambar);
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Tambah', 'success');
                header('Location: ' . BASE_URL . '/dashboard/banner_product/');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/banner_product/');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true)
            {
                if (isset($_SESSION) && $_SESSION['admin'] == true)
                {
                    $data['header'] = 'Banner';
                    $data['link_header'] = 'dashboard/Banner';
                    $data['page'] = 'Banner Product';
                    $data['banner'] = $this->model('M_Product')->getBySingleId('page_product',$ID);
                    $this->view('template/header', $data);
                    $this->view('dashboard/banner/banner-product/edit',$data);
                    $this->view('template/footer');
                }
                else
                {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | PAGE MESSAGE
    |--------------------------------------------------------------------------
    |
    | UNTUK LOAD PAGE MESSAGE DI DASHBOARD ADMIN
    |
    |--------------------------------------------------------------------------
    */

    public function message()
    {
        
        if (isset($_SESSION) && $_SESSION['login'] == true)
        {
            if (isset($_SESSION) && $_SESSION['admin'] == true)
            {
                $data['header'] = 'Message';
                $data['link_header'] = 'dashboard/message';
                $data['page'] = 'Home';
                $data['contact'] = $this->model('M_Contact')->getAllDataDesc('contact');
                $this->view('template/header', $data);
                $this->view('dashboard/message/index',$data);
                $this->view('template/footer');
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }
        else
        {
            Flasher::setFlash('login terlebih dahulu', 'error');
            header('Location: ' . BASE_URL . '/auth');
        }
    }

    public function delete_message($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $data = $this->model('M_Contact')
            ->delete_message($ID);
        if ($data == true)
        {
            Flasher::setFlash('Data Berhasil Di Hapus', 'success');
            header('Location: ' . BASE_URL . '/dashboard/message/');
        }
        else
        {
            Flasher::setFlash('Data Gagal Di Hapus', 'error');
            header('Location: ' . BASE_URL . '/dashboard/message/');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | PAGE REVIEW
    |--------------------------------------------------------------------------
    |
    | UNTUK LOAD PAGE REVIEW DI DASHBOARD ADMIN
    |
    |--------------------------------------------------------------------------
    */

    public function review()
    {
        if (isset($_POST['submit']))
        {
            if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] <= 0 ){
                $gambar = $this->handle_upload_image($_FILES['gambar']);
                $data = $this->model('M_Review')->upload($gambar);
                if ($data == true)
                {
                    Flasher::setFlash('Data Berhasil Di Tambah', 'success');
                    header('Location: ' . BASE_URL . '/dashboard/review/');
                }
                else
                {
                    Flasher::setFlash('Data Gagal Di Hapus', 'error');
                    header('Location: ' . BASE_URL . '/dashboard/review/');
                }
            }else{
                Flasher::setFlash('Gambar Kosong', 'error');
                header('Location: ' . BASE_URL . '/dashboard/review/');
            }

        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true) {
                if (isset($_SESSION) && $_SESSION['admin'] == true) {
                    $data['header'] = 'Review';
                    $data['link_header'] = 'dashboard/review';
                    $data['page'] = 'Home';
                    $data['review'] = $this->model('M_Review')->getAll();
                    $this->view('template/header', $data);
                    $this->view('dashboard/review/index', $data);
                    $this->view('template/footer');
                } else {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }
            } else {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }
    }

    public function delete_review($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $data = $this->model('M_Review')
            ->delete_review($ID);
        if ($data == true)
        {
            Flasher::setFlash('Data Berhasil Di Hapus', 'success');
            header('Location: ' . BASE_URL . '/dashboard/review/');
        }
        else
        {
            Flasher::setFlash('Data Gagal Di Hapus', 'error');
            header('Location: ' . BASE_URL . '/dashboard/review/');
        }
    }

    public function edit_review($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        if (isset($_POST['submit']))
        {
            if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] <= 0 ){
                $gambar = $this->handle_upload_image($_FILES['gambar']);
                $data = $this->model('M_Review')->update($ID,$gambar);
            }else{
                $data = $this->model('M_Review')->update($ID,null);
            }
            if ($data == true)
            {
                Flasher::setFlash('Data Berhasil Di Tambah', 'success');
                header('Location: ' . BASE_URL . '/dashboard/review/');
            }
            else
            {
                Flasher::setFlash('Data Gagal Di Hapus', 'error');
                header('Location: ' . BASE_URL . '/dashboard/review/');
            }
        }
        else
        {
            if (isset($_SESSION) && $_SESSION['login'] == true) {
                if (isset($_SESSION) && $_SESSION['admin'] == true) {
                    $data['header'] = 'Review';
                    $data['link_header'] = 'dashboard/review';
                    $data['page'] = 'Home';
                    $data['review'] = $this->model('M_Review')->getBySingleId($ID);
                    $this->view('template/header', $data);
                    $this->view('dashboard/review/edit', $data);
                    $this->view('template/footer');
                } else {
                    Flasher::setFlash('login terlebih dahulu', 'error');
                    header('Location: ' . BASE_URL . '/auth');
                }
            } else {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }
    }

    
    /*
    |--------------------------------------------------------------------------
    | PAGE BLOG
    |--------------------------------------------------------------------------
    |
    | UNTUK LOAD PAGE BLOG DI DASHBOARD ADMIN
    |
    |--------------------------------------------------------------------------
    */
    
    public function banner_blog()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $responsecode = 200;
            try
            {
                $images = [];
                if (isset($_FILES['file']) && count($_FILES['file']['name']) <= 5)
                {
                        $files = $this->serialize_files($_FILES['file']);
                        foreach ($files as $file)
                        {
                            $images[] = $this->handle_upload_image($file);
                            // do upload
                        }
                        $this->model('M_PageBlog')
                        ->upload($_POST, $images);
                }else{
                    $responsecode = 400;
                }

                // kalo ga mau pake trycatch gapapa, tapi kalo ada gagal, langsung aja $responsecode = 400
                
            }
            catch(Exception $e)
            {
                $responsecode = 400;
            }

            http_response_code($responsecode);
            // kalo mau var_dump juga bisa, langsung aja var_dump()
            // var_dump('test');
            // ini kalo submit tapi ada gambar nya, nnti bisa kirim pesan ke javacript lewat sini, tinggal echo aja,
            // ini buat handle AJAX-nya Dropzone
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
            {
                header('Content-Type: application/json');
                if ($responsecode == 200)
                {
                    // jika berhasil
                    echo json_encode(['status' => true, 'message' => 'Berhasil', ]);

                }
                else
                {
                    // jika gagal
                    echo json_encode(['status' => false, 'message' => 'Gagal']);
                }
                exit;
            }
        }

        if (isset($_SESSION) && $_SESSION['login'] == true)
        {
            if (isset($_SESSION) && $_SESSION['admin'] == true)
            {
                $data['header'] = 'Banner';
                $data['link_header'] = 'dashboard/banner_blog';
                $data['page'] = 'Home';
                $data['blog'] = $this->model('M_PageBlog')->getAll();
                $data['gallery'] = $this->model('M_PageBlog')->getGambar();
                $this->view('template/header', $data);
                $this->view('dashboard/banner/banner-blog/index',$data);
                $this->view('template/footer');
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }
        else
        {
            Flasher::setFlash('login terlebih dahulu', 'error');
            header('Location: ' . BASE_URL . '/auth');
        }
    }
    
    public function delete_banner_blog($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        $data = $this->model('M_PageBlog')->delete($ID);
        if ($data == true)
        {
            Flasher::setFlash('Data Berhasil Di Hapus', 'success');
            header('Location: ' . BASE_URL . '/dashboard/banner_blog/');
        }
        else
        {
            Flasher::setFlash('Data Gagal Di Hapus', 'error');
            header('Location: ' . BASE_URL . '/dashboard/banner_blog/');
        }
    }

    public function edit_banner_blog($id)
    {
        $ID = Encripsi::encode('decrypt', $id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $responsecode = 200;
            try
            {
                $images = [];
                if (isset($_FILES['file']) && count($_FILES['file']['name']) <= 5)
                {
                        $files = $this->serialize_files($_FILES['file']);
                        foreach ($files as $file)
                        {
                            $images[] = $this->handle_upload_image($file);
                            // do upload
                        }
                        $this->model('M_PageBlog')
                        ->update($_POST,$id, $images);
                }  elseif (!isset($_FILES['file']))
                {
                    $this->model('M_PageBlog')
                        ->update($_POST,$id, $images);
                    Flasher::setFlash('Data Berhasil Di Perbaharui', 'success');
                    header('Location: ' . BASE_URL . '/edit_product/' . $ID);
                }else{
                    $responsecode = 400;
                }

                // kalo ga mau pake trycatch gapapa, tapi kalo ada gagal, langsung aja $responsecode = 400
                
            }
            catch(Exception $e)
            {
                $responsecode = 400;
            }

            http_response_code($responsecode);
            // kalo mau var_dump juga bisa, langsung aja var_dump()
            // var_dump('test');
            // ini kalo submit tapi ada gambar nya, nnti bisa kirim pesan ke javacript lewat sini, tinggal echo aja,
            // ini buat handle AJAX-nya Dropzone
            if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
            {
                header('Content-Type: application/json');
                if ($responsecode == 200)
                {
                    // jika berhasil
                    echo json_encode(['status' => true, 'message' => 'Berhasil', ]);

                }
                else
                {
                    // jika gagal
                    echo json_encode(['status' => false, 'message' => 'Gagal']);
                }
                exit;
            }
        }

        if (isset($_SESSION) && $_SESSION['login'] == true)
        {
            if (isset($_SESSION) && $_SESSION['admin'] == true)
            {
                $data['header'] = 'Banner';
                $data['link_header'] = 'dashboard/banner_blog';
                $data['page'] = 'Home';
                $data['blog'] = $this->model('M_PageBlog')->getDataBy($ID);
                $data['gambar'] = $this->model('M_PageBlog')->getGambar();
                $this->view('template/header', $data);
                $this->view('dashboard/banner/banner-blog/edit',$data);
                $this->view('template/footer');
            }
            else
            {
                Flasher::setFlash('login terlebih dahulu', 'error');
                header('Location: ' . BASE_URL . '/auth');
            }
        }
        else
        {
            Flasher::setFlash('login terlebih dahulu', 'error');
            header('Location: ' . BASE_URL . '/auth');
        }
        
    }

    public function delete_img_blog()
    {
        $id = $_POST['id'];
        $ID = Encripsi::encode('decrypt', $id);
        $this->model('M_PageBlog')->delete_img_blog($ID);
    }
}