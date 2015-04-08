        <!-- Home Slider Container -->
        <div id="home-slider-container">

            <div id="home-slider">
                <div class="home-slider-item">
                    <img src="public/assets/images/demo/slider/slide1.jpg" alt="Slide 1" />
                    <div class="slider-caption">
                        <h2>Somos constructores</h2>
                        <p>
                            Tu satisfacción es nuestro objetivo
                        </p>
                    </div>
                </div>
                <div class="home-slider-item">
                    <img src="public/assets/images/demo/slider/slide3.jpg" alt="Slide 2" />
                    <div class="slider-caption">
                        <h2>Great development.</h2>
                        <p>
                            Natus error sit voluptatem accusantium doloremque.
                        </p>
                    </div>
                </div>
                <div class="home-slider-item">
                    <img src="public/assets/images/demo/slider/slide3-new2.jpg" alt="Slide 3" />
                </div>
            </div>
            <div id="slider-controller" class="content-width">
                <a href="index.html#" id="slider-prev"><i class="icon-angle-left"></i></a>
                <a href="index.html#" id="slider-next"><i class="icon-angle-right"></i></a>
            </div>
            <div id="header-image-shadow" class="content-width"></div>

        </div>
        <!-- End id="home-slider-container" -->

        <div id="content-container" class="content-width">

            <!-- Page Intro -->
            <div id="intro" class="row">
                <div class="large-12 columns">
                    <h1>Bienvenidos a <strong>Maheco.</strong> The modern template.</h1>
                    <div id="intro-line">
                        <hr class="stick" />
                        <hr />
                    </div>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.
                    </p>
                </div>
            </div>

           
            <!-- Portfolio -->
            <div class="row ">
                <div class="large-12 columns no-padding">

                    <div class="portfolio-wrapper">

                        <div class="fixed-box portfolio-item bottom-line">
                            <h2 class="smaller">Our Recent Projects.</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Nunc feugiat mi a tellus at consequat. Proinquam. Etiam ultrices.
                            </p>
                            <h4>Tipos de Obras:</h4>
                            
                               <form id="portfolio-filter-wrapper" class="custom">
                                    
                                     <select name="" id="portfolio-filter" class="medium" onchange="window.location.href='<?= $LANG ?>/<?= $_SERVICIOS ?>/'+this.value">
                            <option value="-1">Selecciona</option>
                            <? foreach ($SIDEDATA['servicios'] as $servicio): ?>
 	                            <option value="<?= $servicio['slug_'.$LANG] ?>"><?= $servicio['title_'.$LANG] ?></option>
    				        <? endforeach; ?>
                            </select>
                            
                                </form>
                                
                           
                           <!--  <a href="portfolio-list.php.html" class="bottom-right angle flat button">View all projects<span class="angle"><i class="icon-angle-right"></i></span></a> -->
                        </div>
    
                <? foreach ($SIDEDATA['servicios'] as $servicio): ?>
                
                        <div class="mockup portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="<?= $_SESSION['lang'] ?>/<?= $_SERVICIOS ?>/<?= $servicio['slug_'.$LANG] ?>"><?= $servicio['title_'.$LANG] ?></a></h3>
                                <ul>
                                <!--
    <li>
                                        <a href="index.html#"><?= $servicio['title_'.$LANG] ?></a>
                                    </li>
-->
                                   <!--
 <li>
                                        <a href="index.html#">Mock-up</a>
                                    </li>
-->
                                </ul>
                            </div>
                            <img src="public/assets/images/demo/portfolio/project-thumb1.jpg" alt="" class="stretch-image" />
                        </div>
                        
                        <? endforeach ?>
                      <!--
  <div class="furniture interior portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php.html">Creamy Living Room</a></h3>
                                <ul>
                                    <li>
                                        <a href="index.html#">Furniture</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Interior</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="public/assets/images/demo/portfolio/project-thumb2.jpg" alt="" class="stretch-image" />
                        </div>
    
                        <div class="room interior portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php.html">New Sense Bathroom</a></h3>
                                <ul>
                                    <li>
                                        <a href="index.html#">Interior</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Room</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="public/assets/images/demo/portfolio/project-thumb3.jpg" alt="" class="stretch-image" />
                        </div>
                        <div class="interior mockup room portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php.html">Open-Style &amp; Modern Living Room</a></h3>
                                <ul>
                                    <li>
                                        <a href="index.html#">Interior</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Mock-up</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Room</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="public/assets/images/demo/portfolio/project-thumb4.jpg" alt="" class="stretch-image" />
                        </div>
                        <div class="interior mockup furniture portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php.html">Comfortable Brown Sofa</a></h3>
                                <ul>
                                    <li>
                                        <a href="index.html#">Furniture</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Interior</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Mock-up</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="public/assets/images/demo/portfolio/project-thumb5.jpg" alt="" class="stretch-image" />
                        </div>
                        <div class="kitchen interior portfolio-item">
                            <div class="portfolio-item-hover">
                                <h3><a href="portfolio-single.php.html">Clean Wooden Kitchen</a></h3>
                                <ul>
                                    <li>
                                        <a href="index.html#">Interior</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">Kitchen</a>
                                    </li>
                                </ul>
                            </div>
                            <img src="public/assets/images/demo/portfolio/project-thumb6.jpg" alt="" class="stretch-image" />
                        </div>
-->
                        
                    </div>
                        
                </div>
            </div>

       
        </div>
        <!-- End id="content-container" -->
