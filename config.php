<?
/*

	Standart is an Enjoyable php framework + crud for Data-driven Web applications.
    Copyright (C) 2015 Beto López Ayesa

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
	config.php - Configuration file
	----------------------------------------------------------------------------------------*/	                                                                                                                                              

	/* Init Config file */
	$config = Config::singleton();
	$PATH = dirname(__FILE__);
	
	
	/* Relative path to App-Root - http://www.yourserver.com/RELATIVE_PATH/config.php
		If you are in root just leave it like "/"
	----------------------------------------------------------------------------------------*/	   
	$RELATIVE_PATH = '/alphas/96MicroFramework/';
		
	/* Installation Step 1 - DB */
	$config->set('dbhost', 'localhost');
	$config->set('dbname', 'magsam');
	$config->set('dbuser', 'root');
	$config->set('dbpass', '');
	$config->set('db_prefix','');
	$config->set('tabla_default','noticias');
    $config->set('db_support',true);
    
   	/* Installation Step 2 - Admin Passwords */
    $config->set('validUser','test');
    $config->set('validPass','test');

    /* Installation Step 3 - Global variables */	
	$config->set('base_email','contacto@phpninja.info');
	$config->set('base_title','Standart');

	$config->set('seo_title','Standart'); 
	$config->set('seo_description','Welcome! Simple and enjoyable PHP Framework + CRUD, for DATA-driven Applications.');	
	$config->set('seo_keywords','');
	$config->set('seo_image','//'.$_SERVER['SERVER_NAME'].$RELATIVE_PATH.'public/img/icons/Facebook.png');
	
	
	/* Installtion Step 4 -  Languages */	
	$config->set('default_lang','es');
	$config->set('available_langs',array('es','ca','en'));
	
	/* Installation Step 5 - Images Sizes */
	$config->set('big_h',640);// 0 for no resize
	$config->set('big_w',960); // 0 for no resize
	$config->set('img_content_w',480);
	$config->set('img_content_h',320);
	$config->set('thumb_h',160);
	$config->set('thumb_w',240);	

	/* Installation Step 6 - Third Party: Google Analytics */
	$config->set('google_analytics-UA','UA-9999999');

    $config->set('googlePlus','https://plus.google.com/+BetoLopezAyesa/posts');
    
	/* Don't touch anything beyond this point if you are not sure about what are you doing 
	----------------------------------------------------------------------------------------*/	

	/* Base Urls & Paths */
	$config->set('path',$PATH); 
	$config->set('base_url','//'.$_SERVER['SERVER_NAME'].$RELATIVE_PATH);
	$config->set('base_url_data','//'.$_SERVER['SERVER_NAME'].$RELATIVE_PATH.'data/');
	
	$config->set('setup_dir',$PATH.'/setup/'); 
	$config->set('data_dir',$PATH.'/data/');
	$config->set('controllersFolder', 'application/controllers/');
	$config->set('modelsFolder', 'application/models/');
	$config->set('viewsFolder', 'application/views/');
  	$config->set('setupFolder', $PATH.'/setup/');
  	$config->set('languagesFolder', $PATH.'/application/language/');
  		
    $config->set('private',array("admin"));    /* Login & Private Urls */

	$config->set('combo_add',0); 	/* Toggle: Plus sign to add new option on Combo field */
	$config->set('delete_permission',1); /* Toggle: Show delete icon in each table row */
	$config->set('developer_mode',false); 	/* Toggle: DEVELOPER MODE, show session and params values */

	$config->set('version',2); 	/* Constants */
	$config->set('updated','12/3/2015'); 	/* Constants */
