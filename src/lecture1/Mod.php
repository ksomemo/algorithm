<?php

class Mod
{
    public static function powmod($divided, $exponent, $divisor)
    {
        $dividedExponent = 1;

        for ($i = 1; $i <= $exponent; $i++) {
            $dividedExponent *= $divided;
        }

        return $dividedExponent % $divisor;
    }
}
