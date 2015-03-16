<?php
require_once('database.php');
function controller($POST){
	global $database;
	$database->insert("user",[
		"username" => $POST['username'],
		"email" => $POST['email'],
		"password" => password_hash($POST['password'], PASSWORD_DEFAULT),
	]);
	return false;
}
?>