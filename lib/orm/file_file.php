<?

final class file_file extends field{


	function view(){
			return "<a href='".$this->config->get('base_url_data')."file/".$this->value."'>".$this->config->get('base_url_data')."file/".$this->value."</a>";
	}
	function bake_field (){
    	$output = "";
		if ($this->value != -1){
 			$output .= "<b>Documento cargado:</b> ";
			$output .= "<div id='".$this->fieldname."'><a  href=\"".$this->config->get('base_url_data')."file/".$this->value."\" target=\"_blank\">".$this->value."</a><a  href=\"javascript:DeleteFile('".$this->fieldname."',".$this->rid.",'".$this->fieldname."','".$this->table."');\"><img src='".$this->config->get('base_http')."lib/img/close.jpg'></a></div>"; }else{ $output .= "ninguno";
			$output .= "<BR>";
		}
							
		$output .= "<input type=\"file\" class=\"form-control\" name=\"".$this->fieldname."\">";
			return $output;	
		echo($data_dir);				
	}
		
	function exec_add () {
		if ($_FILES[$this->fieldname]['name'] != ""){
					$consulta = $this->db->prepare("SELECT ".$this->fieldname." from ".$this->table." limit 1" );
					//echo "SELECT ".$this->fieldname." from ".$this->table." limit 1";
					$consulta->execute();
					$row2 = $consulta->fetch();
					if ($row2[$this->fieldname] != ""){
						@unlink($this->config->get('data_dir')."file/".$row2[$this->fieldname]);
					}
					$filename_new = generar_nombre_archivo($_FILES[$this->fieldname]['name']);
					copy($_FILES[$this->fieldname]['tmp_name'], $this->config->get('data_dir')."file/".$filename_new);
					
					return $filename_new;
					}
					return '';
	}
	function exec_edit () {
		if ($_FILES[$this->fieldname]['name'] != ""){
						$consulta = $this->db->prepare("SELECT ".$this->fieldname." from ".$this->table." where id='".$this->rid."' limit 1" );
						$consulta->execute();
						
						$row2 = $consulta->fetch();
						if ($this->value != ""){
							unlink($this->config->get('data_dir')."file/".$row2[$this->fieldname]);
						}
						$filename_new = generar_nombre_archivo($_FILES[$this->fieldname]['name']);
						copy($_FILES[$this->fieldname]['tmp_name'], $this->config->get('data_dir')."file/".$filename_new);
					
						return $filename_new;
					
		}
		return '';
	}

}

