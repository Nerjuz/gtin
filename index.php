<?php

require_once 'vendor/autoload.php';

use Real\Validator\Gtin;

$gtin8 = $gtin12 = $gtin14 ='';

while (!Gtin\Factory::isValid($gtin14)){
    $gtin14 = round(rand(10000000000000,99999999999999),1);
}

while (!Gtin\Factory::isValid($gtin12)){
    $gtin12 = round(rand(100000000000,999999999999),1);
}
while (!Gtin\Factory::isValid($gtin8)){
    $gtin8 = round(rand(10000000,99999999),1);
}

echo PHP_EOL.$gtin8.PHP_EOL;
echo PHP_EOL.$gtin12.PHP_EOL;
echo PHP_EOL.$gtin14.PHP_EOL;
