<?

// Distrito Dance 1.0
// productos Model
// 07-2015
// Beto Ayesa contacto@phpninja.info

class productosModel extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM productos LEFT JOIN productoscategorias ON (productos.productoscategoriasId = productoscategorias.productoscategoriasId)");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getRelatedProducts($pId){
		$consulta = $this->db->prepare("SELECT * FROM productos LEFT JOIN productoscategorias ON (productos.productoscategoriasId = productoscategorias.productoscategoriasId) limit 3");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM productos LEFT JOIN productoscategorias ON (productos.productoscategoriasId = productoscategorias.productoscategoriasId) where productos.productosId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM productos LEFT JOIN productoscategorias ON (productos.productoscategoriasId = productoscategorias.productoscategoriasId) where productos.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("productos_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByProductosId($id){


				$consulta = $this->db->prepare("SELECT * FROM productos LEFT JOIN productoscategorias ON (productos.productoscategoriasId = productoscategorias.productoscategoriasId) WHERE productos.productosId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}


		public function getByProductoscategoriasId($id){


				$consulta = $this->db->prepare("SELECT * FROM productos LEFT JOIN productoscategorias ON (productos.productoscategoriasId = productoscategorias.productoscategoriasId) WHERE productos.productoscategoriasId='$id' ");
				$consulta->execute();
				$aux2 =  $consulta->fetchAll();

				return $aux2;
		}


		
		
		public function search($params){
			$aux = $this->cache->get("productos_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM productos LEFT JOIN productoscategorias ON (productos.productoscategoriasId = productoscategorias.productoscategoriasId) where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("productos_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO productos (featuredImagen,productoscategoriasId,title_es,content_es,title_ca,content_ca,title_en,content_en,price,imagen1,imagen2,imagen3) VALUES ('".$params['featuredImagen']."','".$params['productoscategoriasId']."','".$params['title_es']."','".$params['content_es']."','".$params['title_ca']."','".$params['content_ca']."','".$params['title_en']."','".$params['content_en']."','".$params['price']."','".$params['imagen1']."','".$params['imagen2']."','".$params['imagen3']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE productos SET featuredImagen = '".$params['featuredImagen']."',productoscategoriasId = '".$params['productoscategoriasId']."',title_es = '".$params['title_es']."',content_es = '".$params['content_es']."',title_ca = '".$params['title_ca']."',content_ca = '".$params['content_ca']."',title_en = '".$params['title_en']."',content_en = '".$params['content_en']."',price = '".$params['price']."',imagen1 = '".$params['imagen1']."',imagen2 = '".$params['imagen2']."',imagen3 = '".$params['imagen3']."'  where productosId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM productos where productosId='".$params['productosId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
