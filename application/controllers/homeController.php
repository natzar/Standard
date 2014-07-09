<?
class homeController extends ControllerBase{
	function index(){
		
		$data = array();
		
		if (file_exists($this->config->get('viewsFolder').'index.php'))
			$this->view->show('index.php',$data);
		else if(file_exists('public/'.$this->config->get('viewsFolder').$this->config->get('tabla_default').'.php'))
			$this->view->show($this->config->get('tabla_default').'.php',$data);
		else	$this->view->show('test.php',$data);
	}
}
