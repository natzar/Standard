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
                  "ultimosposts" => $blog->getUltimos(), 

				  "SEO_TITLE" => "Blog",




		          );         
			$this->view->show("blog.php", $data);
		}
		
		public function detail(){
			require "application/models/blogModel.php"; 	
	$blog = new blogModel();			
            $params = gett();
            $a = $params['a'];
            $items = $blog->getByField('slug_es',$a);

			$data = Array(
				  "items" => $items,
                "ultimosposts" => $blog->getUltimos(),
"LANG" => $_SESSION['lang'],
				  "SEO_TITLE" => $items[0]['title_es'],
				  "SEO_DESCRIPTION" => truncate($items[0]['content_es'],200)




		          );         
			$this->view->show("blog.php", $data);
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