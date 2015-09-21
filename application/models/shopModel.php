<?

class shopModel extends ModelBase
{

    
    function getProducts(){

			$consulta = $this->db->prepare("SELECT * FROM productos");
			$consulta->execute();
			$aux2 = $consulta->fetchAll();
    		return $aux2;
    }
    
    function getProductsByCategory($catId){
            $consulta = $this->db->prepare("SELECT * FROM shop where shopCategoryId = :catid");
            $consulta->bindParam(':catid',$catId);
			$consulta->execute();
			$aux2 = $consulta->fetchAll();
    		return $aux2;
    
    }
    function getProduct($pId){
            $consulta = $this->db->prepare("SELECT * FROM shop where shopId = :pid limit 1");
            $consulta->bindParam(':pid',$catId);
			$consulta->execute();
			$aux2 = $consulta->fetch();
    		return $aux2;
    }
    function cart(){
    
    
    }
    
    
    function checkout(){
    
    }
    
    function confirmPayment(){
    
    }
}