<style>
span.number{
display: block;
text-align: center;
font-size: 150px;
font-weight: bold;
color:black;
}
small{text-align: center;display: block;font-size: 30px;color:black}
</style>

			
<ul class="small-block-grid-5">
  <li class="panel">
	<span class="number"><?= $emails_sent ?></span>
  <small>EMAILS</small>
  </li>
  <li class="panel">
	<span class="number"><?= $visits ?></span>
  <small>VISITAS</small>
  </li>
  <li class="panel">
	<span class="number"><?= $leads ?></span>
  <small>LEADS</small>
  </li>
  <li class="panel">	<span class="number"><?= $presupuestos ?></span>
  <small>PRESUPUESTOS</small>
</li>
  <li class="panel">	<span class="number"><?= $ventas ?></span>
  <small>VENTAS</small>
</li>
</ul>