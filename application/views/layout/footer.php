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
	
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
	<!-- If there is no engineer in team, comment and add bootstrap as local dependency -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	
	<!-- Custom Js -->
	<script type="text/javascript" src="public/js/application.js"></script>

	<!-- GOOGLE ANALYTICS -->
	<script type="text/javascript">

	</script>
  </body>
</html>