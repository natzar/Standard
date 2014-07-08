<?php
function controller($POST){
	$dbname = $POST['dbname'];
	$dbhost = $POST['host'];
	$dbuser = $POST['dbuser'];
	$dbpwd = $POST['password'];
	$dbport = $POST['port'];
	$prefix = $POST['prefix'];

	$string = '<?php 

	$dbhost = "'. $dbhost.'";

	$dbuser = "'. $dbuser.'";

	$dbpwd = "'. $dbpwd.'";

	$dbname = "'.$dbname.'";

	$dbport = "'.$dbport.'";

	$prefix = "'.$prefix.'";

	$dbtype = "mysql";

	?>';

	if(!file_put_contents("dbconfig.php", $string)){
		return new Exeption("There was an error trying to create dbconfig.php");
	}
	return false;
}
?>