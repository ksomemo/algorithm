<?php

class Search
{
    public static function contains($v, $vs)
    {
        for ($i = 0, $len = count($vs); $i < $len; ++$i) {
             if ($v == $vs[$i]) {
                 return true;
             }
        }

        return false;
    }
}
