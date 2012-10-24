<?php

class ArrayMultiExtend
{
    public static function calcCopyCount($defaultSize, $extendSize, $pushSize)
    {
        if ($pushSize <= $defaultSize) {
            return $pushSize;
        }
    }
}
