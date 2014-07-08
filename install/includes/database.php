<?php
if(!file_exists('dbconfig.php')){
	//return new Exception('Database configuration file not found.');
	throw new Exception('Database configuration file not found.');
	
}
require_once('dbconfig.php');
// Independent configuration
require 'medoo.php';
 
$database = new medoo([
// required
'database_type' => $dbtype,
'database_name' => $dbname,
'server' => $dbhost,
'username' => $dbuser,
'password' => $dbpwd,
'port' => $dbport,
'charset' => 'utf8',
]);
?>