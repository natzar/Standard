<?



final class literal extends field{

	function view(){
		return stripslashes($this->value);
	}
	function bake_field (){
		return "<input  type=\"text\" class='span5' name=\"".$this->fieldname."\" id=\"".$this->fieldname."\" value=\"".$this->value."\">";

		

						
	}
		
	function exec_add () {

return addslashes(htmlentities(utf8_decode($this->value)));

	}
	function exec_edit () {
return addslashes(htmlentities(utf8_decode($this->value)));
	}

}

