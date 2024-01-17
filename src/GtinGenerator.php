<?php
namespace App;

use Real\Validator\Gtin;

class GtinGenerator
{
    public function getGtin(int $length): string
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
}
