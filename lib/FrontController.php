<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
mb_internal_encoding("UTF-8");
date_default_timezone_set('Europe/Madrid'); 
setlocale (LC_ALL, 'es_ES.ISO8859-1'); 
setlocale(LC_TIME, 'spanish'); 


$GLOBAL['_logged_php_errors'] = array();

//error_reporting(1);
//error_reporting(1);
//set_exception_handler('phpLogError');

//set_error_handler('phpLogError');

function phpLogError() {
    global $_logged_php_errors;

    $error = error_get_last();

    if ($error['type'] == 1) {
        $_logged_php_errors[] = "<span>$error</span>";
    } 
}

function phpGetLoggedErrors() {
    global $_logged_php_errors;

    return "<ol><li>".implode('</li><li>',$_logged_php_errors)."</li></ol>";
}


include "functions.php";
include "ControllerBase.php";
include "ModelBase.php";


//header ('Content-type: text/html; charset=utf-8');


class FrontController
{
	static function main()
	{
		mb_internal_encoding("UTF-8");
		require 'lib/Config.php'; //de configuracion
		require 'lib/SPDO.php'; //PDO con singleton
		require 'lib/View.php'; //Mini motor de plantillas         
		require 'config.php'; //Archivo con configuraciones.
			
		/* Defaults */
		$PATH = dirname(__FILE__);
		$controllerName = 'homeController';
		$actionName = 'index';
		if (!isset($_SERVER['return_url'])) {
			$_SERVER['return_url'] ='';	
		}
		
		/* Language Define Session */
		if (!isset($_SESSION['lang'])){
			$browserLang = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : '';
			if (in_array($browserLang,$config->get('available_langs'))) {
				$_SESSION['lang'] = $browserLang;
			}else{
				$_SESSION['lang'] = $config->get('default_lang');
			}
		}	

		/*** change language ?lang='es'*/
		if (get_param('lang') != -1 and in_array(get_param('lang'),$config->get('available_langs'))){
			$_SESSION['lang'] = get_param('lang');
		} 
		
		

		/* Current User */
		if (!isset($_SESSION['usersId'])){
			$_SESSION['usersId'] = -1;
			$_SESSION['username'] = '';
		}
		
		/* Get Controller->action */
        if (get_param('p') == -1 and get_param('m') == -1){
            header("location: ".$config->get('base_url').$_SESSION['lang']."/home");
            exit();
        }
		if(get_param('p') != -1) $controllerName = get_param('p')."Controller";
		if(get_param('m') != -1) $actionName = get_param('m');
		
		/* Require Controller and Call it */
		$controllerPath = $config->get('controllersFolder') . $controllerName . '.php';
    
		if(is_file($controllerPath)) require $controllerPath;

		if (!is_callable(array($controllerName, $actionName))){
		header("HTTP/1.0 404 Not Found");
			require_once($config->get('controllersFolder').'errorsController.php');
			$controller = new errorsController();
	    	$controller->e404();
			return false;
		}
		
	
		/* New Controller -> action */
		$controller = new $controllerName();
    	$controller->$actionName(); 
	}

}
?>