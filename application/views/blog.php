
<section class="page-heading">
    <div class="title-slide">
        <div class="container">
            <div class="banner-content slide-container">
                <div class="page-title">
                                        <h3>BLOG</h3>
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
                    <li class="home"><a href="<?= $base_url ?>"><i class="fa fa-home"></i> Home</a></li><li><span>//</span></li><li class="category-1">BLOG</li> <?
                    if (count($items) < 2 and isset($items[0]) and $items[0]['title_es'] != ''): ?>
<li><span>//</span></li><li class="category-1"><?= $items[0]['title_es'] ?></li> 
                    
                    <? endif; ?>               </ul>
            </div>
        </div>
    </div>
</div>
    <div class="main-content our-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 ">
                
                <? 

                foreach ($items as $item): ?>
                                                                <article id="post-1094" class="post-1094 post type-post status-publish format-video hentry category-success-stories tag-weight-loss post_format-post-format-video">
    <div class="blog-page">
        <div class="blog-listing">
            <div class="blog-item">
                <div class="img-blog">
                    <p><img src="data/img/<?= $item['imagen'] ?>"></p>
                </div>
                <div class="blog-main">
                                      
                                        <div class="blog-content">
                    <div class="blog-header">
                                                <div class="blog-title-top">
                            <?= Date("d/m/Y",strtotime($item['fecha'])) ?></div>
                                                <div class="blog-title">
                            <a href="<?= $LANG ?>/blog/<?= $item['slug_es'] ?>"><?= $item['title_es'] ?></a>
                        </div>
						                        </div>
                        <div class="blog-text">

                            <? if (count($items) < 2): ?>
                            <p><?= stripslashes($item['content_es']) ?></p>  
                            <? else: ?>
                            <p><?= truncate(stripslashes(strip_tags($item['content_es'])),300) ?>...</p>
                            <? endif; ?>
<!--                      <p>       <a href="<?= $LANG ?>/blog/<?= $item['slug_es'] ?>"><?= $_READMORE ?></a></p> -->

                        </div>

                    </div>
                </div>
                <!--
                <footer class="entry-footer">
                    <span class="tags-links">Tagged <a href="http://inwavethemes.com/wordpress/athlete/home/tag/weight-loss/" rel="tag">Weight loss</a></span><span class="comments-link"><a href="http://inwavethemes.com/wordpress/athlete/home/test-format-video/#respond">Leave a comment</a></span>                </footer>
                 .entry-footer -->
            </div>
        </div>
    </div>
</article>
<? endforeach; ?>
    <!--
      <div class="pages">
    <ul class='page-numbers'>
	<li><a class="next page-numbers" href="page/2/index.html">Next &raquo;</a></li>
</ul>
</div>    
-->                                </div>
                                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 pull-right">
                        
<div id="secondary" class="widget-area" role="complementary">
	<aside id="categories-2" class="widget widget_categories"><h3 class="widget-title"><span><?= $_ULTIMOSPOSTS ?></span></h3>		<ul>
	<? 
	foreach($ultimosposts as $item): ?>
	<li class="cat-item cat-item-8"> <a href="<?= $LANG ?>/blog/<?= $item['slug_es'] ?>"><?= $item['title_es'] ?></a>
</li>
<? endforeach; ?>
			</ul>
</aside>
</div><!-- #secondary -->
                    </div>
                            </div>
        </div>
    </div>
</div>
</div> <!--end .content-wrapper -->
</section>