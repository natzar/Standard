<?

// Maheco 1.0
// maheco_pages Model
// 03-2015
// Beto Ayesa contacto@phpninja.info

class pagesModel extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM maheco_pages LEFT JOIN pages ON (maheco_pages.pagesId = pages.pagesId)");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM maheco_pages LEFT JOIN pages ON (maheco_pages.pagesId = pages.pagesId) where maheco_pages.maheco_pagesId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM maheco_pages LEFT JOIN pages ON (maheco_pages.pagesId = pages.pagesId) where maheco_pages.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("maheco_pages_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByMaheco_pagesId($id){


				$consulta = $this->db->prepare("SELECT * FROM maheco_pages LEFT JOIN pages ON (maheco_pages.pagesId = pages.pagesId) WHERE maheco_pages.maheco_pagesId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}


		public function getByPagesId($id){


				$consulta = $this->db->prepare("SELECT * FROM maheco_pages  WHERE pagesId='$id' ");
				$consulta->execute();
				$aux2 =  $consulta->fetchAll();

				return $aux2;
		}


		
		
		public function search($params){
			$aux = $this->cache->get("maheco_pages_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM maheco_pages LEFT JOIN pages ON (maheco_pages.pagesId = pages.pagesId) where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("maheco_pages_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO maheco_pages (pagesId,title_es,title_ca,title_en,content_es,content_ca,content_en,slug_es,slug_ca,slug_en,orden) VALUES ('".$params['pagesId']."','".$params['title_es']."','".$params['title_ca']."','".$params['title_en']."','".$params['content_es']."','".$params['content_ca']."','".$params['content_en']."','".$params['slug_es']."','".$params['slug_ca']."','".$params['slug_en']."','".$params['orden']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE maheco_pages SET pagesId = '".$params['pagesId']."',title_es = '".$params['title_es']."',title_ca = '".$params['title_ca']."',title_en = '".$params['title_en']."',content_es = '".$params['content_es']."',content_ca = '".$params['content_ca']."',content_en = '".$params['content_en']."',slug_es = '".$params['slug_es']."',slug_ca = '".$params['slug_ca']."',slug_en = '".$params['slug_en']."',orden = '".$params['orden']."'  where maheco_pagesId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM maheco_pages where maheco_pagesId='".$params['maheco_pagesId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
