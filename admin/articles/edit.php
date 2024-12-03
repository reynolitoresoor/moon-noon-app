<?php 
require_once('../../database.php');
require_once('../../classes.php'); 

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

if(isset($_POST)) {
   $data = $_POST;
   $article = new Articles();
   $update = $article->updateArticle($data);
   if($update) {
      header('Location: '.base_url.'admin/articles');
      exit();
   }
}
?>