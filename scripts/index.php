<center>
<img src="logo.gif"><br>
1.0
</center>
<?

function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 

include "../lib/Config.php";
include "../config.php";

include dirname(__FILE__)."/../lib/ModelBase.php";

	$script =	$_GET['p'];
	$method =	$_GET['m'];
if (isset($_GET['p'])):
	if (!file_exists($script.'.php')) {
		die( 'no existe script');
		
	}
	
	include $script.".php";
	$aux = new $script;
      
	$aux->$method();
	
endif;
