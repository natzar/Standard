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
 
	var BASE_URL = '<?= $base_url ?>';
	var LANG = '<?= $_SESSION['lang'] ?>';
	</script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script language="javascript" type="text/javascript" src="public/views/assets/js/document.ready.js"></script>

	<a href="http://www.96levels.com" style="height:0px;width:0px;overflow:hidden;display:block">Consultoría IT</a>

  </body>
</html>