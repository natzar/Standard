<?php
class deleteModel extends ModelBase
{
	
    public function deleteRow($table,$id){
        include "setup/".$table.".php";
        include "lib/fields/field.php";
    	$config = Config::singleton();
        if (in_array('file_img',$fields) or in_array('file',$fields)){	
            
            $consulta = $this->db->prepare("SELECT * from ".$table." where id='".$id."' limit 1");
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
		
		$consulta = $this->db->prepare("DELETE FROM ".$table." where id = '".$id."'");
        $consulta->execute();
        return true;
    }

	public function deleteImage($table,$field,$id)
	{   
    	$config = Config::singleton();   
              
		$consulta = $this->db->prepare("SELECT $field FROM $table where id='$id' limit 1");
		$consulta->execute();
		$r = $consulta->fetch();
        @unlink($config->get('data_dir')."img/".$r[$f]);					

       	$consulta = $this->db->prepare("UPDATE $table set $field='' where id='$id'");
        $consulta->execute();
        return true;

	}
}
?>




