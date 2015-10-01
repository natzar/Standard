<?

// Distrito Dance 1.0
// productoscategorias Model
// 07-2015
// Beto Ayesa contacto@phpninja.info

class productoscategoriasModel extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM productoscategorias order by orden ASC");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM productoscategorias  where productoscategorias.productoscategoriasId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM productoscategorias  where productoscategorias.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("productoscategorias_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByProductoscategoriasId($id){


				$consulta = $this->db->prepare("SELECT * FROM productoscategorias  WHERE productoscategorias.productoscategoriasId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}

		
		
		public function search($params){
			$aux = $this->cache->get("productoscategorias_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM productoscategorias  where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("productoscategorias_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO productoscategorias (productoscategorias_es,productoscategorias_ca,productoscategorias_en) VALUES ('".$params['productoscategorias_es']."','".$params['productoscategorias_ca']."','".$params['productoscategorias_en']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE productoscategorias SET productoscategorias_es = '".$params['productoscategorias_es']."',productoscategorias_ca = '".$params['productoscategorias_ca']."',productoscategorias_en = '".$params['productoscategorias_en']."'  where productoscategoriasId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM productoscategorias where productoscategoriasId='".$params['productoscategoriasId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
