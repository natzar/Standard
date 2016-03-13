	
<div class="container">

        <footer>
            <div class="row">
                            <div class="col-md-4">
<p>
</p>

                </div>
                <div class="col-md-8">
<p>            <strong class="lead">About <?= $SEO_TITLE ?></strong><br>
           <?= $SEO_DESCRIPTION ?>
            </p>
            
            
            </div>

            </div>
        </footer>
</div>

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