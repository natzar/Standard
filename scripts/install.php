<?php
class install extends ModelBase
{
	
    public function install(){
		
		$config = Config::singleton();
		$path = "../deployments/".$config->get('base_title');
		if (!file_exists($path)):
		mkdir($path,0777);
		recurse_copy("../core",$path);
		endif; 
		include "makesetups.php";
		$setups = new makesetups();
		$setups->makeSetups();
		
		
		// run makesetups
		
		// run generate models
		
		// run generate controllers
		
		// run generate views

		// run forms

		// run generate backbone
		
	}    
    

}

?>




