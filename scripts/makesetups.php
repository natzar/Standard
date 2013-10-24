<?
class makesetups extends ModelBase
{
	
    public function makeSetups(){

        $config = Config::singleton();
        
        $prefix = '';//$config->get('db_prefix');
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
       		    $type  = $feature[0];
       		    $name  = $field['Field'];
          			if ($name != "id") $campos_a_mostrar .=  '"'.$name.'",';
        		   		
        			if ($type == 'int') $type = 'number';
					if ($type == 'double') $type = 'number';
					if ($type == 'time') $type = 'hora';					
        			if ($type == 'string' or $type == 'varchar') $type = 'literal';
        			if ($type == 'blob') $type = 'text';
					if (strstr($name,"Id")) $type = 'combo';
        			if ($type == 'date') $type = 'fecha';
					if ($type == 'tinyint') $type = 'truefalse';
					if ($type == 'datetime') $type = 'fecha';
        			if ($name != "id") $types .=  '"'.$type.'",';
        	}
    		$campos_a_mostrar = substr($campos_a_mostrar,0,strlen($campos_a_mostrar)-1);
    		$types = substr($types,0,strlen($types)-1);
    		$labels = $campos_a_mostrar;
    
    
    		$aux = fopen('../deployments/'.$config->get('base_title').'/dbmap/'.$tabla.'.php','w');
    		$resultx =  '<?
        
        $table_label = "'.$tabla.'";
        $default_order = "id ASC";
        $fields= array('.$campos_a_mostrar.');
        
        $fields_labels= array('.$labels.');
        
        $fields_types=array('.$types.');
        
        
        ';
        		fwrite($aux,$resultx);
        		fclose($aux);
        	}
        }
        

	}	
	
}