<?php

class Mod
{
    public static function powmod($divided, $exponent, $divisor)
    {
        if ($exponent === 0) {
            return 1;
        }

        $mod = self::powmod($divided, (int)($exponent / 2), $divisor);

        $mod = ($mod * $mod) % $divisor;

        if ($exponent % 2 === 1) {
            $mod = ($mod * $divided) % $divisor;
        }

        return (int)$mod;
    }
}
