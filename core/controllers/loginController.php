<?php
class loginController extends ControllerBase
{

    public function index(){
      
		$this->login();
		
    }
	

	public function lostpassword(){
		$data = Array( "title" => "Iniciar Sesión");         
			$this->view->show("lostpassword.php", $data);
	}

	public function login() {
    	$config = Config::singleton();
      	require 'models/loginModel.php';
    	$loginModel = new loginModel();
    	if (!isset($_SESSION['login_attemp'])) $_SESSION['login_attemp'] = 1;
		$_SESSION['login_attemp'] = 0;
		$params = gett();

    	if ($_SESSION['login_attemp'] < 4) {
        	if ($loginModel->isValidUser($params['email'],$params['password'])){       	    	
    	       $loginModel->setupNewSession($params['email'],$params['password']);
    	        if (!isset($params['remember'])){
	    	      $_SESSION['LAST_ACTIVITY'] = time(); 
    	       } 
   				echo 1;
        	}else{ 
        		$_SESSION['login_attemp']++;
        		//header ("location: ".$_SERVER['HTTP_REFERER']."?c=1");
        		echo 0;
        	}				
        } else {
        echo 0;
        	header ("location: ".$_SERVER['HTTP_REFERER']."?c=2");
        }     	
    }
 
	public function logout() {
		$config = Config::singleton();
		require 'models/loginModel.php';
    	$loginModel = new loginModel();
    	$loginModel->logout();

		header("location: ".$config->get('base_url'));
	}
}
?>
