<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/moon-noon-app/session.php');

if(!defined('base_url')) define('base_url','http://localhost/moon-noon-app/');
if(!defined('BASE_APP')) define('BASE_APP', $_SERVER['DOCUMENT_ROOT'].'/moon-noon-app/' );
if(!defined('DB_SERVER')) define('HOST',"localhost");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
if(!defined('DB_NAME')) define('DB_NAME',"well_being_app");

?>