<?

// Distrito Dance 1.0
// pages Model
// 07-2015
// Beto Ayesa contacto@phpninja.info

class pagesModel extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM pages ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM pages  where pages.pagesId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM pages  where pages.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("pages_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByPagesId($id){


				$consulta = $this->db->prepare("SELECT * FROM pages  WHERE pages.pagesId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}

		
		
		public function search($params){
			$aux = $this->cache->get("pages_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM pages  where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("pages_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO pages (title_es,content_es,slug_es,title_ca,content_ca,slug_ca,title_en,content_en,slug_en) VALUES ('".$params['title_es']."','".$params['content_es']."','".$params['slug_es']."','".$params['title_ca']."','".$params['content_ca']."','".$params['slug_ca']."','".$params['title_en']."','".$params['content_en']."','".$params['slug_en']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE pages SET title_es = '".$params['title_es']."',content_es = '".$params['content_es']."',slug_es = '".$params['slug_es']."',title_ca = '".$params['title_ca']."',content_ca = '".$params['content_ca']."',slug_ca = '".$params['slug_ca']."',title_en = '".$params['title_en']."',content_en = '".$params['content_en']."',slug_en = '".$params['slug_en']."'  where pagesId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM pages where pagesId='".$params['pagesId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
