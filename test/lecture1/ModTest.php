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

}