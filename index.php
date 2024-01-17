<?php

require_once 'vendor/autoload.php';

use Real\Validator\Gtin;

//dd(Gtin\Factory::isValid(4836309084));
function getGtin(int $length): string
{
    $result = '';

    while (!Gtin\Factory::isValid($result)) {
        $result = '';
        for ($i = 0; $i < $length; $i++) {
            $result .= random_int(0, 9);
        }
    }

    return $result;
}

$gtins = [
    'gtin8' => getGtin(8),
    'gtin12' => getGtin(12),
    'gtin14' => getGtin(14),
];

dump($gtins);
