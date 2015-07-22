<?


$x = dirname(__FILE__);


class shopping_cart {
    var $n_p;
    var $total_productos;
    var $subtotal;
    var $tax;
    var $total;
    
    function shopping_cart(){
        if (!isset($_SESSION['num_prod'])):
             $_SESSION['num_prod'] = 0;
             $_SESSION['subtotal'] = 0;
             $_SESSION['tax'] = 0;
             $_SESSION['total'] = 0;
        endif;
            $this->calcular_totales();
            
            $this->n_p = $_SESSION['num_prod'];
        
    }
    function existe_producto($a){
		
        $n_p = $_SESSION['num_prod'];
        $this->n_p = $n_p;
        
        for ($i = 0; $i < $n_p;$i++){
            if (isset($_SESSION['producto'.$i]) and $_SESSION['producto'.$i] != 0){
                if ($_SESSION['producto'.$i] == $a[0] )
                    return $i;
                
            }   
        
        }
        return -1;
    }
    function add_p($a){

        $b = $this->existe_producto($a);
        if ($b < 0):
        	
            $title_sesion = "producto".$_SESSION['num_prod'];
            $_SESSION[$title_sesion] = $a[0];
            $nombre_prod = "nombre".$_SESSION['num_prod'];
        	$_SESSION[$nombre_prod] = $a[1];
            $talla_prod = "talla".$_SESSION['num_prod'];
        	$_SESSION[$talla_prod] = strtoupper($a[2]);
        	 $qty_prod = "qty".$_SESSION['num_prod'];
        	$_SESSION[$qty_prod] = $a[4];        	
            $precio_prod = "precio".$_SESSION['num_prod'];
        	$_SESSION[$precio_prod] = $a[3];
			$_SESSION['num_prod'] = $_SESSION['num_prod'] + 1;	
    	else:
    	   $_SESSION['qty'.$b] += $a[4] ;
    	endif;
    	$this->calcular_totales();
    	        	echo $this->total_productos;    
    }
    
    
    function del_p($id) {
      
    	$n_p = $_SESSION['num_prod'];
//    	$_SESSION['num_prod'] = $_SESSION['num_prod'] - 1;
    	
    	   for ($i = 0; $i < $n_p;$i++){
            if (isset($_SESSION['producto'.$i]) and $_SESSION['producto'.$i] != 0){
                if ($_SESSION['producto'.$i] == $id){
                       $_SESSION['producto'.$i] = 0;

                return true;
                }
            }   
        
        }
		return false;
        
    }
    
    function update_p($a,$b){
    $n_p = $_SESSION['num_prod'];
//    	$_SESSION['num_prod'] = $_SESSION['num_prod'] - 1;
    	
    	   for ($i = 0; $i < $n_p;$i++){
            if (isset($_SESSION['producto'.$i]) and $_SESSION['producto'.$i] != 0){
                if ($_SESSION['producto'.$i] == $a){
                           $_SESSION['qty'.$i] = $b;

                return true;
                }
            }   
        
        }




    }
    function drop(){
    
    	$_SESSION['num_prod'] = 0;
		$this->n_p = 0;
		$this->calcular_totales();

    }

    
    function calcular_totales (){
        $n_p = $_SESSION['num_prod'];
        $this->n_p = $n_p;
        $this->total_productos = 0;
        $subtotal = 0;
        for ($i = 0; $i < $n_p;$i++){
            if (isset($_SESSION['producto'.$i]) and $_SESSION['producto'.$i] != 0){
                $subtotal += $_SESSION['precio'.$i] * $_SESSION['qty'.$i];
                $this->total_productos++;
            }   
        
        }

        $tax_rate = 0.21;
        $this->subtotal = $subtotal;
        $this->tax = $subtotal * $tax_rate;
        $this->total = $this->subtotal + $this->tax;
    
    }
    
    function bulk(){
        return json_from_array($_SESSION);
    
    }
    
    function getQtyProductId($id){
        $n_p = $_SESSION['num_prod'];
        $r = array();
        for ($i = 0; $i < $n_p;$i++){
	    	if ($_SESSION['producto'.$i] == $id)
               return $_SESSION['qty'.$i];
    	     
         }
         return 0;   
    
    }
    
    function bulk_array(){
           $n_p = $_SESSION['num_prod'];
            $r = array();
            for ($i = 0; $i < $n_p;$i++){
            if (isset($_SESSION['producto'.$i]) and $_SESSION['producto'.$i] != 0){
                $aux = array($_SESSION['producto'.$i],$_SESSION['nombre'.$i],$_SESSION['talla'.$i],$_SESSION['precio'.$i],$_SESSION['qty'.$i]);
                $r[] = $aux;
            }   
        
        }
        return $r;

            
    }



}