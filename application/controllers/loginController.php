<?
class loginController extends ControllerBase{
	function index(){
		$_SESSION['return_url'] = '/'.$_SESSION['lang'].'/'."login";
		$data = array();
		$this->view->show('login/login.php',$data);
	}
	function recover(){
        $_SESSION['return_url'] = '/'.$_SESSION['lang'].'/'."recover";
	    $data = array();
		$this->view->show('login/recover.php',$data);
	}
    
    public function doLogin()
	{
    	require 'application/models/loginModel.php';
    	$loginModel = new loginModel();	
    	$loginModel->login(get_param('email'),get_param('password'));
	}
 
	public function logout()
	{


    	$this->model->logout();
	}
	
	function doRecover(){
	
	
	}
}
