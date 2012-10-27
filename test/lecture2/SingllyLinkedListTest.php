<?php

require_once __DIR__.'/../../src/lecture2/SingllyLinkedList.php';

class SingllyLinkedListTest extends PHPUnit_Framework_TestCase
{

    public function testNullIsFirstNodeInEmpltyList()
    {
        $singllyLinkedList = new SingllyLinkedList();

        $firstNode = $singllyLinkedList->getFirstNode();

        $expected = null;

        $this->assertSame($expected, $firstNode);
    }
}
