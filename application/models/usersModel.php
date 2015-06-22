<?

// Iguana.io 1.0
// users Model
// 08-2013
// Beto Ayesa contacto@phpninja.info

class usersModel extends ModelBase
{

		public function getAll(){
			$aux = $this->cache->get("users_All");
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM users ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("users_All",$aux2,600);
				return $aux2;
			} 
			return $aux;
		}
		
		public function getFieldValueById($field,$id){
			$aux = $this->cache->get("users_Array_$id");
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT $field FROM users  where users.usersId ='".$id."' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];
				$this->cache->set("users_".$field."_".$id,$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		public function getByField($field,$val){
			$aux = $this->cache->get("users_".$field."_$val");
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM users  where users.".$field." ='".$val."' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("users_".$field."_".$val,$aux2,600);
				return $aux2;
			}
			return $aux;
		}
	


		public function getByUsersId($id){
			//$aux = $this->cache->get("users_Id_$id");
			//if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM users  WHERE users.usersId='$id' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();
		//		$this->cache->set("users_Id_$id",$aux2,600);
				return $aux2;
		//	}
		//	return $aux;

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
			$consulta = $this->db->prepare("INSERT INTO users (email,password,name,img,user_location,position_lat,position_long,date_registered,last_login,invitations) VALUES ('".$params['email']."','".$params['password']."','".$params['name']."','".$params['img']."','".$params['user_location']."','".$params['position_lat']."','".$params['position_long']."','".$params['date_registered']."','".$params['last_login']."','".$params['invitations']."')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE users SET email = '".$params['email']."',password = '".$params['password']."',name = '".$params['name']."',img = '".$params['img']."',user_location = '".$params['user_location']."',position_lat = '".$params['position_lat']."',position_long = '".$params['position_long']."',date_registered = '".$params['date_registered']."',last_login = '".$params['last_login']."',invitations = '".$params['invitations']."'  where usersId='".$params['id']."'");
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
