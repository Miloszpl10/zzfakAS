<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//cw1
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$percent = $_REQUEST ['z'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($x) && isset($y) && isset($percent))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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


// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów

    //zmiana lat na miesiace i wyliczenie raty bez procentu
    $months = $y * 12;
    $installment = $x / $months;

    //Obliczenie raty kredytu
    $result = ($installment * ($percent / 100)) + $installment;
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$percent,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_credit_view.php';