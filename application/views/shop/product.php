      <div class="cart-wishlist">
                <div class="cart-store">
                    <div class="icon-cart">
                    <a class="icon-fa" href="<?= $LANG ?>/shop/checkout">
                        <div class="my-cart">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
<section class="page-heading">
    <div class="title-slide">
        <div class="container">
            <div class="banner-content slide-container">
                <div class="page-title">
                                            <h3><?= $_TIENDA ?></h3>
                                    </div>
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
                    <li class="home"><a href="<?= $base_url ?>"><i class="fa fa-home"></i> Home</a></li><li><span>//</span></li><li class="category-1"><a href="<?= $LANG ?>/shop"><?= $_TIENDA ?></a></li><li><span>//</span></li><li class="category-2"><?= $items['title_'.$LANG] ?></li> 
                    <li style="float:right"><a href="<?= $LANG ?>/shop/checkout"><i class="fa fa-shopping-cart"></i> Ir al carrito</a></li>
                                   </ul>
                    
                    
                    
            </div>
        </div>
    </div>
</div>   

<div class="product-detail">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="product-view">
                                            <div class="product-essential col-md-12">
                                                <div class="product-img-box col-md-6">
                                                    <img alt="" src="data/img/<?= $items['featuredImagen'] ?>" pagespeed_url_hash="2356165598" >
                                                    <div class="more-views">
                                                        <div id="owl-demo" class="owl-carousel owl-theme">
                                                    <!-- <? for($i=1;$i<4;$i++): ?>
                                                    <? if ($items['imagen'.$i] != ""): ?>
                                                            <div class="item"><a href="#"><img alt="" src="data/img/<?= $items['imagen'.$i] ?>"  ></a></div>
                                                            <? endif; ?>
                                                            <? endfor; ?>
                                                            -->
                                                        </div>
                                                                                                                <div class="customNavigation">
                                                            <a class="btn prev"><i class="fa fa-caret-left"></i></a>
                                                            <a class="btn next"><i class="fa fa-caret-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                   <div class="product-shop col-md-6">
                                                    <div class="product-name">
                                                        <h1><?= $items['title_'.$LANG] ?></h1>
                                                    </div>
                                                    <div class="meta-box">
                                                        <div class="price-box">																										
                                                            <span class="special-price"><?= $items['price'] ?> &euro;</span>
                                                            <!-- <span class="old-price">$227.96</span> -->
                                                        </div>
                                                            <div class="add-to-box">
                                              <a class="btn-open" style="width:210px;display:block;float:right" href="<?= $LANG ?>/shop/addtocart/<?= $items['productosId'] ?>">   <em class="fa-icon"><i class="fa fa-shopping-cart"></i></em> <?= $_ADD_TO_CART ?></a>
                                                         
                                                           
                                                        <!-- <a class="link-wishlist"><i class="fa fa-heart"></i></a> -->
                                                    </div>
                                                                                                          </div>
                                                    <div class="clearfix"></div>
                                                
                                                
                    <div class="short-description">
                                                       <?= $items['content_'.$LANG] ?>                                                    </div>
                                                
                                                    

  
                                                </div>
                                            </div>
 <div class="product-related row">
                                                <div class="col-md-12">
                                                    <h3 class="title"><?= $_PRODUCTOS_RELACIONADOS ?></h3>
                                                </div>
                               

    <? foreach ($related as $item): ?>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="product-image-wrapper">
                                                        <div class="product-content">
                                                            <div class="product-image">
                                                                <a href="<?= $LANG ?>/shop/detail/<?= $item['productosId'] ?>"><img alt="" src="data/img/thumbs/<?= $item['featuredImagen'] ?>" ></a>
                                                            </div>
                                                            <div class="info-products">
																<div class="product-name">
																	<a href="<?= $LANG ?>/shop/detail/<?= $item['productosId'] ?>"><?= $item['title_'.$LANG] ?></a>
																	<div class="product-bottom"></div>
																</div>
																<div class="price-box">																										
																	<span class="special-price"><?= $item['price'] ?> &euro;</span>
																	<span class="old-price"></span>&nbsp;
																</div>
															<!--
	<div class="actions">
																	<ul>
																		<li><a href="#"><i class="fa fa-info"></i></a></li>
																		<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
																		<li><a href="#"><i class="fa fa-search"></i></a></li>
																		<li><a href="#"><i class="fa fa-star"></i></a></li>
																	</ul>
																</div>
