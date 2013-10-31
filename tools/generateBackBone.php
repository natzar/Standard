<?php
class backboneModel extends ModelBase
{
	
    public function generate(){
    
    
    
    	echo 'Serving JS ...';
        $config = Config::singleton();
        
        $prefix = $config->get('db_prefix');
        $dbname = $config->get('dbname');
   
        $consulta = $this->db->prepare('SHOW TABLES FROM '.$dbname);
        $consulta->execute();
        
        
        while ($row = $consulta->fetch(PDO::FETCH_NUM)) {

        	$tabla = $row[0];
        	if ($prefix == '' or strstr($tabla,$prefix)){
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
    
    			
    			$out = '/* '.strtoupper($config->get('base_title')).'
// '.$tabla.' JS
// '.date("m-Y").'
// Beto Ayesa contacto@phpninja.info */

';

$out .='
		
var '.$tabla.' = new Object();

/* '.$tabla.' Add Function */			
	'.$tabla.'.add = function(form){
		var datax ="";
		if (!$(form).hasClass("form")) datax = form;
		else{
 			if ('.$tabla.'.validate(form) === false) return false;
			datax = $(form).serialize();
		}
		$.post("'.$tabla.'/add",datax, function(data) {
  			if (data == "1") {
  				$("#add'.ucfirst($tabla).'Modal").modal("hide");
				growl("'.$tabla.'","Added Item Successfully");
				if ($(form).hasClass("form")) form.reset();
			} else {
 				$("#add'.ucfirst($tabla).'Modal").modal("hide");
				growl("'.$tabla.'","Error");
			}	
		});
	};

/* '.$tabla.' Update Function */
	'.$tabla.'.update = function(form){
		form.reset();
	};				

/* '.$tabla.' Delete Function */	
	'.$tabla.'.delete = function(id){
	
	  if (confirm("Are you Sure?")){
			$.post("'.$tabla.'/delete",{ '.$tabla.'Id: id }, function(data) {
			if (data == "1") {
			growl("'.$tabla.'","Deleted Successfully");
			$("element-'.$tabla.'-"+id).fadeOut();
		} else {
			growl("'.$tabla.'","Ha ocurrido un error, porfavor vuelve a intentarlo","error");
		}

		
	});


		}
		return false;
	};

/* '.$tabla.' Validate Function */		
	'.$tabla.'.validate = function(form){
		$("input[required=\'required\']",form).each(function(){
			if($(this).val() == "") return false;
		});
	};

';
    
    
    	
    	$path = dirname(__FILE__);
	    $aux = fopen($path.'/../views/js/models/'.$tabla.'.js','w');
	fwrite($aux,$out);
	fclose($aux);

    }
    }
    
    }
    
    }