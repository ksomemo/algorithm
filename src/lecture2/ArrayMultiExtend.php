<?php

class ArrayMultiExtend
{
    public static function calcCopyCount($defaultSize, $extendSize, $pushSize)
    {
        if ($pushSize <= $defaultSize) {
            return $pushSize;
        }

        // 初期サイズ～格納したい数より大きい初期サイズのべき乗 の等比数列と、
        // 格納したい数の和がコピー数となる

        // 最後の項の指数を求めるため係数で割る
        $base = $pushSize / $defaultSize;

        $exp = 0;

        while ($base > pow($extendSize, $exp) ) {
            // 念のため
            if ($exp++ == 100) {
                break;
            }
        }

        return $defaultSize * ( pow($extendSize, $exp) - 1) / ($extendSize - 1) + $pushSize;
    }
}
