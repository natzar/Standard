<?

final class fecha extends field{

	function view(){
		if ($this->value != '')
		return $this->sql_to_fecha($this->value,"-");
		return $this->value;
	}
	function bake_field (){
		$date_value = $this->sql_to_fecha($this->value,"/");
		if ($date_value == "") $date_value = $this->sql_to_fecha(date("Y-m-d"),"/");
		return  "<input class=\"input text-input\" type=\"text\" cols=\"120\" id=\"".$this->fieldname."\" name=\"".$this->fieldname."\" value=\"".$date_value."\">";
					

	
	}
		
	function exec_add () {
		if ($this->value != "") return $this->fecha_to_sql($this->value,"/");
		 return '0000-00-00';
				
				
	}
	function exec_edit () {
		if ($this->value != "")
				return $this->fecha_to_sql($this->value,"/");

		return '0000-00-00';
		
	}

function fecha_to_sql($cadena,$separador_o){
//echo $this->fieldname;
//echo $this->value;
	if ($cadena != '' and $cadena != -1):
	$fech = explode($separador_o, $cadena);
	$dia = $fech[0];
	$mes = $fech[1];
	$anno = $fech[2];
	
	$fecha1 = $anno."-".$mes."-".$dia;
	return $fecha1;
	endif;
	return '';
}

function sql_to_fecha($cadena,$separador_o){
	if ($cadena != ""){
	$fech = explode("-", $cadena);
	$dia = $fech[2];
	$mes = $fech[1];
	$anno = $fech[0];
	
	$fecha1 = $dia.$separador_o.$mes.$separador_o.$anno;
	return $fecha1;
	}
}
}

