<?
class homeController extends ControllerBase{
	function index(){
		if (file_exists('public/'.$this->config->get('viewsFolder').'index.php'))
			$this->view->show('index.php',array());
		else if(file_exists('public/'.$this->config->get('viewsFolder').$this->config->get('tabla_default').'.php'))
			$this->view->show($this->config->get('tabla_default').'.php',array());
		else			$this->view->show('test.php',array());
	}
}