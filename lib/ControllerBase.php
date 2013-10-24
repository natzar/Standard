<?php
abstract class ControllerBase {
 
    protected $view;
	public $url;
	
    function __construct()
    {
        $this->view = new View();
      // 	$this->url = new urlHelper();
        
    }

  
}
?>