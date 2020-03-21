<?php

require_once "vendor/autoload.php";

use composer\Search as ComposerSearch;

$busca = new ComposerSearch;

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);
