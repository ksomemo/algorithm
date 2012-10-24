<?php

class ArrayExtend
{
    public static function calcCopyCount($defaultSize, $extendSize, $pushSize)
    {
        if ($pushSize <= $defaultSize) {
            return $pushSize;
        }

        // 初期サイズ～格納したい数より大きい初期サイズの倍数 の等差数列と、
        // 格納したい数の和がコピー数となる
        $extendNum = (int)($pushSize / $extendSize) - 1;

        return $extendNum * ( 2 * $defaultSize + ($extendNum - 1) * $defaultSize) / 2 + $pushSize;
    }
}
