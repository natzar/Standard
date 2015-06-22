<?

// Maheco 1.0
// maheco_slider Model
// 03-2015
// Beto Ayesa contacto@phpninja.info

class sliderModel extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM maheco_slider order by orden ASC");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM maheco_slider LEFT JOIN slider ON (maheco_slider.sliderId = slider.sliderId) where maheco_slider.maheco_sliderId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM maheco_slider LEFT JOIN slider ON (maheco_slider.sliderId = slider.sliderId) where maheco_slider.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("maheco_slider_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByMaheco_sliderId($id){


				$consulta = $this->db->prepare("SELECT * FROM maheco_slider LEFT JOIN slider ON (maheco_slider.sliderId = slider.sliderId) WHERE maheco_slider.maheco_sliderId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}


		public function getBySliderId($id){


				$consulta = $this->db->prepare("SELECT * FROM maheco_slider LEFT JOIN slider ON (maheco_slider.sliderId = slider.sliderId) WHERE maheco_slider.sliderId='$id' ");
				$consulta->execute();
				$aux2 =  $consulta->fetchAll();

				return $aux2;
		}


		
		
		public function search($params){
			$aux = $this->cache->get("maheco_slider_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM maheco_slider LEFT JOIN slider ON (maheco_slider.sliderId = slider.sliderId) where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("maheco_slider_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO maheco_slider (sliderId,image,orden) VALUES ('".$params['sliderId']."','".$params['image']."','".$params['orden']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE maheco_slider SET sliderId = '".$params['sliderId']."',image = '".$params['image']."',orden = '".$params['orden']."'  where maheco_sliderId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM maheco_slider where maheco_sliderId='".$params['maheco_sliderId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
