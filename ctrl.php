<?php
require_once 'init.php';
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
//1. pobierz nazwę akcji

//2. wykonanie akcji
getConf()->login_action = 'login'; //określenie akcji logowania - robimy to w tym miejscu, ponieważ tu są zdefiniowane wszystkie akcje

switch ($action) {
	default :
		control('app\\controllers', 'CalcCtrl',		'generateView', ['user','admin']);
	case 'login':
		control('app\\controllers', 'LoginCtrl',	'doLogin');
	case 'calcCompute' :
		//zamiast pierwszego parametru można podać null lub '' wtedy zostanie przyjęta domyślna przestrzeń nazw dla kontrolerów
		control(null, 'CalcCtrl',	'process',		['user','admin']);
	case 'logout' :
		control(null, 'LoginCtrl',	'doLogout',		['user','admin']);
}
