<?php
class generatorModel extends ModelBase
{
	
    public function generateModels($params){
		echo 'hello '.$params;
        $config = Config::singleton();
        
        $prefix = $params; //$config->get('db_prefix');
        $dbname = $config->get('dbname');
   
        $consulta = $this->db->prepare('SHOW TABLES FROM '.$dbname);
        $consulta->execute();

 	


        
        while ($row = $consulta->fetch(PDO::FETCH_NUM)) {
        	$tabla = $row[0];
			echo '<hr><h2>Creating Models and Controllers '.$tabla.'<br>';


        	if ($prefix == '' or $tabla == $prefix){
				$recordset = $this->db->prepare("DESCRIBE $tabla");
				$recordset->execute();
				$campos_a_mostrar = $types = '';
				$xxx = $recordset->fetchAll(PDO::FETCH_ASSOC);
				foreach ($xxx as $field) {
					echo "<br>";
					$name = $field['Field'];
					if ($name != $tabla."Id") $campos_a_mostrar .=  $name.',';
	 			}
        		$campos_a_mostrar = substr($campos_a_mostrar,0,strlen($campos_a_mostrar)-1);
        		$types = substr($types,0,strlen($types)-1);
              
   	
        		$resultx =  '<?
// '.strtoupper($config->get('base_title')).'
// '.$tabla.' Controller
// '.date("m-Y").'
// Beto Ayesa contacto@phpninja.info


class '.$tabla.'Controller extends ControllerBase
{
		public function index(){
			require "application/models/'.$tabla.'Model.php"; 	
			$'.$tabla.' = new '.$tabla.'Model();			
			$data = Array(
				  "items" => $'.$tabla.'->GET(array("table" => "'.$tabla.'"))
		          );         
			$this->view->show("templates/table.php", $data);
		}
		
		public function detail(){
			require "application/models/'.$tabla.'Model.php"; 	
			$'.$tabla.' = new '.$tabla.'Model();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $'.$tabla.'->getBy'.$tabla.'Id($id)
		          );         
			$this->view->show("templates/detail.php", $data);
		}
		
';

if ($tabla == 'users'):
$resultx .= '

		public function signup(){
			$this->view->show("signup.php", array());
		
		}
';		

endif;
		$aux = explode(",",$campos_a_mostrar);
		foreach($aux as $p):
			if (strstr($p,'Id')) {
				$strip = str_replace("Id","",$p);
				if ($strip == $tabla) $strip = 'detail';
				$resultx .= '

		public function '.$strip.'(){
			$params = gett();
			require "application/models/'.$tabla.'Model.php"; 	
			$'.$tabla.' = new '.$tabla.'Model();
			$data = Array(
				  "items" => $'.$tabla.'->getBy'.ucfirst($p).'($'.'params["a"])
			      );	          
			$this->view->show("related-table.php", $data);
		}		
';
			
			
			} 
		endforeach;
		$resultx.='
		
		public function add(){
			require "application/models/'.$tabla.'Model.php";          
			$'.$tabla.' = new '.$tabla.'Model();
			$params = gett();
			$params[\'table\'] = "'.$tabla.'";
			if ($'.$tabla.'->POST($params)) echo 1;
			else echo 0;

		}
		
		public function edit(){
			require "application/models/'.$tabla.'Model.php";          
			$'.$tabla.' = new '.$tabla.'Model();
			$params = gett();
			$params = gett();
			$params[\'table\'] = "'.$tabla.'";
			if ($'.$tabla.'->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/'.$tabla.'Model.php";          
			$'.$tabla.' = new '.$tabla.'Model();
			$params = gett();
			if ($'.$tabla.'->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/'.$tabla.'Model.php"; 	
			$'.$tabla.' = new '.$tabla.'Model();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $'.$tabla.'->search($params)	);         
			$this->view->show("search.php", $data);
		}


}';

$aux = explode(",",$campos_a_mostrar);

$cadena_insert = $cadena_update = $form = "";
foreach($aux as $i){
	if ($i != -1)
	$cadena_insert .= "'\".$"."params['$i'].\"',";
}
foreach($aux as $i){
	if ($i != -1)
	$cadena_update .= $i." = '\".$"."params['$i'].\"',";
}

/* FORM ADD */
$form_html = "<form class='form' name='".$tabla."-add' action='".$tabla."/add' method='POST' enctype='multipart/form-data'>";


foreach($aux as $i){
	if ($i != -1)


	$form_html.= "


<label>";
    					$form_html .= $i;
    					$form_html .= "</label>

";		
	$form_html .= "<input type='text' name='".$i."' value=''>";

}
$form_html .= '<input type="button" onclick="validate(this.form);" value="Enviar"></form>';



/* FORM EDIT */

$form_html2 = "<form class='form' action='".$tabla."/edit' method='POST' enctype='multipart/form-data'>";

foreach($aux as $i){
	if ($i != -1)


	$form_html2.= "


<div class='control-group'><label class='control-label'>";
    					$form_html2 .= $i;
    					$form_html2 .= "</label>

<div class='controls'>";		
	$form_html2 .= "<input type='text' name='".$i."' value='<?= $"."items['".$i."'] ?>'></div></div>";

}
$form_html2 .= '<input type="hidden" name="id" value="<?= $'.'items["id"]; ?>"><input type="button" onclick="validate(this.form);" value="Enviar"></form>';


/* MODELS */

$cadena_update = substr($cadena_update,0,-1);
$cadena_insert = substr($cadena_insert,0,-1);


$joins =Array();
foreach($aux as $p):
			if (strstr($p,'Id') and !strstr($p,'_')) {
				$joins[] = "LEFT JOIN ".str_replace("Id","",$p)." ON (".$tabla.".".$p." = ".str_replace("Id","",$p).".".$p.")";
			}
			
endforeach;

$result_Models = '<?

// '.$config->get('base_title').' 1.0
// '.$tabla.' Model
// '.date("m-Y").'
// Beto Ayesa contacto@phpninja.info

class '.$tabla.'Model extends ModelBase
{

		public function getAll(){


				$consulta = $this->db->prepare("SELECT * FROM '.$tabla.' '.implode (" ",$joins).'");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();

				return $aux2;
		}
		
		public function getFieldValueById($field,$id){


				$consulta = $this->db->prepare("SELECT $field FROM '.$tabla.' '.implode (" ",$joins).' where '.$tabla.'.'.$tabla.'Id =\'".$id."\' limit 1");
				$consulta->execute();
				$c = $consulta->fetch();
				$aux2 = $c[$field];

				return $aux2;
		}
		
		public function getByField($field,$val){


				$consulta = $this->db->prepare("SELECT * FROM '.$tabla.' '.implode (" ",$joins).' where '.$tabla.'.".$field." =\'".$val."\' ");
				$consulta->execute();
				$aux2 = $consulta->fetchAll();
				$this->cache->set("'.$tabla.'_".$field."_".$val,$aux2,600);
				return $aux2;
		}
	


		public function getBy'.ucFirst($tabla).'Id($'.'id){


				$consulta = $this->db->prepare("SELECT * FROM '.$tabla.' '.implode (" ",$joins).' WHERE '.$tabla.'.'.$tabla.'Id=\'$'.'id\' limit 1");
				$consulta->execute();
				$aux2 =  $consulta->fetch();

				return $aux2;

		}
';
		
		foreach($aux as $p):
			if (strstr($p,'Id') ) {

				$result_Models .= '

		public function getBy'.ucFirst($p).'($'.'id){


				$consulta = $this->db->prepare("SELECT * FROM '.$tabla.' '.implode (" ",$joins).' WHERE '.$tabla.'.'.$p.'=\'$'.'id\' ");
				$consulta->execute();
				$aux2 =  $consulta->fetchAll();

				return $aux2;
		}

';
			
			
			} 
		endforeach;
		$result_Models.='
		
		
		public function search($params){
			$aux = $this->cache->get("'.$tabla.'_search_".$params[\'query\']);
			if ($aux == null){
				$consulta = $this->db->prepare("SELECT * FROM '.$tabla.' '.implode (" ",$joins).' where title like \'%".$params[\'query\']."%\' ");
				$consulta->execute();
				$aux2= $consulta->fetchAll();
				$this->cache->set("'.$tabla.'_search_".$params[\'query\'],$aux2,600);
				return $aux2;
			}
			return $aux;
		}
		
		
		public function add($params){
			$consulta = $this->db->prepare("INSERT INTO '.$tabla.' ('.$campos_a_mostrar.') VALUES ('.$cadena_insert.')");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function edit($params){
			$consulta = $this->db->prepare("UPDATE '.$tabla.' SET '.$cadena_update.'  where '.$tabla.'Id='.'\''.'".$params['.'\''.'id'.'\']'.'."\'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}

		public function delete($params){
			$consulta = $this->db->prepare("DELETE FROM '.$tabla.' where '.$tabla.'Id='.'\''.'".$params['.'\''.$tabla.'Id'.'\']'.'."\'");
			$consulta->execute();
			if ($consulta->rowCount() > 0) return true;
			else return false;
		}
}
';


$path = dirname(__FILE__);
@mkdir($path.'/../application/views/forms/');
$aux = fopen($path.'/../application/controllers/'.$tabla.'Controller.php','w');
	fwrite($aux,$resultx);
	fclose($aux);
	$aux = fopen($path.'/../application/models/'.$tabla.'Model.php','w');
	fwrite($aux,$result_Models);
	fclose($aux);

$aux = fopen($path.'/../application/views/forms/add-'.$tabla.'.php','w');
	fwrite($aux,$form_html);
	fclose($aux);
	
	$aux = fopen($path.'/../application/views/forms/edit-'.$tabla.'.php','w');
	fwrite($aux,$form_html2);
	fclose($aux);

/* MENU */
	$aux = fopen($path.'/../application/views/layout/menu.php','a');
	$menu = '<li><a href="<?= $LANG ?>/'.$tabla.'">'.$tabla.'</a></li>';
	fwrite($aux,$menu);
	fclose($aux);
	



/*
echo ($resultx);
echo ($result_Models);
*/
      /*
  $table_label = "'.$tabla.'";
        $default_order = "id ASC";
        $fields= array('.$campos_a_mostrar.');
        
        $fields_labels= array('.$labels.');
        
        $fields_types=array('.$types.');
        
        
        
        		fwrite($aux,$resultx);
        		fclose($aux);
*/
        
	

	}



        }
        

	}
	
	
	      
    
    


}

?>




