<?

// Maheco 1.0
// maheco_noticias Model
// 03-2015
// Beto Ayesa contacto@phpninja.info

class noticiasModel extends ModelBase
{
		public function getAll(){

				$consulta = $this->db->prepare("SELECT * FROM maheco_noticias where title_".$_SESSION['lang']." <> '' AND content_".$_SESSION['lang']." <> ''");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}

		public function getRecent(){

				$consulta = $this->db->prepare("SELECT * FROM maheco_noticias where title_".$_SESSION['lang']." <> '' AND content_".$_SESSION['lang']." <> '' order by fecha DESC limit 3");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
				
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM maheco_noticias LEFT JOIN noticias ON (maheco_noticias.noticiasId = noticias.noticiasId) where maheco_noticias.maheco_noticiasId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM maheco_noticias LEFT JOIN noticias ON (maheco_noticias.noticiasId = noticias.noticiasId) where maheco_noticias.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("maheco_noticias_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByNoticiasId($id){


				$consulta = $this->db->prepare("SELECT * FROM maheco_noticias  WHERE maheco_noticias.noticiasId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}



		
		
		public function search($params){
			$aux = $this->cache->get("maheco_noticias_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM maheco_noticias LEFT JOIN noticias ON (maheco_noticias.noticiasId = noticias.noticiasId) where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("maheco_noticias_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO maheco_noticias (noticiasId,fecha,title_es,title_ca,title_en,content_es,content_ca,content_en,slug_es,slug_ca,slug_en,orden) VALUES ('".$params['noticiasId']."','".$params['fecha']."','".$params['title_es']."','".$params['title_ca']."','".$params['title_en']."','".$params['content_es']."','".$params['content_ca']."','".$params['content_en']."','".$params['slug_es']."','".$params['slug_ca']."','".$params['slug_en']."','".$params['orden']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE maheco_noticias SET noticiasId = '".$params['noticiasId']."',fecha = '".$params['fecha']."',title_es = '".$params['title_es']."',title_ca = '".$params['title_ca']."',title_en = '".$params['title_en']."',content_es = '".$params['content_es']."',content_ca = '".$params['content_ca']."',content_en = '".$params['content_en']."',slug_es = '".$params['slug_es']."',slug_ca = '".$params['slug_ca']."',slug_en = '".$params['slug_en']."',orden = '".$params['orden']."'  where maheco_noticiasId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM maheco_noticias where maheco_noticiasId='".$params['maheco_noticiasId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
