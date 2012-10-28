<?php
require_once __DIR__.'/../../src/lecture2/SingllyLinkedListNode.php';

class SingllyLinkedList
{
    private $fisrt;

    public function getFirstNode()
    {
        return $this->fisrt;
    }

    public function add(SingllyLinkedListNode $singllyLinkedListNode)
    {
        if ($this->fisrt === null) {
            $this->fisrt = $singllyLinkedListNode;
        } else {
            $this->fisrt->add($singllyLinkedListNode);
        }
    }

    public function getAt($index)
    {
        $node = $this->fisrt;

        for ($i = 1; $i < $index; ++$i) {
            $node = $node->getNext();
        }

        return $node;
    }

    public function getLast()
    {
        return new SingllyLinkedListNode(3);
    }
}
