<?php 

class Auth extends Controller
{
   public function index()
   {
      if (isset($_POST['login'])) {
         $this->model('auth');
      }else{
         $this->view('auth/login');
      }
   }
}
