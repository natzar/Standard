<?

class formHelper {

	function build($table){

    	require "setup/".$table.".php";
      //  if ($rid == '') $rid =-1;    			
        $form_html = "";
      //  $raw = ($rid != -1) ? $form->getFormValues($table,$rid) : '';
				//print_r($raw);
				
	
    	for ($i=0;$i< count($fields);$i++){
    			if ($fields[$i] != $table.'Id'){	
    					$form_html.= "<div class='control-group'><label class='control-label'>";
    					$form_html .= ucfirst($fields_labels[$i]);
    					$form_html .= "</label><div class='controls'>";		
    					if (!class_exists($fields_types[$i])) die ("La clase ".$fields_types[$i]." no existe");
    					$VALUE = isset($raw[$fields[$i]]) ? $raw[$fields[$i]] : '';
    					$field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$VALUE,$table);
    					$form_html .= $field_aux->bake_field();								
    					$form_html .= "</div></div>";
    			}		
    	}
		
		return $form_html;
		          
	}
	


}