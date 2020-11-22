<?php
//require_once dirname(__FILE__) .'/../config.php';
include _ROOT_PATH.'/templates/top.php';
?>

	<div style="margin: 0.5em auto;">
        	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
        	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
        </div>

<h3>Prosty kalkulator</h2>

<form action="<?php print(_APP_ROOT);?>/app/calc_credit.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
	<label for="id_x">Kwota kredytu: </label>
	<input id="id_x" type="number" min="0" name="x" value="<?php if(isset($x)) print($x); ?>"  placeholder="10000" />
	<label for="id_y">Na ile lat: </label>
	<input id="id_y" type="number" min="0" name="y" value="<?php if(isset($y)) print($y); ?>"  placeholder='5' />
	<label for="id_z">Oprocentowanie: </label>
    <input id="id_z" type="number" min="0" step="0.01" name="z" value="<?php if(isset($percent)) print($percent); ?>"  placeholder='3.3' />
	</fieldset>
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Miesięczna rata będzie wynosić: '.round($result, 2).'zł'; ?>
</div>
<?php } ?>

<?php //dół strony z szablonu
include _ROOT_PATH.'/templates/bottom.php';
?>