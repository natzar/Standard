<?php


        
abstract class ModelBase
{
	protected $db;
	protected $cache;
 
	public function __construct()
	{
		$this->db = SPDO::singleton();
		$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		

	}
	
	public function GET($params){   
        include "setup/".$params['table'].".php";
        
        
        $order = (get_param('sorder') != -1) ? get_param('sorder') : $default_order; 
             
        $consulta = $this->db->prepare('SELECT * FROM '.$table.' order by '.$order);
        $consulta->execute();
        $array_return = array();
        
		while ($r = $consulta->fetch()):
            $row_array = array();
            $row_array['id'] = $r['id'];
            for ($i = 0; $i < count($fields);$i++): 
	               if (!isset($fields_to_show) or in_array($fields[$i],$fields_to_show) or empty($fields_to_show)   ): 
						if (!class_exists($fields_types[$i])) 
						    die ("La clase ".$fields_types[$i]." no existe");
				        $field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$r[$fields[$i]]);
				    	$row_array[] =$field_aux->view();
				    endif; 
             endfor; 
             $array_return[] = $row_array;

        endwhile;
        return $array_return;
    
	}
	public function POST($params){
		$table = $params['table'];
        include "setup/".$table.".php";

    	
    	$add_info_form = "";
    
    	for ($i=0;$i< count($fields) ;$i++){
    		
    		if ($fields[$i] != $table.'Id')	{
    			if ($fields_types[$i] != 'file_img'){
    				$retrieved = get_param($fields[$i]);
    			} else $retrieved = -1;
    			
    			if (!class_exists($fields_types[$i])) die ("La clase ".$fields_types[$i]." no existe");
    			
    			if ($retrieved == -1) $retrieved = '';
    			$field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$retrieved);
    			$add_info_form .= "'".$field_aux->exec_add()."',";					
    		}
    	}
    	$info = substr($add_info_form,0,strlen($add_info_form) - 1);
    	$consulta = $this->db->prepare("INSERT INTO ".$table." (".implode(",",$fields).") VALUES ($info)");
    	//echo "INSERT INTO ".$table." (".implode(",",$fields).") VALUES ($info)";
    	
        $consulta->execute();
        
        if ($consulta->rowCount() > 0)return true;
        return false;
        die( "INSERT INTO ".$table." (".implode(",",$fields).") VALUES ($info)");
       
    	
	}
	
	public function getLastId($table){
	
	   $consulta = $this->db->prepare("SELECT MAX(id) as m FROM $table limit 1");
       $consulta->execute();
        $aux = $consulta->fetch();
        return $aux['m'];
        
	}
	public function PUT($params){
		$table = $params['table'];
		$rid = $params['rid'];
	     include "setup/".$table.".php";

    	 
    	 $edit_info_form = "";
        
        	for ($i=0;$i< count($fields) ;$i++){
        		
        		if ($fields[$i] != $table.'Id' and isset($_POST[$fields[$i]] ) or isset($_FILES[$fields[$i]]['name']) and $_FILES[$fields[$i]]['name'] != "")	{					
        			$retrieved = '';		
        			if ($fields_types[$i] != 'file_img'){
        				$retrieved = $_POST[$fields[$i]];
        			}
        			if ($fields_types[$i] == 'file_img' and $_FILES[$fields[$i]]['name'] != "" or $fields_types[$i] != 'file_img'){
        				if (!class_exists($fields_types[$i])) die ("La clase ".$fields_types[$i]." no existe");
        				$field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$retrieved);
        				$edit_info_form .= " ".$table.".".$fields[$i]." = '".$field_aux->exec_edit()."',";	
        			}
        		}
        	}
        			
        	$info = substr($edit_info_form,0,strlen($edit_info_form) - 1);
       		$consulta = $this->db->prepare("UPDATE ".$table." set  $info   where ".$table."Id='".$rid."'");
       	//	echo "UPDATE ".$table." set  $info   where ".$table."Id='".$rid."'";
       		
            $consulta->execute();
             if ($consulta->rowCount() > 0)return true;
	        return false;
	}


   public function DELETE($params){
		$table =$params['table'];
		$id = $params['id'];
        include "setup/".$table.".php";

    	$config = Config::singleton();
        if (in_array('file_img',$fields) or in_array('file',$fields)){	
            
            $consulta = $this->db->prepare("SELECT * from ".$table." where ".$table."Id='".$id."' limit 1");
            $consulta->execute();
            $row2 = $consulta->fetch();
            
    		for ($i = 0;$i < count($fields);$i++){
    			if ($fields_types[$i] == 'file'){
    				if ($row2[$fields[$i]] != "") 
    				    @unlink($config->get('files_dir').$row2[$fields[$i]]);
    			}
    			
    			if ($fields_types[$i] == 'file_img'){
    				if ($row2[$fields[$i]] != "") {
    					@unlink($ninjaconfig->base_dir_img.$row2[$fields[$i]]);
    					@unlink($ninjaconfig->base_dir_img."thumbs/".$row2[$fields[$i]]);
    				}
    			}
    		}	
		}		
		
		$consulta = $this->db->prepare("DELETE FROM ".$table." where ".$table."Id = '".$id."'");
        $consulta->execute();
        return true;
    }

	public function deleteImage($table,$field,$id)
	{   
    	$config = Config::singleton();   
              
        $q = mysql_query("SELECT $field FROM $table where id='$id' limit 1");
        $r = mysql_fetch_array($q);
        @unlink($config->get('files_dir').$r[$f]);					

       	$consulta = $this->db->prepare("UPDATE $table set $field='' where id='$id'");
        $consulta->execute();
        return true;

	}
	public function validate(){
	
	}



}
?>