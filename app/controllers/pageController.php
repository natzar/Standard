<?


class pageController extends ControllerBase{

	function home(){
	
		
		include "public/models/sliderModel.php";
		include "public/models/pagesModel.php";
		$page = new pagesModel();
		
		$sliderModel = new sliderModel();
		$slider = $sliderModel->getAll();
		
		$aux = $page->getBypagesId($this->urlHelper->translate('pages','index'));
		if ($aux == -1) return 		$this->view->show('errors/404.php',array());

		$template = 'home-slider.php';
		$this->view->show('home-slider.php',array(
		"content" => $aux['content_'.$_SESSION['lang']],
		"slider" => $slider,
		"SEO_TITLE" => $aux['title_'.$_SESSION['lang']],
		"SEO_DESCRIPTION" => $aux['seo_description_'.$_SESSION['lang']],
		"SEO_KEYWORDS" => $aux['seo_keywords_'.$_SESSION['lang']]
		));


	}
	function single(){
		$p=	!empty($_GET['a']) ? $_GET['a'] : 'index';
//		if (isset($this->$p) and function_exists($this->$p) and is_callable($this->$p)) return $this->$p();
		$SEO_TITLE = $p;
		$SEO_DESCRIPTION ='';
		$SEO_KEYWORDS ='';
		include "public/models/pagesModel.php";
		$page = new pagesModel();

		$aux = $page->getBypagesId($this->urlHelper->translate('pages',$p));

		if ($aux == -1) return 		$this->view->show('errors/404.php',array());
		$template = $aux['templates'] != '' ? $aux['templates'] : 'pagina.php';

		$this->view->show($template,array(
		"content" => $aux['content_'.$_SESSION['lang']],
		"ID" =>  $aux['pagesId'],
		"serviciosHome" => true,
		"SEO_TITLE" => $aux['title_'.$_SESSION['lang']],
		"SEO_DESCRIPTION" => $aux['seo_description_'.$_SESSION['lang']],
		"SEO_KEYWORDS" => $aux['seo_keywords_'.$_SESSION['lang']]
		));
		
	}
	
		function demandas(){
		$p=	!empty($_GET['a']) ? $_GET['a'] : 'demandas';
		
		$SEO_TITLE = $p;
		$SEO_DESCRIPTION ='';
		$SEO_KEYWORDS ='';
		include_once "public/models/demandasModel.php";
		include "public/models/pagesModel.php";
		$page = new pagesModel();
		$demandas = new demandasModel();

		$aux = $page->getBypagesId($this->urlHelper->translate('pages',$p));

		if ($aux == -1) return 		$this->view->show('errors/404.php',array());
		$template = $aux['templates'] != '' ? $aux['templates'] : 'demandas.php';

		$this->view->show($template,array(
		"content" => $aux['content_'.$_SESSION['lang']],
		"ID" =>  $aux['pagesId'],
		"demandas" => $demandas->getAll(),
		"SEO_TITLE" => $aux['title_'.$_SESSION['lang']],
		"SEO_DESCRIPTION" => $aux['seo_description_'.$_SESSION['lang']],
		"SEO_KEYWORDS" => $aux['seo_keywords_'.$_SESSION['lang']]
		));
		
	}
	
	
	
	function servicio(){
			$p=	!empty($_GET['a']) ? $_GET['a'] : 'index';
		
		$SEO_TITLE = $p;
		$SEO_DESCRIPTION ='';
		$SEO_KEYWORDS ='';
		include "public/models/serviciosModel.php";
		$page = new serviciosModel();

		$aux = $page->getServicioById($this->urlHelper->translate('servicios',$p));

		if ($aux == -1) return 		$this->view->show('errors/404.php',array());
		$template = 'servicios.php';

		$this->view->show($template,array(
		"content" => $aux['content_'.$_SESSION['lang']],
		"serviciosHome" => false,
		"SEO_TITLE" => $aux['title_'.$_SESSION['lang']],
		"SEO_DESCRIPTION" => $aux['seo_description_'.$_SESSION['lang']],
		"SEO_KEYWORDS" => $aux['seo_keywords_'.$_SESSION['lang']]
		));

	
	}
	
	function projects(){
		include "public/models/proyectosModel.php";
		$page = new proyectosModel();
		$params = gett();
		
		$items = $page->getAll();
		$i = isset($params['a']) and $params['a'] != -1 ? $params['a'] -1: 0;
		$item = $items[$i];
		
		$this->view->show('proyectos.php',array(
		"LOGO" => $item['logo'],
		"TITLE" => $item['title_'.$_SESSION['lang']],
		"SEO_TITLE" => $item['title_'.$_SESSION['lang']],
		"CLIENTE" => $item['client'],
		
		"DESCRIPTION" => $item['description_'.$_SESSION['lang']],
		"SEO_DESCRIPTION" => $item['description_'.$_SESSION['lang']],
		"SEO_KEYWORDS" => $item['seo_keywords_'.$_SESSION['lang']],
		"IMAGEN1" => $item['image1'],
		"IMAGEN2" => $item['image2'],
		"IMAGEN3" => $item['image3'],
		"IMAGEN4" => $item['image4'],						
		"TOTAL_PROJECTS" => count($items),
		"CURRENT" => $i
		));
	
	}
	
	function contact(){
		
		
		$this->view->show('contacto.php',array());
	
	}
	


	function sitemap(){
		include "public/models/pagesModel.php";
		$page = new pagesModel();
		include "public/models/categorysModel.php";
		$cats = new categorysModel();
	
		$cc = $cats->getAll();


		$this->view->show('sitemap.php',array(
		"SEO_TITLE" => 'Sitemap',
		"SEO_DESCRIPTION" => 'Sitemap for betoayesa.com',
			"sitemap" => $sitemap ));

	}
	
	function sitehistory(){
	
	}
	
	function category(){

		$p=	!empty($_GET['a']) ? $_GET['a'] : 'index';
		
		$SEO_TITLE = $p;
		$SEO_DESCRIPTION ='';
		$SEO_KEYWORDS ='';
		include "public/models/pagesModel.php";
		$page = new pagesModel();
		$aux = $page->getBycategorysId($this->urlHelper->translate('categorys', $p));
		$this->view->show('category.php',array(
		"items" => $aux,

		"SEO_TITLE" => $aux[0]['categorys'],
		"SEO_DESCRIPTION" => 'Articles about '. $aux[0]['categorys'],
		"SEO_KEYWORDS" => ''
		));
		
	}


}