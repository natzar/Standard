	<? include "footer-content.php";?>
	
	<? if ($config->get('developer_mode')==1): 
		echo '<div class="well">';
		echo 'Developer_mode: ON<hr>';
		echo '<strong>GETT</strong><br>';
		print_r(gett());
		echo '<br><strong>SESSION</strong><br>';
		print_r($_SESSION);
		echo '</div>';
	endif;
	?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45888490-1', 'pekeninos.com');
  ga('send', 'pageview');

	var BASE_URL = '<?= $base_url ?>';
	</script>

	<script language="javascript" type="text/javascript" src="public/views/assets/js/formValidator.js"></script>
	<script language="javascript" type="text/javascript" src="public/views/assets/js/document.ready.js"></script>
  </body>
</html>