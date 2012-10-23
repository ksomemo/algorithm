<?php

class Search
{
    public static function contains($v, $vs)
    {
        $len = count($vs);

        if ($len === 0) {
            return false;
        }

        $left  = 0;
        $right = $len;

        while ($left + 1 < $right) {

            $mid = $left + (int)(($right - $left) / 2);

            if ($v < $vs[$mid]) {
                $right = $mid;
            } else {
                $left = $mid;
            }
        }

        return $v === $vs[$left];
    }
}
