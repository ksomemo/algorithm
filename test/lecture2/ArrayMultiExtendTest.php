<?php
require_once __DIR__. '/../../src/lecture2/ArrayMultiExtend.php';

class ArrayMultiExtendTest extends PHPUnit_Framework_TestCase
{
    public function testCalcCopyCountPush5FactorsToArrayDefaultSize10andExtendsSize2times()
    {
        $actual = ArrayMultiExtend::calcCopyCount(10, 2, 5);

        $expected = 5;

        $this->assertEquals($expected, $actual);
    }
}
