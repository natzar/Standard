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
	
		include_once ($this->config->get('languagesFolder').$_SESSION['lang'].'.php');
 		
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
			$aux = "content_".$LANG;
		$aux2 = "description_".$LANG;
		$SEO_TITLE = $params['p'];
		if (isset($params['i']) and $params['i'] !=""){
			$SEO_TITLE = $params['i'];
		}else 		if (isset($params['a'])and $params['a'] !=""){
			$SEO_TITLE = $params['a'];		
		}else 		if (isset($params['m']) and $params['m'] != 'index'){
			$SEO_TITLE = $params['m'];				
		} if (isset($items['title_'.$LANG])){
			$SEO_TITLE = ucfirst($items['title_'.$LANG]);
		}
		$SEO_TITLE = ucfirst($SEO_TITLE);
		if ($SEO_TITLE == "") $SEO_TITLE = 'Escuela de Danza en Sabadell';

	
		
		/* Template Data */
		if(is_array($vars))
           foreach ($vars as $key => $value)           
                	$$key = $value;
          
          	if (isset($items[$aux])){
			$SEO_DESCRIPTION = truncate($items[$aux],200);
			
		}else if(isset($items[$aux2])){
			$SEO_DESCRIPTION = truncate($items[$aux2],200);
        }
		      	
        include_once "application/models/sidedataModel.php";
		$SIDEDATA = new sidedataModel();
		$SIDEDATA = $SIDEDATA->load();
	
		
		$SEO_TITLE = strip_tags($SEO_TITLE);		
		$SEO_DESCRIPTION = strip_tags($SEO_DESCRIPTION);
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