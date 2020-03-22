<?php

require_once "vendor/autoload.php";
require_once "../composer/src/Search.php";
use composer\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);
