<?
class signupController extends ControllerBase{
	function index(){
		$_SESSION['return_url'] = $_SESSION['lang'].'/'."signup";
		$data = array();
		$this->view->show('login/signup.php',$data);
	}
    
    function doSignup(){
        $params= gett();
        include "application/models/usersModel.php";

        $users = new usersModel();
        if ($params['password'] == $params['confirmPassword']){
            $params['area'] = $params['usertype'];
            $aux = sha1($params['password']);
            $params['password'] = $aux;

            if ($users->add($params)){
                $_SESSION['errors'] = "Signed up successfully. You can login now";
                header("location: /".$_SESSION['lang']."/login");
                return true;
            }
        }       
        
        $_SESSION['errors'] = "Error. Passwords don't match or email already exists. Please try again.";
        header("location: /".$_SESSION['lang']."/signup");
    }
}
