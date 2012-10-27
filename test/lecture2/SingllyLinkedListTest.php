<?php

require_once __DIR__.'/../../src/lecture2/SingllyLinkedList.php';
require_once __DIR__.'/../../src/lecture2/SingllyLinkedListNode.php';

class SingllyLinkedListTest extends PHPUnit_Framework_TestCase
{
    private $singllyLinkedList;

    public function setUp()
    {
        $this->singllyLinkedList = new SingllyLinkedList();
    }

    public function testNullIsFirstNodeInEmpltyList()
    {
        $firstNode = $this->singllyLinkedList->getFirstNode();

        $expected = null;

        $this->assertSame($expected, $firstNode);
    }

    public function testAddFirstNodeValue1AndGetFirstNodeValueIs1()
    {
        $singllyLinkedListNode = new SingllyLinkedListNode(1);

        $this->singllyLinkedList->add($singllyLinkedListNode);

        $firstNode = $this->singllyLinkedList->getFirstNode();

        $actual = $firstNode->getValue();

        $expected = 1;

        $this->assertSame($expected, $actual);
    }
}
