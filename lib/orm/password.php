<?

final class password extends field{

	function view(){
		return "Password encriptado";
	}
	function bake_field (){
	
			return "<input type=\"text\" cols=\"120\" id=\"".$this->fieldname."\" name=\"".$this->value."\" value=\"\"><BR>Se sobre-escribir&aacute; el password anterior."; 
					
					
					
	}
		
	function exec_add () {
		if ($this->value != "")
		return md5(strtolower($this->value));
		else return '';
	}
	function exec_edit () {
		if ($this->value != "")
			return md5(strtolower($this->value)); 
		return '';
	}

}

