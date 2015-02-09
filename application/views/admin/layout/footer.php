	</div>
</div>
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
		<footer>
		
			</footer>
	
<!-- 		   	<script src="public/vendor/bootstrap/js/bootstrap.js"></script> -->
<script src="public/vendor/foundation-5.4.5/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
		
	<script>
		var loc = unescape(document.location.href);

		var cadena;
		cadena = loc.substr(loc.indexOf(BASE_URL)+BASE_URL.length);
		var obj = $("a[href='"+cadena+"']");
		obj.parent().addClass("active");

	<? 	echo $HOOK_JS; ?>		</script>
	
	</body>
</html>
