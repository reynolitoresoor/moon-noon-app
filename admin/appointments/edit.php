<?php 
require_once('../../database.php');
require_once('../../classes.php'); 

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

if(isset($_POST)) {
   $data = $_POST;
   $user = new User();
   $update = $user->updateStudent($data);
   if($update) {
      header('Location: '.base_url.'admin/students');
      exit();
   }
}
?>