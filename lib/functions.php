<?


function cleanInput($input) {

  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
  );

    $output = preg_replace($search, '', $input);
    return $output;
  }

function sanitize($input) {

/* Clearify */
	if ($input == '') return -1;
	//$input  = cleanInput($input);
	$output = $input;
    return $output;
}

function removeAccents($s) {
    $replace = array(
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'Ae', 'Å'=>'A', 'Æ'=>'A', 'Ă'=>'A',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'ae', 'å'=>'a', 'ă'=>'a', 'æ'=>'ae',
        'þ'=>'b', 'Þ'=>'B',
        'Ç'=>'C', 'ç'=>'c',
        'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E',
        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 
        'Ğ'=>'G', 'ğ'=>'g',
        'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'İ'=>'I', 'ı'=>'i', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i',
        'Ñ'=>'N',
        'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'Oe', 'Ø'=>'O', 'ö'=>'oe', 'ø'=>'o',
        'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
        'Š'=>'S', 'š'=>'s', 'Ş'=>'S', 'ș'=>'s', 'Ș'=>'S', 'ş'=>'s', 'ß'=>'ss',
        'ț'=>'t', 'Ț'=>'T',
        'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'Ue',
        'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ü'=>'ue', 
        'Ý'=>'Y',
        'ý'=>'y', 'ý'=>'y', 'ÿ'=>'y',
        'Ž'=>'Z', 'ž'=>'z'
    );
    return strtr($s, $replace);
}


function get_param($param){
	if (isset($_GET[$param]))
		return sanitize($_GET[$param]);
	if (isset($_POST[$param]))
		return sanitize($_POST[$param]);
	return -1;
}

function gett(){

		// Takes USER INPUT, normalize, sanitize, and returns and array
	    $retrieved = -1;	
		$params = array();
		if (count($_GET) > 0){
			foreach ($_GET as $key => $value)
				//$aux = sanitize($value);
				$params[$key] = $value;			
		} 
		if (count($_POST) > 0){
			foreach ($_POST as $key => $value)
				//$aux = sanitize($value);
					$params[$key] = $value;

		}	
		
		if (!isset($params['offset'])) $params['offset'] = 0;
		if (!isset($params['perpage'])) $params['perpage'] = 18;
   return $params;

}


function json_from_array($array){
	$json = new Services_JSON();
	$aux = $json->encode($array);
	return $aux;
}

function generar_cadena_random($long){ 
//
// Genera cadena aleatoria de minusuclas i numeros.
// Requiere pasarle una variable con la longitud de la cadena que queremos.
// Devuelve la cadena de la longitud dada.

	$str = "abcdefghijklmnopqrstuvwxyz1234567890";
	$cad = "";
	for($i=0;$i<$long;$i++) {
	$cad .= substr($str,rand(0,36),1);
	}
	return $cad;

}


// FORMS
function create_combo_before_number($name){
	echo "<select name=\"".$name."\">

	<option value=\">=\">>=</option>
		<option value=\"<=\"><=</option>
	</select> ";
}

function float_to_sql($valor){
	$valor = str_replace('.','',$valor);
	$valor = str_replace(',','.',$valor);
	return $valor;
}
function generate_seo_link($input,$replace = '-',$remove_words = true,$words_array = array())
{

if (preg_match("/\p{Han}+/u", $input)) return $input;
	//make it lowercase, remove punctuation, remove multiple/leading/ending spaces
	$input = removeAccents($input);
	$return = trim(preg_replace('/[^a-zA-Z0-9\s]/','',strtolower($input)));

	//remove words, if not helpful to seo
	//i like my defaults list in remove_words(), so I wont pass that array
	if($remove_words) { $return = remove_words($return,$replace,$words_array); }

	//convert the spaces to whatever the user wants
	//usually a dash or underscore..
	//...then return the value.
	return str_replace(' ',$replace,$return);
}

/* takes an input, scrubs unnecessary words */
function remove_words($input,$replace,$words_array = array(),$unique_words = true)
{
	//separate all words based on spaces
	$input_array = explode(' ',$input);

	//create the return array
	$return = array();

	//loops through words, remove bad words, keep good ones
	foreach($input_array as $word)
	{
		//if it's a word we should add...
		if(!in_array($word,$words_array) && ($unique_words ? !in_array($word,$return) : true))
		{
			$return[] = $word;
		}
	}

	//return good words separated by dashes
	return implode($replace,$return);
}


function get_extension($file_name){
	$ext = explode('.', $file_name);
	$ext = array_pop($ext);
	return strtolower($ext);
}


