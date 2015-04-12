	<? include "footer-content.php";?>
	
   <script src="public/assets/js/jquery-1.9.1.min.js"></script>
<script src="public/assets/js/jquery-ui-1.10.2.custom.min.js"></script>
<script src="public/assets/js/foundation.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false&v=3.5"></script>
<script src="public/assets/js/jquery.backstretch.min.js"></script>
<script src="public/assets/js/superfish.js"></script>
<script src="public/assets/js/supersubs.js"></script>
<script src="public/assets/js/jquery.hoverIntent.minified.js"></script>
<script src="public/assets/js/jquery.fancybox-1.3.4.js"></script>
<script src="public/assets/js/jquery.transit.min.js"></script>
<script src="public/assets/js/jquery.touchSwipe.min.js"></script>
<script src="public/assets/js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="public/assets/js/jquery.easing.1.3.js"></script>
<script src="public/assets/js/jquery.isotope.min.js"></script>
<script src="public/assets/js/jquery.hoverdir.js"></script>
<script src="public/assets/js/jquery.validationEngine-en.js"></script>
<script src="public/assets/js/jquery.validationEngine.js"></script>
<script src="public/assets/js/jquery.scrollUp.min.js"></script>
<script src="public/assets/js/archtek-v=2.js"></script>
    </body>
</html>

	<!-- Some Php Variables to JS -->
	<script type="text/javascript">
		var BASE_URL = '<?= $base_url ?>';
		var LANG = '<?= $_SESSION['lang'] ?>';
	</script>
	
	<!-- Custom Js -->
	<script type="text/javascript" src="public/application.js"></script>

	<!-- Google Analytics - UA Identifier defined at config.php -->
	<script type="text/javascript"> var _gaq = _gaq || [];  _gaq.push(['_setAccount', '<?= $config->get('google_analytics-UA') ?>']);	  _gaq.push(['_trackPageview']);  (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 		    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();		
	</script>
  </body>
</html>