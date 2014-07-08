<div class="container">
	<table class="table">
	<? foreach ($items as $item): ?>
		<tr>
		<? foreach ($item as $k => $v): ?>
		<td><a href="./detail">x</a><?= $v ?></td>
		<? endforeach; ?>
		</tr>
	<? endforeach; ?>
	</table>
</div>