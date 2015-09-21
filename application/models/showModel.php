<?php
class showModel extends ModelBase
{

	public function getTableAttribute($table,$attribute){
    	require  "setup/".$table.".php";
	   return $$attribute;
	}
	
	public function getItemsHead($table){
		if (!is_file("setup/".$table.".php")){
			include "installModel.php";
			$install = new installModel();
			$install->makeSetups($table);

		}
    	require  "setup/".$table.".php";
    	$fr = $fields_labels;
		if ( isset($fields_to_show) and is_array($fields_to_show) and count($fields_to_show)>0){
			$fr = array();
			for ($i=0;$i < count($fields);$i++):
				if (in_array($fields[$i],$fields_to_show))
					$fr[] = $fields_labels[$i];
			endfor;	
		} 
		
	   return $fr;
	}
	public function getAllByField($table,$field,$rid_in_field){
		
   		include "setup/".$table.".php";
        include_once "lib/orm/field.php";
        
        $order = (get_param('sorder') != -1) ? get_param('sorder') : $default_order; 
             
        $consulta = $this->db->prepare('SELECT * FROM '.$table.' where '.$field.'= "'.$rid_in_field.'" order by '.$order);
        $consulta->execute();
        $array_return = array();
        
		while ($r = $consulta->fetch()):
            $row_array = array();
            $row_array['id'] = $r['id'];
            for ($i = 0; $i < count($fields);$i++): 
	               if (!isset($fields_to_show) or in_array($fields[$i],$fields_to_show) or empty($fields_to_show)   ): 
						if (!class_exists($fields_types[$i])) 
						    die ("La clase ".$fields_types[$i]." no existe");
				        $field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$r[$fields[$i]],$table,  $row_array['id']);
				    	$row_array[] =$field_aux->view();
				    endif; 
             endfor; 
             $array_return[] = $row_array;

        endwhile;
        return $array_return;

	}


    public function search($params){
    
        include "setup/".$params['table'].".php";
        
        $order = (get_param('sorder') != -1) ? get_param('sorder') : $default_order; 
        $table = $table_aux = $params['table'];     
      	
		if (isset($group_by) and !empty($group_by)) $table_aux.= ' GROUP BY '.$group_by.' ';  
		
		$where = array();
        for ($i = 0; $i < count($fields);$i++): 
			if (isset($_POST[$fields[$i]])  and $_POST[$fields[$i]] != -1 or isset($params[$fields[$i]]) and $params[$fields[$i]] != -1){
				$val = isset($_POST[$fields[$i]]) ? $_POST[$fields[$i]] : $params[$fields[$i]];
				if ($fields_types[$i] == 'literal' or $fields_types[$i] == 'text')
				$where[] = $fields[$i].' LIKE "%'. $val.'%"';       
				else
					$where[] = $fields[$i].' = "'. $val.'"';       
			}
        endfor;
		if (count($where)< 1) return Array();

        $consulta = $this->db->prepare('SELECT * FROM '.$table_aux.' WHERE '.implode (' AND ',$where).'  order by '.$order);
        $consulta->execute();
        $array_return = array();
        
		while ($r = $consulta->fetch()):
            $row_array = array();
            $row_array[$table.'Id'] = $r[$table.'Id'];
            for ($i = 0; $i < count($fields);$i++): 
	               if (!isset($fields_to_show) or in_array($fields[$i],$fields_to_show) or empty($fields_to_show)   ): 
						if (!class_exists($fields_types[$i])) 
						    die ("La clase ".$fields_types[$i]." no existe");
				        $field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$r[$fields[$i]],$table,$row_array[$table.'Id']);
				    	$row_array[] =$field_aux->view();
				    endif; 
             endfor; 
             $array_return[] = $row_array;

        endwhile;
        return $array_return;
        
    }
   
   
    public function getAll($table){
    
        include "setup/".$table.".php";
        include_once "lib/orm/field.php";
        
        $order = (get_param('sorder') != -1) ? get_param('sorder') : $default_order; 
        $table_aux = $table;
		$table_no_prefix = substr($table,strlen($this->config->get('db_prefix')));
        $params = gett();
      
      
		if (isset($group_by) and !empty($group_by)) $order .= ' GROUP BY '.$group_by.' ';  
        $consulta = $this->db->prepare('SELECT * FROM '.$table_aux.' order by '.$order);
        $consulta->execute();
        $array_return = array();
        
		while ($r = $consulta->fetch()):
            $row_array = array();
            $row_array[$table_no_prefix.'Id'] = $r[$table_no_prefix.'Id'];
            for ($i = 0; $i < count($fields);$i++): 
	               if (!isset($fields_to_show) or in_array($fields[$i],$fields_to_show) or empty($fields_to_show)   ): 
						if (!class_exists($fields_types[$i])) 
						    die ("La clase ".$fields_types[$i]." no existe");
				        $field_aux = new $fields_types[$i]($fields[$i],$fields_labels[$i],$fields_types[$i],$r[$fields[$i]],$table,$row_array[$table_no_prefix.'Id']);
				    	$row_array[] =$field_aux->view();
				    endif; 
             endfor; 
             $array_return[] = $row_array;

        endwhile;
        return $array_return;
        
    }
   
     public function getById($table,$id){
    
        include "setup/".$table.".php";
        include_once "lib/orm/field.php";
        
        $order = (get_param('sorder') != -1) ? get_param('sorder') : $default_order; 
        $table_aux = $table;
      
      
      
        $consulta = $this->db->prepare('SELECT * FROM '.$table_aux.' where '.$table.'Id ="'.$id.'" order by '.$order);
        $consulta->execute();
        
        return $consulta->fetch();
                
    }
    public function js($table){
        require "setup/".$table.".php";
            $output= "";
			$output .="$(document).ready(function(){";
			//$output .="$('#tablaMain').pagination();";

			
			$output .="         $('.tablaMain').bdt();";
			
			if (isset($table_order_on) and $table_order_on){
			$output .='$(".tablaMain tbody > tr").mouseover(function(){
				$(this).css("cursor","hand");
				$(this).css("cursor","pointer");	
				});';

				
	// MAKE TABLE SORTABLE
	$output .='$(function() {
				firefox = (/firefox/i.test(navigator.userAgent.toLowerCase()));

				$(".tablaMain tbody").sortable({ opacity: 0.6, cursor: "move", helper: firefox === true ? "clone" : void 0, update: function() {
					var aux = $(this).parent().attr("data-table");
					aux_id = -1;
					aux_field = -1;
					if ($(this).parent().attr("data-filter-id")){
						aux_id = $(this).parent().attr("data-filter-id");
						aux_field =$(this).parent().attr("data-filter");
					}
					var order = $(this).sortable("serialize") + "&action=updateRecordsListings&tabla="+aux+"&field="+aux_field+"&id="+aux_id;
					console.log(order);
					$.post("admin/updateOrder", order, function(theResponse){
						console.log(theResponse);
					});
				}

				});
				
				});';
			
				}
				

			


			$output .="});"; // End $(document).ready();

	
		 // final funciones de check form
		return $output;		
		
    }


}
?>
