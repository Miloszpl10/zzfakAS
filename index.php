<?php
require_once dirname(__FILE__).'/config.php';

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc_view.php");
//cw1

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/app/calc_credit_view.php';