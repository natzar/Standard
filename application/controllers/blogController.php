<?
// PEKENINOS
// blog Controller
// 11-2013
// Beto Ayesa contacto@phpninja.info


class blogController extends ControllerBase
{
		public function index(){
			require "application/models/blogModel.php"; 	


			$blog = new blogModel();			
			$data = Array(
				  "items" => $blog->getAll(),


				  "SEO_TITLE" => "Blog",




		          );         
			$this->view->show("blog.php", $data);
		}
		
		public function detail(){
			require "application/models/blogModel.php"; 	

            $params = gett();
            $a = $params['a'];
            
			$blog = new blogModel();			
			$data = Array(
				  "items" => $blog->getByField('slug_'.$_SESSION['lang'],$a),


				  "SEO_TITLE" => "Blog",




		          );         
			$this->view->show("blog.php", $data);
		}
			public function post(){
			require "application/models/blogModel.php"; 	
			require "application/models/personajesModel.php"; 	
			$personajes = new personajesModel();
			$blog = new blogModel();	
			
			$params = gett();
			$id = $params["a"];	
			$post = $blog->getByblogId($id);
			$related = $blog->getRelatedPosts($post['blogcategorysId']);
				
			$data = Array(
				  "items" => $post,
 				  "hots" => $blog->getHots(),
				  "SEO_TITLE" => $post['title'],				  
				  "SEO_DESCRIPTION" => substr(strip_tags($post['content']),0,130)."...",
 				  "SEO_IMAGE" => $post['blogImg'],
				  "personajes" => $personajes->getAll(),
				  "related" => $related
		          );         
			$this->view->show("blogDetail.php", $data);
		}
		


		public function category(){
			$params = gett();
			require "application/models/blogModel.php"; 	
			require "application/models/personajesModel.php"; 	
			$personajes = new personajesModel();
			$blog = new blogModel();

			$categoryId = $this->urlHelper->translate("blogcategorys",$params["a"]);
			$items = $blog->getByBlogcategorysId($categoryId);
			$CATEGORY_TITLE = count($items) > 0 ? $items[0]['categorys'] : '';
			$data = Array(
				  "items" => $items,
  				  "hots" => $blog->getHots(),
/* 				  "personajes" => $personajes->getAll(), */
				  "CATEGORY_TITLE" => $CATEGORY_TITLE,
				  "SEO_TITLE" => $CATEGORY_TITLE,
				  "SEO_DESCRIPTION" => "Artículos, Posts, Juegos y Activades de ".$CATEGORY_TITLE
			      );	          
			      

			$this->view->show("blog.php", $data);
		}		

		
		public function tag(){
			$params = gett();
			require "application/models/blogModel.php"; 	
			require "application/models/personajesModel.php"; 	
			$personajes = new personajesModel();
			$blog = new blogModel();

			
			$items = $blog->search(array("query" => $params['a']));
			$CATEGORY_TITLE = ucfirst($params['a']);
			$data = Array(
				  "items" => $items,
  				  "hots" => $blog->getHots(),
				  /* "personajes" => $personajes->getAll(), */
				  "CATEGORY_TITLE" => $CATEGORY_TITLE,
				  "SEO_TITLE" => $CATEGORY_TITLE,
				  "SEO_DESCRIPTION" => "Todos los Artículos con el tag ".$CATEGORY_TITLE
			      );	          
			      

			$this->view->show("blog.php", $data);
		}	
		
		public function add(){
			require "application/models/blogModel.php";          
			$blog = new blogModel();
			$params = gett();
			$params['table'] = "blog";
			if ($blog->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "application/models/blogModel.php";          
			$blog = new blogModel();
			$params = gett();
			$params = gett();
			$params['table'] = "blog";
			if ($blog->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/blogModel.php";          
			$blog = new blogModel();
			$params = gett();
			if ($blog->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/blogModel.php"; 	
			$blog = new blogModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $blog->search($params)	);         
			$this->view->show("search.php", $data);
		}


}