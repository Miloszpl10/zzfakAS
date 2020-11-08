<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc_credit.php" method="post">
	<label for="id_x">Kwota kredytu: </label>
	<input id="id_x" type="number" min="0" name="x" value="<?php if(isset($x)) print($x); ?>" placeholder='10000' /><br />
	<label for="id_y">Na ile lat: </label>
	<input id="id_y" type="number" min="0" name="y" value="<?php if(isset($y)) print($y); ?>" placeholder='5' /><br />
	<label for="id_z">Oprocentowanie: </label>
    <input id="id_z" type="number" min="0" step="0.01" name="z" value="<?php if(isset($percent)) print($percent); ?>" placeholder='3.3' /><br />
	<input type="submit" value="Oblicz" />
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
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #aaff00; width:300px;">
<?php echo 'Miesięczna rata będzie wynosić: '.round($result, 2).'zł'; ?>
</div>
<?php } ?>
</body>
</html>