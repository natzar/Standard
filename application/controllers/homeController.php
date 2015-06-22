<?
class homeController extends ControllerBase{
	function index(){
		$data = array();
		if ($this->config->get('developer_mode')){
	       $this->view->show('admin/dashboard.php',$data);
		}else if (file_exists($this->config->get('viewsFolder').'index.php')){
			$this->view->show('index.php',$data);		
        }	
	}
}
