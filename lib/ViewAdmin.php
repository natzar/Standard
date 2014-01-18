<?php

class View
{
	var $notification;

	function __construct()
	{
	}

	
 
	public function show($name, $vars = array(),$show_top_footer = true)
	{

		$config = Config::singleton();

		$path ='../admin/'.$config->get('viewsFolder') . $name;
		
		if (file_exists($path) == false) {
			trigger_error ('Template `' . $path . '` does not exist.', E_USER_NOTICE);
			return false;
		}
		
		if (isset($_SESSION['lang']) and $_SESSION['lang'] != '')
			include_once $config->get('languagesFolder').$_SESSION['lang'].'.php';
		else{ 
			include_once $config->get('languagesFolder').$config->get('lang').'.php';
			$_SESSION['lang'] = $config->get('lang');
		}
		
        $vars['page'] = $name;
		$vars['base_url'] = $config->get('base_url');
		$vars['base_title'] =  $config->get('base_title');
		
		$LOGIN_ADMIN = isset($_SESSION['initiated_admin']) and $_SESSION['initiated_admin'] ? true : false;
		$LOGIN = isset($_SESSION['initiated_admin']) and $_SESSION['initiated_admin'] ? true : false;
		$OFFSET = isset($_GET['offset']) ? $_GET['offset'] : 0;
		$PERPAGE = isset($_GET['perpage']) ? $_GET['perpage'] : 18;
 		$PARAMS = gett();
 		$LANG = $_SESSION['lang'];

		if(is_array($vars))
           foreach ($vars as $key => $value)           
                	$$key = $value;


    	if ($show_top_footer) 
    		include '../admin/'.$config->get('viewsFolder')."includes/top.php";      	   	
    	include($path);
    	if ($show_top_footer) 
    		include '../admin/'.$config->get('viewsFolder')."includes/footer.php";
		
	}
}

?>