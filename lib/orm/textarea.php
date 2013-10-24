<?


final  class textarea extends field{

	function view(){
		return  substr(strip_tags($this->value),0,100)."...";
	}
	function bake_field (){
		return "<textarea class='span4' id=\"".$this->fieldname."\" name=\"".$this->fieldname."\"  >".$this->value."</textarea>";
		
	 
					
						
	}
		
	function exec_add () {
		return $this->value;		
	}
	function exec_edit () {
			return $this->value;
	}

}

							