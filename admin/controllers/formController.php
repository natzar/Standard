<?php
class formController extends ControllerBase
{
   
	function build(){

    	require 'models/formModel.php'; 	
   		$form = new formModel();
        $table = get_param('a');
        $rid = get_param('i');
        $op = get_param('m');
        require "../setup/".$table.".php";
        if ($rid == '') $rid =-1;    			
        $form_html = "";
        $raw = ($rid != -1) ? $form->getFormValues($table,$rid) : '';
				//print_r($raw);
				
	
    	for ($i=0;$i< count($fields);$i++){
    			if ($fields[$i] != $table.'Id'){	
    					$form_html.= "<div class='control-group'><label class='control-label'>";
    					$form_html .= ucfirst($fields_labels[$i]);
    					$form_html .= "</label><div class='controls'>";		
    					if (!class_exists($fields_types[$i])) die ("La clase ".$fields_types[$i]." no existe");
    					$VALUE = isset($raw[$fields[$i]]) ? $raw[$fields[$i]] : '';
    					$field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$VALUE,$table,$rid);
    					$form_html .= $field_aux->bake_field();								
    					$form_html .= "</div></div>";
    			}		
    	}
		
		$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "form" => $form_html,
		          "HOOK_JS" => $form->js($table),
		      	  "table" => $table,
		      	  "op" => '',
		      	  "rid" => $rid,
		      	  "table_label" => $table_label
		          
		          );
		          
		$this->view->show("form.php", $data);
    }


 	public function update(){

 	        require 'models/formModel.php';
        	$form = new formModel();
        	$rid = get_param('rid');
        	$table = get_param('table');

      		if ($rid == -1) $form->add($table);
			else $form->edit($table,$rid);

        
			header("location: ".$_SESSION['return_url']);

 	} 
 	
 	function import(){
 		require 'models/formModel.php'; 	

        $table = get_param('a');
        $rid = get_param('i');
        $op = get_param('m');
        require "../setup/".$table.".php";
 	$form_html = '<textarea width="100%" rows="10" name="import_content"></textarea><br><small>Registros separados por líneas</small>';
 	$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "form" => $form_html,
		      	  "table" => $table,
		      	  "HOOK_JS" => '',
		      	  "op" => '',
		      	  "rid" => $rid,
		      	  "table_label" => $table_label
		          
		          );
		          
		$this->view->show("import.php", $data);
 	
 	}
 	
 	function do_import(){
 		
 		$con = get_param('import_content');
 	  	require 'models/formModel.php';
        	$form = new formModel();
        	$rid = get_param('rid');
        	$table = get_param('table');
        	
        	$form->import($table,$con);
        	
        	$data = Array(
		          "title" => "BackOffice | $table",
		          
		      	  "table" => $table,
		      	  "HOOK_JS" => '',
		      	  "op" => '',
		      	  "form" => "Importado correctamente",
		      	  "rid" => $rid,
		      	  "table_label" => 'Importar '.$table
		          
		          );
		          

        	$this->view->show("import.php", $data);
        	
 	}
 	
 	function search(){

    	require 'models/formModel.php'; 	
   		$form = new formModel();
        $table = get_param('a');
        $rid = get_param('i');
        $op = get_param('m');
        require "../setup/".$table.".php";
        if ($rid == '') $rid =-1;    			
        $form_html = "";
        		
		
    	for ($i=0;$i< count($fields);$i++){
    			if ($fields[$i] != $table.'Id' and strstr($fields_types[$i],"combo") or $fields_types[$i] == 'literal' or $fields_types[$i] == 'text'){	
    					$form_html.= "<div class='control-group'><label class='control-label'>";
    					$form_html .= ucfirst($fields_labels[$i]);
    					$form_html .= "</label><div class='controls'>";		
    					if (!class_exists($fields_types[$i])) die ("La clase ".$fields_types[$i]." no existe");
    					$VALUE =  '';
    					$field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$VALUE,$table,$rid);
    					$form_html .= $field_aux->bake_field();								
    					$form_html .= "</div></div>";
    			}		
    	}
		
		$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "form" => $form_html,
		          "HOOK_JS" => $form->js($table),
		      	  "table" => $table,
		      	  "op" => '',
		      	  "rid" => $rid,
		      	  "table_label" => $table_label
		          
		          );
		          
		$this->view->show("search-form.php", $data);
    }


    public function addToCombo(){
        $table = get_param('a');
        include "models/formModel.php";
        $form = new formModel();
        $form->add($table);
        $lastId = getLastId($table);
      
        include "../setup/".$table.".php";
        include "lib/fields/field.php";
        
        $combo = new combo($fields[1],$fields_labels[1],$fields_types[1],$lastId);
        
        $output = "<a href=\"javascript:show_add_option_box('".$fiel."');\"> <img  src=\"".$web->base_http."lib/img/plus.jpg\"></a>&nbsp;&nbsp;";
        $output .= $combo->bake_combo($tabla,$fiel,$raw['id']);
		
        return utf8_encode($output);

    }
	
	public function updateOrder(){
		include "models/formModel.php";
        $form = new formModel();
        $form->updateOrder();
	}
	
	public function updateVisible(){
		include "models/formModel.php";
        $form = new formModel();
        $form->updateVisible();
	}
	public function updateFeatured(){
		include "models/formModel.php";
        $form = new formModel();
        $form->updateFeatured();
	}
}
?>
