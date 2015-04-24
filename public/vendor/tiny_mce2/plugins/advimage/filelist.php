<?php
include "../../../../../lib/Config.php";
include "../../../../../config.php";





$web = $config;
$DIRI = $config->get('data_dir');

$directorio=opendir($config->get('data_dir')."img/mids/");

$UBICACIO_PROJECTE = $config->get("base_url_data")."img/mids/";

$text="";
while ($archivo = readdir($directorio)){

	if(($archivo!=".")&&($archivo!="..")&&($archivo!=".svn")){

		$text .= "<a href=\"\" onclick=\"seleccionaURL('".$UBICACIO_PROJECTE.$archivo. "');return false;\"><img src=\"".$UBICACIO_PROJECTE.$archivo."\" height=\"100\" border=\"1\"/></a> &nbsp;";

	}

}

closedir($directorio);

echo $text;







?>