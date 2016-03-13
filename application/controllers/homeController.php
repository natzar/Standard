<?
class homeController extends ControllerBase{
	function index(){
        include "application/models/sliderModel.php";
        $slider = new sliderModel();
    	$sliderItems = $slider->getAll();
    	
		$data = array("slider" => $sliderItems);
		if (file_exists($this->config->get('viewsFolder').'index.php')){
			$this->view->show('index.php',$data);		
        }	
	}
}
