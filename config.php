<?

$config = Config::singleton();
	$config->set('version',1);
	
	$config->set('lang','es');
	$config->set('available_langs',array('es','en','zh','ca'));
	$config->set('base_title','Qione');
	/* SEO */
	$config->set('seo_title','Home');
	$config->set('seo_description','');	
	$config->set('seo_keywords','');
	$config->set('base_url','//'.$_SERVER['SERVER_NAME'].'/qione/');
	$config->set('base_url_data','//'.$_SERVER['SERVER_NAME'].'/qione/data/');

	$config->set('base_email','contacto@phpninja.info');
	
	$config->set('db_prefix','');
	
	$config->set('tabla_default','pages');
    
    $config->set('private_urls',array(array("profile" => "action")));
    
    $config->set('validUser','test');
    $config->set('validPass','test');

	/* Toggles */
	$config->set('developer_mode',0);
	$config->set('combo_add',0);
	$config->set('delete_permission',1);



	$config->set('big_h',580);// 0 for no resize
	$config->set('big_w',960); // 0 for no resize
	$config->set('img_content_w',600);
	$config->set('img_content_h',480);
	$config->set('thumb_h',180);
	$config->set('thumb_w',260);
	



    $PATH = dirname(__FILE__);

	$config->set('path',$PATH); 
	
	$config->set('setup_dir',$PATH.'/setup/');
	$config->set('data_dir',$PATH.'/data/');

	$config->set('controllersFolder', 'controllers/');
	$config->set('modelsFolder', 'models/');
	$config->set('viewsFolder', 'views/');
  	$config->set('setupFolder', $PATH.'/setup/');
  	$config->set('languagesFolder', $PATH.'/app/language/');
  		 
	$config->set('dbhost', 'localhost');
	$config->set('dbname', 'pekeninos');
	$config->set('dbuser', 'root');
	$config->set('dbpass', '');

