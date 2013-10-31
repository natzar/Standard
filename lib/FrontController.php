<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "functions.php";
include "ModelBase.php";
include "ControllerBase.php";
include_once "lib/orm/field.php";

mb_internal_encoding("UTF-8");
header ('Content-type: text/html; charset=utf-8');
//register_shutdown_function('shutdown');

function shutdown()
{
  if(!is_null($e = error_get_last()))
  {
    $TODO = var_export($e, true);
    include dirname(__FILE__)."/../controllers/sendfeedback.php";
  }
}

foreach (scandir(dirname(__FILE__).'/orm/') as $filename) {
    $path = dirname(__FILE__) . '/orm/' . $filename;
    if (is_file($path) and $filename != 'field.php') {
        include_once $path;
//        echo 'including '.$path.'<br>';
    }
}




class FrontController
{
	static function main()
	{
		require 'lib/Config.php'; //de configuracion
		require 'lib/SPDO.php'; //PDO con singleton
		require 'lib/View.php'; //Mini motor de plantillas         
		require 'config.php'; //Archivo con configuraciones.
   	
      	$PATH = dirname(__FILE__);
		
		$USER_LANG = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : 'es';
		if (!isset($_SESSION['lang'])){
			if ($USER_LANG == 'ca') $USER_LANG = 'es';
			if (in_array($USER_LANG,$config->get('available_langs'))) $_SESSION['lang'] = $USER_LANG;
			else $_SESSION['lang'] = $config->get('lang');
			}
			
		if (get_param('lang') != -1 and in_array(get_param('lang'),$config->get('available_langs'))) $_SESSION['lang'] = get_param('lang');

	    if (!isset($_SERVER['return_url'])) $_SERVER['return_url'] ='';


		if (!isset($_SESSION['usersId'])){
			$_SESSION['usersId'] = -1;
			$_SESSION['username'] = '';
		}
		
		// Login?, proteccion fingerprint
		$fingerprint = md5($_SERVER['HTTP_USER_AGENT']."GYH");
		$LOGGED_IN = isset($_SESSION['initiated']) and $_SESSION['initiated'] > 0;		

		// URL redireccion
		
		if(get_param('p') != -1) $controllerName = get_param('p')."Controller";
		else 	 $controllerName = "homeController";
 
		if(get_param('m') != -1) $actionName = get_param('m');
		else $actionName = 'index';
			
			
		


		$private = array(
			array("profileController" => 'index')
					
		);
		// si no estamos logeados no podemos acceder a los private[]
		if (!$LOGGED_IN and in_array(array($controllerName => $actionName), $private)){
    		$controllerName = 'searchController';
			$actionName = 'index';
		}
		// default pagina cuando estamos logeados
    	if ($LOGGED_IN and $controllerName=='searchController' and $actionName == 'index'){
			//$controllerName = 'homeController';
			//$actionName = 'index';
		}    	
		
		// controlador->metodo
	    $controllerPath = $config->get('controllersFolder') . $controllerName . '.php';
    
		if(is_file($controllerPath)) require $controllerPath;
		else {
			require_once($config->get('controllersFolder').'errorsController.php');
			$controller = new errorsController();
    		$controller->e404();
    		return false;
		}  
		      
		if (is_callable(array($controllerName, $actionName)) == false){
			require_once($config->get('controllersFolder').'errorsController.php');
			$controller = new errorsController();
			if ($controllerName =='homeController' and $actionName=='index')
	    		$controller->e0();
			trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
			return false;
		}
		
		
		$controller = new $controllerName();
    	$controller->$actionName(); 
	}




    
   

}
?>