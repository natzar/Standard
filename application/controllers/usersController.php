<?
// DISTRITO DANCE
// users Controller
// 07-2015
// Beto Ayesa @ 96levels 
// www.96levels.com / hello@96levels.com


class usersController extends ControllerBase
{
		public function index(){
			require "application/models/usersModel.php"; 	
			$users = new usersModel();			
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
			$data = Array(
				  "items" => $users->getByusersId($id)
		          );         
			$this->view->show("templates/detail.php", $data);
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