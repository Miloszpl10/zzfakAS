<?php

$page_title = 'Kolejna chroniona strona';
$page_description = 'Najprostsze szablonowanie oparte na budowaniu widoku poprzez dołączanie kolejnych części HTML zdefiniowanych w różnych plikach .php';
$page_header = 'Proste szablony';
$page_footer = 'przykładowa tresć stopki wpisana do szablonu z kontrolera';

require_once dirname(__FILE__).'/../config.php';
//ochrona widoku
include _ROOT_PATH.'/app/security/check.php';
include _ROOT_PATH.'/templates/top.php';
?>

<div style=" margin: 0.5em auto;">
      	<a href="<?php print(_APP_ROOT); ?>/app/calc_credit.php" class="pure-button">Powrót do kalkulatora</a>
      	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
      </div>

	<p>To jest inna chroniona strona aplikacji internetowej</p>

<?php
include _ROOT_PATH.'/templates/bottom.php';
?>