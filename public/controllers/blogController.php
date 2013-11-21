<?
// PEKENINOS
// blog Controller
// 11-2013
// Beto Ayesa contacto@phpninja.info


class blogController extends ControllerBase
{
		public function index(){
			require "public/models/blogModel.php"; 	
			$blog = new blogModel();			
			$data = Array(
				  "items" => $blog->getAll()
		          );         
			$this->view->show("blog.php", $data);
		}
		
		public function post(){
			require "public/models/blogModel.php"; 	
			$blog = new blogModel();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => array($blog->getByblogId($id))
		          );         
			$this->view->show("blogDetail.php", $data);
		}
		


		public function category(){
			$params = gett();
			require "public/models/blogModel.php"; 	
			$blog = new blogModel();
			$data = Array(
				  "items" => $blog->getByCategorysId($params["a"])
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