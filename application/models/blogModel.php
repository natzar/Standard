<?

// Pekeninos 1.0
// blog Model
// 11-2013
// Beto Ayesa contacto@phpninja.info

class blogModel extends ModelBase
{

		public function getAll(){

				$params = gett();

				$consulta = $this->db->prepare("SELECT * FROM blog   where fecha < NOW() order by fecha DESC limit ".$params['offset'].",".$params['perpage']);
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}

		public function getHots(){


				$consulta = $this->db->prepare("SELECT * FROM blog LEFT JOIN blogcategorys ON (blog.blogcategorysId = blogcategorys.blogcategorysId) where fecha > (curdate() - INTERVAL 15 DAY) and fecha < NOW() order by views DESC limit 6");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
				
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM blog LEFT JOIN blogcategorys ON (blog.blogcategorysId = blogcategorys.blogcategorysId) where blog.blogId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM blog where blog.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
	


		public function getByBlogId($id){


				$consulta = $this->db->prepare("SELECT * FROM blog LEFT JOIN blogcategorys ON (blog.blogcategorysId = blogcategorys.blogcategorysId) WHERE blog.blogId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				$consulta = $this->db->prepare("UPDATE blog SET views = views + 1 where blog.blogId='".$id."'");
				$consulta->execute();
				
				return $aux2;

		}
		

		public function getLast(){


				$consulta = $this->db->prepare("SELECT * FROM blog LEFT JOIN blogcategorys ON (blog.blogcategorysId = blogcategorys.blogcategorysId) WHERE blog.blogId= MAX(blogId) limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				//$consulta = $this->db->prepare("UPDATE blog SET views = views + 1 where blog.blogId='".$id."'");
				//$consulta->execute();
				
				return $aux2;

		}
		


		public function getByBlogcategorysId($id){

				$params = gett();
				$consulta = $this->db->prepare("SELECT * FROM blog LEFT JOIN blogcategorys ON (blog.blogcategorysId = blogcategorys.blogcategorysId) WHERE blog.blogcategorysId='$id' and fecha < NOW() order by blog.fecha DESC limit ".$params['offset'].",".$params['perpage'] );
				$consulta->execute();
				$aux2 =  $consulta->fetchAll();

				return $aux2;
		}


		public function getRelatedPosts($id){

				$params = gett();
				$consulta = $this->db->prepare("SELECT * FROM blog LEFT JOIN blogcategorys ON (blog.blogcategorysId = blogcategorys.blogcategorysId) WHERE blog.blogcategorysId='$id' and fecha < NOW() order by blog.blogId ASC limit 4" );
				$consulta->execute();
				$aux2 =  $consulta->fetchAll();

				return $aux2;
		}

		
		
		public function search($params){
			
				$consulta = $this->db->prepare("SELECT * FROM blog LEFT JOIN blogcategorys ON (blog.blogcategorysId = blogcategorys.blogcategorysId) where tags like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				
				return $aux2;
		}
		
		
}
