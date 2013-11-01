<?php
class loginController extends ControllerBase
{

    public function index(){
      
		$this->view->show("login.php", array(),false);
		
    }
	 
	public function login()
	{
    	require 'models/loginModel.php';
    	$loginModel = new loginModel();
    	

    	$loginModel->login(get_param('user'),get_param('pass'));
	}
 
	public function logout()
	{
		require 'models/loginModel.php';
    	$loginModel = new loginModel();
    	$loginModel->logout();
	}
}
?>
