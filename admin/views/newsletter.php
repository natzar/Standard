<h2>Emails a  Clientes</h2>
<form action="newsletter/sendNewsletter" method="post">
<strong>Destinatarios</strong> <input type="checkbox" name="selectall" id="selectall"> Seleccionar todos<br>

<? foreach($clientes as $c): ?>

	<input type="checkbox" class="form-control" name="destinatarios[]" value="<?= $c[4] ?>"> <?= $c[0] ?> 

<? endforeach; ?>
<br><br>
<strong>Productos</strong>  <input type="checkbox" name="selectall2" id="selectall2"> Seleccionar todos<br>
<? foreach($productos as $c): ?>

	<input type="checkbox" class="form-control"  name="productos[]" value="<?= $c['productosId'] ?>"> <?= $c[0] ?> 

<? endforeach; ?>
<hr>
		<strong>Asunto</strong><br />
		<input name="emailSubject" value="[Luis Km.0] Lista Productos <?= Date("d-m-Y") ?>"  style="min-width:600px;" type="text" size="32" />
		<br /><br />
		Texto<br />
		<textarea name="emailBody" style="min-width:600px;height:500px">Hola [NOMBRE],  

Estos son los productos y ofertas disponibles esta semana:
Recomiendo los Ravioles, ahora que ya llega el frío seguro que apetece.

[LISTA DE PRODUCTOS]

Como siempre, estos son todos productos ecológicos y de proximidad, 
estos ya los estoy vendiendo con buena aceptación; es todo de la zona del Vallés oriental, Granollers, Mollet y comarca, espero sea de tu agrado.

No dudes en llamarme para consultarme sobre otros productos.

Otra cosa importante, estoy a punto de comenzar a trabajar un campo para verduras y miniverduras, te agradezco si me dices de cuales productos crees pueden ser más interesantes para cultivar, y también para ofreceros, 

Un abrazo,

Luis Figueroa
+34 
luishfigueroa@yahoo.es
		</textarea>
		<br />
		<div class="alert alert-warning">* Al hacer click se enviará el email con el texto y la lista de productos a los destinatarios.</div><br>
		Puede tardar hasta 20 segundos, sólo hacer click 1 vez y esperar
		<input name="send" type="submit" value="Enviar" />
		</form>
		
		<script>
		$('#selectall').click(function(){
						$('input[name="destinatarios[]"]').each(function(){
						if ($(this).attr("checked") == "checked")
							$(this).removeAttr("checked");
						else 
							$(this).attr("checked","checked");
				});
		});
		
		$('#selectall2').click(function(){
				$('input[name="productos[]"]').each(function(){
						if ($(this).attr("checked") == "checked")
							$(this).removeAttr("checked");
						else 
							$(this).attr("checked","checked");
				});
		});
		
		</script>