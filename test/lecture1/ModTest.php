<?php

require_once __DIR__.'/../../src/lecture1/Mod.php';

class ModTest extends PHPUnit_Framework_TestCase
{
    public function testPowmodAllOne()
    {
        $actual = Mod::powmod(1, 1, 1);

        $expected = 0;

        $this->assertEquals($expected, $actual);
    }

    public function test3Modulo2ToThePowerOf3Is2()
    {
        $actual = Mod::powmod(2, 3, 3);

        $expected = 2;

        $this->assertEquals($expected, $actual);
    }

}