<?
// DISTRITO DANCE
// productos Controller
// 07-2015
// Beto Ayesa @ 96levels 
// www.96levels.com / hello@96levels.com


class productosController extends ControllerBase
{
		public function index(){
			require "application/models/productosModel.php"; 	
			$productos = new productosModel();			
			$data = Array(
				  "items" => $productos->getAll()
		          );         
			$this->view->show("templates/table.php", $data);
		}
		
		public function detail(){
			require "application/models/productosModel.php"; 	
			$productos = new productosModel();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $productos->getByproductosId($id)
		          );         
			$this->view->show("templates/detail.php", $data);
		}
		


		public function productoscategorias(){
			$params = gett();
			require "application/models/productosModel.php"; 	
			$productos = new productosModel();
			$data = Array(
				  "items" => $productos->getByProductoscategoriasId($params["a"])
			      );	          
			$this->view->show("related-table.php", $data);
		}		

		
		public function add(){
			require "application/models/productosModel.php";          
			$productos = new productosModel();
			$params = gett();
			$params['table'] = "productos";
			if ($productos->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "application/models/productosModel.php";          
			$productos = new productosModel();
			$params = gett();
			$params = gett();
			$params['table'] = "productos";
			if ($productos->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/productosModel.php";          
			$productos = new productosModel();
			$params = gett();
			if ($productos->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/productosModel.php"; 	
			$productos = new productosModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $productos->search($params)	);         
			$this->view->show("search.php", $data);
		}


}