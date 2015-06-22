<?
class profileController extends ControllerBase{
	
	function index(){
	   if (isset($_POST['savechanges'])){
	       return $this->update();
	   }else{
	       return $this->profilePage();
	   }
    }
    function profilePage(){
		include "application/models/usersModel.php";
		$users = new usersModel();
		$params = gett();
		$usersId = $_SESSION['usersId'];
		
		$user = $users->getByUsersId($usersId);
		$data = array(
		
		  "area" => $user['area'],
		  "public" => $params['a'] != ''? true : false
		  );
	
	   $items = "";
        switch($user['area']): 
                case '2':
                    include "application/models/divecentersModel.php";
                    $divecenters = new divecentersModel();
                    if (!$divecenters->profileExists(array("usersId" => $usersId))){
                        $divecenters->create(array("usersId" => $usersId));
                    }
                    $data['items'] = $divecenters->getByUsersId($usersId);
                    $data['items']['email'] = $user['email'];
                    $data['items']['password'] = "";
                    $this->view->show('profile/seller.php',$data);
                break;
                case '3':
                    include "application/models/diversModel.php";
                    $divers = new diversModel();
                    if (!$divers->profileExists(array("usersId" => $usersId))){
                        $divers->create(array("usersId" => $usersId));
                    }
                    $data['items'] = $divers->getByUsersId($usersId);
                    $data['items']['email'] = $user['email'];
                    $data['items']['password'] = "";
                    $this->view->show('profile/buyer.php',$data);
                break;
                default:
                echo 'Error trying to find User\'s Type        ';
                break;        
        endswitch;
			
	}
	function update(){
	   $params = gett();
echo '<pre>';	   print_r($params);
        $usersId = $_SESSION['usersId'];
        		include "application/models/usersModel.php";
        		$users = new usersModel();
        $user = $users->getByUsersId($usersId);
        $area = $user['area'];
        $params['usersId'] = $usersId;
        switch($area):
            case '2': //divecenters
                include "application/models/divecentersModel.php";
                $divecenters = new divecentersModel();
                if ($divecenters->update($params)) echo 'updated!';
                else echo "not updated";
                
            break;
            case '3': //users
                include "application/models/diversModel.php";
                $divers = new diversModel();
                $divers->update($params);
            
            break;
        endswitch;                                
                
        header("location: /".$_SESSION['lang']."/profile");
	   
	}
}
