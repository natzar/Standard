 <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://nano.server281.com/wp-content/uploads/2013/06/bigstock-Human-Cells-4863417.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Idonea Bioservices</h1>
              <p class="lead">High-quality and timely key biological services. Either establishing a new Flp-In ready cell line, mass produce difficult to express membrane proteins or asses the suppressive function of MDSC and Treg, we can do it!</p>
              

            </div>
          </div>
        </div>
        
      </div>
      <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> -->
    </div>

    <!-- Page Content -->
    <div class="container">

       
       
       


        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">

                &nbsp;
       
                
            </div>
        </div>
        <!-- /.row -->

        <!-- Products Row -->
        <div class="row">
        
        <? foreach ($PRODUCTS as $k => $p): ?>
            <div class="col-md-3 img-portfolio">
                <a href="product.php?product=<?= $k ?>">
                    <img class="img-responsive img-hover" src="<?= $p['img'] ?>" alt="">
                </a>
                <h3 class="text-center">
                    <a href="product.php?product=<?= $k ?>"><?= $p['title'] ?></a>
                </h3>
              <!--   <p><?= $p['text'] ?></p> -->
            </div>
            
            <? endforeach; ?>
            
            
        </div>
        <!-- /.row -->

        <!-- Products Row -->
      <!--
  <div class="row">
            <div class="col-md-4 img-portfolio">
                <a href="product.php">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="product.php">Product Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="product.php">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="product.php">Product Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="product.php">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="product.php">Product Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>

-->
        <!-- Products Row -->
       <!--
 <div class="row">
            <div class="col-md-4 img-portfolio">
                <a href="product.php">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="product.php">Product Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="product.php">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="product.php">Product Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
            <div class="col-md-4 img-portfolio">
                <a href="product.php">
                    <img class="img-responsive img-hover" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="product.php">Product Name</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
        </div>
-->
        <!-- /.row -->