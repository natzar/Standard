<?php
function controller($POST){
	require_once( 'database.php');
	require_once('schema.php');
	$database->query(get_db_schema($prefix));
	if($database->error()[1] !== null){
		return new Exception($database->error()[2]);
	}
	return false;
}