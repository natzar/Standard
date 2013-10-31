<?php
class loginModel extends ModelBase
{
	
    public function logout(){

        session_destroy();
    	$config = Config::singleton();
  		header ("location: ".$config->get('base_url'));
        exit(0);
    }

	public function login($user,$pass)
	{   
    	$config = Config::singleton();
        if (!isset($_SESSION['login_attemp'])) $_SESSION['login_attemp'] = 1;
  
		// Uncheck security $_SESSION['login_attemp'] = 1;
        if ($_SESSION['login_attemp'] < 4){
        	
        	if ($user == $config->get('validUser') and $pass== $config->get('validPass')){
  		
				$_SESSION['initiated_admin'] = true;
        		$_SESSION['username_admin'] = 'admin';
				$_SESSION['accountId_admin'] = -1; 
        		$_SESSION['login_attemp_admin'] = 1;
        		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT'].$config->get('base_title'));
        	
        		header ("location: ".$config->get('base_url')."admin/");
        	} else{ 
				//	echo 'invalid';
        		$_SESSION['login_attemp']++;
        		header ("location: ".$config->get('base_url')."admin/?c=1");
        	}				
        } else {

        	header ("location: ".$config->get('base_url')."admin/?c=2");
        } 

	}
}
?>
