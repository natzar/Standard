<?

final class coursesId extends field{

	function view(){
$f_fieldname = str_replace("Id","",$this->fieldname);
		return $this->giveme($f_fieldname,$this->fieldname,$this->value);
	}
	function bake_field (){
				return $_SESSION['course_label'];
		/*
$output = "<div id=\"combo_".$this->fieldname."\">";
		if ($this->config->get('combo_add') == 1) $output .= "<a href=\"javascript:show_add_option_box('".$this->fieldname."');\"> <img  src=\"".$this->config->get('base_http')."lib/img/plus.jpg\"></a>&nbsp;&nbsp;";
		// Field name foreign
		$f_fieldname = str_replace("Id","",$this->fieldname);
		$output .= $this->bake_combo($this->config->get('db_prefix').$f_fieldname,$this->fieldname,$this->value);
		$output .= "</div>";
		// Parte invisible que aparece para anadir una nueva opcion al select
		if ($this->config->get('combo_add') == 1 ) $output .= "<div id=\"div_".$this->fieldname."\" style=\"display:none;\">
						<input class=\"text-input medium-input\" type=\"text\" cols=\"120\" id=\"new_".$this->fieldname."\"> <input class='btn btn-success' type=\"button\" value=\"A&ntilde;adir\" onclick=\"add_new_option_to_combo('".$this->fieldname."');\"> &nbsp;&nbsp; <a href=\"javascript:close_add_option_box('".$this->fieldname."');\"><img src=\"".$this->config->get('base_http')."lib/img/close.jpg\"></a>
						</div>";
        return $output;
*/
	}
		
	function exec_add () {
		return $this->value;
	}
	function exec_edit () {
		return $this->value;	
	}

	function giveme($tabla,$campo,$valor_en_indice){

        $consulta = $this->db->prepare("SELECT * from ".$tabla." where id='$valor_en_indice' limit 1" );
        $consulta->execute();
      	$fetch = $consulta->fetch(PDO::FETCH_NUM);

		return $fetch[1];
	
	}
	

function bake_combo($tabla,$select_name,$id_selected){
	    $consulta = $this->db->prepare("SELECT * from $tabla ORDER BY 2 ASC" );
    	$consulta->execute();
        
		$output = "<select name=\"".$select_name."\" id=\"".$select_name."\" >";
		$output .= "<option value=\"-1\">---</option>";
	
		
	while ($row = $consulta->fetch(PDO::FETCH_NUM)){

		$output .= "<option value=\"".$row[0]."\"";
		if ($row[0] == $id_selected) $output .= " selected";
		$output .=">";
		if (is_int($row[1]) and $row[1] > 0) $output .= $row[2]."</option>";
		else $output .= $row[1]."</option>";

	}
	
	$output .= "</select>";

	return $output;
}




}

