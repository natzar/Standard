<?
/*    
    Configuration File for 96MicroFramework
    
*/
	/* Basic */
	$PATH = dirname(__FILE__);
	$config = Config::singleton();
	$config->set('version',1);
	$config->set('base_email','contacto@phpninja.info');
	$config->set('base_title','Qione');
	$config->set('path',$PATH); 
	/* Languages */	
	$config->set('default_lang','es');
	$config->set('available_langs',array('es','en','zh','ca'));
	
	/* SEO */
	$config->set('seo_title','Home');
	$config->set('seo_description','');	
	$config->set('seo_keywords','');
	$config->set('seo_image','//'.$_SERVER['SERVER_NAME'].'/public/img/fb_image.jpg');
	$config->set('base_url','//'.$_SERVER['SERVER_NAME'].'/96MicroFramework/public/');
	$config->set('base_url_data','//'.$_SERVER['SERVER_NAME'].'/public/data/');

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
	$config->set('dbname', 'test');
	$config->set('dbuser', 'root');
	$config->set('dbpass', '');
	$config->set('db_prefix','');
	$config->set('tabla_default','clientes');
    
    /* Login & Private Urls */
    $config->set('private',array("admin"));
	/* Admin */
    $config->set('validUser','test');
    $config->set('validPass','test');

	/* Toggles */
	$config->set('developer_mode',0);
	$config->set('combo_add',0);
	$config->set('delete_permission',1);

	/* Images Sizes */
	$config->set('big_h',580);// 0 for no resize
	$config->set('big_w',960); // 0 for no resize
	$config->set('img_content_w',600);
	$config->set('img_content_h',480);
	$config->set('thumb_h',180);
	$config->set('thumb_w',260);





