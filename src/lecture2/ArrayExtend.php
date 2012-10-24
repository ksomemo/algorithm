<?php

class ArrayExtend
{
    public static function calcCopyCount($defaultSize, $extendSize, $pushSize)
    {
        if ($pushSize <= $defaultSize) {
            return $pushSize;
        }

        $copyCount    = $defaultSize + $extendSize;
        $restPushSize = $pushSize    - $extendSize;

        if ( $restPushSize <= $extendSize ) {
            return $copyCount + $restPushSize;
        }

    }
}
