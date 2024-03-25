<?php

require_once 'Service/Calculatrice.php';

use Service\Calculatrice;

$calculatrice = new Calculatrice();
$result = $calculatrice->addition(2, 3);
var_dump($result);