<?php

class View
{
	var $notification;
	var $path;
	var $config;
	
	function __construct(){
		$this->config = Config::singleton();
		$path = $this->config->get('viewsFolder');
		$this->setPath($path);
	}

	public function setPath($newPath){
		if(is_dir($newPath)){
			$this->path = $newPath;
			return true;
		}else{
			return false;
		}
	}
	
	public function show($name = 'pagina.php', $vars = array(),$show_top_footer = true)
	{	
 		$LANG = $_SESSION['lang'];
 		$config = $this->config; 	
	

 		
 		/* SEO */
 		$SEO_TITLE = $this->config->get('seo_title');
		$SEO_DESCRIPTION = strip_tags($this->config->get('seo_description'));
		$SEO_KEYWORDS = $this->config->get('seo_keywords');
		$SEO_IMAGE = $this->config->get('seo_image');

		/* Pagination */
		$params = gett();
		$OFFSET = $params['offset'];
		$PERPAGE = $params['perpage'];
		
	
	
		
        
		
		/* Template meta data */
		$page = $name;
		$base_url = $this->config->get('base_url');
		$base_title =  $this->config->get('base_title');
		$HOOK_JS = '';
		
		$SEO_TITLE = ucfirst($SEO_TITLE);
		
		/* Template Data */
		if(is_array($vars))
           foreach ($vars as $key => $value)           
                	$$key = $value;
           	
        include_once "application/models/sidedataModel.php";
		$SIDEDATA = new sidedataModel();
		$SIDEDATA = $SIDEDATA->load();

	/* TEMPLATE
	***********************/	
		$template = $this->path.$name;
		
		if (file_exists($template) == false) {
			require_once($config->get('controllersFolder').'errorsController.php');
			$controller = new errorsController();
			header('HTTP/1.0 404 Not Found');
	    	$controller->e404();
			return false;
		}
		
		if ($show_top_footer and file_exists($this->path.'layout/top.php')){
			include $this->path.'layout/top.php';
		} elseif ($show_top_footer) {
			include $this->config->get('viewsFolder').'layout/top.php';
		}
		include_once ($this->config->get('languagesFolder').'i18n.php');
    	include($template);
    	
    	if ($show_top_footer and file_exists($this->path.'layout/footer.php')){
			include $this->path.'layout/footer.php';
		} elseif ($show_top_footer) {
			include $this->config->get('viewsFolder').'layout/footer.php';
		}
		unset($_SESSION['errors']);
	}
}

?>