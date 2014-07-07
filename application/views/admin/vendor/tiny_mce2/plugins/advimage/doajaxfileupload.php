<?php

session_start();

global $RUTA_UPLOADS;
//include "../../../../bd_monster.inc.php";


include "../../../../lib/class/ninja.config.php";
include_once "../../../../lib/hermosa_lib.php";
$config = new ninjaConfig();
$link = $config->conectar();


$web = $config;

$RUTA_UPLOADS =  $web->base_dir_img;
$RUTA_HTTP = $web->http_img_dir;

function quitaCaracteresExtranyosNombreFichero($nombre){
  	$replaced = strtolower($nombre);
  	$replaced = str_replace(" ","",$replaced);
  	$replaced = str_replace("á","a",$replaced);
  	$replaced = str_replace("é","e",$replaced);
  	$replaced = str_replace("í","i",$replaced);
  	$replaced = str_replace("ó","o",$replaced);
  	$replaced = str_replace("ú","u",$replaced);
  	$replaced = str_replace("à","a",$replaced);
  	$replaced = str_replace("è","e",$replaced);
  	$replaced = str_replace("ì","i",$replaced);
  	$replaced = str_replace("ò","o",$replaced);
  	$replaced = str_replace("ù","u",$replaced);
  	$replaced = str_replace("ü","u",$replaced);
  	$replaced = str_replace("ç","c",$replaced);
  	$replaced = str_replace("ñ","n",$replaced);
  	$replaced = str_replace("'","_",$replaced);
  	$replaced = str_replace("&","y",$replaced);
	return $replaced;
}

	$error = "";
	$msg = "";
	$fileElementName = $_GET['fileupload'];
	$midaMaxArxiu = $_GET['midaMaxArxiu'];
	$_SESSION[$fileElementName] = "";
	
	if(!empty($_FILES[$fileElementName]['error'])){
		switch($_FILES[$fileElementName]['error']){
			case '1':
				$error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
				break;
			case '2':
				$error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
				break;
			case '3':
				$error = 'The uploaded file was only partially uploaded';
				break;
			case '4':
				$error = 'No file was uploaded.';
				break;
			case '6':
				$error = 'Missing a temporary folder';
				break;
			case '7':
				$error = 'Failed to write file to disk';
				break;
			case '8':
				$error = 'File upload stopped by extension';
				break;
			case '999':
			default:
				$error = 'No error code avaiable';
		}
	}elseif(empty($_FILES[$fileElementName]['tmp_name']) || $_FILES[$fileElementName]['tmp_name'] == 'none'){
		$error = 'No file was uploaded....';
	}else{
			
			$dia = date("dmy");
			$tiempo = time();
			$ran = rand(0,100);

			$prefijo_imagen = "_".$dia."_".$tiempo."_".$ran;
			
			$tmp = split("\.",$_FILES[$fileElementName]['name']);
			$ext = strtolower($tmp[count($tmp)-1]);
			$nom_tmp_file = str_replace(".".$ext,"",quitaCaracteresExtranyosNombreFichero($_FILES[$fileElementName]['name']));
			$nombre_final = $nom_tmp_file.$prefijo_imagen.".".$ext;
		
			if((@filesize($_FILES[$fileElementName]['tmp_name'])<$midaMaxArxiu)){

				if (copy($_FILES[$fileElementName]['tmp_name'],$RUTA_UPLOADS.$nombre_final)){
					//chmod( $RUTA_UPLOADS.$nombre_final, 0777);
					
					@resize_image(get_extension($nombre_final),$web->base_dir_img.$nombre_final,$web->base_dir_img.$nombre_final,$web->img_content_w,$web->img_content_h) ;
					
					$_SESSION[$fileElementName] =  $RUTA_HTTP.$nombre_final;

					$UBICACIO_PROJECTE = $RUTA_UPLOADS;					
					$msg = $RUTA_HTTP.$nombre_final;
				}else{
					$error = "error";
				}
			}else{
				
				$msg = "error";
			}
		
	}

	echo "{";
	echo "error: '".$error."',\n";
	echo "msg: '".$msg."'\n";
	echo "}";

?>