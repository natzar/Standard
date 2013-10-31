<?
class homeController extends ControllerBase{
	function index(){
	
		$this->view->show('test.php',array());
	}
}