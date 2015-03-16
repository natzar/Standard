	<? include "footer-content.php";?>
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="public/vendor/ie10-viewport-bug-workaround.js"></script>
    
	<!-- jQuery CDN-->
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

	<!-- Bootstrap 3.3.2 js CDN -->
	<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->

	<!-- jQuery local file -->
	<script type="text/javascript" src="public/vendor/jquery-1.11.2/jquery-1.11.2.min.js"></script>
	
	<!-- Bootstrap Local File -->
	<script type="text/javascript" src="public/vendor/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>

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