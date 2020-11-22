<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$x,&$y,&$percent){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$percent = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$x,&$y,&$percent,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y) && isset($percent))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $x == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $y == "") {
	$messages [] = 'Nie podano na ile lat jest kredyt';
}
if ( $percent == "") {
	$messages [] = 'Nie podano jakie jest oprocentowanie';
}

//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	else return true;
}


function process(&$x,&$y,&$percent,&$messages,&$result){
	global $role;
    $months = $y * 12;
    $installment = $x / $months;

switch ($percent) {
		case $percent<3 :
			if ($role == 'admin'){
				$result = ($installment * ($percent / 100)) + $installment;
			} else {
				$messages [] = 'Tylko administrator może miec takie male odsetki !';
			}
			break;
		default :
			$result = ($installment * ($percent / 100)) + $installment;
			break;
	}

    //Obliczenie raty kredytu
    $result = ($installment * ($percent / 100)) + $installment;

}

//definicja zmiennych kontrolera
$x = null;
$y = null;
$percent = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($x,$y,$percent);
if ( validate($x,$y,$percent,$messages) ) { // gdy brak błędów
	process($x,$y,$percent,$messages,$result);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$percent,$result)
//   będą dostępne w dołączonym skrypcie

//Wywołanie widoku, wcześniej ustalenie zawartości zmiennych elementów szablonu
$page_title = 'Kalkulator kredytowy';
$page_description = 'Najprostsze szablonowanie oparte na budowaniu widoku poprzez dołączanie kolejnych części HTML zdefiniowanych w różnych plikach .php';
$page_header = 'Proste szablony';
$page_footer = 'przykładowa tresć stopki wpisana do szablonu z kontrolera';

include 'calc_credit_view.php';