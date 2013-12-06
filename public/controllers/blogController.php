<?
// PEKENINOS
// blog Controller
// 11-2013
// Beto Ayesa contacto@phpninja.info


class blogController extends ControllerBase
{
		public function index(){
			require "public/models/blogModel.php"; 	
			require "public/models/personajesModel.php"; 	
			$personajes = new personajesModel();
			$blog = new blogModel();			
			$data = Array(
				  "items" => $blog->getAll(),
				  "personajes" => $personajes->getAll()
		          );         
			$this->view->show("blog.php", $data);
		}
		
		public function post(){
			require "public/models/blogModel.php"; 	
			require "public/models/personajesModel.php"; 	
			$personajes = new personajesModel();
			$blog = new blogModel();	
			
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $blog->getByblogId($id),
				  "personajes" => $personajes->getAll()
		          );         
			$this->view->show("blogDetail.php", $data);
		}
		


		public function category(){
			$params = gett();
			require "public/models/blogModel.php"; 	
			require "public/models/personajesModel.php"; 	
			$personajes = new personajesModel();
			$blog = new blogModel();
			$items = $blog->getByBlogcategorysId($params["a"]);
			$CATEGORY_TITLE = count($items) > 0 ? $items[0]['categorys'] : '';
			$data = Array(
				  "items" => $items,
				  "personajes" => $personajes->getAll(),
				  "CATEGORY_TITLE" => $CATEGORY_TITLE
			      );	          
			      

			$this->view->show("blog.php", $data);
		}		

		
		public function add(){
			require "public/models/blogModel.php";          
			$blog = new blogModel();
			$params = gett();
			$params['table'] = "blog";
			if ($blog->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "public/models/blogModel.php";          
			$blog = new blogModel();
			$params = gett();
			$params = gett();
			$params['table'] = "blog";
			if ($blog->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "public/models/blogModel.php";          
			$blog = new blogModel();
			$params = gett();
			if ($blog->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "public/models/blogModel.php"; 	
			$blog = new blogModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $blog->search($params)	);         
			$this->view->show("search.php", $data);
		}


}