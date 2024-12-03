<?php 
require_once('../../database.php');
require_once('../../classes.php'); 

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

if(!empty($_POST)) {
    $data = $_POST;
    $article = new Articles();
    $create = $article->create($data);

    if($create) {
      header('Location: '.base_url.'admin/articles');
      exit();
    }
}
?>