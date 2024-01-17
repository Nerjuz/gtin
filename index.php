<?php

require_once 'vendor/autoload.php';

use Real\Validator\Gtin;

$gtin = [];

while (!isset($gtin['gtin14']) && !Gtin\Factory::isValid($gtin['gtin14'])){
    $gtin['gtin14'] = round(rand(10000000000000,99999999999999),1);
}

while (!isset($gtin['gtin12']) && !Gtin\Factory::isValid($gtin['gtin12'])){
    $gtin['gtin12'] = round(rand(100000000000,999999999999),1);
}
while (!isset($gtin['gtin8']) && !Gtin\Factory::isValid($gtin['gtin8'])){
    $gtin['gtin8'] = round(rand(10000000,99999999),1);
}
dump ( $gtin['gtin14']);
