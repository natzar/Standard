<!-- Developer Mode = Debug Mode -->
<? if ($config->get('developer_mode')): ?>
	<div class="alert">
		<div class="well">
		Developer_mode: ON<hr>
		<strong>GETT</strong><br>
		<?= print_r(gett()); ?>
		<br><strong>SESSION</strong><br>
		<?= print_r($_SESSION); ?>
		</div>
		</div>
<? endif; ?>		
<div class="container">
<hr>
  <footer class="footer">
  <center>
  <a href="">Privacy Policy</a> ·   <a href="">Legal notice</a> · Powered by <a href="http://www.96levels.com" target="_blank">96Levels</a><br>
        <p><?= Date("Y") ?> &copy; <?= $base_title ?> </p>
        </center>
      </footer>

    </div> <!-- /container -->
