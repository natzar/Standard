<section class="page-heading">
    <div class="title-slide">
        <div class="container">
            <div class="banner-content slide-container">
                <div class="page-title">
                                            <h3>SHOP</h3>                                    </div>
            </div>
        </div>
    </div>
</section>
<div class="page-content">
    <div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li class="home"><a href="<?= $base_url ?> "><i class="fa fa-home"></i> Home</a></li><li><span>//</span></li><li class="category-2"><a href="<?= $LANG ?>/shop"><?= $_TIENDA ?></a></li>    <li><span>//</span></li><li class="category-2"><?= $_CARRITO ?></li>                </ul>
                    

            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-12 align-center center-align">
                    <a class="open-btn" href="<?= $LANG ?>/shop"><?= $_SEGUIR_COMPRANDO ?></a>
                    <br><br>
                    </div>
                    </div>
                    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                            
<article id="post-458" class="post-458 page type-page status-publish hentry">
	<div class="entry-content">
		<div class="woocommerce"><div class="product-cart">
    <div class="cart">
        <form action="http://distritodance.com/wordpress/athlete/home/cart/" method="post">


            <div class="cart-table">
                <div class="row-title">

                    <div class="col-md-5"><span><?= $_PRODUCTO ?></span></div>
                    <div class="col-md-2"><span><?= $_PRECIO ?></span></div>
                    <div class="col-md-2"><span><?= $_CANTIDAD ?></span></div>
                    <div class="col-md-2"><span>Total</span></div>
                                    </div>

                <? foreach ($cart as $item): ?>
                                        <div class="row-item cart_item">


                            <div class="item name-item col-md-5 col-sm-5 col-xs-12">
                                <a href="<?= $LANG ?>/shop/detail/<?= $item[0] ?>"><img width="230" height="230" src="data/img/thumbs/<?= $item[2] ?>" class="attachment-shop_thumbnail wp-post-image"></a>                                <div class="product-info">
                                    <a href="<?= $LANG ?>/shop/detail/<?= $item[0] ?>"><?= $item[1] ?></a>                                </div>
                            </div>


                            <div class="item price-item col-md-2 col-sm-2 col-xs-12">
                        <span class="cart-price">
						<span class="amount"><?= $item[3] ?> &euro;</span>                            </span>
                            </div>

                            <div class="item qty-item col-md-2 col-sm-2 col-xs-12">
                                <div class="quantity add-to-cart">
                                <input type="hidden" name="productId<?= $item[0] ?>" value="<?= $item[0] ?>" class="productId">
    <input type="text" id="qty" step="1" min="0" name="cart[74071a673307ca7459bcf75fbd024e09][qty]" value="<?= $item[4] ?>" title="Qty" class="input-text qty text" size="4">
    <span onclick="increaseQty(this,1)" class="increase-qty"><i class="fa fa-sort-up"></i></span>
    <span onclick="decreaseQty(this,1)" class="decrease-qty"><i class="fa fa-sort-down"></i></span>

</div>
                            </div>

                            <div class="item price-item col-md-2 col-sm-2 col-xs-12">
                        <span class="cart-price">
						<span class="amount"><?= floatval($item[4] * floatval($item[3])) ?> &euro;</span>                        </span>
                            </div>
                            <div class="item delete-item col-md-1 col-sm-1 col-xs-12">
                                <a href="<?= $LANG ?>/shop/deleteproduct/<?= $item[0] ?>" title="Remove this item"><i class="fa fa-times-circle"></i></a>                            </div>
                                
                                
                                
                                

                                
                        </div>
                                <? endforeach; ?>                    
                 
              

                
            </div>

            <div class="clearfix"></div>
            
                      
            
        </form>

        <div class="cart-collaterals row">
            	
    


<div class="cart_totals ">
<div class="cart-total col-md-12">
    <div class="title">Total</div>
	
    <div class="box">

	<table cellspacing="0" width="100%">

		<tbody><tr class="cart-subtotal">
			<th>Subtotal</th>
			<td><span class="amount"><?= $_SESSION['subtotal'] ?> &euro;</span></td>
		</tr>

		
				
					
						
		<tr class="order-total">
			<th><?= $_TAX ?></th>
			<td><strong><span class="amount"><?= $_SESSION['tax'] ?> &euro;</span></strong> </td>
		</tr>
														
		
		<tr class="order-total">
			<th>Total</th>
			<td><strong><span class="amount"><?= $_SESSION['total'] ?> &euro;</span></strong> </td>
		</tr>

	<tr class="order-total">
			<td colspan="4">
			    <div class="title"><?= $_DATOS_ENVIO ?></div>
			</td>
		</tr>

	<tr class="order-total">
			<th><?= $_FORM_NOMBRE_APELLIDOS ?></th>
			<td><input class="form-control" type="text" id="name" name="name"> </td>
		</tr>
	<tr class="order-total">
			<th><?= $_DIRECCION ?></th>
			<td><textarea class="form-control" name="direccion" id="direccion"></textarea> </td>
		</tr>
		<tr class="order-total">
			<th>E-mail</th>
			<td><input type="text" class="form-control" id="email" name="email"></td>
		</tr>
		
		<tr class="order-total">
			<th><?= $_PHONE ?></th>
			<td><input type="text" class="form-control" id="telf" name="telf"> </td>
		</tr>
	</tbody>
	<tfoot>
	
	<tr>
	<td colspan="3">
	<center>
	<?= $form ?></center>
	</td>
	
	<td></td>
	</tr>
	</tfoot>
	</table>
	
	               <center>
</center>

   
   
        </div>

	
	
	
</div>
</div>

        </div>

            </div>
</div></div>
			</div><!-- .entry-content -->
	<footer class="entry-footer ">
			</footer><!-- .entry-footer -->
</article><!-- #post-## -->
                                </div>
                         
    </div>
    </div>
</div>
</div> <!--end .content-wrapper -->
</section><!--end section.page -->



<br>