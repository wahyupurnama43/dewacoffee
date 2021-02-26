<?php 

class Auth extends Controller
{
   public function index()
   {
      if(isset($_SESSION)){
         if(isset($_SESSION['login']) && $_SESSION['login'] == true){
            header('Location: '.BASE_URL.'/dashboard');
         }else{
            if (isset($_POST['login'])) {
               $this->model('M_Auth')->login();
            }else{
               $this->view('auth/login');
            }
         }
      }else{
         if (isset($_POST['login'])) {
            $this->model('M_Auth')->login();
         }else{
            $this->view('auth/login');
         }
      }
   }

   public function logout()
   {
      session_unset();
      session_destroy();
      header('Location: '.BASE_URL.'/auth');
   }
}
