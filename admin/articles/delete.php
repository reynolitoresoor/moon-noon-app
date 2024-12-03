<?php 
require_once('../../database.php');
require_once('../../classes.php'); 

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

if(isset($_GET)) {
   $article_id = intval($_GET['id']);

   $article = new Articles();
   $delete = $article->delete($article_id);
   if($delete) {
      header('Location: '.base_url.'admin/articles');
      exit();
   }
}
?>