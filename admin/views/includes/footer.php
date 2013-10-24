
		<footer>
		
			</footer>
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
		   	<script src="views/vendor/bootstrap/js/bootstrap.js"></script>
	<script>
		var loc = unescape(document.location.href);

		var cadena;
		cadena = loc.substr(loc.indexOf(BASE_URL)+BASE_URL.length);
		var obj = $("a[href='"+cadena+"']");
		obj.parent().addClass("active");

	<? 	echo $HOOK_JS; ?>		</script>
	
	</body>
</html>
