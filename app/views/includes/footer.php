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

	<script language="javascript" type="text/javascript" src="public/views/assets/js/formValidator.js"></script>
<!-- 	<script language="javascript" type="text/javascript" src="public/views/assets/slider/responsiveslides.min.js"></script> -->
	<script language="javascript" type="text/javascript" src="public/views/assets/js/document.ready.js"></script>
	<script language="javascript" type="text/javascript" src="public/views/assets/js/clickcount.js"></script>
	
<script src="public/views/assets/js/jquery.bxslider.min.js"></script>
	<a href="http://www.96levels.com" style="height:0px;width:0px;overflow:hidden;display:block">Consultoría IT</a>

  </body>
</html>