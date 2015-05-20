<?


final  class tinymce extends field{

	function view(){
		return  substr(strip_tags($this->value),0,100)."...";
	}
	function bake_field (){
		return "<textarea class='mceEditor'  id=\"".$this->fieldname."\" name=\"".$this->fieldname."\"  >".stripslashes($this->value)."</textarea>";
					
	}
		
	function exec_add () {
//		return	mysql_real_escape_string($this->value);
		
		if ($this->value == -1) return '';
		return addslashes($this->value);
		return (htmlentities($this->value));		
	}
	function exec_edit () {
//			return	mysql_real_escape_string($this->value);
		if ($this->value == -1) return '';
				return addslashes($this->value);
			return htmlentities($this->value);
	}

}

							