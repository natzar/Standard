<?
// PEKENINOS
// blogcategorys Controller
// 11-2013
// Beto Ayesa contacto@phpninja.info


class blogcategorysController extends ControllerBase
{
		public function index(){
			require "public/models/blogcategorysModel.php"; 	
			$blogcategorys = new blogcategorysModel();			
			$data = Array(
				  "items" => $blogcategorys->GET(array("table" => "blogcategorys"))
		          );         
			$this->view->show("templates/table.php", $data);
		}
		
		public function detail(){
			require "public/models/blogcategorysModel.php"; 	
			$blogcategorys = new blogcategorysModel();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $blogcategorys->getByblogcategorysId($id)
		          );         
			$this->view->show("templates/detail.php", $data);
		}
		

		
		public function add(){
			require "public/models/blogcategorysModel.php";          
			$blogcategorys = new blogcategorysModel();
			$params = gett();
			$params['table'] = "blogcategorys";
			if ($blogcategorys->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "public/models/blogcategorysModel.php";          
			$blogcategorys = new blogcategorysModel();
			$params = gett();
			$params = gett();
			$params['table'] = "blogcategorys";
			if ($blogcategorys->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "public/models/blogcategorysModel.php";          
			$blogcategorys = new blogcategorysModel();
			$params = gett();
			if ($blogcategorys->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "public/models/blogcategorysModel.php"; 	
			$blogcategorys = new blogcategorysModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $blogcategorys->search($params)	);         
			$this->view->show("search.php", $data);
		}


}