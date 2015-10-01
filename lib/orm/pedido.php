<?



final class pedido extends field{

	function view(){
		return "Entrar para ver detalles";
	}
	function bake_field (){
        
        $aux = json_decode($this->value);
        $output = "<div class='well'>";
        foreach($aux as $item):
            $output .= "<strong>".strtoupper($item[1])."</strong> => Cantidad: ".$item [4]." - Precio ud: ".$item[3]." &euro;<br>";
        endforeach;
        
        $output .="</div><input name=\"".$this->fieldname."\" id=\"".$this->fieldname."\" value='".$this->value."' type=\"hidden\"  placeholder=\"".$this->label."\" class=\"form-control\">                 ";
                        
		return $output;
		              
					
	}
		
	function exec_add () {
	
	return $this->value;

	}
	function exec_edit () {
		
	return $this->value;	
	}

}

