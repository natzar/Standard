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
  <footer class="footer">
        <p><?= Date("Y") ?> &copy; <?= $base_title ?> </p>
      </footer>

    </div> <!-- /container -->
