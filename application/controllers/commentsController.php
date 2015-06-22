<?
// DIVE TRADERS
// comments Controller
// 06-2015
// Beto Ayesa @ 96levels 
// www.96levels.com / hello@96levels.com


class commentsController extends ControllerBase
{
		public function index(){
			require "application/models/commentsModel.php"; 	
			$comments = new commentsModel();			
			$data = Array(
				  "items" => $comments->GET(array("table" => "comments"))
		          );         
			$this->view->show("templates/table.php", $data);
		}
		
		public function detail(){
			require "application/models/commentsModel.php"; 	
			$comments = new commentsModel();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $comments->getBycommentsId($id)
		          );         
			$this->view->show("templates/detail.php", $data);
		}
		


		public function users(){
			$params = gett();
			require "application/models/commentsModel.php"; 	
			$comments = new commentsModel();
			$data = Array(
				  "items" => $comments->getByUsersId($params["a"])
			      );	          
			$this->view->show("related-table.php", $data);
		}		

		
		public function add(){
			require "application/models/commentsModel.php";          
			$comments = new commentsModel();
			$params = gett();
			$params['table'] = "comments";
			if ($comments->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "application/models/commentsModel.php";          
			$comments = new commentsModel();
			$params = gett();
			$params = gett();
			$params['table'] = "comments";
			if ($comments->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/commentsModel.php";          
			$comments = new commentsModel();
			$params = gett();
			if ($comments->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/commentsModel.php"; 	
			$comments = new commentsModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $comments->search($params)	);         
			$this->view->show("search.php", $data);
		}


}