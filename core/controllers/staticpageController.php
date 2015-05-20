<?


class staticpageController extends ControllerBase{

	function works(){
		$p=	!empty($_GET['a']) ? $_GET['a'] : 'index-works';
		include "application/models/showModel.php";
		$model = new showModel();
		$data = $model->getById('ninja_proyectos',$this->urlHelper->translate('ninja_proyectos',$p));

			
			$this->view->show('portfolio_single.php',array(
		
		"SEO_TITLE" => $data['titulo'],
		"SEO_DESCRIPTION" => $data['descripcion'],
		"SEO_KEYWORDS" => $data['plataforma'],
		"PROYECTO" => $data
		));


	}
	function index(){
		$p=	!empty($_GET['a']) ? $_GET['a'] : 'index-works';
		
		$SEO_TITLE = $p;
		$SEO_DESCRIPTION ='';
		$SEO_KEYWORDS ='';
		switch($p):
			case 'psd2html':
				$SEO_TITLE = 'De PSD a HTML/CSS';
				$SEO_DESCRIPTION = 'Mándanos un diseño en cualquier formato común y recibirás un archivo HTML5 / XHTML / CSS en perfecta calidad, compatible con todos los navegadores. Un desarrollo íntegro que no conseguirás en ningún otro lugar.';
				$SEO_KEYWORDS ='psd a html, psd to html, convertir diseño grafico html, psd a html css, programador web';
			break;
			case 'index-works':
				$SEO_TITLE = "Programador Php, Desarrollo y Programación a Medida";
				$SEO_DESCRIPTION = 'Desarrollo a medida. Tu socio puntual o tu departamento externo. Un equipo apasionado de personas con amplia experiencia, aquí estamos. ';
				$SEO_KEYWORDS ='programador php, desarrollo a medida, programación medida, agencia web barcelona, estudio web valencia, estudio web barcelona, programación a medida, html, css, php';
			break;
			case 'joomla':
				$SEO_TITLE = 'Desarrollo Joomla';
				$SEO_DESCRIPTION = 'Nuestro equipo tiene más de 100 proyectos basados en Joomla';
				$SEO_KEYWORDS ='joomla plugins, joomla desarrollo, joomla programador, programador joomla, expero joomla';
			break;
				case 'team':
				$SEO_TITLE = 'Team / Equipo';
				$SEO_DESCRIPTION = 'Nuestro equipo de desarrolladores es el más experimentado de la indústria';
				$SEO_KEYWORDS ='equipo, profesional, experiencia, programador web, equipo programación, equipo web, programación web';
			break;
				case 'shopify':
				$SEO_TITLE = 'Desarrollo Shopify';
				$SEO_DESCRIPTION = 'Podemos implementar y ayudarte con cualquier tienda Shopify';
				$SEO_KEYWORDS ='shopify, shopify themes, psd to shopify';
			break;
			case 'metodo':
				$SEO_TITLE = 'Metodo de desarrollo';
				$SEO_DESCRIPTION = 'Análisis, Planificación, Desarrollo, Control de Calidad.';
				$SEO_KEYWORDS ='project manager, planificacion, desarrollo, control de calidad, testing';
			break;
			case 'magento':
				$SEO_TITLE = 'Desarrollo Magento';
				$SEO_DESCRIPTION = 'Hemos desarrollado más de 300 tiendas en magento. Desarrollo Magento';
				$SEO_KEYWORDS ='magento, desarrollo magento, themes magento, plantillas magento';
			break;
		case 'works':
				$SEO_TITLE = 'Works / Trabajos / Portfolio';
				$SEO_DESCRIPTION = 'Nuestro portfolio de proyectos. Revisa nuestros trabajos anteriores';
				$SEO_KEYWORDS ='programacion php, backoffice, admin, panel, listas de correo, wordpres';
			break;
	case 'email-templates':
				$SEO_TITLE = 'Plantillas Email';
				$SEO_DESCRIPTION = 'Podemos ayudarte a que tus newsletters se vean correctamente desde cualquier plataforma, y no pierdas clientes por falta de velocidad en la carga';
				$SEO_KEYWORDS ='plantillas email, email templates, campaing monitor, mailchimp themes';
			break;
			
		case 'for-agencies':
				$SEO_TITLE = 'Hola Agencias Digitales';
				$SEO_DESCRIPTION = 'Rápidos y eficientes. Nuestros programadores están altamente capacitados y se encuentran en el nivel más alto de la indústria. Son rápidos, eficientes, y hacen del proceso de desarrollo, una ciencia.
No hay equipo de desarrollo más eficiente o con más experiencia.';
				$SEO_KEYWORDS ='agencia web, programadores, agencia web, estudio programación, programadores freelance, programación, creative code';
			break;
			
		
		case 'for-business':
				$SEO_TITLE = 'Hola Empresas';
				$SEO_DESCRIPTION = 'Tanto si usted lleva una pequeña empresa como si forma parte de una gran compañía, podemos asociarnos. Trabajamos con empresas de todo el mundo proporcionando soluciones de desarrollo.';
				$SEO_KEYWORDS ='agencia web, programadores, agencia web, estudio programación, programadores freelance, programación, creative code';
			break;
		case 'for-freelances':
				$SEO_TITLE = 'Hola Freelances';
				$SEO_DESCRIPTION = '¿Quieres más trabajo, clientes más satisfechos, o aumentar tus ingresos? Únete a los miles de trabajadores independientes que trabajan con 96LEVELS';
				$SEO_KEYWORDS ='agencia web, programadores, agencia web, estudio programación, programadores freelance, programación, creative code, codigo socio, socio programador';
			break;		
		
	
						case 'drupal':
				$SEO_TITLE = 'Desarrollo Drupal';
				$SEO_DESCRIPTION = 'Drupal es una de las plataformas CMS más populares, y una solución muy potente a problemas de gestión de contenidos para empresas de todos los niveles. Le ofrecemos también, desarrollo a medida.';
				$SEO_KEYWORDS ='programacion druopal, themes drupal, instalación drupal, mantenimiento drupal';
			break;
			
			case 'wordpress':
				$SEO_TITLE = 'Desarrollo en Wordpress';
				$SEO_DESCRIPTION = 'WordPress es actualmente el CMS más popular del mundo con más de 60 millones de instalaciones y sigue en crecimiento. Hemos implementado Wordpress como solución a infinidad de proyectos blog para pequeñas y medianas empresas.';
				$SEO_KEYWORDS ='wordpress, psd to wordpress, wordpress plantilla, wordpress theme, wordpress programador, wordpress programación, wordpress a medida';
			break;
				
			case 'b2b':
				$SEO_TITLE = 'Programa de Asociados B2B';
				$SEO_DESCRIPTION = 'Nos encantan las colaboraciones continuadas, los amigos que vienen por un wordpress y después se quedan para todo lo demás. Tienes un volumen de trabajo continuado? Podemos ofrecerte las mejores condiciones.';
				$SEO_KEYWORDS ='programación a medida, socio tecnologico, socio programador, socio desarrollo, socio desarrollador, socio codigo,socio programación';
			break;
				
						
				case 'equipos-dedicados':
				$SEO_TITLE = 'Equipos dedicados';
				$SEO_DESCRIPTION = 'Trabajar con 96LEVELS le ahorrará un montón de tiempo, dinero y lo que es más importante, tendrá a su disposición el mejor equipo de desarrollo que pueda encontrar.';
				$SEO_KEYWORDS ='programación a medida, socio tecnologico, socio programador, socio desarrollo, socio desarrollador, socio programación';
			break;
					
		
				case 'faq':
				$SEO_TITLE = 'Preguntas frecuentes';
				$SEO_DESCRIPTION = 'Preguntas y respuestas sobre la mejor forma de llevar a cabo el desarrollo web';
				$SEO_KEYWORDS ='faq, preguntas frecuentes,preguntas programación a medida, respuestas socio tecnologico, socio programador, preguntas faq socio desarrollo, socio desarrollador, socio programación';
			break;
					
		
		
				case 'aplicaciones-moviles':
				$SEO_TITLE = 'Aplicaciones Móviles';
				$SEO_DESCRIPTION = 'Desarrollamos aplicaciones nativas para iPhone, Android y Tablets';
				$SEO_KEYWORDS ='aplicacion iphone, desarrollo iphone, desarrollo android, aplicaciones nativas, desarrollo app, programador app';
			break;
					
		
				case 'arduino':
				$SEO_TITLE = 'Desarrollo C para Arduino';
				$SEO_DESCRIPTION = 'Los primeros en ofrecer desarrollo a medida para Arduino. Podemos escribir el software que necesitas para tu proyecto arduino';
				$SEO_KEYWORDS ='programación arduino, arduino, C arduino, programador freelance Arduino, arduino programador freelance';
			break;


		
		endswitch;
//		$head_footer = $p == 'works' ?false : true;
		$this->view->show($p.'.php',array(
		
		"SEO_TITLE" => $SEO_TITLE,
		"SEO_DESCRIPTION" => $SEO_DESCRIPTION,
		"SEO_KEYWORDS" => $SEO_KEYWORDS
		));
		
	}
}