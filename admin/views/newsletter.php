<h2>Newsletter</h2>
<form action="newsletter/sendNewsletter" method="post">
		<strong>Asunto</strong><br />
		<input name="emailSubject" type="text" size="32" />
		<br /><br />
		Texto<br />
		<textarea name="emailBody" style="min-width:600px;height:300px"></textarea>
		<br />
		<input name="send" type="submit" value="Enviar" />
		</form>