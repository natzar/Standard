<?

class errorsController extends ControllerBase{

	function e404(){
		$this->view->show('errors/404.php',array());
		
	}
	function e0(){
		$this->view->show('errors/100.php',array());
		
	}
}
		