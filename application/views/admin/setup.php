<h1><?= $base_title ?></h1>
<form>
<fieldset>
<? 
$aux = $config->print_vars();


foreach($aux as $k => $v){

    echo '<label>'.$k.'</label><br>';
    echo '<input type="text" class="form-control" name="'.$k.'" value="'.$v.'">';

}
?>
</fieldset></form>