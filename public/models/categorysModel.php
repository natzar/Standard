<?

// Pekeninos 1.0
// categorys Model
// 11-2013
// Beto Ayesa contacto@phpninja.info

class categorysModel extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM categorys ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM categorys  where categorys.categorysId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM categorys  where categorys.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("categorys_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByCategorysId($id){


				$consulta = $this->db->prepare("SELECT * FROM categorys  WHERE categorys.categorysId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}

		
		
		public function search($params){
			$aux = $this->cache->get("categorys_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM categorys  where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("categorys_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO categorys (title) VALUES ('".$params['title']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE categorys SET title = '".$params['title']."'  where categorysId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM categorys where categorysId='".$params['categorysId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
