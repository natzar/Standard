<?php
class formModel extends ModelBase
{
	public function getFormValues($table,$rid){    	
        $consulta = $this->db->prepare("SELECT * FROM ".$table." where ".$table."Id='".$rid."' limit 1");
        $consulta->execute();
        return $consulta->fetch();
	}
	
	public function add($table){
        include $this->config->get('setupFolder') .$table.".php";
        include_once "lib/orm/field.php";

    	$add_info_form = "";

    	for ($i=0;$i< count($fields) ;$i++){
    		
    		if ($fields[$i] != $table.'Id')	{
	    		$retrieved = '';
    			if ($fields_types[$i] != 'file_img' and $fields_types[$i] != 'file_file'){
    				$retrieved = get_param($fields[$i]);
    			} else $retrieved = -1;
    			
    			if (!class_exists($fields_types[$i])) die ("La clase ".$fields_types[$i]." no existe");
    			$field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$retrieved,$table);
    			$add_info_form .= "'".$field_aux->exec_add()."',";					
    		}
    	}
    	$info = substr($add_info_form,0,strlen($add_info_form) - 1);
    	$consulta = $this->db->prepare("INSERT INTO ".$table." (".implode(",",$fields).") VALUES ($info)");

        $consulta->execute();
        //die( "INSERT INTO ".$table." (".implode(",",$fields).") VALUES ($info)");     
       
    	
	}
	
	public function getLastId($table){
	
	   $consulta = $this->db->prepare("SELECT MAX(id) as m FROM $table limit 1");
       $consulta->execute();
        $aux = $consulta->fetch();
        return $aux['m'];
        
	}
	public function edit($table,$rid){
	     include $this->config->get('setupFolder') .$table.".php";
         include_once "lib/orm/field.php";

    	 $edit_info_form = "";
        
        	for ($i=0;$i< count($fields) ;$i++){
        		
        		if ($fields[$i] != $table.'Id'  )	{					
        			$retrieved = '';		
        			if (!strstr($fields_types[$i],'file_') and  get_param($fields[$i]) != -1){
        				$retrieved = get_param($fields[$i]);
        			}

        			if ($retrieved == -1 ) $retrieved = '';
        			
        			if (!class_exists($fields_types[$i])) die ("La clase ".$fields_types[$i]." no existe");
        			if ( strstr($fields_types[$i],'file_') and $_FILES[$fields[$i]]['name'] != "" or !strstr($fields_types[$i],'file_') ){
        				
        				$field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$retrieved,$table,$rid);
        				$edit_info_form .= " ".$table.".".$fields[$i]." = '".$field_aux->exec_edit()."',";
        			}
        		}
        	}
        			
        	$info = substr($edit_info_form,0,strlen($edit_info_form) - 1);
       		$consulta = $this->db->prepare("UPDATE ".$table." set  $info   where ".$table."Id='".$rid."'");
      	//	echo "UPDATE ".$table." set  $info   where id='".$rid."'";
            $consulta->execute();
      
	}


	
	public function import($table,$content){
		require $this->config->get('setupFolder') .$table.".php";
		$content = nl2br(trim($content));
		
		$content = explode("<br />",$content);
		
		$formated_c = "('".implode("'),('",$content)."')";	
		$formated_c =	str_replace(",('')","",$formated_c);
		//echo $formated_c;
		$c = $this->db->prepare("INSERT INTO ".$table." (".$fields[0].") VALUES ".$formated_c);
		$c->execute();
		
	
	}
	
	
   	public function js($table)
	{   
	    require $this->config->get('setupFolder') .$table.".php";
		$output = "";
        $config = Config::singleton();
		if(in_array('fecha', $fields_types) or in_array('hora',$fields_types) or in_array('combo_child',$fields_types) or in_array('tinymce',$fields_types))
		
				$output.= 'tinyMCE.init({
   		document_base_url: "'.$config->get('base_url').'",
        mode : "textareas", 
        editor_selector : "mceEditor",
	 forced_root_block : false,
   force_br_newlines : true,
   force_p_newlines : false,
        relative_urls : false,
 absolute_paths: true,
        width: "100%",
        height: "350px",
        theme_advanced_resizing : true,
        theme_advanced_buttons1 : "insertimage,separator,forecolor,color,bold,italic,underline,color,fontcolor,separator,bullist,separator,justifyleft,justifycenter,justifyright, justifyfull,separator,undo,redo,link,unlink,separator,fullscreen,code",
 		theme_advanced_blockformats : "h2,h3,p",
		theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        theme_advanced_buttons4 : "",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",

        extended_valid_elements : "div[class]",
    plugins : "paste,pagebreak,layer,table,save,insertdatetime,preview,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,template",
  content_css: "'.$this->config->get('base_url').'public/views/assets/css/tinymce_content.css"

        
    });'; /* $this->config->get('base_url').'public/views/assets/css/style.css", */

