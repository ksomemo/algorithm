<?php
require_once __DIR__.'/../../src/other/Fact.php';

class factTest extends PHPUnit_Framework_TestCase
{
    function testFact()
    {
        $actual = Fact::factorial(3);

        $expected = 6;

        $this->assertEquals($expected, $actual);
    }

    function testFact2()
    {
        $actual = Fact::factorial2(3, 1);

        $expected = 6;

        $this->assertEquals($expected, $actual);
    }

    function testFact100()
    {
        $actual = Fact::factorial(100);

        $expected = 9.3326215443944 * pow(10, 157);

        $this->assertTrue(bccomp($expected, $actual) === 0);
    }

    function testFact100_2()
    {
        $actual = Fact::factorial2(100, 1);

        $expected = 9.3326215443944 * pow(10, 157);

        $this->assertTrue(bccomp($expected, $actual) === 0);
    }
}