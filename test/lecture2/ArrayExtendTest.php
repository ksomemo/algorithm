<?php
require_once __DIR__. '/../../src/lecture2/ArrayExtend.php';

class ArrayExtendTest extends PHPUnit_Framework_TestCase
{
    public function testCalcCopyCountPush5FactorsToArrayDefaultSize10andExtendsSize10()
    {
        $actual = ArrayExtend::calcCopyCount(10, 10, 5);

        $expected = 5;

        $this->assertEquals($expected, $actual);
    }

    public function testCalcCopyCountPush20FactorsToArrayDefaultSize10andExtendsSize10()
    {
        $actual = ArrayExtend::calcCopyCount(10, 10, 20);

        $expected = 30;

        $this->assertEquals($expected, $actual);
    }
}