/*    content_css: "'.$this->config->get('base_url').'admin/views/css/tinymce_content.css" */
				for ($i=0;$i< count($fields);$i++){
						if ($fields_types[$i] == 'fecha')
							$output .='$(function() {	$("#'.$fields[$i].'").datepicker(); });';
						if ($fields_types[$i] == 'hora'){
							$output .= "$('#".$fields[$i]."').timepicker({
									hourGrid: 4,
									minuteGrid: 10,
									timeFormat: 'hh:mm:ss'
									});";
						}
						if ($fields_types[$i] == 'combo_child'){
								$output .= "$('#".$fields[$i]."').filterOn('#".$fields[$i-1]."') ;";
						}
				}

		/* Before Submit */
    	$output .="\n function check_form_values(z){
			
					//var z = document.getElementById(x);
					";
				for ($i=0;$i< count($fields);$i++){			
	
					switch($fields_types[$i]){
						
						case 'number':
						$output .=" if((!validateNumber(z.".$fields[$i].".value)) && (z.".$fields[$i].".value != \"\")){
									alert('No es un valor numerico correcto. Introduzca solo digitos. Utilice . (punto) para los decimales.');
									z.".$fields[$i].".style.background='#ffff66';
									z.".$fields[$i].".focus();
									return false;
								} 
							";
						break;
						case 'email':
						$output .=" if((!validateEmail(z.".$fields[$i].".value)) && (z.".$fields[$i].".value != \"\")){
									alert('Email no valido.');
									z.".$fields[$i].".style.background='#ffff66';
									z.".$fields[$i].".focus();
									return false;
								}
							";
						break;
						case 'url':
						$output .=" if((!validateURL(z.".$fields[$i].".value)) && (z.".$fields[$i].".value != \"\")){
									alert('URL debe empezar por http:// ');
									z.".$fields[$i].".style.background='#ffff66';
									z.".$fields[$i].".focus();
									return false;
								}
							";
						break;
												
						case 'editor':
						$output .= " $('input[name=\"".$fields[$i]."\"]').attr('value', encodeURIComponent( $('#".$fields[$i]."').elrte('val') )) ;"	 		;
						break;
					}
				}
		  $output .=" busy();";
		  $output .=" z.submit();
		  }";    
		
    		return $output;
		}

		function updateOrder(){
echo '0';
			$tabla = $_POST['tabla'];
			$action 				= $_POST['action']; 
			$updateRecordsArray 	= $_POST['recordsArray'];
			$field = $_POST['field'];
			$id = $_POST['id'];
			if ($action == "updateRecordsListings"){
	
				$listingCounter = 0;
				foreach ($updateRecordsArray as $recordIDValue) {
				if($field != -1 and $id != -1){
						$consulta = $this->db->prepare("UPDATE ".$tabla." SET orden = " . $listingCounter . " WHERE ".$field."='".$id."' and id = " . $recordIDValue);		
						$consulta->execute();
				}else{
						$consulta = $this->db->prepare("UPDATE ".$tabla." SET orden = " . $listingCounter . " WHERE  ".$tabla."Id = " . $recordIDValue);		
						$consulta->execute();
					}					
					$listingCounter = $listingCounter + 1;	
				}
				echo $listingCounter;
			}
			echo 0;

}

	function updateVisible(){

			$tabla = $_GET['table'];
			$rid = $_GET['rid'];
			$v = $_GET['v'];
			if ($v == 'true') $v ='1';
			else $v = '0';


			$consulta = $this->db->prepare("UPDATE ".$tabla." SET visible = '" . $v . "' WHERE id='".$rid."'" );		
			$consulta->execute();
				
			

	}
	function updateFeatured(){

			$tabla = $_GET['table'];
			$rid = $_GET['rid'];
			$v = $_GET['v'];
			if ($v == 'true') $v ='1';
			else $v = '0';


			$consulta = $this->db->prepare("UPDATE ".$tabla." SET destacado_home = '" . $v . "' WHERE id='".$rid."'" );		
			$consulta->execute();
				
			

	}
	
		
    public function deleteRow($table,$id){
       include $this->config->get('setupFolder') .$table.".php";
        include_once "lib/orm/field.php";
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
              
		$consulta = $this->db->prepare("SELECT $field FROM $table where ".$table."Id='$id' limit 1");
		$consulta->execute();
		$r = $consulta->fetch();
        @unlink($config->get('data_dir')."img/".$r[$f]);					

       	$consulta = $this->db->prepare("UPDATE $table set $field='' where ".$table."Id='$id'");
        $consulta->execute();
        return true;

	}

}
?>
