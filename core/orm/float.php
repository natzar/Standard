<?

final class float extends field{

	function view(){
		return number_format($this->value,2,",",".");

	}
	function bake_field (){
		echo "<input class=\"text-input medium-input\" type=\"text\" cols=\"120\" id=\"".$this->ninjaTabla->fields[$i]."\" onChange=\"validateNumber_float(this.value,'".$this->ninjaTabla->fields[$i]."')\" name=\"".$this->ninjaTabla->fields[$i]."\" value=\"";
		$aux = number_format($raw[$this->ninjaTabla->fields[$i]],2,',','.');
		if ($aux != "0,00") echo $aux;
		echo "\">";
	}
		
	function exec_add () {
		return float_to_sql($this->value);
	}
	function exec_edit () {
		if ($this->value != "" and $this->value != "0,00")
			return float_to_sql($retrieved);
			
		return '0.00';

	}

}



