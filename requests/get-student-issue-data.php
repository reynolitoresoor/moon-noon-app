<?php 
require_once('../database.php');
require_once('../classes.php');

if($_POST) {
	$data = $_POST;
    $id = intval($data['id']);
    $issues = new Issues();
    $result = $issues->getStudentIssue($id);
    echo json_encode($result);
}
?>