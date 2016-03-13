
<? 

function saveTranslations($json){
    $ar = fopen('/nfs/c10/h03/mnt/178119/domains/tienda.marinafigueroa.com/html/application/language/translations.php',"w");
    $content = '<? $';
    $content .= 'translation = ';
    $content .= json_encode($json).';';
    fwrite($ar,$content);
    fclose($ar);
}
function __($token, $lang = null) {
        $lang = $_SESSION['lang'];
        require ('/nfs/c10/h03/mnt/178119/domains/tienda.marinafigueroa.com/html/application/language/translations.php');
//        echo $translation;
        $json = json_decode($translation); 

        if (!isset($json->$token)){   
            $json->$token = array("fr" => "","en" => "","es" => $token,"ca" => ""); 
            saveTranslations(json_encode($json));    
            return $token;
        }else if (!isset($json->$token->$lang) or $json->$token->$lang == ""){        
            return $token;
        }else{
            return $json->$token->$lang;
        }
    }
    ?>