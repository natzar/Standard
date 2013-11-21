<?
// PEKENINOS
// categorys Controller
// 11-2013
// Beto Ayesa contacto@phpninja.info


class categorysController extends ControllerBase
{
		public function index(){
			require "public/models/categorysModel.php"; 	
			$categorys = new categorysModel();			
			$data = Array(
				  "items" => $categorys->GET(array("table" => "categorys"))
		          );         
			$this->view->show("templates/table.php", $data);
		}
		
		public function detail(){
			require "public/models/categorysModel.php"; 	
			$categorys = new categorysModel();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $categorys->getBycategorysId($id)
		          );         
			$this->view->show("templates/detail.php", $data);
		}
		

		
		public function add(){
			require "public/models/categorysModel.php";          
			$categorys = new categorysModel();
			$params = gett();
			$params['table'] = "categorys";
			if ($categorys->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "public/models/categorysModel.php";          
			$categorys = new categorysModel();
			$params = gett();
			$params = gett();
			$params['table'] = "categorys";
			if ($categorys->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "public/models/categorysModel.php";          
			$categorys = new categorysModel();
			$params = gett();
			if ($categorys->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "public/models/categorysModel.php"; 	
			$categorys = new categorysModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $categorys->search($params)	);         
			$this->view->show("search.php", $data);
		}


}