-->
															</div>
                                                        </div>
                                                    <!--     <a class="arrows quickview" href="#quickview"><i class="fa fa-arrows"></i></a> -->
                                                    </div>
                                                </div>
                                                <? endforeach; ?>
                                            </div>

 <div id="quickview" class="quickview-box container">
                                                <div class="row">
                                                    <div class="quickview-body col-md-9">
                                                        <div class="product-essential">
                                                            <button type="button" class="quickview-close" onclick="$.fn.custombox('close');">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                                                                                  </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                       
                                       <!--
 <div class="product-categories">
                                            <h3 class="title">Product categories</h3>
                                            <ul>
                                                <li><a href="#">Boxing-MMA</a></li>
                                                <li><a href="#">Yoga and Pilates</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Indoor-Cycles</a></li>
                                                <li><a href="#">Cardio</a></li>
                                                <li><a href="#">X-Fit</a></li>
                                            </ul>
                                        </div>                                                                                                                                                                                            

    <div class="product-popular">
                                            <h3 class="title">Popular products</h3>
                                            <ul>
                                                <li>
                                                    <div class="product-image">
                                                        <a href="#"><img alt="" src="data:image/webp;base64,UklGRioDAABXRUJQVlA4IB4DAABwEACdASpLAEsAPm0wkkakIyGhKlYNKIANiWkAE+OVsNvmPpuhjelVkzTyW/Sx3h9w/r6vRhV3OHQNWDKv/b5COcy6FH7LSj7LnZcxHeN0OK7NCPBKxrqUcM/PGzfdVSH5EvEyr1jUByNP+K3ZtaL38PfG+0iwMP00aMRO1Yu4w2HJyiMrojtMs79TcAD+/PQVohF00BueDRba0P059Mf+DmMEHXWqf1lYrDUOTSg6hfqShfWd4uupxQ55vZRfyL/pea87vX8JqSo6MICN7IDUtSMVapdvWrrGxSv2mrOic5mRlaL6gnXl3eZr0PfmuVQjSqw2TrePMnmlQ8rf40sIX4gzzyOGv62Rjk7OfFmRoonJ3SxEksqkxP8zqTMCSTMRIBV3NNCZsFmH3qvzbyVrjbHvI6RP74y0GWY6+QCvC4d/l8NVIlOBZeXY1dTpCU7dfciD/V9lnlSibgDi0y3arR/QVtCEWe+1kQ7Ci5pT0YMGeE7qkwUoHnJfHFgV1QeaSvxVur4seMYXLrrm0l5obObtYDVy9c3Sla2jb9IuN/9BjtdkGSbEGac9B3e3ckbapVCc+4TyRxWsWHRLlE6Jca7Z3Joy9PVTy9o+EYI2+QZbK0mUZBEH2xQ35YOjjCTWyQENE9NYsy6SeyPn9jE+LdHhQLYCcNoC93YDiDjPA9AnzfM5vZLcLDIxHDSMqPw0hXUmk54FjiHa2h2UdX1YW2U9Gg7U5CXyE6q5vzgDV/m3SfCjxjDRYbPzVQeNBr8VXDF0W4VGcyafWAVxK/cviSYvN9n63Jh02v6pQkr6a8AkkbVYHCERjjmivgty2rxfVLHGCtw9gNHFy+KTM9aYx1f05qSYSPTX+JrDFa3ftrYFOzqh8p/fVs59c+Yh9zeNEgBPyk38JBaUZmUdETyr9Tn5VGu/w3FTsbB+b1alq8dlHXsVPfLyPluEc/7IfwK2NX8vMjf3hbt9drjEl/OaFLEl3kMjJL7AyI9LHlgixqykDACm3Qy/IY1dzH7k5y1nrNFxASYi2hehhLHd6P5284R0+/7htwZCN8AAAAA=" pagespeed_url_hash="1662493045" ></a>
                                                    </div>
                                                    <div class="info-products">
                                                        <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                                        <div class="price-box">																										
                                                            <span class="regular-price">$200.60</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-image">
                                                        <a href="#"><img alt="" src="data:image/webp;base64,UklGRioDAABXRUJQVlA4IB4DAABwEACdASpLAEsAPm0wkkakIyGhKlYNKIANiWkAE+OVsNvmPpuhjelVkzTyW/Sx3h9w/r6vRhV3OHQNWDKv/b5COcy6FH7LSj7LnZcxHeN0OK7NCPBKxrqUcM/PGzfdVSH5EvEyr1jUByNP+K3ZtaL38PfG+0iwMP00aMRO1Yu4w2HJyiMrojtMs79TcAD+/PQVohF00BueDRba0P059Mf+DmMEHXWqf1lYrDUOTSg6hfqShfWd4uupxQ55vZRfyL/pea87vX8JqSo6MICN7IDUtSMVapdvWrrGxSv2mrOic5mRlaL6gnXl3eZr0PfmuVQjSqw2TrePMnmlQ8rf40sIX4gzzyOGv62Rjk7OfFmRoonJ3SxEksqkxP8zqTMCSTMRIBV3NNCZsFmH3qvzbyVrjbHvI6RP74y0GWY6+QCvC4d/l8NVIlOBZeXY1dTpCU7dfciD/V9lnlSibgDi0y3arR/QVtCEWe+1kQ7Ci5pT0YMGeE7qkwUoHnJfHFgV1QeaSvxVur4seMYXLrrm0l5obObtYDVy9c3Sla2jb9IuN/9BjtdkGSbEGac9B3e3ckbapVCc+4TyRxWsWHRLlE6Jca7Z3Joy9PVTy9o+EYI2+QZbK0mUZBEH2xQ35YOjjCTWyQENE9NYsy6SeyPn9jE+LdHhQLYCcNoC93YDiDjPA9AnzfM5vZLcLDIxHDSMqPw0hXUmk54FjiHa2h2UdX1YW2U9Gg7U5CXyE6q5vzgDV/m3SfCjxjDRYbPzVQeNBr8VXDF0W4VGcyafWAVxK/cviSYvN9n63Jh02v6pQkr6a8AkkbVYHCERjjmivgty2rxfVLHGCtw9gNHFy+KTM9aYx1f05qSYSPTX+JrDFa3ftrYFOzqh8p/fVs59c+Yh9zeNEgBPyk38JBaUZmUdETyr9Tn5VGu/w3FTsbB+b1alq8dlHXsVPfLyPluEc/7IfwK2NX8vMjf3hbt9drjEl/OaFLEl3kMjJL7AyI9LHlgixqykDACm3Qy/IY1dzH7k5y1nrNFxASYi2hehhLHd6P5284R0+/7htwZCN8AAAAA=" pagespeed_url_hash="1662493045" ></a>
                                                    </div>
                                                    <div class="info-products">
                                                        <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                                        <div class="price-box">																										
                                                            <span class="regular-price">$200.60</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-image">
                                                        <a href="#"><img alt="" src="data:image/webp;base64,UklGRioDAABXRUJQVlA4IB4DAABwEACdASpLAEsAPm0wkkakIyGhKlYNKIANiWkAE+OVsNvmPpuhjelVkzTyW/Sx3h9w/r6vRhV3OHQNWDKv/b5COcy6FH7LSj7LnZcxHeN0OK7NCPBKxrqUcM/PGzfdVSH5EvEyr1jUByNP+K3ZtaL38PfG+0iwMP00aMRO1Yu4w2HJyiMrojtMs79TcAD+/PQVohF00BueDRba0P059Mf+DmMEHXWqf1lYrDUOTSg6hfqShfWd4uupxQ55vZRfyL/pea87vX8JqSo6MICN7IDUtSMVapdvWrrGxSv2mrOic5mRlaL6gnXl3eZr0PfmuVQjSqw2TrePMnmlQ8rf40sIX4gzzyOGv62Rjk7OfFmRoonJ3SxEksqkxP8zqTMCSTMRIBV3NNCZsFmH3qvzbyVrjbHvI6RP74y0GWY6+QCvC4d/l8NVIlOBZeXY1dTpCU7dfciD/V9lnlSibgDi0y3arR/QVtCEWe+1kQ7Ci5pT0YMGeE7qkwUoHnJfHFgV1QeaSvxVur4seMYXLrrm0l5obObtYDVy9c3Sla2jb9IuN/9BjtdkGSbEGac9B3e3ckbapVCc+4TyRxWsWHRLlE6Jca7Z3Joy9PVTy9o+EYI2+QZbK0mUZBEH2xQ35YOjjCTWyQENE9NYsy6SeyPn9jE+LdHhQLYCcNoC93YDiDjPA9AnzfM5vZLcLDIxHDSMqPw0hXUmk54FjiHa2h2UdX1YW2U9Gg7U5CXyE6q5vzgDV/m3SfCjxjDRYbPzVQeNBr8VXDF0W4VGcyafWAVxK/cviSYvN9n63Jh02v6pQkr6a8AkkbVYHCERjjmivgty2rxfVLHGCtw9gNHFy+KTM9aYx1f05qSYSPTX+JrDFa3ftrYFOzqh8p/fVs59c+Yh9zeNEgBPyk38JBaUZmUdETyr9Tn5VGu/w3FTsbB+b1alq8dlHXsVPfLyPluEc/7IfwK2NX8vMjf3hbt9drjEl/OaFLEl3kMjJL7AyI9LHlgixqykDACm3Qy/IY1dzH7k5y1nrNFxASYi2hehhLHd6P5284R0+/7htwZCN8AAAAA=" pagespeed_url_hash="1662493045" ></a>
                                                    </div>
                                                    <div class="info-products">
                                                        <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                                        <div class="price-box">																										
                                                            <span class="regular-price">$200.60</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-image">
                                                        <a href="#"><img alt="" src="data:image/webp;base64,UklGRioDAABXRUJQVlA4IB4DAABwEACdASpLAEsAPm0wkkakIyGhKlYNKIANiWkAE+OVsNvmPpuhjelVkzTyW/Sx3h9w/r6vRhV3OHQNWDKv/b5COcy6FH7LSj7LnZcxHeN0OK7NCPBKxrqUcM/PGzfdVSH5EvEyr1jUByNP+K3ZtaL38PfG+0iwMP00aMRO1Yu4w2HJyiMrojtMs79TcAD+/PQVohF00BueDRba0P059Mf+DmMEHXWqf1lYrDUOTSg6hfqShfWd4uupxQ55vZRfyL/pea87vX8JqSo6MICN7IDUtSMVapdvWrrGxSv2mrOic5mRlaL6gnXl3eZr0PfmuVQjSqw2TrePMnmlQ8rf40sIX4gzzyOGv62Rjk7OfFmRoonJ3SxEksqkxP8zqTMCSTMRIBV3NNCZsFmH3qvzbyVrjbHvI6RP74y0GWY6+QCvC4d/l8NVIlOBZeXY1dTpCU7dfciD/V9lnlSibgDi0y3arR/QVtCEWe+1kQ7Ci5pT0YMGeE7qkwUoHnJfHFgV1QeaSvxVur4seMYXLrrm0l5obObtYDVy9c3Sla2jb9IuN/9BjtdkGSbEGac9B3e3ckbapVCc+4TyRxWsWHRLlE6Jca7Z3Joy9PVTy9o+EYI2+QZbK0mUZBEH2xQ35YOjjCTWyQENE9NYsy6SeyPn9jE+LdHhQLYCcNoC93YDiDjPA9AnzfM5vZLcLDIxHDSMqPw0hXUmk54FjiHa2h2UdX1YW2U9Gg7U5CXyE6q5vzgDV/m3SfCjxjDRYbPzVQeNBr8VXDF0W4VGcyafWAVxK/cviSYvN9n63Jh02v6pQkr6a8AkkbVYHCERjjmivgty2rxfVLHGCtw9gNHFy+KTM9aYx1f05qSYSPTX+JrDFa3ftrYFOzqh8p/fVs59c+Yh9zeNEgBPyk38JBaUZmUdETyr9Tn5VGu/w3FTsbB+b1alq8dlHXsVPfLyPluEc/7IfwK2NX8vMjf3hbt9drjEl/OaFLEl3kMjJL7AyI9LHlgixqykDACm3Qy/IY1dzH7k5y1nrNFxASYi2hehhLHd6P5284R0+/7htwZCN8AAAAA=" pagespeed_url_hash="1662493045" ></a>
                                                    </div>
                                                    <div class="info-products">
                                                        <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                                        <div class="price-box">																										
                                                            <span class="regular-price">$200.60</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-image">
                                                        <a href="#"><img alt="" src="data:image/webp;base64,UklGRioDAABXRUJQVlA4IB4DAABwEACdASpLAEsAPm0wkkakIyGhKlYNKIANiWkAE+OVsNvmPpuhjelVkzTyW/Sx3h9w/r6vRhV3OHQNWDKv/b5COcy6FH7LSj7LnZcxHeN0OK7NCPBKxrqUcM/PGzfdVSH5EvEyr1jUByNP+K3ZtaL38PfG+0iwMP00aMRO1Yu4w2HJyiMrojtMs79TcAD+/PQVohF00BueDRba0P059Mf+DmMEHXWqf1lYrDUOTSg6hfqShfWd4uupxQ55vZRfyL/pea87vX8JqSo6MICN7IDUtSMVapdvWrrGxSv2mrOic5mRlaL6gnXl3eZr0PfmuVQjSqw2TrePMnmlQ8rf40sIX4gzzyOGv62Rjk7OfFmRoonJ3SxEksqkxP8zqTMCSTMRIBV3NNCZsFmH3qvzbyVrjbHvI6RP74y0GWY6+QCvC4d/l8NVIlOBZeXY1dTpCU7dfciD/V9lnlSibgDi0y3arR/QVtCEWe+1kQ7Ci5pT0YMGeE7qkwUoHnJfHFgV1QeaSvxVur4seMYXLrrm0l5obObtYDVy9c3Sla2jb9IuN/9BjtdkGSbEGac9B3e3ckbapVCc+4TyRxWsWHRLlE6Jca7Z3Joy9PVTy9o+EYI2+QZbK0mUZBEH2xQ35YOjjCTWyQENE9NYsy6SeyPn9jE+LdHhQLYCcNoC93YDiDjPA9AnzfM5vZLcLDIxHDSMqPw0hXUmk54FjiHa2h2UdX1YW2U9Gg7U5CXyE6q5vzgDV/m3SfCjxjDRYbPzVQeNBr8VXDF0W4VGcyafWAVxK/cviSYvN9n63Jh02v6pQkr6a8AkkbVYHCERjjmivgty2rxfVLHGCtw9gNHFy+KTM9aYx1f05qSYSPTX+JrDFa3ftrYFOzqh8p/fVs59c+Yh9zeNEgBPyk38JBaUZmUdETyr9Tn5VGu/w3FTsbB+b1alq8dlHXsVPfLyPluEc/7IfwK2NX8vMjf3hbt9drjEl/OaFLEl3kMjJL7AyI9LHlgixqykDACm3Qy/IY1dzH7k5y1nrNFxASYi2hehhLHd6P5284R0+/7htwZCN8AAAAA=" pagespeed_url_hash="1662493045" ></a>
                                                    </div>
                                                    <div class="info-products">
                                                        <div class="product-name">Lorem ipsum dolor sit amet consectetur</div>
                                                        <div class="price-box">																										
                                                            <span class="regular-price">$200.60</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>                                                
