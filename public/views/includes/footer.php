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
	<script language="javascript" type="text/javascript" src="public/views/assets/js/formValidator.js"></script>
  </body>
</html>