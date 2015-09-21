<?
class homeController extends ControllerBase{
	function index(){
        include "application/models/sliderModel.php";
        $slider = new sliderModel();
    	$sliderItems = $slider->getAll();
    	include "application/models/cursosModel.php";
    	$cursos= new cursosModel();
    	
		$data = array("slider" => $sliderItems,"cursos" => $cursos->getAll(),"cursos_destacados" => $cursos->getDestacados(),"proximos" => $cursos->getProximos());
		if (file_exists($this->config->get('viewsFolder').'index.php')){
			$this->view->show('index.php',$data);		
        }	
	}
}
