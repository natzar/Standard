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
 
		$path = $config->get('viewsFolder') . $name;
 
		if (file_exists($path) == false)
		{
			trigger_error ('Template `' . $path . '` does not exist.', E_USER_NOTICE);
			return false;
		}
   
        $vars['page'] = $name;
        require("models/menuModel.php");
        $menu = new menuModel;
        $vars['menu'] = $menu->menu();
		$vars['base_url'] = $config->get('base_url');
		$vars['base_title'] =  $config->get('base_title');
		$LOGIN = isset($_SESSION['initiated_admin']) and $_SESSION['initiated_admin'] ? true : false;
		$OFFSET = isset($_GET['offset']) ? $_GET['offset'] : 0;
		$PERPAGE = isset($_GET['perpage']) ? $_GET['perpage'] : 40;
 		$LANG = $config->get('lang');
 		
		
		if(is_array($vars))
		{
                    foreach ($vars as $key => $value)
                    {
                	$$key = $value;
                    }
        }


    	if ($show_top_footer) include $config->get('viewsFolder')."includes/top.php";  
    	   	include($path);
    	if ($show_top_footer) include $config->get('viewsFolder')."includes/footer.php";
		
	}
}

?>