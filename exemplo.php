<?php
require_once "vendor/autoload.php";
use \wead\digitalcep\search;

$busca = new search();
$resultado = $busca->getAddressFromzipCode('32310030');
print_r($resultado);
?>