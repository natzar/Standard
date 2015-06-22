	<? include "footer-content.php";?>
	
	<!-- Some Php Variables to JS -->
	<script type="text/javascript">
		var BASE_URL = '<?= $base_url ?>';
		var LANG = '<?= $_SESSION['lang'] ?>';
	</script>
	
	<!-- Custom Js -->
	<script type="text/javascript" src="public/application.js"></script>

	<!-- Google Analytics - UA Identifier defined at config.php -->
	<script type="text/javascript"> var _gaq = _gaq || [];  _gaq.push(['_setAccount', '<?= $config->get('google_analytics-UA') ?>']);	  _gaq.push(['_trackPageview']);  (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 		    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();	
	
		<?= $HOOK_JS?>	
	</script>
  </body>
</html>