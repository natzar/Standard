
		<footer>
		
			</footer>
		</div>
	</div>
	
	<script src="public/vendor/jquery-1.11.2/jquery-1.11.2.min.js" type="text/javascript"></script>
   	<script src="public/vendor/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
   	<script src="public/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>   	
   	
		
		
	<script type="text/javascript" src="public/vendor/tiny_mce2/tiny_mce_src.js"></script>
		<script type="text/javascript" src="public/admin/js/functions.js"></script>
		<script src="public/admin/js/pagination3.js"></script>
		
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
