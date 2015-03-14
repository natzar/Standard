<?
/*

	Standart is an alternative to Wordpress. An Enjoyable php framework + crud for Data-driven applications.
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
                                                                                                                                                 
*/             
	/* Basic */
	$PATH = dirname(__FILE__);
	$config = Config::singleton();
	$config->set('version',2);
	$config->set('updated','12/3/2015');
	$config->set('developer_mode',true);
	$config->set('base_email','contacto@phpninja.info');
	$config->set('base_title','Standart 2');
	$config->set('path',$PATH); 
	
	/* Languages */	
	$config->set('default_lang','es');
	$config->set('available_langs',array('es','en'));
	
	/* SEO */
	$config->set('seo_title','Home');
	$config->set('seo_description','Servicios IT para Empresas, Startups, Agencias, Estudios y Freelances. Somos un equipo con más de 15 años de experiencia en desarrollo y puesta en marcha de proyectos y servicios digitales.');	
	$config->set('seo_keywords','');
	$config->set('seo_image','//'.$_SERVER['SERVER_NAME'].'/alphas/96MicroFramework/public/img/icons/Facebook.png');
	$config->set('base_url','//'.$_SERVER['SERVER_NAME'].'/alphas/96MicroFramework/');
	$config->set('base_url_data','//'.$_SERVER['SERVER_NAME'].'/alphas/96MicroFramework/public/data/');

	/* Third Party: Google Analytics */
	$config->set('google_analytics-UA','UA-9999999');

	/* PATHS */
	$config->set('setup_dir',$PATH.'/setup/');
	$config->set('data_dir',$PATH.'/data/');
	$config->set('controllersFolder', 'application/controllers/');
	$config->set('modelsFolder', 'application/models/');
	$config->set('viewsFolder', 'application/views/');
  	$config->set('setupFolder', $PATH.'/setup/');
  	$config->set('languagesFolder', $PATH.'/application/language/');
  		 
	/* DB */
	$config->set('dbhost', 'localhost');
	$config->set('dbname', '96levels');
	$config->set('dbuser', 'root');
	$config->set('dbpass', '');
	$config->set('db_prefix','');
	$config->set('tabla_default','ninja_clientes');
    $config->set('db_support',true);
    
    /* Login & Private Urls */
    $config->set('private',array("admin"));
	/* Admin */
    $config->set('validUser','test');
    $config->set('validPass','test');

	/* Toggles */
	$config->set('combo_add',0);
	$config->set('delete_permission',1);

	/* Images Sizes */
	$config->set('big_h',640);// 0 for no resize
	$config->set('big_w',960); // 0 for no resize
	$config->set('img_content_w',480);
	$config->set('img_content_h',320);
	$config->set('thumb_h',160);
	$config->set('thumb_w',240);





