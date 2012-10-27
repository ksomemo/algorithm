<?php

require_once __DIR__.'/../../src/lecture2/SingllyLinkedList.php';
require_once __DIR__.'/../../src/lecture2/SingllyLinkedListNode.php';

class SingllyLinkedListTest extends PHPUnit_Framework_TestCase
{

    public function testNullIsFirstNodeInEmpltyList()
    {
        $singllyLinkedList = new SingllyLinkedList();

        $firstNode = $singllyLinkedList->getFirstNode();

        $expected = null;

        $this->assertSame($expected, $firstNode);
    }

    public function testAddFirstNodeValue1AndGetFirstNodeValueIs1()
    {
        $singllyLinkedList = new SingllyLinkedList();

        $singllyLinkedListNode = new SingllyLinkedListNode(1);

        $singllyLinkedList->add($singllyLinkedListNode);

        $firstNode = $singllyLinkedList->getFirstNode();

        $actual = $firstNode->getValue();

        $expected = 1;

        $this->assertSame($expected, $actual);
    }
}
