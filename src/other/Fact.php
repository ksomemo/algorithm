<?php

class Fact
{
    public static function factorial($n)
    {
        return ($n === 1) ? 1 : $n * Fact::factorial($n - 1);
    }

    public static function factorial2($n, $ans){
        return ($n === 1) ? $ans : Fact::factorial2($n - 1, $n * $ans);
    }
}
