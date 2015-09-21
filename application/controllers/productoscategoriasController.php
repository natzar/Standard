<?
// DISTRITO DANCE
// productoscategorias Controller
// 07-2015
// Beto Ayesa @ 96levels 
// www.96levels.com / hello@96levels.com


class productoscategoriasController extends ControllerBase
{
		public function index(){
			require "application/models/productoscategoriasModel.php"; 	
			$productoscategorias = new productoscategoriasModel();			
			$data = Array(
				  "items" => $productoscategorias->getAll()
		          );         
			$this->view->show("templates/table.php", $data);
		}
		
		public function detail(){
			require "application/models/productoscategoriasModel.php"; 	
			$productoscategorias = new productoscategoriasModel();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $productoscategorias->getByproductoscategoriasId($id)
		          );         
			$this->view->show("templates/detail.php", $data);
		}
		

		
		public function add(){
			require "application/models/productoscategoriasModel.php";          
			$productoscategorias = new productoscategoriasModel();
			$params = gett();
			$params['table'] = "productoscategorias";
			if ($productoscategorias->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "application/models/productoscategoriasModel.php";          
			$productoscategorias = new productoscategoriasModel();
			$params = gett();
			$params = gett();
			$params['table'] = "productoscategorias";
			if ($productoscategorias->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/productoscategoriasModel.php";          
			$productoscategorias = new productoscategoriasModel();
			$params = gett();
			if ($productoscategorias->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/productoscategoriasModel.php"; 	
			$productoscategorias = new productoscategoriasModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $productoscategorias->search($params)	);         
			$this->view->show("search.php", $data);
		}


}