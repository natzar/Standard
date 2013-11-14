
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




	</div> <!-- #content -->	
	
</div> <!-- #wrapper -->

<footer id="footer">
	<ul class="nav pull-right">
		<li>
			Copyright &copy; <?= Date("Y") ?>, 96 LEVELS. Licensed to <?= $base_title ?>
		</li>
	</ul>
</footer>

<script src="views/js/libs/jquery-1.9.1.min.js"></script>
<script src="views/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
<script src="views/js/libs/bootstrap.min.js"></script>

<script src="views/js/plugins/icheck/jquery.icheck.min.js"></script>
<script src="views/js/plugins/select2/select2.js"></script>
<script src="views/js/plugins/tableCheckable/jquery.tableCheckable.js"></script>

<script src="views/js/App.js"></script>

<script src="views/js/libs/raphael-2.1.2.min.js"></script>
<script src="views/js/plugins/morris/morris.min.js"></script>


<script src="views/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<script src="views/js/plugins/fullcalendar/fullcalendar.min.js"></script>



<!--
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.core.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.widget.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.mouse.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.datepicker.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.sortable.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/i18n/jquery.ui.datepicker-es.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/jquery.timepicker.js"></script>
-->
		
	<script type="text/javascript" src="views/vendor/tiny_mce2/tiny_mce_src.js"></script>
	
		<script type="text/javascript" src="views/js/functions.js"></script>
		
		
	<script>
		var loc = unescape(document.location.href);

		var cadena;
		cadena = loc.substr(loc.indexOf(BASE_URL)+BASE_URL.length);
		var obj = $("a[href='"+cadena+"']");
		obj.parent().addClass("active");

	<? 	echo $HOOK_JS; ?>		</script>
	
</body>
</html>
