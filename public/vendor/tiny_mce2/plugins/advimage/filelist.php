<?php
include "../../../../lib/class/ninja.config.php";
include "../../../../lib/hermosa_lib.php";
$config = new ninjaConfig("../../../../config.php");
$link = $config->conectar();



$web = $config;
$DIRI = $web->http_img_dir;

$directorio=opendir($web->base_dir_img);

$UBICACIO_PROJECTE = $DIRI;

$text="";
while ($archivo = readdir($directorio)){

	if(($archivo!=".")&&($archivo!="..")&&($archivo!=".svn")){

		$text .= "<a href=\"\" onclick=\"seleccionaURL('".$UBICACIO_PROJECTE.$archivo. "');return false;\"><img src=\"".$UBICACIO_PROJECTE.$archivo."\" height=\"100\" border=\"1\"/></a> &nbsp;";

	}

}

closedir($directorio);

echo $text;







?>