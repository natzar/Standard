<?php
require('lib/mandrill/Mandrill.php');
//require('lib/mandrill/config.php');

class Email
{


	public function sendEmail($json_template,$itemsc)
	{	
		$items = $itemsc;
		include "views/includes/emails/".$json_template;
		
  		$request_json = stripslashes($request_json);
		$aux = json_decode(str_replace ('/"','', $request_json), true);
		$ret = Mandrill::call((array) $aux);
	}
}

?>