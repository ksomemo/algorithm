<?php
require_once __DIR__.'/../../src/lecture1/Search.php';

class SearchTest extends PHPUnit_Framework_Testcase
{
    public function test100ContainsIn1to10000000RangeArray()
    {
        ini_set('memory_limit', '1024M');

        $vs = range(1, 10000000);

        $v = 100;

        $condition = Search::contains($v, $vs);

        $this->assertTrue($condition);
    }

    public function test100000001NotContainsIn1to10000000RangeArray()
    {
        ini_set('memory_limit', '1024M');

        $vs = range(1, 10000000);

        $v = 100000001;

        $condition = Search::contains($v, $vs);

        $this->assertFalse($condition);
    }
}
