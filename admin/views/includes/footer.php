
		<footer>
		
			</footer>
		</div>
	</div>
		   	<script src="views/vendor/bootstrap/js/bootstrap.js"></script>
	<script>
		var loc = unescape(document.location.href);

		var cadena;
		cadena = loc.substr(loc.indexOf(BASE_URL)+BASE_URL.length);
		var obj = $("a[href='"+cadena+"']");
		obj.parent().addClass("active");


		if (window.chrome){
			$('#errors').html("OK Chrome detectado");
			
		}else{
		
			$('#errors').html("Mejor si usas Chrome <a href='//google.com/chrome'>Descárgalo</a>");
		}
	<? 	echo $HOOK_JS; ?>		</script>
	
	</body>
</html>
