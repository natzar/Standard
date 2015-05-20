<?
// MAHECO
// pages Controller
// 03-2015
// Beto Ayesa @ 96levels 
// www.96levels.com / hello@96levels.com


class pagesController extends ControllerBase
{
		public function index(){
			require "application/models/pagesModel.php"; 	
			$pages = new pagesModel();			
			$data = Array(
				  "items" => $pages->GET(array("table" => "maheco_pages"))
		          );         
			$this->view->show("templates/table.php", $data);
		}
		
		public function detail(){
			require "application/models/pagesModel.php"; 	
			$pages = new pagesModel();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $pages->getBypagesId($id)
		          );         
			$this->view->show("templates/detail.php", $data);
		}
		


		public function detail(){
			$params = gett();
			require "application/models/pagesModel.php"; 	
			$pages = new pagesModel();
			$data = Array(
				  "items" => $pages->getByPagesId($params["a"])
			      );	          
			$this->view->show("related-table.php", $data);
		}		

		
		public function add(){
			require "application/models/pagesModel.php";          
			$pages = new pagesModel();
			$params = gett();
			$params['table'] = "pages";
			if ($pages->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "application/models/pagesModel.php";          
			$maheco_pages = new maheco_pagesModel();
			$params = gett();
			$params = gett();
			$params['table'] = "maheco_pages";
			if ($maheco_pages->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/maheco_pagesModel.php";          
			$maheco_pages = new maheco_pagesModel();
			$params = gett();
			if ($maheco_pages->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/maheco_pagesModel.php"; 	
			$maheco_pages = new maheco_pagesModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $maheco_pages->search($params)	);         
			$this->view->show("search.php", $data);
		}


}