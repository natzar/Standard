<?php
class loginModel extends ModelBase
{
	
    public function logout(){

        session_destroy();
    	$config = Config::singleton();
  		header ("location: ".$config->get('base_url'));
        exit(0);
    }
     function loginSuccess($usersId = -1){
        $config = Config::singleton();
        if ($usersId == -1){
            $_SESSION['initiated_admin'] = 1;
        }else{
            
            $_SESSION['initiated'] = true;
            include "application/models/usersModel.php";    
            $users = new usersModel();
            $user = $users->getByUsersId($usersId);
            $area = $user['area'];
            if($area == 2){
                include_once "application/models/divecentersModel.php";
                $dc = new divecentersModel();
                $dc = $dc->getByUsersId($user['usersId']);
                
                $_SESSION['author']= $dc['title'];
                $_SESSION['author_image']= $dc['featImage'];
                

            }elseif($area==3){
                include_once "application/models/diversModel.php";            
                $dc = new diversModel();
                $dc = $dc->getByUsersId($user['usersId']);
                
                $_SESSION['author']= $dc['title'];
                $_SESSION['author_image']= $dc['imagen1'];
            }    



        }

		$_SESSION['usersId'] = $usersId; 
        $_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT'].$config->get('base_title'));	

       header ("location: ".$config->get('base_url'));
    }
    function loginError(){
        	$config = Config::singleton();
        $_SESSION['login_attemp']++;
        $_SESSION['errors'] = "Usuario o Password incorrecto";
    //    print_r($_SESSION);
        header ("location: ".$_SESSION['return_url']);
    }
	public function login($user,$pass)
	{   
	    	$config = Config::singleton();
    	$config = Config::singleton();
        if (!isset($_SESSION['login_attemp'])) $_SESSION['login_attemp'] = 1;
		// Uncheck security
		$_SESSION['login_attemp'] = 1;
        if ($_SESSION['login_attemp'] < 4){        	
        	if ($user == $config->get('validUser') and $pass== $config->get('validPass')){
  		        $this->loginSuccess();				
        	} else{         	
        	   $c = $this->db->prepare('SELECT usersId,email,password FROM '.$config->get('db_prefix').'users where email = :user and password = :password limit 1');
        	   $user = $user;
        	   $pass = sha1($pass);
        	   echo $pass;
        	   $c->bindParam(':user',$user,PDO::PARAM_STR);
        	   $c->bindParam(':password',$pass);        	   
        	   $c->execute();
        	   $r = $c->fetch();


        	   if (!isset($r['usersId'])){
        	       $this->loginError();
        	   }else{
        	       $this->loginSuccess($r['usersId']);
        	   }
        	}				
        } else {
       		$this->loginError();
        } 
	}
}
?>
