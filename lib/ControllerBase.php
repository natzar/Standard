<?php
abstract class ControllerBase {
 
    protected $view;
	public $url;
	public $config;
    function __construct()
    {
        $this->view = new View();
        $this->config = Config::singleton();
      // 	$this->url = new urlHelper();
        
    }

  
}
?>