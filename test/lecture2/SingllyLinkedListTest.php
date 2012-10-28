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

    public function testAddTwoNodeFisrtNodevalueIs1AndSecondValueIs2()
    {
        $this->singllyLinkedList->add(new SingllyLinkedListNode(1));
        $this->singllyLinkedList->add(new SingllyLinkedListNode(2));

        $firstNode  = $this->singllyLinkedList->getFirstNode();
        $secondNode = $this->singllyLinkedList->getAt(2);

        $expectedFisrt  = 1;
        $expectedSecond = 2;

        $this->assertSame($expectedFisrt,  $firstNode->getValue());
        $this->assertSame($expectedSecond, $secondNode->getValue());
    }
}
