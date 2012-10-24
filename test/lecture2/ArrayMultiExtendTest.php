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

    public function testCalcCopyCountPush20FactorsToArrayDefaultSize10andExtendsSize2times()
    {
        $actual = ArrayMultiExtend::calcCopyCount(10, 2, 20);

        $expected = 30;

        $this->assertEquals($expected, $actual);
    }

    public function testCalcCopyCountPush100FactorsToArrayDefaultSize10andExtendsSize2times()
    {
        $actual = ArrayMultiExtend::calcCopyCount(10, 2, 100);

        $expected = 250;

        $this->assertEquals($expected, $actual);
    }
}
