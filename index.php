<?php

require_once 'vendor/autoload.php';

use Real\Validator\Gtin;

$gtin ='';

while (!Gtin\Factory::isValid($gtin)){
    $gtin = round(rand(10000000000000,99999999999999),1);
}

echo PHP_EOL.$gtin.PHP_EOL;
