<?php
require_once __DIR__.'/../../src/lecture1/Search.php';

ini_set('memory_limit', '2048M');

class SearchTest extends PHPUnit_Framework_Testcase
{
    static $vs = null;

    public function setUp()
    {
        if (self::$vs === null) {
            self::$vs = range(1, 10000000);
        }
    }

    public function testDummyForSetUp()
    {
        $this->assertTrue(true, 'This test is a dummy.');
    }

    public function test100ContainsIn1to10000000RangeArray()
    {
        $v = 100;

        $condition = Search::contains($v, self::$vs);

        $this->assertTrue($condition);
    }

    public function test100000001NotContainsIn1to10000000RangeArray()
    {
        $v = 100000001;

        $condition = Search::contains($v, self::$vs);

        $this->assertFalse($condition);
    }
}
