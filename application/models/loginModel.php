<?php
class loginModel extends ModelBase
{
    public function logout() {
        session_destroy();
    	$config = Config::singleton();
  		header ("location: ".$config->get('base_url'));
        exit(0);
    }

	public function login($user,$pass)
	{   
    	$config = Config::singleton();
        if (!isset($_SESSION['login_attemp'])) $_SESSION['login_attemp'] = 1;
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
        		$_SESSION['error'] = "Usuario o Password incorrecto";
        		header ("location: ".$config->get('base_url')."admin/?c=1");
        	}				
        } else {
       		$_SESSION['error'] = "Usuario o Password incorrecto";
        	header ("location: ".$config->get('base_url')."admin/?c=2");
        } 


	}
		// Uncheck security
	public function setupNewSession($email,$pass){
    	$accountId = $this->getUsersId($email,$pass);
        $_SESSION['initiated'] = true;
		$_SESSION['usersId'] = $accountId[0]; 
		$_SESSION['email'] = $accountId[1];
		$_SESSION['username'] = $accountId[2];
		$_SESSION['login_attemp'] = 1;
		$_SESSION['HTTP_USER_AGENT'] = md5($_SERVER['HTTP_USER_AGENT']."GYH");
		$this->updateLastLogin($email);
		setcookie( "TestCookie", json_encode($_SESSION), strtotime( '+30 days' ) );
		/*
$Seperator = '--';
$uniqueID = 'Ju?hG&F0yh9?=/6*GVfd-d8u6f86hp';
$Data = 'Ahmet '.md5('123456789');
       
setcookie('VerifyUser', $Data.$Seperator.md5($Data.$uniqueID));

if ($_COOKIE) {
   $Cut = explode($Seperator, $_COOKIE['VerifyUser']);
   if (md5($Cut[0].$uniqueID) === $Cut[1]) {
       $_COOKIE['VerifyUser'] = $Cut[0];
   } else {
       die('Cookie data is invalid!!!');
   }
}

echo $_COOKIE['VerifyUser'];
*/
	}
    
	public function isValidUser($email,$pass){
	
    	$consulta = $this->db->prepare("SELECT email from users where email='".$email."'  limit 1");
		$consulta->execute();
        if ($consulta->rowCount() < 1) return false;
        $md5 = md5($pass);
        $consulta = $this->db->prepare("SELECT password from users where email= :email and password= :password limit 1")  ;
        $consulta->bindParam(':email',$email);
        $consulta->bindParam(':password',$md5);
        $consulta->execute();  
        if ($consulta->rowCount() < 1) return false; 
        return true;
	}
	
	public function getUsersId($email,$pass){
	   /* $user $pass corresponds to a valid user */
        $md5 = md5($pass);
        $consulta = $this->db->prepare("SELECT usersId,email,name from users where email ='".$email."' and password='".$md5."' limit 1")  ;
        $consulta->execute();  

        if ($consulta->rowCount() < 1) die("getUserIdByLogin::no es un usuario valido"); 
        $aux = $consulta->fetch();
        return array($aux['usersId'],$aux['email'],$aux['name']);
            
	}
	public function updateLastLogin($email){
	
		$consulta = $this->db->prepare("UPDATE users SET last_login = NOW() where email= :email");
		$consulta->bindParam(":email",$email);
		$consulta->execute();
		
	}
}
?>
