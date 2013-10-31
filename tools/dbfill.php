<?

class dbfill extends ModelBase{
public function dbfill(){
	$config = Config::singleton();
        
        $prefix = $config->get('db_prefix');
        $dbname = $config->get('dbname');
   
        $consulta = $this->db->prepare('SHOW TABLES FROM '.$dbname);
        $consulta->execute();
        
		$STRINGS = array("Lorem ipsum dolor sit amet","dolore eu fugiat","mollit anim id est laborum.");
      
        while ($row = $consulta->fetch(PDO::FETCH_NUM)) {
        	$tabla = $row[0];
echo '<br>------ '.$tabla.'<br>';
        	if ($prefix == '' or strstr($tabla,$prefix)){
				include "setup/$tabla.php";
				$num_entry = 0;
				while ($num_entry < $num_recs ){
				$types = '';
					for ($i = 0;$i < count($fields);$i++) {
						$field = $fields[$i];        		        		 
					    $type  = $fields_types[$i];              			       			        		   		
	        			if ($type == 'file_img') $type = rand(1,3).".jpeg";
	        			if ($type == 'number' or $type=='float') $type = '59.60';
	        			if ($type == 'literal') $type = $STRINGS[rand(0,count($STRINGS)-1)];
	        			if ($type == 'text') $type = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
						if (strstr($field,"Id")) $type = '1';
	        			if ($type == 'fecha') $type = '2013-1-2';
						if ($type == 'truefalse') $type = rand(0,1);
	
	        			$types .=  '"'.$type.'",';
						
	     			}
	
	        		$types = substr($types,0,strlen($types)-1);    
					$updater = $this->db->prepare('INSERT INTO '.$tabla.' ('.implode(",",$fields).') VALUES ('.$types.')');
					$updater->execute();
					echo 'INSERT INTO '.$tabla.' ('.implode(",",$fields).') VALUES ('.$types.')';
					$num_entry++;
				}
        	}
        }

	}
	}

}
