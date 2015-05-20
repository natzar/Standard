<?

// Iguana.io 1.0
// mail Model
// 08-2013
// Beto Ayesa contacto@phpninja.info

class mailModel extends ModelBase
{

		public function getAll(){
			$aux = $this->cache->get("mail_All");
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM mail ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("mail_All",$aux2,600);
				return $aux2;
			} 
			return $aux;
		}
		
		public function getFieldValueById($field,$id){
			$aux = $this->cache->get("mail_Array_$id");
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT $field FROM mail  where mail.mailId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];
				$this->cache->set("mail_".$field."_".$id,$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		public function getByField($field,$val){
			$aux = $this->cache->get("mail_".$field."_$val");
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM mail  where mail.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("mail_".$field."_".$val,$aux2,600);
				return $aux2;
			}
			return $aux;
		}
	


		public function getByMailId($id){
			$aux = $this->cache->get("mail_Id_$id");
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM mail  WHERE mail.mailId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();
				$this->cache->set("mail_Id_$id",$aux2,600);
				return $aux2;
			}
			return $aux;

		}

		
		
		public function search($params){
			$aux = $this->cache->get("mail_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM mail  where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("mail_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO mail (UserTo,UserFrom,Subject,Message,status,SentDate,mail_id) VALUES ('".$params['UserTo']."','".$params['UserFrom']."','".$params['Subject']."','".$params['Message']."','".$params['status']."','".$params['SentDate']."','".$params['mail_id']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE mail SET UserTo = '".$params['UserTo']."',UserFrom = '".$params['UserFrom']."',Subject = '".$params['Subject']."',Message = '".$params['Message']."',status = '".$params['status']."',SentDate = '".$params['SentDate']."',mail_id = '".$params['mail_id']."'  where mailId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM mail where mailId='".$params['mailId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
