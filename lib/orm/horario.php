<?

final class horario extends field{
 
	function view(){
	   $aux = explode("|",$this->value);
        return $aux[0]." ".$aux[1];

	}
	function bake_field (){		
//	   $this->value = 
        $aux = explode("|",$this->value);
	   $field = "
<hr>
	   	      <div class='input-group'>
	   	      <label>Día de la semana</label>
	       <select class='form-control' id='".$this->fieldname."_dia' name='".$this->fieldname."[]'>
	       <option value='-1'>---</option>
	       <option value='Lunes' "; 
	       if ($aux[0] == "Lunes") $field .= "selected";
	       $field .= ">Lunes</option>
	       <option value='Martes' "; if ($aux[0] == "Martes" ) $field .= "selected";
	       $field .= ">Martes</option>
	       <option value='Miércoles' "; if ($aux[0] == "Miércoles") $field .= "selected";
	       $field .= ">Miércoles</option>
	       <option value='Jueves' "; if ($aux[0] == "Jueves" ) $field .= "selected";
	       $field .=">Jueves</option>
	       <option value='Viernes' ";if ( $aux[0] == "Viernes") $field .= "selected";
	       $field .=">Viernes</option>
	       <option value='Sábado' "; if ($aux[0] == "Sábado") $field .= "selected";
	       $field .=">Sábado</option>
	       <option value='Domingo' "; if ($aux[0] == "Domingo") $field .= "selected";
	       $field .=">Domingo</option>
	       </select>
	       

	       <div class=\"input-append bootstrap-timepicker\">
	       <label>Hora del día (24h)</label>
            <input class='form-control' id=\"".$this->fieldname."_hora\" name='".$this->fieldname."[]' type=\"text\" class=\"input-small\" value=\"".$this->value."\">
            <span class=\"add-on\"><i class=\"icon-time\"></i></span>
        </div>
        </div>
        
        
<hr>
	   ";
		return $field;
		// "<input class=\"color\" type=\"text\" cols=\"120\" id=\"".$this->fieldname."\" name=\"".$this->fieldname."\" value=\"".$this->value."\" >"; 

	
	}
		
	function exec_add () {
	   if ($this->value[0] != -1){
	       return $this->value[0]."|".$this->value[1];
	   }
	   return "";
	}
	function exec_edit () {
	   if ($this->value[0] != -1){
	   return $this->value[0]."|".$this->value[1];
	   }
	   return "";
	}

}

