<?
// IGUANA.IO
// users Controller
// 08-2013
// Beto Ayesa contacto@phpninja.info


class usersController extends ControllerBase
{
		public function index(){
/*
		
		$params = gett();
		require "models/itemsModel.php"; 	
		require "models/usersModel.php"; 	
		require "models/categorysModel.php"; 	
		
		$items = new itemsModel();

		$users = new usersModel();
		$items_info = $items->getByUsersId($params["a"]);
		$data = Array(
			  "items" => $items_info,
			   "profile" => $users->getByUsersId($items_info[0]['usersId'])
		      );	          
		$this->view->show("itemsUsers.php", $data);
*/
$this->detail();
		
	}
		public function profile(){
			require "models/usersModel.php"; 	
			$users = new usersModel();	
			require "models/itemsModel.php"; 	
			$items = new itemsModel();	
			require "models/categorysModel.php"; 				
			require "models/whishlistModel.php"; 	
			$wishes = new whishlistModel();	
			
			$id = $_SESSION['usersId'];		
			
			$aux = $items->getByUsersId($id);
			
			for($i=0;$i< count($aux);$i++):
				$aux[$i]['interested'] = count($wishes->getByItemsId($aux[$i]['itemsId'] ));
			endfor;
			
			$data = Array(
				  "profile" => $users->getByUsersId($id),
				  "items" =>  $aux,
				  "wishes" => $wishes->getByUsersId($id)

		          );         
			$this->view->show("profile.php", $data);
	}	


	public function profile2(){
		
		$params = gett();
		require "models/itemsModel.php"; 	
		$items = new itemsModel();
		require "models/usersModel.php"; 	
		$users = new usersModel();
		$items_info = $items->getByUsersId($params["a"]);
		$data = Array(
			  "items" => $items_info,
			   "profile" => $users->getByUsersId($items_info[0]['usersId'])
		      );	          
		$this->view->show("itemsUsers.php", $data);
		
	}		


		
public function detail(){
		require "models/itemsModel.php"; 	
			$items = new itemsModel();			
			require "models/usersModel.php"; 	
			$users = new usersModel();	
			require "models/categorysModel.php";
			$cats = new categorysModel();
						require "models/searchesModel.php"; 			
			$searches = new searchesModel();
			$params = gett();
			if (!isset($params['query']))
			$params['query'] ='';
			
			$id = $params['a'];
			
			$WAREHOUSE_A = isset($_SESSION['usersId']) ? $items->getByUsersId($_SESSION['usersId']) : array();
		

			$data = Array(
				"SEO_TITLE" => "Items de ". $items->getFieldValueById("name",$params['a'] ),
				"SEO_DESCRIPTION" => $items->getFieldValueById("name",$params['a'] )." utiliza Iguana.io para realizar trueques Online. Píde que te invite para empezar a hacer trueques.",
				
				  "items" => $items->getByField("items.usersId",$params['a'] ),
				  "cats" => $cats->getAll(),
"wishlist" => $searches->getByUsersId($params['a']),
				  "profile" =>  $users->getByUsersId($params['a']),
  				  "warehouse_a" => $WAREHOUSE_A,
				  "warehouse_b" => $items->getByUsersId($id),

				  "search_str" => ""
		          );         
		        
			$this->view->show("user.php", $data);
	}


		public function signup(){
			$this->view->show("signup.php", array());
		
		}

		
		public function add(){
			require "models/usersModel.php";          
			$users = new usersModel();
			$params = gett();
			//print_r($params);
			$params['table'] = "users";
			$params['img'] = "profile-default.jpg";
			$users->POST($params);
			
			
			require "lib/class/EmailSend.php";
				$mail = new EmailSend();
				$mail->sendEmail('signup.php', array(), 'Bienvenido a Iguana.io', array($params['email']));
/* borramos invitacion */
			require "models/invitesModel.php";          
			$invites = new invitesModel();
			$invites->delete($params['email'] );
			// echo 1;


			header("location: /");
//			header("location: /index.php?p=login&m=login&email=".$params['email']."&password=".$params['password']);

		}
		
		public function edit(){
			require "models/usersModel.php";          
			$users = new usersModel();
			$params = gett();
			
			$params['table'] = "users";
			$params['rid'] = $_SESSION['usersId'];
			$users->PUT($params);
			header("location: ../profile");
		}
		
		public function delete(){
			require "models/usersModel.php";          
			$users = new usersModel();
			$params = gett();
			if ($users->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "models/usersModel.php"; 	
			$users = new usersModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $users->search($params)	);         
			$this->view->show("search.php", $data);
		}


}