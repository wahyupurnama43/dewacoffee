<?php 

$pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
var_dump($pass);die;