<?
// DIVE TRADERS
// users Controller
// 06-2015
// Beto Ayesa @ 96levels 
// www.96levels.com / hello@96levels.com


class usersController extends ControllerBase
{
		public function index(){
			require "application/models/usersModel.php"; 	
			$users = new usersModel();			
			print_r(gett());
			$data = Array(
			
				  "items" => $users->getAll()
		          );         
			$this->view->show("templates/table.php", $data);
		}
		
		public function detail(){
			require "application/models/usersModel.php"; 	
			$users = new usersModel();	
			$params = gett();
			$id = $params["a"];		
			
			$items = $users->getByusersId($id);
			 
			if ($items['area'] == 2){
                require "application/models/divecentersModel.php"; 	
                $dc = new divecentersModel();
                $items =	array_merge($items,$dc->getByUsersId($id));
			}else if ($items['area'] == 3){
                require "application/models/diversModel.php"; 	
                $dc = new diversModel();
                $items =	array_merge($items,$dc->getByUsersId($id));
			}
			$data = Array(
				  "items" => $items
		          );         
			$this->view->show("profile/public-profile.php", $data);
		}
		


		public function signup(){
			$this->view->show("signup.php", array());
		
		}

		
		public function add(){
			require "application/models/usersModel.php";          
			$users = new usersModel();
			$params = gett();
			$params['table'] = "users";
			if ($users->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "application/models/usersModel.php";          
			$users = new usersModel();
			$params = gett();
			$params = gett();
			$params['table'] = "users";
			if ($users->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/usersModel.php";          
			$users = new usersModel();
			$params = gett();
			if ($users->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/usersModel.php"; 	
			$users = new usersModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $users->search($params)	);         
			$this->view->show("search.php", $data);
		}


}