<!--End Header--><section class="page-heading">
	<div class="title-slide">
		<div class="container">
				<div class="banner-content slide-container">									
					<div class="page-title">
                                                    <h3><?= $_CONTACTO ?></h3>                        					</div>
				</div>
		</div>
	</div>
</section>
<div class="page-content inner-page-full">
    <div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li class="home"><a href="<?= $base_url ?>"><i class="fa fa-home"></i> Home</a></li><li><span>//</span></li><li class="category-2"><?= $_CONTACTO ?></li>                </ul>
            </div>
        </div>
    </div>
</div>

            
<article id="post-567" class="post-567 page type-page status-publish hentry">
	<div class="entry-content">
		<div  class="vc_row wpb_row vc_row-fluid our-team-page vc_custom_1427878376319"><div class="container"><div class="row">
	<div class="vc_col-sm-4 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class="headding-title "><h4><?= $_DIRECCION ?></h4><div class="headding-bottom"></div></div><ul class="headding-content "><li class=""><div class="icon-headding"><i class="fa fa-home"></i></div><div class="cont-headding"><h5> Distrito Dance</h5><p>Ronda Ponent, 24. Sabadell, Barcelona.<br> +34 937 68 52 52</p>
			
			<p>E-MAIL: <a href="mailto:<?= $config->get('base_email') ?>"><?= $config->get('base_email') ?></a></p></div></li></ul>
		</div> 
	</div> 

	<div class="vc_col-sm-8 wpb_column vc_column_container ">
		<div class="wpb_wrapper">
			<div class="headding-title "><h4><?= $_CONTACTO_TITLE ?></h4><div class="headding-bottom"></div></div>
	<div class="wpb_text_column wpb_content_element  headding-content">
		<div class="wpb_wrapper">
			<p><?= $_CONTACTO_DESC ?></p>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2986.107472361396!2d2.0999073!3d41.54527019999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a494f93cac7023%3A0xbafdd926419e8774!2sDistrito+Dance%2C+Ronda+de+Ponent%2C+24%2C+08201+Sabadell%2C+Barcelona!5e0!3m2!1ses!2ses!4v1441896095896" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

              
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="contact">
                               
                                <h4><?= $_CONTACTFORM ?></h4>
                                <div class="headding-bottom"></div>
                                <form method="post" action="<?= $LANG ?>/contacto/sendEmail" name="contact-form" class="main-contact-form row" id="main-contact-form">
                                                                            <div class="form-group col-md-12">
                                            <input type="text" placeholder="<?= $_NAME ?>" required="required" class="control" name="name">
                                        </div>
                                                                                <div class="form-group col-md-12">
                                            <input type="email" placeholder="Email" required="required" class="control" name="email">
                                        </div>
                                                                                <div class="form-group col-md-12">
                                            <textarea placeholder="<?= $_FORM_MENSAJE ?>" rows="8" class="control" required="required" id="message" name="message"></textarea>
                                        </div>  
                                                                        <div class="form-group form-submit col-md-12">
                                        <input name="action" type="hidden" value="sendMessageContact">
                                        <center>
                                        <button class="btn-open" name="submit" type="submit"><?= $_SUBMIT ?></button></center>
                                    </div>
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
		</div> 
	</div> 
</div></div>
</div></div></div>
			</div><!-- .entry-content -->
	<footer class="entry-footer ">
			</footer><!-- .entry-footer -->
</article><!-- #post-## -->
    </div>
</div> <!--end .content-wrapper -->
</section><!--end section.page -->
