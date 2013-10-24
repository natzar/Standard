<?

final class slug extends field{

	function view(){
		return $this->value;
	}
	function bake_field (){
		$out = '';
		if ($this->value == ''){
			$out = '<script>$(document).ready(function(){ $("#'.$this->fieldname.'").val($("#title").val()); validateSlug("'.$this->fieldname.'");});</script>';
		
		} 
			$out .= '<script>$(document).ready(function(){ $("#title").change(function(){ $("#'.$this->fieldname.'").val($("#title").val()); validateSlug("'.$this->fieldname.'");}); });</script>';
		
		$label = $this->table == 'courses' ? 'programs':$this->table;	
		return "<input  type=\"text\"  onChange=\"validateSlug('".$this->fieldname."');\" class='span3' name=\"".$this->fieldname."\" id=\"".$this->fieldname."\" value=\"".trim($this->value)."\">".$out;

		
	}
		
	function exec_add () {
		return $this->value;
	}
	function exec_edit () {
		return $this->value;	
	}

}



