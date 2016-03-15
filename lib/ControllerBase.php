<?php

include "vendor/urlHelper.php";

abstract class ControllerBase {
 
    protected $view;
	public $urlHelper;
	public $config;
	public $params;
	
    function __construct()
    {
        $this->view = new View();
        $this->config = Config::singleton();
       	$this->urlHelper = new urlHelper();
        $this->params = gett();   
    }

  
}
?>