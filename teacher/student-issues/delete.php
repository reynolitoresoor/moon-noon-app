<?php 
require_once('../../database.php');
require_once('../../classes.php'); 

if(!isset($_SESSION['user_data'])) {
   header('Location: '.base_url);
}

if(isset($_GET)) {
   $id = intval($_GET['id']);

   $issues = new Issues();
   $delete = $issues->delete($id);
   if($delete) {
      header('Location: '.base_url.'admin/student-issues');
      exit();
   }
}
?>