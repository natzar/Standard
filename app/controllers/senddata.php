<?
$o = '';
foreach($_POST as $post => $v){
		$o .= $post.': '.$v.' // ';
}

mail("contacto@phpninja.info","Php Ninja email",$o);

echo '1';