<?php 
require_once('../../database.php');
require_once('../../classes.php'); 

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

if(!empty($_POST)) {
    $data = $_POST;
    $user = new User();
    $create = $user->createStudent($data);

    if($create) {
      header('Location: '.base_url.'admin/students');
      exit();
    }
}
?>