<? $menu = $SIDEDATA['menu']; ?>

<a href="<?= $base_url ?>"><?= $HOME ?></a> | 
<a href="<?= $_SESSION['lang'] ?>/<?= $menu[strtolower($EMPRESA)]  ?>"><?= $EMPRESA ?></a> | 
<a href="<?= $_SESSION['lang'] ?>/<?= $menu[strtolower($SERVICIOS)] ?>"><?= $SERVICIOS ?></a> | 
<a href="<?= $_SESSION['lang'] ?>/<?= $menu[strtolower($PARTNERS)] ?>"><?= $PARTNERS ?></a> | 
<a href="<?= $_SESSION['lang'] ?>/<?= $menu[strtolower($PROYECTOS)] ?>"><?= $PROYECTOS ?></a> | 
<a href="<?= $_SESSION['lang'] ?>/<?= $menu[strtolower($BLOG)] ?>"><?= $BLOG ?></a> | 
<a href="<?= $_SESSION['lang'] ?>/<?= $menu[strtolower($CONTACTO)] ?>"><?= $CONTACTO ?>	</a>