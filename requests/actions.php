<?php 
require_once('../database.php');
require_once('../classes.php');

if($_POST) {
	$action = $_POST['action'];

	switch($action) {
		case 'search-user':
		    $user = new User();
		    $result = $user->searchUser($_POST['user']);
            echo json_encode($result);
			break;
		default: /* Default */
		    break;
	}
}
?>