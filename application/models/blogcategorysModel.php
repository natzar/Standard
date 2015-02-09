<?

// Pekeninos 1.0
// blogcategorys Model
// 11-2013
// Beto Ayesa contacto@phpninja.info

class blogcategorysModel extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM blogcategorys order by orden,categorys ASC");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM blogcategorys  where blogcategorys.blogcategorysId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM blogcategorys  where blogcategorys.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				
				return $aux2;
		}
	


		public function getByBlogcategorysId($id){


				$consulta = $this->db->prepare("SELECT * FROM blogcategorys  WHERE blogcategorys.blogcategorysId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}

		
		
		public function search($params){
			$aux = $this->cache->get("blogcategorys_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM blogcategorys  where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("blogcategorys_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
	}
