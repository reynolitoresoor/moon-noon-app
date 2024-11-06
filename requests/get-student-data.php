<?php 
require_once('../database.php');
require_once('../classes.php');

if($_POST) {
	$data = $_POST;
    $user_id = intval($data['user_id']);
    $user = new User();
    $result = $user->getStudentData($user_id);
    echo json_encode($result);
}
?>