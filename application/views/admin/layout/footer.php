

<? 


if ($config->get('developer_mode')==1): 
		echo '<div class="well">';
		echo 'Developer_mode: ON<hr>';
		echo '<strong>GETT</strong><br>';
		print_r(gett());
		echo '<br><strong>SESSION</strong><br>';
		print_r($_SESSION);
		echo '</div>';
	endif;

	?>


		</div>
</div>
		<footer>
		
			</footer>
	
	
	

		

	
<!-- END CONTAINER -->


<!-- BEGIN CORE JS FRAMEWORK-->
<script src="public/admin/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="public/admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>    
<script src="public/admin/assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="public/admin/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript" ></script>
<script src="public/admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/ios-switch/ios7-switch.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/boostrap-clockpicker/bootstrap-clockpicker.min.js" type="text/javascript"></script>
<script src="public/admin/assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>

<script type="text/javascript" src="public/admin/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="public/admin/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="public/admin/assets/js/datatables.js" type="text/javascript"></script>
<script src="public/admin/assets/js/form_elements.js" type="text/javascript"></script>

<!-- BEGIN CORE TEMPLATE JS -->

<script src="public/admin/assets/js/core.js" type="text/javascript"></script>
<script src="public/admin/assets/js/chat.js" type="text/javascript"></script>
<script src="public/admin/assets/js/demo.js" type="text/javascript"></script>

<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->

<script type="text/javascript" src="public/admin/assets/adminFunctions.js"></script>
	<script>
		var loc = unescape(document.location.href);

		var cadena;
		cadena = loc.substr(loc.indexOf(BASE_URL)+BASE_URL.length);
		var obj = $("a[href='"+cadena+"']");
		obj.parent().addClass("active");

(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);

$('#search_pagination').on('change', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});


	<? 	echo $HOOK_JS; ?>		</script>
	
</body>
</html>