function resize_image($stype,$fname,$destino,$n_width,$n_height) {

	if ($n_width == 0 and $n_height == 0){
		copy($fname,$destino);
		return false;
	}
	switch($stype) {
	        case 'gif':
	        $img = imagecreatefromgif($fname);
	        break;
	        case 'jpg':
	        $img = imagecreatefromjpeg($fname);
	        break;
	        case 'jpeg':
	        $img = imagecreatefromjpeg($fname);
	        break;
	
	        case 'png':
	        $img = imagecreatefrompng($fname);
	        break;
	    }
	 
		$ancho = imagesx($img);
		$alto = imagesy($img);

		if ($n_width > $ancho and $n_height > $alto){
			copy($fname,$destino);
			return false;
		}

	if ($ancho > $alto){ // changed for bisdixit.Falta funcio make thumbs make content i make bigs
		$r_ancho = $n_width;
		$r_alto = ($alto * $r_ancho) / $ancho;
	}else if ($ancho < $alto){
		$r_alto = $n_height;
		$r_ancho = ($ancho * $r_alto) / $alto;	
	} else { // iguales
		$r_ancho = $n_width;
		$r_alto = ($alto * $r_ancho) / $ancho;
	
	}

	$r_alto = number_format($r_alto,0,"","");
	$r_ancho = number_format($r_ancho,0,"","");
	$thumb = imagecreatetruecolor($r_ancho,$r_alto); 
	$fname22= $destino;
	imagecopyresampled($thumb,$img,0,0,0,0,$r_ancho,$r_alto,$ancho,$alto); 
	
	 switch($stype) {
	        case 'gif':
			 imagegif($thumb, $fname22,100);
	        break;
	        case 'jpg':
		      imagejpeg($thumb, $fname22,100);
	        break;
	        case 'jpeg':
	         imagejpeg($thumb, $fname22,100);
	        break;
	
	        case 'png':
	        imagepng($thumb, $fname22);
	        break;
    }
 
  
}

function cropImage($nw, $nh, $source, $stype, $dest) {
//
// CROP IMAGE ( Recorte forzado de imagen )
// Necesita: NUEVO_ANCHO, NUEVO_ALTO, PATH DE ARCHIVO FUENTE, EXTENSION DE 3 LETRAS ARCHIVO, PATH Y NOMBRE ARCHIVO DESTINACION
//
// Devuelve true si todo ha ido correcto.
// El resultado es la copia del archivo manipulado.

    $size = getimagesize($source);
    $w = $size[0];
    $h = $size[1];
 
    switch($stype) {
        case 'gif':
        $simg = imagecreatefromgif($source);
        break;
        case 'jpg':
        $simg = imagecreatefromjpeg($source);
        break;
        case 'jpeg':
        $simg = imagecreatefromjpeg($source);
        break;

        case 'png':
        $simg = imagecreatefrompng($source);
        break;
    }
 
    $dimg = imagecreatetruecolor($nw, $nh);
 
    $wm = $w/$nw;
    $hm = $h/$nh;
 
    $h_height = $nh/2;
    $w_height = $nw/2;
 
    if($wm> $hm) {
 
        $adjusted_width = $w / $hm;
        $half_width = $adjusted_width / 2;
        $int_width = $half_width - $w_height;
 
        imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);
 
    } elseif(($wm <$hm) || ($w == $h)) {
 
        $adjusted_height = $h / $wm;
        $half_height = $adjusted_height / 2;
        $int_height = $half_height - $h_height;
 
        imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
 
    } else {
        imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
    }
 
  
   
    switch($stype) {
        case 'gif':
imagegif($dimg,$dest,100);
        break;
        case 'jpg':
       imagejpeg($dimg,$dest,100);       
        break;
        case 'jpeg':
       imagejpeg($dimg,$dest,100);       
        break;
        case 'png':
       imagepng($dimg,$dest);
               break;
    }

    
}


function clean_filename($aux){
	$aux =  preg_replace('[^a-zA-Z0-9._- ]', '', $aux);
	$aux =  str_replace(' ', '', $aux);
	$aux = removeAccents($aux);
	if (trim($aux) == '') return -1;
	else return trim($aux);

}


