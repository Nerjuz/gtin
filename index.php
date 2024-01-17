<?php

require_once 'vendor/autoload.php';

$gtinFactory = new App\GtinGenerator();

$gtins = [
    'gtin8' => $gtinFactory->getGtin(8),
    'gtin12' => $gtinFactory->getGtin(12),
    'gtin13' => $gtinFactory->getGtin(13),
    'gtin14' => $gtinFactory->getGtin(14),
];

dump($gtins);
