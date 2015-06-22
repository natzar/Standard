<?

// Dive Traders 1.0
// users Model
// 06-2015
// Beto Ayesa contacto@phpninja.info

class usersModel extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM users ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM users  where users.usersId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM users  where users.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("users_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getByUsersId($id){


				$consulta = $this->db->prepare("SELECT * FROM users  WHERE users.usersId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}

		
		
		public function search($params){
			$aux = $this->cache->get("users_search_".$params['query']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM users  where title like '%".$params['query']."%' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("users_search_".$params['query'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO users (email,password,area) VALUES ('".$params['email']."','".$params['password']."','".$params['area']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE users SET email = '".$params['email']."',password = '".$params['password']."',area = '".$params['area']."'  where usersId='".$params['id']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM users where usersId='".$params['usersId']."'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