function generar_nombre_archivo($filename){

// NEW ONE, without saving filename just time stamp


$punto_pos = strrpos ( $filename, ".");
$soloname = substr($filename,0,$punto_pos );
$ext = substr($filename,$punto_pos + 1, strlen($filename) - $punto_pos);
$new_code = generar_cadena_random(7);
return Date("YmdHis")."_".$new_code.".".$ext;



// OLD ONE, saving filename
$punto_pos = strrpos ( $filename, ".");
$soloname = substr($filename,0,$punto_pos );
if (isset($_POST['title'])) $soloname = $_POST['title'];
if (isset($_POST['contenidossubcategorias'])) $soloname = $_POST['contenidossubcategorias'];
$soloname = clean_filename($soloname);
$ext = substr($filename,$punto_pos + 1, strlen($filename) - $punto_pos);
$new_code = generar_cadena_random(7);

return $soloname."_".$new_code.".".$ext;

}

  
function upload_image($var,$W,$H,$folder){
	$path = 'data/img/'.$folder.'/';
	

	if ($_FILES[$var]['name'] != ""){	
		$filename_new = $_SESSION['accountId']."_".generar_nombre_archivo($_FILES[$var]['name']);
		copy($_FILES[$var]['tmp_name'],$path.$filename_new);
		resize_image(get_extension($filename_new),$path.$filename_new,$path.$filename_new,$W,$H) ;
		cropImage($W, $H, $path.$filename_new,get_extension($filename_new), $path.$filename_new);

		return $filename_new;
	}
	return '';				
}



function distance($lat1, $lon1, $lat2, $lon2) {

    $pi80 = M_PI / 180;
    $lat1 *= $pi80;
    $lon1 *= $pi80;
    $lat2 *= $pi80;
    $lon2 *= $pi80;

    $r = 6371; // mean radius of Earth in km
    $dlat = $lat2 - $lat1;
    $dlon = $lon2 - $lon1;
    $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $km = $r * $c;

    //echo '<br/>'.$km;
    return round($km).' Km';

}



/** 
 * Truncates text.
 *
 * Cuts a string to the length of $length and replaces the last characters
 * with the ending if the text is longer than length.
 *
 * @param string $text String to truncate.
 * @param integer $length Length of returned string, including ellipsis.
 * @param string $ending Ending to be appended to the trimmed string.
 * @param boolean $exact If false, $text will not be cut mid-word
 * @param boolean $considerHtml If true, HTML tags would be handled correctly
 * @return string Trimmed string.
 */
function truncate($text, $length = 100, $ending = '...', $exact = true, $considerHtml = false) {
 if ($considerHtml) {
  // if the plain text is shorter than the maximum length, return the whole text
  if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
   return $text;
  }

  // splits all html-tags to scanable lines
  preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);

  $total_length = strlen($ending);
  $open_tags = array();
  $truncate = '';

  foreach ($lines as $line_matchings) {
   // if there is any html-tag in this line, handle it and add it (uncounted) to the output
   if (!empty($line_matchings[1])) {
    // if it’s an “empty element” with or without xhtml-conform closing slash (f.e.)
    if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
    // do nothing
    // if tag is a closing tag (f.e.)
    } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
     // delete tag from $open_tags list
     $pos = array_search($tag_matchings[1], $open_tags);
     if ($pos !== false) {
      unset($open_tags[$pos]);
     }
     // if tag is an opening tag (f.e. )
    } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
     // add tag to the beginning of $open_tags list
     array_unshift($open_tags, strtolower($tag_matchings[1]));
    }
    // add html-tag to $truncate’d text
    $truncate .= $line_matchings[1];
   }

   // calculate the length of the plain text part of the line; handle entities as one character
   $content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
   if ($total_length+$content_length > $length) {
    // the number of characters which are left
    $left = $length - $total_length;
    $entities_length = 0;
    // search for html entities
    if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|&#x[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
     // calculate the real length of all entities in the legal range
     foreach ($entities[0] as $entity) {
      if ($entity[1]+1-$entities_length <= $left) {
       $left--;
       $entities_length += strlen($entity[0]);
      } else {
       // no more characters left
       break;
      }
     }
    }
    $truncate .= substr($line_matchings[2], 0, $left+$entities_length);
    // maximum lenght is reached, so get off the loop
    break;
   } else {
    $truncate .= $line_matchings[2];
    $total_length += $content_length;
   }

   // if the maximum length is reached, get off the loop
   if($total_length >= $length) {
    break;
   }
  }
 } else {
  if (strlen($text) <= $length) {
   return $text;
  } else {
   $truncate = substr($text, 0, $length - strlen($ending));
  }
 }

 // if the words shouldn't be cut in the middle...
 if (!$exact) {
  // ...search the last occurance of a space...
  $spacepos = strrpos($truncate, ' ');
  if (isset($spacepos)) {
   // ...and cut the text in this position
   $truncate = substr($truncate, 0, $spacepos);
  }
 }

 // add the defined ending to the text
 $truncate .= $ending;

 if($considerHtml) {
  // close all unclosed html-tags
  foreach ($open_tags as $tag) {
   $truncate .= '';
  }
 }

return $truncate;

}
?>