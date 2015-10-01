<?

// Pekeninos 1.0
// blog Model
// 11-2013
// Beto Ayesa contacto@phpninja.info

class pedidosModel extends ModelBase
{

			
		
		public function add($params){
			 
			 include "lib/vendor/cart.class.php";
			 $cart = new shopping_cart();
			 $cart_array = array("cart" => $cart->bulk_array());
			 $params = array_merge($params,$cart_array);
			 
			 if ($params['name'] != "" and $params['email'] != "" and $params['telf'] !=""){
				$consulta = $this->db->prepare("INSERT INTO pedidos ( `orderNum`, `nombre`, `email`, `telf`, `direccion`, `pedido`, `total`, `pagado`) VALUES ('". $params['Ds_Merchant_Order']."','".$params['name']."','".$params['email']."','".$params['telf']."','".$params['direccion']."','".json_encode($params['cart'])."','".($params['Ds_Merchant_Amount'] / 100)."','0')");
				
				
				$consulta->execute();
			
				
			if ($consulta->rowCount() > 0) return 1;
			else return 0;
			}
			return 0;
		}
		public function getByOrderId($order){
		
		      $consulta = $this->db->prepare("SELECT * from pedidos where orderNum='".$order."'");
		      $consulta->execute();
		      
		      $aux = $consulta->fetchAll();
		      return $aux;
		}
		public function confirmarPago($order){
		
		      $consulta = $this->db->prepare("UPDATE pedidos SET pagado='1' where orderNum='".$order."'");
		      $consulta->execute();
		      if ($consulta->rowCount() > 0)
		      return true;
		      else return false;
		      
		}
		
		
}
