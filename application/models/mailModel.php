<?

// Dive Traders 1.0
// mail Model
// 06-2015
// Beto Ayesa contacto@phpninja.info

class mailModel extends ModelBase
{

        public function getNumberUnread(){
                $usersId = $_SESSION['usersId'];

				$consulta = $this->db->prepare("SELECT * FROM mail where mail.toUsersId = :usersId and mail.read <> '1'");
				$consulta->bindParam(':usersId',$usersId);
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return count($aux2);
        }
		public function getAll(){
                $usersId = $_SESSION['usersId'];

				$consulta = $this->db->prepare("SELECT * FROM mail where mail.fromUsersId = :usersId OR mail.toUsersId = :usersId");
				$consulta->bindParam(':usersId',$usersId);
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM mail LEFT JOIN fromUsers ON (mail.fromUsersId = fromUsers.fromUsersId) LEFT JOIN toUsers ON (mail.toUsersId = toUsers.toUsersId) where mail.mailId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM mail LEFT JOIN fromUsers ON (mail.fromUsersId = fromUsers.fromUsersId) LEFT JOIN toUsers ON (mail.toUsersId = toUsers.toUsersId) where mail.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("mail_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByMailId($id){


				$consulta = $this->db->prepare("SELECT * FROM mail WHERE mail.mailId=:id limit 1");
				$consulta->bindParam(":id",$id);
				$consulta->execute();
				$aux2 =  $consulta->fetch();

                $usersId = $aux2['fromUsersId'];
                $otherId = $aux2['toUsersId']; 
                unset($consulta,$aux2);
   				$consulta = $this->db->prepare("SELECT * FROM mail WHERE toUsersId IN (:usersId,:otherId) OR fromUsersId IN (:usersId,:otherId) order by fecha DESC");
                $consulta->bindParam(":usersId",$usersId);
                $consulta->bindParam(":otherId",$otherId);
                $consulta->execute();
                $aux = $consulta->fetchAll();
				return $aux;

		}


		public function getByFromUsersId($id){
                $consulta = $this->db->prepare("SELECT * FROM mail LEFT JOIN fromUsers ON (mail.fromUsersId = fromUsers.fromUsersId) LEFT JOIN toUsers ON (mail.toUsersId = toUsers.toUsersId) WHERE mail.fromUsersId='$id' ");
				$consulta->execute();
				$aux2 = array();
				$aux2 =  $consulta->fetchAll();

				return $aux2;
		}



		public function getByToUsersId($id){


				$consulta = $this->db->prepare("SELECT * FROM mail LEFT JOIN fromUsers ON (mail.fromUsersId = fromUsers.fromUsersId) LEFT JOIN toUsers ON (mail.toUsersId = toUsers.toUsersId) WHERE mail.toUsersId='$id' ");
				$consulta->execute();
				$aux2 =  $consulta->fetchAll();

				return $aux2;
		}


		
		
		public function search($params){
			$aux = $this->cache->get("mail_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM mail LEFT JOIN fromUsers ON (mail.fromUsersId = fromUsers.fromUsersId) LEFT JOIN toUsers ON (mail.toUsersId = toUsers.toUsersId) where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("mail_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function sendMessage($params){
			$consulta = $this->db->prepare("INSERT INTO mail (fecha,fromUsersId,toUsersId,author,author_image,subject,content,mail.read) VALUES (NOW(),'".$params['fromUsersId']."','".$params['toUsersId']."','".$params['author']."','".$params['author_image']."','".$params['subject']."','".$params['content']."','".$params['read']."')");
			$consulta->execute();
			$_SESSION['errors'] ="Se ha enviado con éxito";
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE mail SET fecha = '".$params['fecha']."',fromUsersId = '".$params['fromUsersId']."',toUsersId = '".$params['toUsersId']."',subject = '".$params['subject']."',content = '".$params['content']."',read = '".$params['read']."'  where mailId='".$params['id']."'");
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
