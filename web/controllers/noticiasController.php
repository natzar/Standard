<?
// MAHECO
// noticias Controller
// 03-2015
// Beto Ayesa @ 96levels 
// www.96levels.com / hello@96levels.com


class noticiasController extends ControllerBase
{
		public function index(){
			require "application/models/noticiasModel.php"; 	
			$noticias = new noticiasModel();			
			$data = Array(
				  "items" => $noticias->getAll(),
				  "recent" => $noticias->getRecent()
		          );         
			$this->view->show("noticias.php", $data);
		}


		public function detail(){
			$params = gett();
			require "application/models/noticiasModel.php"; 	
			$noticias = new noticiasModel();
			$data = Array(
				  "items" => $noticias->getByNoticiasId($params["a"]),
				  "recent" => $noticias->getRecent()
			      );	          
			$this->view->show("noticias-single.php", $data);
		}		

		
		public function add(){
			require "application/models/noticiasModel.php";          
			$noticias = new noticiasModel();
			$params = gett();
			$params['table'] = "noticias";
			if ($noticias->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "application/models/noticiasModel.php";          
			$maheco_noticias = new maheco_noticiasModel();
			$params = gett();
			$params = gett();
			$params['table'] = "maheco_noticias";
			if ($maheco_noticias->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/maheco_noticiasModel.php";          
			$maheco_noticias = new maheco_noticiasModel();
			$params = gett();
			if ($maheco_noticias->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/maheco_noticiasModel.php"; 	
			$maheco_noticias = new maheco_noticiasModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $maheco_noticias->search($params)	);         
			$this->view->show("search.php", $data);
		}


}