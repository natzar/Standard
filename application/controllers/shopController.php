<?

class shopController extends ControllerBase{
    var $cart;
    function index(){
        include "application/models/shopModel.php";
        $shop = new shopModel();        
        $items = $shop->getProducts();
        $data = array(
        "items" => $items
        );
        $this->view->show('shop/shop.php',$data);
    }
    
    function detail(){
        include "application/models/productosModel.php";
        $shop = new productosModel();        
        $params = gett();
        $items = $shop->getByProductosId($params['a']);
        $related = $shop->getRelatedProducts($params['a']);
        
        $data = array(
        "items" => $items,
        "SEO_TITLE" => $items['title_'.$_SESSION['lang']],
        "related" => $related,
        "popular" => array()
        );
        $this->view->show('shop/product.php',$data);
    }
    
        function category(){
        include "application/models/shopModel.php";
        $shop = new shopModel();    
        $items = $shop->getProductsByCategory($params['a']);
        $data = array(
        "items" => $items
        );
        $this->view->show('shop.php',$data);
    }
    
    function addtocart(){
        $params = gett();
        include "application/models/productosModel.php";
        $shop = new productosModel();
        $p = $shop->getByProductosId($params['a']);
        include "lib/vendor/cart.class.php";
        $this->cart = new  shopping_cart();

        
        $this->cart->add_p(array($p['productosId'],$p['title_'.$_SESSION['lang']],$p['featuredImagen'],$p['price'],1));
        return $this->checkout();
    }
    function decreaseproduct(){
         include_once "lib/vendor/cart.class.php";
$params = gett();
$pId = $params['a'];
        $this->cart = new  shopping_cart();
        $this->cart->decrease_p($pId);
        return $this->checkout();
    }
    function deleteproduct(){
    $params = gett();
         include "lib/vendor/cart.class.php";
        $this->cart = new  shopping_cart();
        
        $this->cart->del_p($params['a']);
        return $this->checkout();
    }

    function tpvok(){
            $this->view->show('shop/tpvok.php',array());
    }
    
    function tpvko(){
            $this->view->show('shop/tpvko.php',array());    
    }
    function tpvNotificacion(){
            // respuesta asincrona TPV
            echo '1';
    }
    
    function cart(){
        $cart = $_SESSION['cart'];
        
        $items = $cart;
        $data = array(
        
        "items" => $items
        );
        $this->view->show('shop/cart.php',$data);
    }
    
    function checkout(){
        include "lib/vendor/sermepa.php";                
                include_once "lib/vendor/cart.class.php";
                if (!isset($this->cart )){
        $this->cart = new  shopping_cart();
        }

        try{
           $pasarela = new Sermepa();
           $pasarela->importe(floatval($_SESSION['total'])*100);
           $pasarela->pedido(date('ymdHis'));  //generamos el número de recibo usando date por ejemplo
           $pasarela->clave('qwertyasdf0123456789');    //clave asignada por el banco.
           $pasarela->codigofuc('333926590');
           $pasarela->producto_descripcion('Cesta Tienda Online Distrito Dance');
           $pasarela->titular('Distrito Dance');
           $pasarela->nombre_comercio('Distrito Dance');
           $pasarela->url_notificacion('http://www.distritodance.com/es/shop/tpvNotificacion'); 
           $pasarela->url_ok('http://www.distritodance.com/es/shop/tpvok'); 
           $pasarela->url_ko('http://www.distritodance.com/es/shop/tpvko'); 
           $pasarela->firma();
           $pasarela->submit('nombre_submit','Proceder al pago');
        }
        catch(Exception $e){
            echo $e->getMessage();   
        }
       
        $formulario = $pasarela->create_form();     
        $items = array();
        $data = array(
            "form" => $formulario,
            "SEO_TITLE" => "Checkout",
            "cart" => $this->cart->bulk_array()
        );
        
        $this->view->show('shop/checkout.php',$data);                
    }
}