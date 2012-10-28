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

    public function testAddThreeNodeFisrtNodevalueIs1AndSecondValueIs2AndThirdValueIs3()
    {
        $this->singllyLinkedList->add(new SingllyLinkedListNode(1));
        $this->singllyLinkedList->add(new SingllyLinkedListNode(2));
        $this->singllyLinkedList->add(new SingllyLinkedListNode(3));

        $firstNode   = $this->singllyLinkedList->getFirstNode();
        $firstNodeAt = $this->singllyLinkedList->getAt(1);
        $secondNode  = $this->singllyLinkedList->getAt(2);
        $thirdNode   = $this->singllyLinkedList->getAt(3);

        $expectedFisrt   = 1;
        $expectedFisrtAt = 1;
        $expectedSecond  = 2;
        $expectedThird   = 3;

        $this->assertSame($expectedFisrt,   $firstNode->getValue());
        $this->assertSame($expectedFisrtAt, $firstNodeAt->getValue());
        $this->assertSame($expectedSecond,  $secondNode->getValue());
        $this->assertSame($expectedThird,   $thirdNode->getValue());
    }

    public function testAddThreeNodeValue3AndGetLastNodeValueIs3()
    {
        $this->singllyLinkedList->add(new SingllyLinkedListNode(1));
        $this->singllyLinkedList->add(new SingllyLinkedListNode(2));

        $lastNode2 = $this->singllyLinkedList->getLast();

        $this->singllyLinkedList->add(new SingllyLinkedListNode(3));

        $lastNode3 = $this->singllyLinkedList->getLast();

        $expected2 = 2;
        $expected3 = 3;

        $this->assertSame($expected2, $lastNode2->getValue());
        $this->assertSame($expected3, $lastNode3->getValue());
    }
}
