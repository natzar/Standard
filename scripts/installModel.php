<?php


class installModel extends ModelBase
{
	
    public function makeSetups($table){

        $config = Config::singleton();
        if (!isset($table)) die("no table selected");
        $prefix = $table; //$config->get('db_prefix');
        $dbname = $config->get('dbname');
   
        $consulta = $this->db->prepare('SHOW TABLES FROM '.$dbname);
        $consulta->execute();
           
        while ($row = $consulta->fetch(PDO::FETCH_NUM)) {

        	$tabla = $row[0];
        	if ($prefix == '' or strstr($tabla,$prefix)){

			$recordset = $this->db->prepare("DESCRIBE $tabla");
			$recordset->execute();
			$campos_a_mostrar = $types = '';
			$xxx = $recordset->fetchAll(PDO::FETCH_ASSOC);

			foreach ($xxx as $field) {
				echo "<br>";
				$nom = $field['Field'];
				echo "nom : "; echo $nom; 	echo "<br>";
				$feature = explode("(",$field['Type']);
				switch ($feature[0]) {
					case "varchar":
						$longueur = explode(")", $feature[1]);
						break;
					case "int":
						$longueur = explode(")", $feature[1]);
						break;
					case "date":
						$longueur = 10;
						break;
					default:
						$longueur = 10;
				}
               		        		
       		    $feature = explode("(",$field['Type']);
       		    $type  = strtolower($feature[0]);
       		    $name  = $field['Field'];
          			if ($name != $tabla."Id")          			 $campos_a_mostrar .=  '"'.$name.'",';
        		   		
        			if ($type == 'int') $type = 'number';
					if ($type == 'double') $type = 'number';
					if ($type == 'time') $type = 'hora';					
        			if ($type == 'string' or $type == 'varchar') $type = 'literal';
        			if ($type == 'blob') $type = 'text';
					if (strstr($name,"Id")) $type = 'combo';
        			if ($type == 'date') $type = 'fecha';
					if ($type == 'tinyint') $type = 'truefalse';
        			if ($type == 'datetime') $type = 'fecha';
					if ($name == 'password') $type ='password';
if (strstr($name,"img")) $type = 'file_img';
if (strstr($name,"file")) $type = 'file_file';
        			if ($name != $tabla."Id") $types .=  '"'.$type.'",';
        	}
    		$campos_a_mostrar = substr($campos_a_mostrar,0,strlen($campos_a_mostrar)-1);
    		$types = substr($types,0,strlen($types)-1);
    		$labels = $campos_a_mostrar;
    
    
    		$aux = fopen('setup/'.$tabla.'.php','w');
    		$resultx =  '<?
        
        $table_label = "'.$tabla.'";
        $default_order = "'.$tabla.'Id ASC";
        $fields= array('.$campos_a_mostrar.');
        
        $fields_labels= array('.$labels.');
        
        $fields_types=array('.$types.');
        
        
        ';
        		fwrite($aux,$resultx);
        		fclose($aux);
        	}
        }
        

	}	
	

	
	      
    public function fillDb($num_recs){

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


