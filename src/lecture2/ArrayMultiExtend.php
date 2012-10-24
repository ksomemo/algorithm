<?php

class ArrayMultiExtend
{
    public static function calcCopyCount($defaultSize, $extendSize, $pushSize)
    {
        if ($pushSize <= $defaultSize) {
            return $pushSize;
        }

        $copyCount = $defaultSize * $extendSize;
        $restPushSize = $pushSize - $defaultSize;

        if ( $restPushSize <= $defaultSize * ($extendSize - 1) ) {
            return $copyCount + $restPushSize;
        }
    }
}
